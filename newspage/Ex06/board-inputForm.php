<?PHP
// 게시판 이름을 GET 변수에서 가져오기 
$board = $_GET['board']; 
?>

<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>게시판 입력</title>
  <link rel="stylesheet" href="./_board-style.css">
</head>

<body>
  <form method='post' action='board-insertRecord.php?board=<?=$board?>'>

  <table class='inputF'>
  <caption>게시판</caption>
  <tr><th>이름</th>   <td><input type='text' name='writer' size='20'></td></tr>
	<tr><th>Email</th> <td><input type='text' name='email' size='78'></td></tr>
	<tr><th>제목</th>   <td><input type='text' name='topic' size='78'></td></tr>
  <tr><th>내용</th>   <td><textarea name='content' rows='12' cols='80'></textarea></td></tr>
  <tr><th>암호</th>   <td><input type='password' name='passwd' size='20'></td></tr>
  </table>

  <table class='bottom'>
  <tr><td><input type='submit' value='등록하기'> <input type='reset' value='지우기'> </td></tr>
  </table>

	</form>
 </body>
</HTML>