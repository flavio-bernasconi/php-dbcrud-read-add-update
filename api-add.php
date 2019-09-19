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

    $nome = $_GET["nome"];
    $marca = $_GET["marca"];
    $prezzo = $_GET["prezzo"];
    $scadenza = $_GET["scadenza"];

    $query = "
    INSERT INTO bevande (nome, marca, prezzo, scadenza)
    VALUES
      ('" . $nome . "', '" . $marca . "' , " . $prezzo . ",'" . $scadenza ."'  )
    ";

    // echo json_encode($query);
    // die();

    $res = $conn -> query($query);




    $conn->close();
    echo json_encode($res);

?>
