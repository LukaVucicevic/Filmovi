<! DOCTYPE html>  
<html lang="en">  
<head>  
  <title> Bootstrap 4 File upload Example </title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
</head>  
<style>  
.input-file {  
  position: relative;  
  display: block;  
  font-weight: 400;  
}  
  
.input-file .button {  
  position: absolute;  
  top: 4px;  
  right: 4px;  
  float: none;  
  height: 22px;  
  margin: 0;  
  padding: 0 14px;  
  font-size: 13px;  
  line-height: 22px;  
  background-color: #3276B1;  
  opacity: .8;  
  transition: opacity .2s;  
  -o-transition: opacity .2s;  
  -ms-transition: opacity .2s;  
  -moz-transition: opacity .2s;  
  -webkit-transition: opacity .2s;  
  outline: 0;  
  border: 0;  
  text-decoration: none;  
  color: #fff;  
  cursor: pointer;  
}  
body {  
  margin: 0;  
  padding: 0;  
  background-color: var(--clr-light);  
  color: var(--clr-black);  
  font-family: 'Poppins', sans-serif;  
  font-size: 1.125rem;  
  justify-content: center;  
  align-items: center;  
}  
h1 {  
font-family: 'Indie Flower', cursive;  
font-size: 32px;  
  color: #03A9F4;  
  font-weight: bold;  
  margin-bottom: 20px;  
}  
.input-file .button input {  
  position: absolute;  
  top: 0;  
  right: 0;  
  padding: 0;  
  font-size: 30px;  
  cursor: pointer;  
  opacity: 0;  
}  
.input input {  
    display: block;  
    box-sizing: border-box;  
    -moz-box-sizing: border-box;  
    width: 100%;  
    height: 28px;  
    padding: 8px 10px;  
    outline: 0;  
    border-width: 1px;  
    border-style: solid;  
    border-radius: 0;  
    background: #fff;  
    font: 13px/16px 'Open Sans', Helvetica,Arial, sans-serif;  
    color: #404040;  
    appearance: normal;  
    -moz-appearance: none;  
    -webkit-appearance: none;  
}   
</style>  
<body>  
   <?php
   ini_set('display_errors', 0);
   //$fileExistsFlag = 0; 
   $fileName = $_FILES['Filename']['name'];
   $link = mysqli_connect("localhost","root","","onlinebioskop") or die("Error ".mysqli_error($link));
   $opis=$_POST["Opis"];
   $ime=$_POST["ime"];
     $target = "../videozapisi/";		
     $fileTarget = $target.$fileName;	
     $tempFileName = $_FILES["Filename"]["tmp_name"];
     $result = move_uploaded_file($tempFileName,$fileTarget);
     $datum=date("d.m.Y");
     $vrsta=$_POST["vrsta"];
     if($result) { 
       echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
       $query = "INSERT INTO filmovi(Ime_filma,vrsta,naziv,opis,putanja,datum) VALUES ('$ime','$vrsta','$fileName','$opis','$fileTarget','$datum')";
       $link->query($query) or die("Error : ".mysqli_error($link));			
     }
     mysqli_close($link);
 
   ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <p>File :</p>
    <input type="file" name="Filename"> 
    <p>Opis filma</p>
    <textarea rows="10" cols="35" name="Opis"></textarea>
    <br>
    <br>
    <label>Ime filma</label>
    <input type="text" name="ime">
    <br>
    <br>
    <label>Vrsta filma</label>
    <input type="number" name="vrsta">
    <br>
    <br>
    <input TYPE="submit" name="upload" value="Submit"/>
</form>
</body>  
</html>