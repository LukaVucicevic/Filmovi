<?php
session_start();
include '../database/conn.php';
ini_set('display_errors', 0);
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
  include '../components/navbar2.php';
?>

<?php
$id=$_GET["id"];
$mail=$_SESSION["korIme"];
$sql = "SELECT * FROM filmovi WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$vrstica=$row["vrsta"];
$sql_zaPretplate="SELECT * FROM pretplate WHERE email='$mail' AND vrsta='$vrstica' ";
$result_zaPretplate = mysqli_query($conn, $sql_zaPretplate); 
$row_zaPretplate = $result_zaPretplate->fetch_assoc();

$sql_zaKom = "SELECT * FROM komentari WHERE id_filma='$id'";
    $result_zaKom = $conn->query($sql_zaKom);
    $row_zaKom = $result_zaKom->fetch_assoc();
?>
<section>
<div class="container my-5 py-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-12 col-lg-10">
      <div class="card text-dark">
        <div class="card-body p-4">
        <?php
        if($row_zaPretplate["vrsta"]!=null)
        {
          echo '<video width="1000" height="500" controls>
                  <source src="'.$row["putanja"].'" type="video/mp4">
                </video>';
        }
        else
        {
          echo '<html><h1>NISTE SE PRETPLATILI NA OVAJ ZANR!</h1></html>';
        }
        ?>
          <br>
          <br>
          <br>
        <div class="coment-bottom bg-white p-2 px-4">
                  <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                    <form action="../handlers/unosKomentara.php" method="get">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"/>
                            <input type="text" name="kom" class="form-control mr-3" placeholder="Add comment">
                            <button class="btn btn-primary" type="submit">Comment</button>
                    </form>
                  </div>
          <?php
          do
          {
            echo '<div class="card-body p-4">
            <div class="d-flex flex-start">
              <div>
                <h6 class="fw-bold mb-1">'.$row_zaKom["ime"]." ".$row_zaKom["prezime"].'</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">'.$row_zaKom["datum"].'</p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">'.$row_zaKom["Opis"].'</p>
              </div>
            </div>
        </div>';
          }
           while ($row_zaKom = mysqli_fetch_assoc($result_zaKom));
          ?>
          
        <hr class="my-0" style="height: 1px;"/>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>