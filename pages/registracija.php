<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
<?php
  $i=0;
  $j=0;
  include '../database/conn.php';
    /*if(isset($_POST["submit"]))
    {
        $ime = $_POST["ime"];
        $jmbg = $_POST["jmbg"];
    }*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["korIme"])) 
        {
            echo '<script>alert("Korisnicko ime je obavezno!")</script>';
        } 
        else 
        {
            $korIme = $_POST["korIme"];
            if (!filter_var($korIme, FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("Neispravno korisnicko ime!")</script>';
            }
            else 
            {
                $i++;
            }
        }
        if (empty($_POST["lozinka"])) 
        {
          echo '<script>alert("Lozinka je obavezna!")</script>';
        }
        else
        {
            $lozinka=$_POST["lozinka"];
            $i++;
        }
        if (empty($_POST["ponovljenaLozinka"])) 
        {
          echo '<script>alert("Lozinka je obavezna!")</script>';
        }
        else
        {
            $ponLozinka=$_POST["ponovljenaLozinka"];
            if ($_POST["lozinka"]!= $_POST["ponovljenaLozinka"])
            {
                echo '<script>alert("Lozinke nisu iste!")</script>';
            }
            else
            {
                $i++;
            }
        }
        if (empty($_POST["ime"])) 
        {
            echo '<script>alert("Ime je obavezno!")</script>';
        }
        else
        {
          $ime = $_POST["ime"];
        }
        if (empty($_POST["prezime"])) 
        {
            echo '<script>alert("Prezime je obavezno!")</script>';
        }
        else
        {
          $prezime = $_POST["prezime"];
        }
    }
    /*function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }*/
        if($i==3)
        {
            $select = mysqli_query($conn, "SELECT email FROM Korisnik WHERE email = '".$_POST['korIme']."'") or exit(mysqli_error($conn));
            if(mysqli_num_rows($select)) 
            {
                echo '<script>alert("Ovaj mejl vec postoji!")</script>';
            }
            else
            {
                $sql = "INSERT INTO Korisnik (Ime,Prezime,email,lozinka) VALUES ('$ime','$prezime','$korIme','$lozinka')";
                if(mysqli_query($conn, $sql)){} else{}
                header("Location: logovanje.php");
            }
        }
  ?>
<div class="wrapper">
  <div id="formContent">

    <div>
      <img src="https://cdop.org/wp-content/uploads/2022/02/Registration-Icon.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="text" name="ime" placeholder="Ime">
      <input type="text" name="prezime" placeholder="Prezime">
      <input type="text" name="korIme" placeholder="Korisnicko ime">
      <input type="password" name="lozinka"  placeholder="Lozinka">
      <input type="password" name="ponovljenaLozinka"  placeholder="Ponovljena lozinka">
      <input type="submit" value="Registruj se">
</form>
  </div>
</div>
</body>
</html>
