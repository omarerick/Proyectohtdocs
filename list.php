<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            background-color: yellow;
            color:blue;
            
        }
        </style>
</head>
<body>
    <?php
    require('./conectarDB.php');

        $conn=conectar_DB();
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);
echo '<hr>';

echo '<table>';
        echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>NOMBRE</th><th>EDAD</th>';
            echo '<th>REG DATE</th>';
            echo '</tr>';


foreach ($result as $key => $value) {
echo '<tr>';
echo '<td>' .$value['id']. '</td>';
echo '<td>' .$value['nombre']. '</td>';
echo '<td>' .$value['edad']. '</td>';
echo '<td>' .$value['reg_date']. '</td>';
echo '</tr>';
}
echo '</table>';
echo '<hr>';

foreach ($result as $key => $value) {
    echo '<br>';
    echo '<br>';
    var_dump($value);
}

$conn->close();

        ?>

<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}
$bar = new foo;
$bar->do_foo();
?>

</body>
</html>