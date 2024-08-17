<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAL</h1>
    <?php
        $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], 'prueba');

        if (!$link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Success: A proper connection to MySQL was made! The docker database is great." . PHP_EOL;

        //mysqli_close($link);
        $sql = "SELECT * FROM usuarios";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo" - Name: " . $row["nombre"]. " " . $row["apellidos"]. "<br>";
        }
        } else {
        echo "0 results";
        }
        $link->close();
    ?>
</body>
