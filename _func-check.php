<?PHP 

  // _func-check.php 메시지를 경고창에 보여주고 이전화면으로 돌아가는 함수 

	function check($message) {
	echo ("
		<script>
		window.alert('$message');
		history.go(-1);
		</script>
	");
	exit;
}
?>

