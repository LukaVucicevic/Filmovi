<?php
session_start();
include '../database/conn.php';
    $korIme=$_SESSION["korIme"];
    $vrsta=1;
    $select = mysqli_query($conn, "SELECT vrsta FROM pretplate WHERE email = '".$korIme."' AND vrsta = '".$vrsta."' ") or exit(mysqli_error($conn));

    if(mysqli_num_rows($select)) 
    {
        echo '<script>alert("Vec ste se pretplatili na ovo!")</script>';
        header("Location: index.php");
    }
    else
    {
        
        $sql = "INSERT INTO pretplate (vrsta,email) VALUES ('$vrsta','$korIme')";
        if(mysqli_query($conn, $sql)){} else{}
        header("Location: ../index.php");
    }
?>