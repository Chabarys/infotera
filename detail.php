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
    <link rel="stylesheet" href="./styles/detail.css">
    <title>Infotravel</title>
</head>
<body>

    <?php include './includes/header.php' ?>

    <main>
        <section class="detail container">
            <div class="home__fields--container">
                <div class="field__container field__destination">

                    <div class="field__icon">
                        <img  src="./assets/icons/home/location.svg" alt="Login">
                        <div class="space"></div>
                        <span class="field__label">Destino</span>
                    </div>
                    <input id="input-destination" type="text" class="home__field" placeholder="Cidade de destino">               
                    <ul class="field__list"></ul>
                </div>
                
                <div class="fields__separator separator-1"></div>
                
                <div class="field__container field__entry_period">
                    <div class="field__icon">
                        <img  src="./assets/icons/home/calendar.svg" alt="Login">
                        <div class="space"></div>
                        <span class="field__label">Entrada</span>
                    </div>
                    <input type="text" class="home__field" placeholder="dd/mm/aaaa">   
                </div>
                
                <div class="fields__separator separator-2"></div>
                
                <div class="field__container field__departure_period">
                    <div class="field__icon">
                        <img  src="./assets/icons/home/calendar.svg" alt="Login">
                        <div class="space"></div>
                        <span class="field__label">Saída</span>
                    </div>
                    <input type="text" class="home__field" placeholder="dd/mm/aaaa">
                </div>
                
                <div class="fields__separator separator-3"></div>

                <div class="field__container field__visitant">
                    <div class="field__icon">
                        <img  src="./assets/icons/home/avatar.svg" alt="Login">
                        <div class="space"></div>
                        <span class="field__label">Hóspedes</span>
                    </div>
                    <input id="quantity-visitants" type="text" class="home__field" placeholder="2 Adulto(s), 1 Criança(s)">               
                    <div class="options_visitant hide__options">
                        <div class="option__container">
                            <p>Adultos</p>
                            <div class="options__fields">
                                <div onclick="decrementCounter('adults')" class="circle">-</div>
                                <input value="0" class="quantity_visitants adults">
                                <div onclick="incrementCounter('adults')" class="circle">+</div>
                            </div>
                        </div>
                        <div class="options_visitant--separator"></div>
                        <div class="option__container">
                            <p>Crianças</p>
                            <div class="options__fields">
                                <div onclick="decrementCounter('kids')" class="circle">-</div>
                                <input value="0" class="quantity_visitants kids">
                                <div onclick="incrementCounter('kids')" class="circle">+</div>
                            </div>
                        </div>
                        <div class="options_visitant--separator"></div>
                        <div class="btn_apply">
                            <button  class="btn" id="apply_filters">Aplicar</button>
                        </div>
                    </div>

                    <a href="search.php" class="field__button">Pesquisar</a>
                </div>
            </div>

            <div class="detail__content">
                <div class="detail__info"></div>
                <div class="disponibility__container">                
                    <h3>Quartos disponíveis</h3>
                    <div class="disponibility">

                        
                        <!-- <div class="detail__bedrooms">
                            <div class="detail__hotel">
                                <h4>Superior Twin Room</h4>
                                <div class="detail__text--container">
                                    <img src="./assets/icons/details/uncheck.svg" alt="">
                                    <span class="detail__text--red">Cancelamento gratuito</span>
                                </div>
                            </div>
                            <div class="detail__reserve">
                                <div>
                                    <p class="detail__price detail__price--bold">R$70 <span class="detail__price--regular">/ noite</span></p>
                                    <span class="detail__payment">Pagamento no hotel</span>
                                </div>
                                <div>
                                    <button class="button_reserve" onclick="reserve()">Reservar Agora</button>
                                </div>
                            </div>
                        </div>
                        <div class="detail__bedrooms">
                            <div class="detail__hotel">
                                <h4>Superior Twin Room</h4>
                                <div class="detail__text--container">
                                    <img src="./assets/icons/details/check.svg" alt="">
                                    <span class="detail__text--primary">Cancelamento gratuito</span>
                                </div>
                            </div>
                            <div class="detail__reserve">
                                <div>
                                    <p class="detail__price detail__price--bold">R$70 <span class="detail__price--regular">/ noite</span></p>
                                    <span class="detail__payment">Pagamento no hotel</span>
                                </div>
                                <div>
                                    <button class="button_reserve" onclick="reserve()">Reservar Agora</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
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