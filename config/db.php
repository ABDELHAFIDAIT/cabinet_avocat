<?php
    $db_serever = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "cabinet_avocat";

    $conn = mysqli_connect($db_serever, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8mb4");

    echo "Connexion Réussie !";
?>