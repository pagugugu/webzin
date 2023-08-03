<?php
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
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			.upload {margin:0; padding: 5% 5% 10% 5%;}
		</style>
		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="http://localhost/main/main.html">Webzin</a></h1>
						<nav class="links">
							<ul>
								<li><a href="http://localhost/main/newspage/news.html">News</a></li>
								<li><a href="http://localhost/main/board/board-inputForm.php?board=$board">Board</a></li>
								<li><a href="http://localhost/main/pollpage/poll.html">Event</a></li>
								<li><a href="http://localhost/main/gallerypage/gallery.html">Gallery</a></li>
							</ul>
						</nav>
					</header>


					<div id="main">


					
<?PHP
//mySQL 접속 
include ("../connDB.php");  

$result = mysqli_query($con, "SELECT * FROM newslist ORDER BY link ASC;");
$total = mysqli_num_rows($result);


$pagesize = 3;
// 페이지 번호 유무 확인하여 없으면 1로 초기화
 if (isset($_GET['cpage'])) $cpage = $_GET['cpage'];  
 else $cpage = 1;		

// 마지막 페이지 계산
$endpage = (int)($total / $pagesize);
if (($total % $pagesize) != 0) $endpage= $endpage + 1;
// 현재 페이지의 시작 레코드 위치 찾기 
  $counter = ($cpage-1)*$pagesize; 
  mysqli_data_seek($result, $counter); 

	// $pagesize에 맞게 레코드 출력
  $i = 0;	
 
 while ($i < $pagesize) :
    if ($counter == $total) break; 
    $counter++; 
$row = mysqli_fetch_array($result);

$title = $row['title'];
$subtitle = $row['subtitle'];
$wdate = $row['wdate'];
$writer = $row['writer'];
$imgfile = $row['imgfile'];
$outline = $row['outline'];
$likecont = $row['likecont'];
$link = $row['link'];
$tablename = $row['tablename'];

echo ("
				<article class='post'>
								<header>
									<div class='title'>
										<h2><a href='$link.html'>$title</a></h2>
										<p>$subtitle</p>
									</div>
									<div class='meta'>
										<time class='published' datetime='2015-11-01'>$wdate</time>
										<span class='name'>$writer</span>
									</div>
								</header>
								<a href='$link.html' class='image featured'><img src='photo/$imgfile' alt='' /></a>
								<p>$outline</p>
								<footer>
									<ul class='actions'>
										<li><a href='$link.html' class='button large'>Continue Reading</a></li>
									</ul>
									<ul class='stats'>
										<li><a href='#'>General</a></li>
										<li><a href='#' class='icon solid fa-heart'>$likecont</a></li>
										<li><a href='./Ex06/Board-show.html?board=$tablename' class='icon solid fa-comment'>128</a></li>
									</ul>
								</footer>
							</article>
");

$i++;
endwhile;

mysqli_close($con);

$ppage = $cpage - 1;
$npage = $cpage + 1;

/////////Pagination
echo ("<ul class='actions pagination'>");
// 이전 페이지 링크 
if ($cpage > 1)
   echo ("<li><a href='news.html?cpage=$ppage' class='disabled button large previous'>Previous Page</a></li> ");

// 중간 페이지 표시 
if ($cpage >= 1 && $cpage != $endpage)
   echo ("<li><span>$cpage </span> of <span> $endpage </span> </li>");
// 다음 페이지 링크 표시 
if ($cpage < $endpage)
   echo (" <li><a href='news.html?cpage=$npage' class=button large next>Next Page</a></li> ");

echo ("(총 사진매수: <span>$total</span>매)");
?>
</ul>
						

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<header>
									<h2>Magazine</h2>
									<p>12월 특집 기사를 만나보세요!</p>
								</header>

								<button class="upload" onclick = "location.href = 'addcol.html'"><img src="images/text.png" width="30px" ></button>

							</section>
							
						
						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="https://twitter.com" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
								<p class="copyright">&copy; Chonnam Univ.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>