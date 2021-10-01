<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Bash-Stide</title>

</head>

<body>
<!--- nav Aurélien et jonathan ----------->
<?php include 'navbar.php'; ?>
<!------------------------------>
<!----- presentation et activités anthony ------------>

<main class="main__container">

    <section class="presentation">

        <article class="size">
            <img src="images/Putin_place-de-stalingrad.jpg" alt="lion-stalin">
        </article>
        <article class="text">
            <h2>Présentation</h2>
            <p>
                BashStide, est une start-up rugissante implantée à Bordeaux depuis 2021.
                La qualité de nos prestations unique en Europe vous feront vivre des instants inoubliables.
            </p>
        </article>

    </section>

    <section class="activitie1">

        <article class="imgs">
            <img src="images/poutin_eat_lieon.jpeg" alt="lion-eat"/>
        </article>

        <article class="text">
            <h3>Instant Gastronomie</h3>
            <p>
                Anthony notre vétérinaire a élaboré le meilleur pour notre amis à la crinière bleu:
                Croquette de homard, cuisse de poulet (pas celle de la police) .Repas en tête à crête
                pour seulement <strong>14,90€</strong> pour une durée de 30 minutes.
            </p>
            <div class="button">
                <button><a href="contact.html">Reservation</a></button>
            </div>
        </article>

    </section>

    <section class="activitie2">
        <article class="imgs">
            <img src="images/Poutine_calin.jpeg" alt="lion-calin"/>
        </article>

        <article class="text">
            <h3>Instant câlin</h3>
            <p>
                Jonathan vous apprendra à attendrir le lion  Bleu de la Place Stalingrad.
                Un calin ou un bisou, le Lion reverra de vous ! Ce moment romantique
                est à seulement <strong>25 €</strong> pour une heure de plaisir
            </p>
            <div class="button">
                <button><a href="contact.html">Reservation</a></button>
            </div>
        </article>
    </section>

    <section class="activitie3">

        <article class="imgs">
            <img src="images/poutine_picture.jpg" alt="lion-picture"/>
        </article>

        <article class="text">
            <h3>Instant picture</h3>
            <p>
                Notre photographe vous propose une séance au poil!
                Deux coffrets vous sont proposés : coffret lionceau 15 photos pour <strong>29 €</strong>
                coffret roi de la jungle : 30 photos pour <strong>39 €</strong>
            </p>
            <div class="button">
                <button><a href="contact.html">Reservation</a></button>
            </div>
        </article>

    </section>
    <!----------------------------------------->

    <!--------- team Claire ------------------>

    <?php require 'asideTeam.php' ?>

    <!-------------------------------------->
</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

