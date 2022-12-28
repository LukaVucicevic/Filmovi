<?php
session_start();
include './database/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
  include './components/navbar1.php';
?>

<div style="padding:50px;" class="row">
   <?php
   
      $sql = "SELECT * FROM filmovi";
      $result = mysqli_query($conn, $sql); 
      $sql1 = "SELECT * FROM filmovi";
      $result1 = mysqli_query($conn, $sql1); 
      $row1 = $result1->fetch_assoc();
      
      if(isset($_SESSION["s"]))
      {
         do
         {
            
            echo '<div class="col-md-5">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
               <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-primary">'.$row1["Ime_filma"].'</strong>
                  <div class="mb-1 text-muted small">'.$row1["Datum"].'</div>
                  <p class="card-text mb-auto">'.$row1["Opis"].'</p>
                  <a class="btn btn-outline-primary btn-sm" role="button" href="pages/film.php?id='.$row1["id"].'">Idi da gledaš film</a>
               </div>
               <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="slike/filmovizija.jpg" style="width: 200px; height: 250px;">
            </div>
         </div>';
            
         }
         while ($row1 = mysqli_fetch_assoc($result1)) ;
         
    }
    else
    {
      echo '<html><h1>MORATE SE ULOGOVATI DA BI GLEDALI FILMOVE!</h1></html>';
    }
   ?>
      
</div>


</body>
</html>


