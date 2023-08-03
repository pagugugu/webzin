<?PHP
session_start();

// POST 변수 가져오기
$title    = $_POST['title'];    
$subtitle  = $_POST['subtitle'];  
$wdate   = $_POST['wdate']; 
$writer    = $_POST['writer'];    
//$imgfile  이후에 연결 
$outline   = $_POST['outline']; 
$link    = $_POST['link'];    
$tablename  = $_POST['tablename']; 
$passwd = $_POST['passwd'];

// 중요 : 파일은 아래와 같이 _FILES[] 배열에서 가져와야 함
if(isset($_FILES['imgfile']) && $_FILES['imgfile']['name'] != "") 
    $userfile = $_FILES['imgfile'];

//mysql 데이타베이스에 연결
include ("../connDB.php"); 

if ($_SESSION["ses_admin"]){
	$id = $_SESSION["ses_id"];
	$sql = "select * from signin where id='$id' && pw='$passwd'";
	$result = mysqli_query($con, $sql);
	if ($result) {
		if ($userfile) {
			$savedir = "./photo";
			$filename = $userfile['name'];
			$tmp_name = $userfile['tmp_name'];
			if (file_exists("$savedir/$filename")) {
				unlink("$savedir/$filename");
				move_uploaded_file($tmp_name, "$savedir/$filename");
				//exit;
			} else {
				move_uploaded_file($tmp_name, "$savedir/$filename");
			}
		}
	}

	//데이터베이스에 글에 대한 정보 저장
	$sql = "INSERT INTO newslist(title, subtitle, wdate, writer, imgfile, outline, likecont, link, tablename) 
	         VALUES('$title', '$subtitle', '$wdate', '$writer', '$filename', '$outline', 0, '$link', '$tablename');"; 
	echo $sql;   // 이때는 하단의 echo ("<meta> 부분을 주석 처리해야 보입니다. 
	$result = mysqli_query($con, $sql);
	
	//if ($result) {	echo "성공";	}

	mysqli_close($con);	//데이터베이스 연결해제
/*
*/
	if (!$result) {
		include('../_func-check.php'); 
		check('기사 등록에 실패했습니다.');
	}
	else {
		echo("
	        <script>
   		    window.alert('기사 등록이 완료되었습니다');
 	        </script>
		");

		echo ("<meta http-equiv='Refresh' content='0; url=col-table.php'>"); // echo 결과를 확인하려면 주석 처리해야 함
	}


}
?>
