<?php

  header('Content-type: application/json');

    $servername = 'localhost';
    $username = 'flavio';
    $password = 'admin';
    $dbname = 'bevandeDB';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {

      var_dump('error');
      var_dump($conn);
      die();
    }

    $query = "
    SELECT *
    FROM bevande

    ";

    $res = $conn -> query($query);


    $bibite = [];

    if ($res && $res -> num_rows > 0) {

      while($row = $res -> fetch_assoc()) {

        $bibite[] = $row;

      }
    }
    

    $conn->close();
    echo json_encode($bibite);

?>
