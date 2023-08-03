﻿<?PHP
// POST 변수 가져오기
 $title = $_POST['title']; 

if (!$title) {
  echo ("<script>
    window.alert('삭제할 기사가 선택되지 않았습니다');
    history.go(-1); 
     </script>
  ");
  exit;
}
?>

<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>News</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../newspage/assets/css/main.css" />
		<style>
         table{width:200px; margin:auto; display:block;}
      </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="../main.html">Webzin</a></h1>
						<nav class="links">
							<ul>
								<li><a href="news.html">News</a></li>
								<li><a href="col-table.php">Board</a></li>
								<li><a href="../pollpage/poll.html">Event</a></li>
								<li><a href="../gallerypage/gallery.html">Gallery</a></li>
							</ul>
						</nav>
					</header>

					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2 style="display: inline-block; width:80%; margin:0;" ><a href="news.html">News</a></h2>
										<button class="upload" onclick = "window.history.back() " style="float:right; padding:10px; margin-right:3%;" ><img src="images/back.png" width="30px"></button>
										<p>삭제할 사진의 암호를 입력하세요.</p>
									</div>
								</header>
								 <table>
    <form method='post' action='col-deleteRecord.php?title=<?=$title?>'>
    <tr><td  style="text-align:center; font-size:150%; padding:0"> 암 호 </td></tr>
    <tr><td>      
		    <input type='password' name='delpasswd' size='15' class='myInput'>
    </td></tr>
    <tr><td  style="text-align:center; font-size:150%; padding:0">
        <input   type='submit' value='입력' class='button'>
		</td></tr>
    </form>
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