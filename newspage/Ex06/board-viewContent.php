<?PHP
 
include ("../../connDB.php");  

// GET 변수 가져오기 
$board = $_GET['board']; // 테이블 이름 
$link = $_GET['link'];
$id    = $_GET['id'];    // 게시판 글의 id

$sql = "SELECT * FROM $board WHERE id=$id;";  
$result = mysqli_query($con, $sql);  

// 각 필드에 해당하는 데이터를 뽑아 내는 과정
$row = mysqli_fetch_array($result); 
$id      = $row['id'];	    $writer  = $row['writer']; 
$topic   = $row['topic'];   $hit     = $row['hit'];	  
$wdate   = $row['wdate'];   $email   = $row['email'];  
$content = $row['content'];

$hit = $hit + 1;   //조회수를 하나 증가
$sql = "UPDATE $board SET hit=$hit WHERE id=$id;";  
mysqli_query($con, $sql);  

?>
<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>게시판 내용 확인</title>
  <link rel="stylesheet" href="./_board-style.css">
		<style>
  	 pre { font-size: 15px; } 
	</style>
</head>

<body>

<!-- $board 테이블에서 검색한 내용을 표시 -->
<table border='1'>
	<caption>게시판</caption>
	<tr><td width='100'>번호: <?=$id?></td>
     	<td width='200'>글쓴이: <a href='mailto:<?=$email?>'><?=$writer?></a></td>
    	<td width='300'>글쓴날짜: <?=$wdate?></td>
    	<td width='100'>조회: <?=$hit?></td>
	</tr>
	<tr><td colspan='4' class='left'>제목: <?=$topic?></td></tr>
	<tr><td colspan='4' class='left'><pre><?=$content?></pre></td></tr>
</table>

 <table class='bottom'>
  <tr><td>
	[<a href='board-inputPasswd.php?board=<?=$board?>&id=<?=$id?>&mode=0&link=<?=$link?>'>수정</a>]
	[<a href='board-inputPasswd.php?board=<?=$board?>&id=<?=$id?>&mode=1&link=<?=$link?>'>삭제</a>]
	[<a href='board-replyForm.php?board=<?=$board?>&id=<?=$id?>&link=<?=$link?>'>답변</a>]
	[<a href='board-show.php?board=<?=$board?>&link=<?=$link?>'>리스트</a>]
	</td></tr>
</table>

</body>
</html>