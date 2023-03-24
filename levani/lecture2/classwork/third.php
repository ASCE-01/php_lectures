<style>
    table,td,th{
        border: 1px black solid;
        border-collapse: collapse;
        padding: 3px;
        text-align: center;
    }
</style>
<?php
$mas = [];
for ($i = 0; $i < 6; $i++){
    for ($j = 0; $j < 5; $j++){
        $mas[$i][$j] = $i + $j;
    }
}

echo '<table>';
for ($i = 0; $i < 6; $i++){
    echo '<tr>';
    for ($j = 0; $j < 5; $j++){
        echo '<td>';
        echo $mas[$i][$j];
        echo '</td>';
    }
    echo '<tr>';
}
echo '</table>';
echo '<br>';