<?php
echo "<pre>";
print_r($_GET);
echo "<pre>";
print_r($_POST);
if(isset($_POST['email'])){
    echo "POST -> ".($_POST['email']);
}
if(isset($_GET['email'])){
    echo "GET -> ".($_GET['email']);
}