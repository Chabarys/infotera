const hotels = []
const hotelsSorted = []

async function fetchHotels () {
    try {
        const response = await fetch('http://localhost:3333/hotels')
        const hotelsList = await response.json()
        const hotels = hotelsList.map(hotel => hotel) 
        displayHotels(hotels)
    } catch (error) {
        console.error(error)
    }
}

fetchHotels()

function displayHotels(hotels) {
    const listCards = hotels.reduce((accumulator, hotel) => {
        let stars = ''
        for(let i = 0; i < hotel.hotel.stars; i++) {
            stars += '<img class="card__stars" src="./assets/icons/search/star.svg" alt="">'
        }

        accumulator += `
            <div class="card">
                <div class="card__image">
                    <img src="${hotel.hotel.image}" alt="">
                    <p class="card__price card__price--bold">R$${hotel.lowestPrice.amount}<span class="card__price--regular">/noite</span></p>
                </div>
                <div class="card__description">
                    <h4>${hotel.hotel.name}</h4>
                    <div class="description__detail">
                        ${stars}

                        <a href="detail.php?id=${hotel.id}" class="field__button--transparent">Ver mais</a>
                    </div>
                </div>
            </div>
        `
        return accumulator
    }, '')
    document.querySelector('.loading').style.display = 'none'
    document.querySelector('.destination__description').textContent = `${hotels.length} hotéis encontrados`
    document.querySelector('.cards__container').innerHTML = listCards
}