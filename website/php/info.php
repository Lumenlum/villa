<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  header("Location: index.php");
}

$conn = new mysqli("localhost", "88896_DB", "Villa0306!", "88896_DU");


if ($conn->connect_errno) {
  header("Location: index.php");
}

$sql = "SELECT * FROM INFO WHERE id=" . $id;
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data = $row;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $naam = $_POST['naam'];
  $achternaam = $_POST['achternaam'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $prijs = $_POST['prijs'];


  $insertSql = "INSERT INTO BOD (naam, achternaam, prijs, tel, email) VALUES ('$naam', '$achternaam', '$prijs', '$tel', '$email')";
  if ($conn->query($insertSql) === TRUE) {
    echo "Form data stored successfully!";
  } else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/menu/header.css">
    <link rel="stylesheet" href="../css/menu/footer.css">
    <link rel="stylesheet" href="../css/home/info.css">
    <title>Document</title>
</head>
<body>

    <header>
        <?php include '_header.php' ?>
    </header>

    <main>
        <!-- https://www.w3schools.com/howto/howto_js_slideshow.asp -->
        <div class="slideshow-container">


  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../img/huis<?= $_GET['id']?>/image1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../img/huis<?= $_GET['id']?>/image2.jpg"" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../img/huis<?= $_GET['id']?>/image3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="main_naam"><?php echo $data['naam']; ?></div>
<div class="main_info"><?php echo $data['info']; ?></div>
<div class="bod">
  <?php
  $bodSql = "SELECT naam, achternaam, prijs FROM BOD";
  $bodResult = $conn->query($bodSql);

  if ($bodResult->num_rows > 0) {
    while ($bodRow = $bodResult->fetch_assoc()) {
      echo "<p> " . $bodRow['naam'] . "</p>";
      echo "<p> " . $bodRow['achternaam'] . "</p>";
      echo "<p> " . $bodRow['prijs'] . "</p>";
    }
  } else {
    echo "No records found.";
  }
  ?>
</div>


<form method="POST">
  <input type="text" name="naam" placeholder="Naam">
  <input type="text" name="achternaam" placeholder="Achternaam">
  <input type="tel" name="tel" placeholder="Telefoonnummer">
  <input type="email" name="email" placeholder="E-mail">
  <input type="text" name="prijs" placeholder="Bod">
  <input type="submit" value="Submit">
</form>
    </main>

    <footer>
        <?php include '_footer.php' ?>
    </footer>
</body>
<script src="../js/info/info.js"></script>
</html>