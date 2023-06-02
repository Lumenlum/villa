<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/website/css/menu/header.css">
    <link rel="stylesheet" href="/website/css/menu/footer.css">
    <link rel="stylesheet" href="/website/css/home/info.css">
    <title>Document</title>
</head>
<body>
  <?php
    if (isset($_GET['id'])){
      $id = $_GET['id'];
    }
    else {
      header("Location: index.php");
    }

    $conn = new mysqli("localhost","my_user","my_password","my_db");

    // Check connection
    if ($conn -> connect_errno) {
      header("Location: index.php");
    }

    $sql = "SELECT * FROM INFO WHERE id=".$id;
    $result = $conn -> query($sql);

    $data = array();

    if ($result -> num_rows > 0) {
      while ($row == $result -> fetch_assoc()) {
        $data = $row;
      }
    }

      
  ?>
    <header>
        <?php include '_header.php' ?>
    </header>

    <main>
        <!-- https://www.w3schools.com/howto/howto_js_slideshow.asp -->
        <div class="slideshow-container">


  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../img/info/oriole_way_9.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../img/info/Roca-Llisa.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../img/info/Villa-Indigo-12.jpg" style="width:100%">
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

    </main>

    <footer>
        <?php include '_footer.php' ?>
    </footer>
</body>
<script src="../js/info/info.js"></script>
</html>