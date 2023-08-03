<?php

include ("../connDB.php"); 

$board = $_GET['board'];
if (isset($_GET['cpage'])) $cpage = $_GET['cpage'];
else $cpage = 1;  
$link = $_GET['link'];
$like = $_GET['likecont'];
$likecont = $like + 1;
$sql = "UPDATE newslist SET likecont=$likecont WHERE tablename='$board';";
echo $sql;
mysqli_query($con, $sql);
mysqli_close($con);

echo ("<meta http-equiv='Refresh' content='0; url=$link.html?board=$board&link=$link&likecont=$likecont&cpage=$cpage'>");

?>
