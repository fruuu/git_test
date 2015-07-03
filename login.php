<?php

error_reporting(E_ALL);

function baza($sql){
    $host = "localhost";
    $baza = "iwa_2012_zb_projekt";
    $korisnik = "iwa_2012";
    $lozinka = "FOI";

    $db = mysql_connect($host, $korisnik, $lozinka, $baza);
    $select = mysql_select_db($baza, $db);
    $upit = mysql_query($sql);

    return $upit;
}

if(isset($_POST['submit'])){
    $sql = "select * from korisnik where korisnicko_ime='".$_POST['user']."' and lozinka='".$_POST['pass']."'";
    $baza = baza($sql);
    if(mysql_num_rows($baza) == 1){
        echo "jedan red je";
    }
}

?>
<table>
    <form method="post" action="login.php">
        <tr>
            <td width="20%"> Korisnicko ime </td>
            <td> <input type="text" name="user"> </td>
        </tr>
        <tr>
            <td> Lozinka </td>
            <td > <input type="password" name="pass"> </td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="Posalji"> </td>
        </tr>
    </form>
</table>



