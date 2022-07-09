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

    <title>Infotravel</title>
</head>
    <body>
        <?php include './includes/header.php' ?>
        
        <main>
            <section class="home container">
                <div class="home__title--container">
                    <h1 class="home__title"><span class="home__title--secondary">Os melhores</span> <span class="home__title--primary">hotéis</span> e <span class="home__title--primary">destinos</span> para sua viagem</h1>
                </div>
                
                <?php include './includes/fields.php' ?>
            </section>
        </main>

        <?php include './includes/footer.php' ?>

        <script src="./javascript/script.js"></script>
        
    </body>
</html>