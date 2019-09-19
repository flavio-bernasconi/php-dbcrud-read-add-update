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

    $id = $_GET['id'];
    $price = $_GET['price'];

    $query = "
      UPDATE bevande
        SET prezzo = " . $price . "
          WHERE id = " . $id . "
    ";

    $res = $conn -> query($query);

    // echo json_encode($query);
    // die():


    $conn->close();
    echo json_encode($res);

?>
