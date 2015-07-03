<?php

$pass = "easypassword";
$password = password_hash($pass, PASSWORD_DEFAULT);
echo strlen($password)."<br>";
if(password_verify($pass, $password)){
    echo "Pass verified";
}
else
    echo "Pass not verified";

?>

<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>