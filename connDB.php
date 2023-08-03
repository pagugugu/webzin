<?PHP
//MySQL에 연결 
$con = mysqli_connect('localhost', 'root', 'adminpw', 'web03');

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<br/>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "<br/>Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
