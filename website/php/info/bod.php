<?php 
if (isset($_POST['naam']) && isset($_POST['achternaam']) && isset($_POST['telefoonnummer']) && isset($_POST['email']) && isset($_POST['bod'])) {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $bod = $_POST['bod'];
    
    $conn = new mysqli("localhost","88896_DB","my_password","88896_db");
  
    // Check connection
    if ($conn->connect_errno) {
      exit();
    }
  
    $sql = "INSERT INTO BOD (naam, achternaam, tel, email, prijs) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
      exit();
    }
  
    // Bind the parameters and execute the statement
    $stmt->bind_param("sssss", $Naam, $achternaam, $tel, $email, $prijs);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
  }
?>
