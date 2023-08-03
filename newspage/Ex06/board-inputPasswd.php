<?PHP
// _GET 배열에서 테이블 변수, 게시판 글 번호, 수정/삭제 모드 변수 가져오기 
$board = $_GET['board']; 
$id    = $_GET['id'];    
$mode  = $_GET['mode'];  
?>

<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>암호 입력</title>
  <link rel="stylesheet" href="./_board-style.css">
</head>

<body>
   <form method='post'   action='board-checkPasswd.php?board=<?=$board?>&id=<?=$id?>&mode=<?=$mode?>'>
   <table>
	 <caption>게시판</caption>
   <tr><td>암호를 입력하세요.</td></tr>
   <tr><td>암호: <input type='password' size='15' name='pass'>
   <input type='submit' value='입력'></td></tr>
   </table>
   </form>
</body>
</HTML>
