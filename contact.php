<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@300;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@300&display=swap" rel="stylesheet">
    <title>Réservation</title>
    <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
<?php include 'navbar.php'; ?>
<main id="container">
<section class="bigContainer">
  <div class="reserv">
      <h3 class="h1Reserv">Réservation</h3>
        <?php if (isset($_GET['success'])) : ?>
          <div class="alert-success" role="alert">
              <p>Merci pour votre reservation. Nous reviendrons vers vous dans les plus brefs délais ;)</p>
          </div>
        <?php endif ?>
            <form action="form.php" method="post" class="myform">
                <span class="error"><?= isset($_GET['errorTitle']) ? $_GET['errorTitle'] : '';?></span>
                <input type="text" class="inputForm" name="fname" placeholder="Nom / Prénom" autofocus/>
                <span class="error"><?= isset($_GET['errorEmail']) ? $_GET['errorEmail'] : ''; ?></span>
                <input type="text" class="inputForm" name="email" placeholder="Adresse e-mail"/>
                <label for="start">Date de Réservation</label>
                <span class="error"><?= isset($_GET['errorDate']) ? $_GET['errorDate'] : ''; ?></span>
                <input type="date" class="inputForm" name= "date" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>">
                <SELECT class="inputForm" name="activités" size="1">
                    <option>Choisissez votre activité</option>
                    <option value="calin">Instant Câlin</option>
                    <option value="gourmand">Instant Gourmand</option>
                    <option value="picture">Instant Picture</option>
                </SELECT>
                <span class="error"><?= isset($_GET['errorMessage']) ? $_GET['errorMessage'] : '';?></span>
                <textarea id="message" name="message" placeholder="Veuillez renseigner vos demandes supplémentaires" ></textarea>
                <button type="submit" class="submit">Envoyer</button
            </form>
        </div>
  <article class ="infoContact">
    <h2 class="h1Reserv">Nos informations</h2>
        <img src="images/phoneForm.png" id="phoneForm">    <p>+33 5 56 56 56 56 </p> <br>
        <img src="images/enveloppeForm.png" id="enveloppeForm">  <p> info@bashstide.com </p> <br>
        <img src="images/localisationForm.png" id="localisationForm"> <p> 30 rue Lionceau <br> 33300 Bordeaux </p>
            <div id="maps">
                <iframe class='map' src="https://maps.google.com/maps?width=100%25&amp; height=220&amp;hl=en&amp;q=le%20lion%20de%20veilhan+(Lion)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="330" height="330" style="border:0;" allowfullscreen="" loading="lazy" id="maps"></iframe>
            </div>
  </article>
</section>
<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>