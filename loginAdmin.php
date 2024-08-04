<?php
$name = $_POST['name'];
$pass = $_POST['pass'];

if($name == 'S/S'&& $pass == 'S/D'){
    echo"Welcome Admin page";
}else{
    echo"Password is incurect";
}
?>