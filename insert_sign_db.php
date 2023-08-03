<?PHP
 
// MySQL 접속 및 DB 선택
include ("./connDB.php");  

// 중복 아이디 검사
$uid = $_POST['uid'];    

$sql = "SELECT * FROM signin WHERE id=$uid;";
$result = mysqli_query($con, $sql); 


if ($result) {
	echo "<script>alert('사용할 수 없는 아이디입니다.');
	history.go(-1);
	</script>";

} else {

	if(isset($_FILES['imgfile']) && $_FILES['imgfile']['name'] != "") 
    $imgfile = $_FILES['imgfile'];

	if ($imgfile) {
	$savedir = "./profile";
	$imageFileType = strtolower(pathinfo($imgfile['name'],PATHINFO_EXTENSION));
	$filename = $_POST['imgname'].".".$imageFileType;
	$tmp_name = $imgfile['tmp_name'];
	if (file_exists("$savedir/$filename")) {
		echo ("
		<script>
		window.alert('서버에 동일한 파일이 이미 존재합니다.');
		history.go(-1);
		</script>
		");
		exit;
	} else {
		move_uploaded_file($tmp_name, "$savedir/$filename");
	}
}


// 추가할 항목을 추출함
$name = $_POST['name'];	
//id는 맨 처음에 받음
$pswd = $_POST['pswd'];
$tel = $_POST['tel'];
$email = $_POST['email'];
//사진파일 이름도 받음
$bday = $_POST['bday'];

$sday = date("Y-m-d");	//가입한 날짜 저장


// 변경 내용을 테이블에 저장함
$sql = "INSERT INTO signin(name, id, pw, tel, email, bday, imgname, sday) VALUES('$name', '$uid', '$pswd', '$tel', '$email', '$bday', '$filename', now());";
$result = mysqli_query($con, $sql); 
echo $sql;

mysqli_close($con);  
if ($result){
	echo "<script>alert('구독이 완료되었습니다.');
	</script>";
echo("<meta http-equiv='Refresh' content='0; url=./loginpage/login.html?sign=true'>");
}
}


?>
