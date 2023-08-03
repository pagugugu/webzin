﻿<?PHP
// 게시판 이름을 GET 변수에서 가져오기 
$board = $_GET['board']; 
$link = $_GET['link'];
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
  <tr><td align='center'>
	<!-- 검색을 위한 폼 지정 -->
  <form method='post' action='board-searchNShow.php?board=<?=$board?>&link=<?=$link?>'>
  <select name='field'>
    <option value='writer'>글쓴이</option>
    <option value='topic'>제목</option>
    <option value='content'>내용</option>
  </select>
  검색어<input type='text' name='key' size='13'>
  <input type='submit' value='찾기'>
  </td>
  </form>
	<!-- 검색을 위한 폼 지정 -->
  <td class='right'>[<a href='board-inputForm.php?board=<?=$board?>&link=<?=$link?>'>쓰기</a>]</td></tr>
  </table>

	<table class='board'>
  <tr><th>번호</th>
	    <th>글쓴이</th>
			<th width='400'>제목</th>
			<th>날짜</th>
			<th>조회</th>
	</tr>

<?PHP

include ("../../connDB.php");  // mySQL 접속
include ("./_board-displayRecord.php");  // 레코드를 추출하여 테이블에 출력하는 함수

$sql = "SELECT * FROM $board ORDER BY id DESC;";
$result = mysqli_query($con, $sql); 
$total = mysqli_num_rows($result); 
// echo $sql;

if (!$total){
?>
   <tr><td colspan='5'>아직 등록된 글이 없습니다.</td></tr>
  
<?PHP
} else {
	// 하단에 블럭 링크, 페이지 링크를 추가하기 위한 코드 시작
	// 현재 페이지 번호 
  if (isset($_GET['cpage'])) $cpage = $_GET['cpage'];
  else $cpage = 1;  

  $pagesize = 4;    // $pagesize - 한 페이지에 출력할 목록 개수: 기본은 10 또는 20

  $totalpage = (int)($total/$pagesize);
  if (($total%$pagesize)!=0) $totalpage = $totalpage + 1;

	// 현재 페이지의 시작 레코드 위치 찾아서 이동 
  $index = ($cpage-1)*$pagesize; 
  mysqli_data_seek($result, $index); 

  $counter=0;
  while($counter<$pagesize): // 1 페이지에 출력할 게시글의 갯수 만큼 반복
    if ($index == $total) break;  // 마지막 레코드이면 while문 종료

    displayRecord($counter, $result, $board); 
		   // $board 테이블에서 추출한 $result에서 $counter 번째 레코드를 추출하여 테이블에 출력하는 함수

		$counter++;  // 현재 페이지의 글 수 
		$index ++;   // 전체 레코드의 인덱스
  endwhile;

  mysqli_close($con); // 수정됨
?>
</table>

<table class='bottom'><tr><td>

<?PHP			 
  // 화면 하단에 페이지 번호 출력
  if (isset($_GET['cblock'])) $cblock = $_GET['cblock'];
  else $cblock = 1;  

  $blocksize = 3;   // $blocksize - 화면상에 출력할 페이지 번호 개수.. 실제는 10

  $pblock = $cblock - 1;  // 이전 블록은 현재 블록 - 1
  $nblock = $cblock + 1;  // 다음 블록은 현재 블록 + 1
		
  // 현재 블록의 첫 페이지 번호
  $startpage = ($cblock - 1) * $blocksize + 1;	

  $pstartpage = $startpage - 1;  // 이전 블록의 마지막 페이지 번호
  $nstartpage = $startpage + $blocksize;  // 다음 블록의 첫 페이지 번호

  if ($pblock > 0) // 이전 블록이 존재하면 [이전블록] 버튼을 활성화
    echo ("[<a href='board-show.php?board=$board&cblock=$pblock&cpage=$pstartpage&link=$link'>이전블록</a>] ");

  // 현재 블록에 속한 페이지 번호를 출력	
  $i =   $startpage;
  while($i < $nstartpage):
    if ($i > $totalpage) break;  // 마지막 페이지를 출력했으면 종료함
    echo ("[<a href='board-show.php?board=$board&cblock=$cblock&cpage=$i&link=$link'>$i</a>]");
    $i = $i + 1;
  endwhile;
	 
  // 다음 블록의 시작 페이지가 전체 페이지 수보다 작으면 [다음블록] 버튼 활성화  
  if ($nstartpage <= $totalpage)   
    echo ("[<a href='board-show.php?board=$board&cblock=$nblock&cpage=$nstartpage&link=$link'>다음블록</a>] ");

  echo ("</td></tr></table>");
}
	
?>
</body>
</html>