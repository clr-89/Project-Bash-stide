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
      <h1 class="h1Reserv">Réservation</h1>
        <form class="myform">

            <label for="firstname"></label> <br>
            <input type="text" id="fname" name="fname" placeholder="Nom / Prénom"/>
            <label for="start">Date de Réservation</label>
            <input type="date" id="start" name= "trip-start" value="2021-09-13" min="2021-09-13" max="2022-09-13">
                <SELECT id="activites" name="activités" size="1">
                    <option> Choisissez votre activité </option>
                    <option>Instant Câlin</option>
                    <option>Instant Gourmand</option>
                    <option>Instant Picture</option>       
                </SELECT>

            <label for="email"></label>
            <input type="text" id="email" name="email" placeholder="Adresse e-mail"/>
            <label for="message"></label>
            <textarea id="message" name="message" placeholder="Veuillez renseigner vos demandes supplémentaires" ></textarea>
            <input type="submit" id="submit" value="Envoyer"/>

        </form>

        <br>
  </div> 


  <section class ="infoContact">
   
    <h2 class="h1Reserv">Nos informations</h1>
    <br><br>
    <img src="images/phoneForm.png" id="phoneForm">    <p>+33 5 56 56 56 56 </p> <br>
    <img src="images/enveloppeForm.png" id="enveloppeForm">  <p> info@bashstide.com </p> <br>
    <img src="images/localisationForm.png" id="localisationForm"> <p> 30 rue Lionceau <br> 33300 Bordeaux </p>


    <div id="maps">
      <iframe src="https://maps.google.com/maps?width=100%25&amp;height=220&amp;hl=en&amp;q=le%20lion%20de%20veilhan+(Lion)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="220" height="220" style="border:0;" allowfullscreen="" loading="lazy" id="maps"></iframe>




    </div>
  

  </section>

</section>
<?php include 'footer.php'; ?>

<script src="script.js"></script>
   
</body>
</html>