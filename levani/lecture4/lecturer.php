<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer</title>
    <style>
        .container{
            margin: auto;
            width: 50%;
            padding: 10px;
            border: black 1px solid;
        }
        h3{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            
        }
        table tr td, th{
            border: solid 1px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><?=$_POST["name"]." ".$_POST["lastname"]?></h3>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Grade</th>
                    <th>Max point</th>
                </tr>
                
                <?php
                    for ($i=0; $i < count($_POST["questions"]); $i++) { 
                ?>
                <tr>
                    <td><?=$_POST["questions"][$i]?></td>
                    <td><?=$_POST["answers"][$i]?></td>
                    <td><input type="number"></td>
                    <td><?=$_POST["points"][$i]?></td>
                </tr>
                <?php
                    }
                ?>

                <tr>
                    <td colspan="3"></td>
                    <td><button>Graded</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>