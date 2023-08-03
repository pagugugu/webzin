<?PHP

// _GET 배열에서 테이블 이름 변수, 게시판 글 번호 변수 가져오기 
$board = $_GET['board']; 
$id    = $_GET['id'];    

include ("../../connDB.php");  

$sql = "SELECT * FROM $board WHERE id=$id;";
$result = mysqli_query($con, $sql);  

// 수정하고자 하는 원본 게시물에서 수정 가능한 항목을 추출함
$row = mysqli_fetch_array($result); 
$writer  = $row['writer'];		
$topic   = $row['topic'];		
$content = $row['content'];	
$email   = $row['email'];		

mysqli_close($con); 

?>

<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>게시판 수정</title>
  <link rel="stylesheet" href="./_board-style.css">
</head>

<body>
	  <!--  inputForm과 같은데 비밀번호를 제외한 모든 값이 채워짐   -->
		<!-- JSP 시작: inputForm에서 복사해서 수정 -->
	<form method='post' action='board-updateRecord.php?board=<?=$board?>&id=<?=$id?>'>

	  <table class='inputF'>
	  <caption>게시판</caption>
	  <tr><th>이름</th>   <td><input type='text' name='writer' size='20' value='<?=$writer?>'></td></tr>
		<tr><th>Email</th> <td><input type='text' name='email' size='78' value='<?=$email?>'></td></tr>
		<tr><th>제목</th>   <td><input type='text' name='topic' size='78' value='<?=$topic?>'></td></tr>
	  <tr><th>내용</th>   <td><textarea name='content' rows='12' cols='80' value='<?=$content?>'></textarea></td></tr>
	  <tr><th>암호</th>   <td><input type='password' name='passwd' size='20'></td></tr>
	  </table>

	  <table class='bottom'>
	  <tr><td><input type='submit' value='수정완료'> <input type='reset' value='지우기'> </td></tr>
	  </table>

	</form>
		<!-- JSP 여기까지 -->

</body>
</HTML>
