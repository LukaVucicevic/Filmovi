<?php
session_start();
include '../database/conn.php';
    $sql_zaKom = "SELECT * FROM komentari WHERE id_filma='$id'";
    $result_zaKom = $conn->query($sql_zaKom);
    $row_zaKom = $result_zaKom->fetch_assoc();
    
    $email=$_SESSION["korIme"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") 
        {
          if(isset($_GET["kom"]))
          {
            $kom=$_GET["kom"];
          }
                $id_filma=$_GET["id"];
                $sql1="SELECT * FROM Korisnik WHERE email='$email'";
                $result1 = $conn->query($sql1);
                $row1 = $result1->fetch_assoc();
                $ime=$row1["Ime"];
                $prezime=$row1["Prezime"];
                $sql_unos="INSERT INTO komentari (email,ime,prezime,id_filma,Opis) VALUES ('$email','$ime','$prezime','$id_filma','$kom')";
                if(mysqli_query($conn, $sql_unos)){} else{}
            
        }
        header("Location: ../pages/film.php?id=".$id_filma);
?>