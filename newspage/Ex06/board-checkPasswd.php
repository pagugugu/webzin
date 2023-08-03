<?PHP
 
// _GET 배열에서 테이블 변수, 게시판 글 번호, 수정/삭제 모드 변수 가져오기 
$board = $_GET['board']; 
$link = $_GET['link'];
$id    = $_GET['id'];    
$mode  = $_GET['mode'];  

include ("../../connDB.php");

$sql = "SELECT passwd FROM $board WHERE id=$id;";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result); 
$passwd = $row['passwd']; 
mysqli_close($con); 

// POST 변수 가져오기 
$pass = $_POST['pass']; 
echo $pass;
if ($pass != $passwd) {// 암호가 일치하지 않는 경우
	echo   ("<script>
		window.alert('입력 암호가 일치하지 않네요');
		history.go(-1);
		</script>");
	exit;		
} 

// 암호가 일치하는 경우 mode에 따라 다른 프로그램 호출
//JSP – 여기부터 입력
switch ($mode) {
	case 0:
		echo("<meta http-equiv='Refresh' content='0; url=editingForm.html?board=$board&id=$id&link=$link'>");
		break;
	case 1:
		echo("<meta http-equiv='Refresh' content='1; url=board-deleteRecord.php?board=$board&id=$id&link=$link'>");
		echo $passwd;
		break;
}
		
//JSP - 여기까지
?>
