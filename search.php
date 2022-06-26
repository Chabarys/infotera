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
    <link rel="stylesheet" href="./styles/search.css">

    <title>Infotravel</title>
</head>
<body>

    <?php include './includes/header.php' ?>

    <main>
        <section class="search container">
            <?php include './includes/fields.php' ?>

            <div class="searchlist__container">
                <div class="destination">
                    <h3 class="search__title"> <span class="home__title--secondary">São Paulo,</span> Brasil</h3>
                    <span class="destination__description">Nenhum hotél encontrado</span>
                </div>
                <div class="cards__container"></div>
            </div>
        </section>
    </main>
    
    <?php include './includes/footer.php' ?>

    <span class="loading"></span>

    <script src="./javascript/script.js"></script>
    <script src="./javascript/search.js"></script>
</body>
</html>