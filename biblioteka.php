<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biblioteka publiczna</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <div id="baner">
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
  </div>
  <div id="lewy">
    <h2>Dodaj czytelnika</h2>
    <form method="POST">
      imię:<input type="text" name="imie"><br>
      nazwisko:<input type="text" name="nazwisko"><br>
      rok urodzenia:<input type="number" name="year"><br>
      <input type="submit" name="dodaj" value="DODAJ">
    </form>
    <?php
      $conn = mysqli_connect("localhost","root","","biblioteka");
      
      mysqli_close($conn);
    ?>
  </div>
  <div id="srodkowy">
    <img src="biblioteka.png" alt="biblioteka">
    <h4>
      ul. Czytelnicza 25<br>
      12-120 Książkowice<br>
      tel.: 123123123<br>
      e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a>
    </h4>
    
    
  </div>
  <div id="prawy">
    <h3>Nasi czytelnicy:</h3>
    <?php
      $conn = mysqli_connect("localhost","root","","biblioteka");
        
        mysqli_close($conn);
    ?>
  </div>
  <div id="stopka">
    <p>Projekt witryny: 1234567890111</p>
  </div>
</body>
</html>