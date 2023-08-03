<?PHP
session_start();

include ("../connDB.php");

$inputID = $_POST['id'];
$inputPW = $_POST['pswd'];
$getsign = $_GET['sign'];
echo $getsign;

$sql = "select * from signin where id='$inputID' && pw='$inputPW';";
$result = mysqli_query($con, $sql); 

if ($result) {
	if ($inputID == "admin") {
		$_SESSION["ses_admin"] = true;
	} else {
		$_SESSION["ses_admin"] = false;
	}
	$_SESSION["ses_id"]	= $inputID;
	$result = mysqli_query($con, "select name from signin where id='$inputID' && pw='$inputPW';");
	$row = mysqli_fetch_array($result);
	$_SESSION["ses_name"] = $row['name'];
	
	$name = $_SESSION["ses_name"];
	echo $name;
	echo "<script>
		window.alert('{$name}님 환영합니다.');
		</script>";

	if ($getsign == "true") {
		echo("<body onLoad='opener.document.location.reload();window.close();'> ");
	} else {
		echo "<script> location.href='../main.html'; </script>";
	}

} else {
	echo "<script>
		window.alert('로그인에 실패하였습니다.');
		history.go(-1);
		</script>";
}

?>