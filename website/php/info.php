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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

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
    <div class="numbertext">1 / 4</div>
    <img src="../img/huis<?= $_GET['id']?>/image1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="../img/huis<?= $_GET['id']?>/image2.jpg"" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="../img/huis<?= $_GET['id']?>/image3.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="../img/huis<?= $_GET['id']?>/image4.jpg" style="width:100%">

  </div>

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<div class="main_naam"><?php echo $data['naam']; ?></div>
<div class="main_info"><?php echo $data['info']; ?></div>
<div class="bod-container">
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

<h1>Villa Sereno Azul</h1>
<p>Introducing Villa Sereno Azul, a modern sanctuary nestled in the hills. With stunning views, sleek design, and luxurious amenities, this exquisite retreat offers a perfect blend of comfort and sophistication. Experience the ultimate getaway and indulge in the serenity of this captivating villa.
</p>

<h1>Villa Solara Vista</h1>
<p>Introducing Villa Solara Vista, a contemporary masterpiece situated on the pristine shores of a breathtaking beach. Immerse yourself in the epitome of coastal luxury as this modern villa embraces the panoramic ocean views and offers a seamless fusion of indoor-outdoor living spaces. Relax and rejuvenate in this coastal haven where modern elegance meets 
</p>

<h1>Villa Serene Breeze</h1>
<p>Villa Serene Breeze a modern retreat nestled amidst the enchanting woods. Immerse yourself in the serene beauty of nature as you indulge in the contemporary elegance of this secluded villa. Discover the perfect harmony between modern design and rustic charm, where floor-to-ceiling windows showcase the lush surroundings and a private pool invites you to relax and unwind. </p>

<!DOCTYPE html>

<html lang="en">



<div class="google-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>  


<div class="bod">
  <h3>Bieden</h3>
  <form method="POST">
  <input type="text" name="naam" placeholder="Naam">
  <input type="text" name="achternaam" placeholder="Achternaam">
  <input type="tel" name="tel" placeholder="Telefoonnummer">
  <input type="email" name="email" placeholder="E-mail">
  <input type="text" name="prijs" placeholder="Bod">
  <input type="submit" value="Submit">
</form>
</div>

    </main>

    <footer>
        <?php include '_footer.php' ?>
    </footer>
</body>
<script src="../js/info/info.js"></script>
</html>