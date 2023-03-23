<style>
        .container{
            margin: auto;
            width: 50%;
            padding: 10px;
            border: 1px black solid;
        }
        .error{
            color: red;
            font-weight: bold;
        }
</style>



<?php

$error = '';
$name = "";
$email = "";
echo "<pre>";
print_r($_POST);
if (isset($_POST["send"])){
    $name = htmlspecialchars(trim($_POST["user"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    echo $name;
    echo "<br>";
    echo $email;
    if (strlen($name) < 4) {
        $error .= 'user is not valid!<br>';
        $name_b = true;
    }
    if (strlen($email) < 4) {
        $error .= 'email is not valid!<br>';
        $email_b = true;
    }
    if ($name_b && $email_b){
        $name = "";
        $email = "";
    }
}

?>

<div class="container">
    <h2>PHP form validation</h2>
    <p>* required field</p>
    <div class="error"><?=$error?></div>
    <form action="" method="post">
        <label for="user">Name:</label>
        <input type="text" name="user" placeholder="user" value="<?=$name?>"> *
        <br><br>
        <label for="user">Email:</label>
        <input type="text" name="email" placeholder="email" value="<?=$email?>"> *
        <br><br>
        <button name="send">Submit</button>
    </form>
    <h2>Your Input:</h2>
</div>