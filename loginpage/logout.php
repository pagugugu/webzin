<?PHP
// 세션 시작
session_start();

// 세션변수 삭제
session_unset();

// 서버 세션정보 파일 삭제
session_destroy();



echo "<script>alert('안녕히가십시오!');
      </script>";
echo("<meta http-equiv='Refresh' content='0; url=../main.html'>");

?>