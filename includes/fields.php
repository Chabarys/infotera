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
            <div class="btn__apply">
                <button class="btn" id="apply_filters">Aplicar</button>
            </div>
        </div>

        <a href="search.php" class="field__button">Pesquisar</a>
    </div>
</div>