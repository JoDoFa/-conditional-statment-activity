<html lang=>
<head>

<title>Login Result</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username === "admin" && $password === "password123") {
        echo "<h2>Login successful.</h2>";
    } else {
        echo "<h2>Invalid username or password.</h2>";
    }
}
?>

</body>
</html>
