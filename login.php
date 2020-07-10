<?php
$connection = new mysqli("localhost", "root", "", "berxzz.cc");

if (isset($_GET['uname'],$_GET['pass'])){
$getuname = $connection->real_escape_string($_GET['uname']);
$getpass = $connection->real_escape_string($_GET['pass']);
$uname = $getuname;
$pass = $getpass;
$pulluname = $connection->query("SELECT uname FROM data WHERE uname='$uname'");
if(mysqli_num_rows($pulluname) == 1){
   $pullpass = $connection->query("SELECT pass FROM data WHERE pass='$pass'");
   if(mysqli_num_rows($pullpass) == 1){
       echo "good";
   }else{
       echo "badpass";
   }
}else{
    echo "baduser";
}
}else{
    echo "badgrab";
}
?>