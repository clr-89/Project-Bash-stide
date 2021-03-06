<!doctype html>
<html lang='fr'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@300;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@300&display=swap" rel="stylesheet">
    <title>Bash-Stide</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
        <div id="container">
            <?php require 'activity.php'; ?>
                <main class="mainContainer">
                    <section class="presentation">
                        <article class="size">
                            <img src="images/Putin_place-de-stalingrad.jpg" alt="lion-stalin">
                        </article>
                        <article class="mainText">
                            <h1>PRÉSENTATION</h1>
                                <p>
                                    BashStide, est une start-up rugissante implantée à Bordeaux depuis 2021.
                                    La qualité de nos prestations uniques en Europe vous feront vivre des instants inoubliables.
                                </p>
                        </article>
                    </section>
                    <div>
                        <h2 id="activity" >ACTIVITÉS</h2>
                            <?php foreach ($activities as $activityType => $numberActivities) : ?>
                                <?php foreach ($numberActivities as $titleActivities => $detailActivity) : ?>
                                    <section class="<?= $activityType %2 === 0?"row":"reverse" ?>">
                                        <article class="mainImg">
                                            <img src= "<?= $detailActivity['img']?>" alt="lion-eat"/>
                                        </article>
                                        <article class="mainText">
                                            <h3><?= $titleActivities?></h3>
                                                <p>
                                                    <?= $detailActivity['detail']?><br>
                                                    Le prix est de <?= $detailActivity['prix']?> €
                                                </p>
                                            <div class="button">
                                                <button><a href="contact.php">Reservation</a></button>
                                            </div>
                                        </article>
                                    </section>
                                  <?php endforeach ; ?>
                              <?php endforeach ; ?>
                      </div>
                    <?php require 'asideTeam.php' ?>
                </main>
                <footer>
                    <?php include 'footer.php'; ?>
                </footer>
        </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
