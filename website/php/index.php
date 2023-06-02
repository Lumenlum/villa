<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home/index.css" />
    <link rel="stylesheet" href="./_footer.php">
    <link rel="stylesheet" href="./_header.php">
    <link rel="stylesheet" href="../css/menu/footer.css">
    <link rel="stylesheet" href="../css/menu/header.css">
    <title>Document</title>
</head>
<body>
    <header>
    <?php include '_header.php' ?>
    </header>

    <main>
        <!--hier de html doen-->
        <h1>Mijn Villa</h1>
    <p>
      Welkom bij onze exclusieve collectie van luxe villa's. <br />
      Bij ons vindt u de meest stijlvolle en comfortabele woningen <br />
      die voldoen aan de hoogste standaarden van verfijning wij bieden <br />
      een ongeëvenaarde selectie van villa's die voldoen aan al uw wensen <br />
      Verken nu ons assortiment en vindt de villa van uw dromen.
    </p>
    <div class="flex-container">
      <div class="flex-item"> <img onclick="window.location.href='info.php?id=1'" class="een" src="./index/1.jpg"></div>
      <div class="flex-item"><img onclick="window.location.href='info.php?id=2'" src="./index/2.jpg" ></div>
      <div class="flex-item"><img onclick="window.location.href='info.php?id=3'" src="./index/3.webp" alt=""></div>
      <div class="flex-item"> <img class="vier" src="./index/4.jpg" alt=""></div>
      <div class="flex-item"><img class="vijf" src="./index/5.jpeg" alt=""></div>
      <div class="flex-item"><img class="zes" src="./index/6.jpeg" alt=""></div> 
      <div class="back"></div>
    </div>
    </main>

    <footer>
    <?php include '_footer.php' ?>
    </footer>
</body>
</html>