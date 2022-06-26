<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/variables.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/fields.css">
    <link rel="stylesheet" href="./styles/detail.css">
    
    <title>Infotravel</title>
</head>
<body>

    <?php include './includes/header.php' ?>

    <main>
        <section class="detail container">
            <?php include './includes/fields.php' ?>

            <div class="detail__content">
                <div class="detail__info"></div>
                <div class="disponibility__container">                
                    <h3>Quartos disponíveis</h3>
                    <div class="disponibility"></div>
                </div>
            </div>
        </section>
    </main>

    <div class="overlay">
        <div class="overlay__circle">
            <img src="./assets/icons/thanks/thanks.svg" alt="">
        </div>
        <h1>Obrigado!</h1>
        <p>Reserva realizada com sucesso.</p>
    </div>

    <?php include './includes/footer.php' ?>
    
    <span class="loading"></span>
    
    <script src="./javascript/script.js"></script>
    <script src="./javascript/detail.js"></script>
</body>
</html>