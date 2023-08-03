<?PHP
session_start();

//mysql 데이타베이스에 연결
include ("../connDB.php");  
// POST 변수 가져오기
$wname    = $_POST['wname'];    
$summary  = $_POST['summary'];  
$passwd   = $_POST['passwd'];   
// 중요 : 파일은 아래와 같이 _FILES[] 배열에서 가져와야 함
if(isset($_FILES['userfile']) && $_FILES['userfile']['name'] != "") 
    $userfile = $_FILES['userfile'];

// 필수 입력 값 검사 
include('../_func-check.php'); 
if (!$wname)    check('등록자명을 입력해주세요');
if (!$summary)  check('사진 설명을 간단히 적어주세요');
if (!$userfile) check('업로드할 사진을 골라주세요');

$wdate = date("y-m-d");

// 사용자가 사진을 선택했다면
// 서버에 동일한 파일이 있는지 확인 후 서버에 복사
// JSP-여기부터 입력하세요. 
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
	}
}

// JSP-여기까지 


	//데이터베이스에 글에 대한 정보 저장
	$sql = "INSERT INTO photo(wname, summary, wdate, userfile) 
	         VALUES('$wname', '$summary', now(), '$filename');"; 
	echo $sql;   // 이때는 하단의 echo ("<meta> 부분을 주석 처리해야 보입니다. 
	$result = mysqli_query($con, $sql);

	mysqli_close($con);	//데이터베이스 연결해제

	if (!$result) {
		check('사진 등록에 실패했습니다.');
	}
	else {
		echo("
	        <script>
   		    window.alert('사진 등록이 완료되었습니다');
 	        </script>
		");

		echo ("<meta http-equiv='Refresh' content='0; url=photo-table.php'>"); // echo 결과를 확인하려면 주석 처리해야 함
	}
//}

?>
