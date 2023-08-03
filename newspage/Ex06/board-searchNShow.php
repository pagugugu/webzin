<?PHP

// 검색 관련 사용자 입력 값 가져오기 
// JPS: 여기부터 입력하세요.
$link = $_GET['link'];
$key = $_POST['key'];
$field = $_POST['field'];

// JPS: 여기까지 입력하세요.

if (!$key) {
  echo("<script>
   window.alert('검색어를 입력하세요');
   history.go(-1);
  </script>");
  exit;
}

include ("../../connDB.php");  
include("./_board-displayRecord.php"); 

// JPS: 여기부터 입력하세요.
$board = $_GET['board'];
$sql = "SELECT * FROM $board WHERE $field LIKE '%$key%' ORDER BY id DESC;";

// JPS: 여기까지 입력하세요.

$result = mysqli_query($con, $sql); 
$total  = mysqli_num_rows($result);

?>

<HTML html>
<head>
  <meta charset="UTF-8"/>   
  <title>게시판</title>
  <link rel="stylesheet" href="./_board-style.css">
</head>

<body>
	<table>
  <caption>게시판</caption>
  <tr class='top'><td class='left'>검색어: <span class='blue'><?=$key?></span>, 
	찾은 개수: <span class='blue'><?=$total?></span>개</td>
  <td class='right'>
  <button type="write" onclick="location.href='news1Board.html?board=<?=$board?>&link=<?=$link?>'">전체목록</button>
  </td></tr>
  </table>

	<table class='board'>
  <tr><th>번호</th>
	    <th>글쓴이</th>
			<th width='450'>제목</th>
			<th>날짜</th>
			<th>조회</th>
	</tr>

<?PHP

  if (!$total){
    mysqli_close($con); 
    echo("<tr><td colspan='5'>아직 등록된 글이 없습니다.</td></tr></table></body></html>");
    exit;  
  } 

  $counter=0;
  while($counter < $total):
    displayRecord($counter, $result, $board); 
		   // $board 테이블에서 추출한 $result에서 $counter 번째 레코드를 추출하여 테이블에 출력하는 함수
    $counter++;
  endwhile;

  mysqli_close($con); 
?>

</table>
</body>
</html>