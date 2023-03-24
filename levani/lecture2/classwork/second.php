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
for ($i = 0; $i < 4; $i++){
    for ($j = 0; $j < 4; $j++){
        $mas[$i][$j] = rand(10, 100);
    }
}

echo '<table>';
for ($i = 0; $i < 4; $i++){
    echo '<tr>';
    for ($j = 0; $j < 4; $j++){
        echo '<td>';
        echo $mas[$i][$j];
        echo '</td>';
    }
    echo '<tr>';
}
echo '</table>';
echo '<br>';

echo '<table>';
for ($i = 0; $i < 4; $i++){
    echo '<tr>';
    for ($j = 0; $j < 4; $j++){
        if ($i < $j){
            echo '<td>';
            echo $mas[$i][$j];
            echo '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

$x = $_POST["num"];
$sum = 0;
$prod = 1;
$k = 0;
echo '<table>';
echo '<tr>';
echo '<td>x-is jeradi ricxvebi</td>';
for ($i = 0; $i < 4; $i++){
    for ($j = 0; $j < 4; $j++){
        if ($mas[$i][$j] % $x == 0){
            echo '<td>';
            echo $mas[$i][$j];
            echo '</td>';
            $k++;
        }
        $sum += $mas[$i][$j];
        $prod *= $mas[$i][$j];
    }
}
echo '</tr>';

echo "</br>";

echo "<tr>";
echo "<td>ricxvebis jami</td>";
echo "<td colspan='16'>$sum</td>";
echo '</tr>';

echo "<tr>";
echo "<td>ricxvebis namravli</td>";
echo "<td colspan='16'>$prod</td>";
echo '</tr>';

echo '<td>elementebis cifrebis jami</td>';
for ($i = 0; $i < 4; $i++){
    for ($j = 0; $j < 4; $j++){
        echo '<td>';
        if ($mas[$i][$j] != 100){
            echo array_sum(str_split($mas[$i][$j], 1));
        }
        else echo 1;
        echo '</td>';
    }
}

echo '</table>';
