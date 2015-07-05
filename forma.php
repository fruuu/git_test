<?php
/*comment*/   
/* another comment */
/* another comment */
$conn = new mysqli("localhost", "root", "", "new_database");

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "select pass from korisnici where user='$user'";
    $query = $conn->query($sql);
    $num = $query->num_rows;
    if($num == 1){
        $red = $query->fetch_row();
        if(password_verify($pass, $red[0]))
            echo "Dobra lozinka";
        else
            echo "Kriva lozinka";
    }
    else
        echo "Nepostojeci korisnik";


    $2y$10$3Qp6M6.hL6olek.GHY6LMu0G6ZA9ZEqY65LyiEWumxdbBbltkf5pO

}
?>

<html>
<head>
    <title></title>
</head>
<body>
<form method="post" action="forma.php">
    User: <input type="text" name="user"><br>
    Pass: <input type="text" name="pass"><br>
    <input type="submit" name="submit" value="Posalji">
</form>
</body>
</html>




