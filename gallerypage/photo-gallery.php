<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>   
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="./_photo-style.css">
</head>

<body class='photo'>

<?PHP
//mySQL 접속 
include ("../connDB.php");  

$result = mysqli_query($con, "SELECT * FROM photo ORDER BY wdate DESC;");
$total = mysqli_num_rows($result);

?>

<table>
  <caption>Gallery</caption>
  <tr><th class='blue' colspan='2' align='left'>(전체 사진매수: <span class='red'><?=$total?>&nbsp;</span>매)</th>
  <th colspan='2' align='right'>[<a href='photo-table.php'>전체목록</a>]
      [<a href='addgallery.html'>사진등록</a>]</th></tr>
  <tr>

<?PHP

$counter = 0;

// 1줄에 4장씩 사진 출력
//JSP 여기부터 입력하세요~~
while ($counter < $total) :
if (($counter % 2) == 0) echo ("</tr><tr><td colspan=4></td></tr><tr>");
$row = mysqli_fetch_array($result);
$wname = $row['wname'];
$wdate = $row['wdate'];
$userfile = $row['userfile'];

echo ("<td>
<a href = #onclick=\"window.open('./photo/$userfile', '_new', 'width=920, height=620')\">
<img src='./photo/$userfile' width=120 height=80 border=0></a><br>
$wname<br>($wdate) </td>
");

$counter++;
endwhile;

//JSP 여기까지

echo ("</tr></table>");

mysqli_close($con);

?>
