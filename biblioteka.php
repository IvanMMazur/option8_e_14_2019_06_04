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
      $show = "Czytelnik: {$_POST['imie']} {$_POST['nazwisko']} zostal dodany do bazy danych!";
        echo $show;
      $kod = strtolower (substr($_POST['imie'],0,2).substr($_POST['year'],strlen($_POST['year'])-2,strlen($_POST['year'])).substr($_POST['nazwisko'],0,2));
      $query = "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('{$_POST['imie']}', '{$_POST['nazwisko']}', '{$kod}')";
      $result = mysqli_query($conn,$query);
      // print_r($query);
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
      $query = "SELECT imie, nazwisko FROM czytelnicy";
      $result = mysqli_query($conn,$query);
        echo "<ul>";
          while ($row=mysqli_fetch_array($result)) {//дивись уважно сюда просто передаем результат запроса
            echo "<li>".$row['imie']." ";
            echo $row['nazwisko']."</li>";
          }
        echo "</ul>";
      mysqli_close($conn);
    ?>
  </div>
  <div id="stopka">
    <p>Projekt witryny: 1234567890111</p>
  </div>
</body>
</html>