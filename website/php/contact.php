<?php

$conn = new mysqli("localhost", "88896_DB", "Villa0306!", "88896_DU");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $naam = $_POST['voornaam'];
  $achternaam = $_POST['achternaam'];
  $tel = $_POST['telefoonnummer'];
  $email = $_POST['email'];
  $vraag = $_POST['bericht'];

  $insertSql = "INSERT INTO CONTACT (voornaam, achternaam, telefoonnummer, email, vraag) VALUES (?, ?, ?, ?, ?)";
  
  $stmt = $conn->prepare($insertSql);
  $stmt->bind_param("sssss", $naam, $achternaam, $tel, $email, $vraag);
  
  if ($stmt->execute()) {
    echo "Form data stored successfully!";
  } else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
  }

  $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home/contact.css">
    <link rel="stylesheet" href="../css/menu/header.css">
    <link rel="stylesheet" href="../css/menu/footer.css">
    <title>Contact Form</title>
</head>
<body>
    <header>
    <?php include '_header.php'; ?>
    </header>

    <main>
    <div class="Doos">
        <h2 class="ncm">Neem contact met ons op</h2>
        <p class="ncm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatum aut quo reprehenderit exercitationem.</p>
        <h3 id="Contact-Formulier">Contact Formulier</h3>
        <form class="contact-form" method="post">
            <div class="form-group">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required>
            </div>
            <div class="form-group">
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" required>
            </div>
            <div class="form-group">
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="Telefoonnummer" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="bericht">Vraag/Opmerking:</label>
                <textarea id="bericht" name="bericht" placeholder="Uw Vraag/Opmerking" required></textarea>
            </div>
            <input type="submit" value="Verstuur Bericht" id="submit">
        </form>
    </div>
    </main>

    <footer>
    <?php include '_footer.php'; ?>
    </footer>
</body>
</html>