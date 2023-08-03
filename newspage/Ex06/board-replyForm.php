<?PHP
 
// _GET 배열에서 테이블 이름 변수, 게시판 글 번호 변수 가져오기 
$board = $_GET['board']; 
$link = $_GET['link'];
$id    = $_GET['id'];    

// MySQL 접속 및 DB 선택
include ("../../connDB.php"); 

// JSP: 여기부터 입력하세요. 
// 해당 게시물 검색하여 제목과 내용 추출
$sql = "SELECT * from $board WHERE id=$id;";
$result = mysqli_query($con, $sql); 

$row = mysqli_fetch_array($result); 
$topic   = $row['topic'];		
$content = $row['content'];	

// 원본 글 제목 앞에 "[Re]" 글자를 추가 
$topic = "[Re]" .  $topic;  

// 원본 글 본문의 앞뒤에 구분자 표시
$pre_content = "\n\n\n--------------< 원본글 >-------------\n" . $content . "\n";	
// JSP: 여기까지 입력하세요.
?>

<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>답변글 입력</title>
  <link rel="stylesheet" href="./_board-style.css">
</head>

<body>
  <!--  inputForm, modifyForm과 같은데 제목과 내용이 채워짐   -->
	<!-- JSP 시작: modifyForm에서 복사해서 수정 -->
  <form method='post' action='board-replyInsert.php?board=<?=$board?>&id=<?=$id?>&link=<?=$link?>'>

  <table class='inputF'>
  <caption>게시판</caption>
  <tr><th>이름</th>   
	    <td><input type='text' name='writer' size='20'></td></tr>
	<tr><th>Email</th> 
	    <td><input type='text' name='email' size='78'></td></tr>
	<tr><th>제목</th>   
	    <td><input type='text' name='topic' size='78' value='<?=$topic?>'></td></tr>
  <tr><th>내용</th>   
	    <td><textarea name='content' rows='12' cols='80'> <?=$pre_content?> </textarea></td></tr>
  <tr><th>암호</th>   
	    <td><input type='password' name='passwd' size='20'></td></tr>
  </table>

  <table class='bottom'>
  <tr><td><input type='submit' value='답변 완료'> <input type='reset' value='지우기'> </td></tr>
  </table>
	</form>
	<!-- JSP 여기까지 -->

 </body>
</HTML>
