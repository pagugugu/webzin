<?PHP
	session_start();
?>

<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../newspage/assets/css/main.css" />

		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="../main.html">Webzin</a></h1>
						<nav class="links">
							<ul>
								<li><a href="../newspage/news.html">News</a></li>
								<li><a href="../newspage/col-table.php">Board</a></li>
								<li><a href="../pollpage/poll.html">Event</a></li>
								<li><a href="gallery.html">Gallery</a></li>
							</ul>
						</nav>
					</header>

					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2 style="display: inline-block; width:80%; margin:0;" ><a href="gallery.html">Gallery</a></h2>
										<button class="upload" onclick = "location.href = './addgallery.html' " style="float:right; padding:10px; margin-right:3%;" ><img src="images/upload.png" width="30px"></button>
										<p>갤러리 관리</p>
									</div>
								</header>
								<?PHP
   
// MySQL 서버 접속
include ("../connDB.php");  

$result = mysqli_query($con, "SELECT * FROM photo ORDER BY wdate DESC");
$total = mysqli_num_rows($result);

$pagesize = 8;
// 페이지 번호 유무 확인하여 없으면 1로 초기화
 if (isset($_GET['cpage'])) $cpage = $_GET['cpage'];  
 else $cpage = 1;		

// 마지막 페이지 계산
$endpage = (int)($total / $pagesize);
if (($total % $pagesize) != 0) $endpage= $endpage + 1;

if (!$total) {
?>

  <script>
    window.alert('아직 등록된 사진이 없습니다');
  </script>
  <meta http-equiv='Refresh' content='0; url=addgallery.html'>

<?PHP
} else {
?>
  <table id='gallery'>
    <form method='post' action='photo-deleteForm.php'>
    <tr>
		<th width='70' >이름</th>
		<th width='80' >등록날짜</th>
		<th width='420'>사진 설명</th>
		<th width='30' style='text-align:center;'><input type='submit' value='삭제'></th>
	</tr>

  <?PHP
	// 현재 페이지의 시작 레코드 위치 찾기 
  $counter = ($cpage-1)*$pagesize; 
  mysqli_data_seek($result, $counter); 

	// $pagesize에 맞게 레코드 출력
  $i = 0;	
  while ($i < $pagesize) :
    if ($counter == $total) break; 
    $counter++; 

  	$row = mysqli_fetch_array($result); // 레코드 추출
    $wname    = $row['wname'];	  
    $summary  = $row['summary'];  
    $wdate    = $row['wdate'];	  
    $userfile = $row['userfile']; 

    // 홀수, 짝수 줄에 따라 배경색을 다르게 지정 
	if ( ($i%2)==0 ) echo ("<tr bgcolor=#ffffff>");
    else      echo ("<tr bgcolor=#ffffef>");

    echo ("
      <td>$wname</td>
      <td>$wdate</td>
      <td><a href=# onclick=\"window.open('./photo/$userfile', '_new', 'width=420', 'height=420')\">
       $summary</a></td>
      <td style='text-align:center;'><input type='checkbox' name='delimage' value='$userfile' id='$userfile' style=''  ><label for='$userfile'></label></td></tr>
    ");

    $i++;
  endwhile;       
} // end of else {

mysqli_close($con); // MySQL 종료

// 하단에 이전페이지, 다음페이지 링크 삽입
$ppage = $cpage - 1;
$npage = $cpage + 1;

echo ("</form><tr><td colspan='4' style='text-align:center;'><br/>");

// 이전 페이지 링크 
if ($cpage > 1)
   echo ("[<a href='photo-table.php?cpage=$ppage'>이전페이지</a>] ");

// 중간 페이지 표시 
if ($cpage >= 1 && $cpage != $endpage)
   echo ("<span class='red'>$cpage </span> of <span class='blue'>$endpage </span>");

// 다음 페이지 링크 표시 
if ($cpage < $endpage)
   echo (" [<a href='photo-table.php?cpage=$npage'>다음페이지</a>] ");
?>
</td></tr>
</table>
							</article>

						

					</div>

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>