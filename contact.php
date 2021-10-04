<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@300;600&display=swap" rel="stylesheet">
    <title>Réservation</title>
    <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
<section class= "bigContainer">

  <div class="reserv"> 
      <h1>Reservation</h1>
        <form id="myform">
            <label for="firstname"></label> <br />
                <input type="text" id="fname" name="fname" placeholder="Name / First name"/>
          
                <SELECT id="activites" name="activités" size="1">
                    <OPTION> Choisissez votre activité
                    <OPTION>Instant Love
                    <OPTION>Instant Gastronomie
                    <OPTION>Instant Picture
                </SELECT>
                <label for="email"></label>
                <input type="text" id="email" name="email" placeholder=" Adresse e-mail"/>
                <label for="message"></label>
                <textarea id="message" name="message" placeholder="Précisez nous la date et l'horaire souhaités"></textarea>
                <input type="submit" id="submit" value="submit" />
        </form>
  </div> 


  <section class ="infoContact">
   
    <h>Nos information</h>
    <br/><br/>
    <p><img src="images/phoneForm.png" id="phoneForm">+33 5 56 56 56 56 </p> <br/>
    <p><img src="images/enveloppeForm.png" id="enveloppeForm"> info@bashstide.com </p> <br/>
    <p><img src="images/localisationForm.png" id="localisationForm"> 30 rue Lionceau <br> 33300 Bordeaux </p>


    <div id="maps">
      <iframe src="https://maps.google.com/maps?width=100%25&amp;height=220&amp;hl=en&amp;q=le%20lion%20de%20veilhan+(Lion)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="220" height="220" style="border:0;" allowfullscreen="" loading="lazy" id="maps"></iframe>




    </div>
  

  </section>

</section>
<?php include 'footer.php'; ?>

<script src="script.js"></script>
   
</body>
</html>