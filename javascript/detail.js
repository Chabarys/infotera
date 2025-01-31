const idHotel = requestByUrl('id')

async function fetchHotelById (idHotel) {
    try {
        const response = await fetch(`http://localhost:3333/hotels/${idHotel}`)
        const hotel = await response.json()
        getHotelDetail(hotel)
    } catch (error) {
        console.error(error)
    }
}

fetchHotelById(idHotel)

const getHotelDetail = ({ hotel, rooms }) => {
    let stars = ''
    for(let i = 0; i < hotel.stars; i++) {
        stars += '<img class="detail__stars" src="./assets/icons/search/star.svg" alt="">'
    }

    const hotelDetail = `
        <div class="detail__image">
            <img class="detail__image" src="${hotel.image}" alt="Hotel">
        </div>
        <div class="detail__description">
            <div class="detail__title">
                <h3>${hotel.name}</h3>
                <div class="detail__address">
                    <img src="./assets/icons/home/location.svg" alt="">
                    <span>${hotel.address}</span>
                </div>
            </div>
            <div class="container__stars">
                ${stars}
            </div>
            <p>
                ${hotel.description}
            </p>
        </div>
    `

    const hotelDisponibility = rooms.reduce((accumulator, element) => {
        const refundable = element.cancellationPolicies.refundable

        accumulator += `
            <div class="detail__bedrooms">
                <div class="detail__hotel">
                    <h4>${element.roomType.name}</h4>
                    <div class="detail__text--container">
                        <img src="${refundable ? './assets/icons/details/check.svg' : './assets/icons/details/uncheck.svg'}" alt="">
                        <span class="${refundable ? 'detail__text--primary' : 'detail__text--red'}">${refundable ? 'Cancelamento gratuito' : 'Multa de cancelamento'}</span>
                    </div>
                </div>
                <div class="detail__reserve">
                    <div>
                        <p class="detail__price detail__price--bold">R$${element.price.amount} <span class="detail__price--regular">/ noite</span></p>
                        <span class="detail__payment">Pagamento no hotel</span>
                    </div>
                    <div>
                        <button class="button_reserve" onclick="reserve()">Reservar Agora</button>
                    </div>
                </div>
            </div>
        `

        return accumulator
    }, '')

    document.querySelector('.detail__info').innerHTML = hotelDetail
    document.querySelector('.disponibility').innerHTML = hotelDisponibility
    document.querySelector('.loading').style.display = 'none'
}

const reserve = () => {
    document.querySelector('.overlay').style.opacity = 1
    document.querySelector('.overlay').classList.add('z-index')
}

// Função para obter os parametro passados pela URL
function requestByUrl (name) {
	const arr = window.location.search.substring(1).split('&')
	for(const i in arr) {
		if(!isNaN(i) && name === arr[i].split('=')[0]) {
			return arr[i].split('=')[1]
		}
	}
	return null
}