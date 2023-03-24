<?php
    include "questions.php";
    shuffle($questions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
        .container{
            margin: auto;
            width: 50%;
            /* padding: 10px; */
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
        <h3>Questions</h3>
        <form action="lecturer.php" method="post">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Max point</th>
                </tr>
                
                <?php
                    for ($i=0; $i < count($questions); $i++) { 
                ?>
                <tr>
                    <td>
                        <?=$questions[$i]["question"]?>
                        <input type="hidden" name="questions[]" value="<?=$questions[$i]["question"]?>">
                    </td>
                    <td><input type="text" name="answers[]"></td>
                    <td>
                        <?=$questions[$i]["point"]?>
                        <input type="hidden" name="points[]" value="<?=$questions[$i]["point"]?>">
                    </td>
                </tr>
                <?php
                    }
                ?>

                <tr>
                    <td colspan="2">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="lastname" placeholder="Lastname">
                    </td>
                    <td><button>Send</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>