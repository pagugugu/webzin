<?PHP
session_start();

// JSP 실습: GET과 POST 변수 가져오기 
$title = $_GET['title']; // 삭제할 파일 이름
$delpasswd = $_POST['delpasswd']; // 입력 받은 암호
echo "delpasswd : ".$delpasswd;

//mySQL 서버에 연결
include ("../connDB.php"); 

if ($_SESSION["ses_admin"]){
	$id = $_SESSION["ses_id"];
	$sql = "select * from signin where id='$id' && pw='$delpasswd'";
	echo $sql;
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$oldpasswd = $row['pw'];
	echo "\n oldpw : ". $oldpasswd;

	if ($delpasswd == $oldpasswd) {
		$sql = "DELETE FROM newslist WHERE title='$title';";
		echo $sql;
		mysqli_query($con, $sql);

		echo ("<script>window.alert('성공적으로 삭제되었습니다.');</script>");
	} else {
		echo ("<script>window.alert('암호가 맞지 않군요. 다시 확인하세요');</script>");
	}
}

// ... JSP 여기까지

mysqli_close($con); // MySQL 서버 종료
?>

<!-- 페이지 이동 
-->
<meta http-equiv='Refresh' content='0; url=col-table.php'>

