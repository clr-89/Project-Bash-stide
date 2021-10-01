<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
  

<div class= "bigContainer">

  <div class="reserv"> 
    
    
      <h1> RESERVATION </h1>

      <form id="myform">
          <label for="firstname"></label> <br />
          <input
            type="text"
            id="fname"
            name="fname"
            placeholder="Name / First name"
          /><br />
          
          <SELECT id="activites" name="activités" size="1">
          <OPTION> Choisissez votre activité
          <OPTION>Instant Love
          <OPTION>Instant Gastronomie
          <OPTION>Instant Picture
          </SELECT>


          <label for="email"></label><br />
          <input
            type="text"
            id="email"
            name="email"
            placeholder=" Adresse e-mail"
          /><br />
          <label for="message"></label><br />
          <textarea
            id="message"
            name="message"
            placeholder="Précisez nous la date et l'horaire souhaités"
          ></textarea>
          <br /><br />
          <input type="submit" id="submit" value="Submit" />
        </form>
  </div> 


  <div class ="infoContact">
   
    <h1>NOS INFORMATIONS</h1>
    <br/><br/>
    <p><img src="images/phoneForm.png" id="phoneForm">+33 5 56 56 56 56 </p> <br/>
    <p><img src="images/enveloppeForm.png" id="enveloppeForm"> info@bashstide.com </p> <br/>
    <p><img src="images/localisationForm.png" id="localisationForm"> 30 rue Lionceau <br> 33300 Bordeaux </p>


    <div id="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.9351941700243!2d4.3362287270795505!3d43.81570362158766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42c49c0734ce1%3A0x57836bb27e37e96f!2sDispano%20N%C3%AEmes!5e0!3m2!1sfr!2sfr!4v1633021639093!5m2!1sfr!2sfr" width="220" height="220" style="border:0;" allowfullscreen="" loading="lazy" id="maps"></iframe>




    </div>
  

  </div>

</div>


<script src="script.js"></script>
   
</body>
</html>