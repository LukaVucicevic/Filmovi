
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Filmovizija</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <?php
      if(isset($_SESSION["s"]))
      {
         if($_SESSION["korIme"]=="lukarvucicevic@gmail.com")
         { 
            echo '
            <li class="nav-item">
              <a style="font-size:20px;"class="nav-link" href="./handlers/izlog.php">Izloguj se</a>
            </li>
            <li class="nav-item">
              <a style="font-size:20px;"class="nav-link" href="./pages/pretplata.php">Pretplati se</a>
            </li>
            <li class="nav-item">
              <a style="font-size:20px;"class="nav-link" href="./pages/unos.php">Unesi film</a>
            </li>';
         }
         else
         {
            echo '
            <li class="nav-item">
              <a style="font-size:20px;"class="nav-link" href="./handlers/izlog.php">Izloguj se</a>
            </li>
            <li class="nav-item">
              <a style="font-size:20px;"class="nav-link" href="./pages/pretplata.php">Pretplati se</a>
            </li>';
         }
       
      }
      else 
      {
        echo '
        <li class="nav-item">
          <a style="font-size:20px;"class="nav-link" href="./pages/logovanje.php">Prijavi se</a>
        </li>
        <li class="nav-item">
          <a style="font-size:20px;"class="nav-link" href="./pages/registracija.php">Registruj se</a>
        </li>';
      }
      ?>
        
      </ul>
    </div>
  </div>
</nav>