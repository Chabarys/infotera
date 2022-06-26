const list = document.querySelector('.field__list')
const input = document.getElementById('input-destination')
const optionsVisitant = document.querySelector('.options_visitant')
const quantityVisitant = document.querySelector('#quantity-visitants')
const btnApplyFilters = document.getElementById('apply_filters')

input.addEventListener('keyup', () => {
    removeElements()
    if(input.value.length < 3) {
        const listItem = document.createElement('li')

        listItem.classList.add('list__items')
        listItem.classList.add('not__found')
        listItem.innerHTML = 'Digite no mínimo 3 caracteres'
        list.style.display = 'block'

        list.appendChild(listItem)
    } else {
        fetchSuggestions(input.value)
    }
})

quantityVisitant.addEventListener('click', () => optionsVisitant.classList.remove('hide__options'))

window.addEventListener('click', () => document.querySelectorAll('.list__items').length !== 0 ? removeElements() : null)

btnApplyFilters.addEventListener('click', () => applyFilters())

async function fetchSuggestions (city) {
    try {
        const response = await fetch(`http://localhost:3333/suggestions?name_like=${city}&_limit=5`)
        const suggestionsList = await response.json()
        const suggestions = suggestionsList.map(suggestion => suggestion) 

        displaySuggestions(suggestions)
    } catch (error) {
        console.error(error)
    }
}

const displaySuggestions = suggestions => {
    lisSuggestions = suggestions.reduce((accumulator, suggestion) => {
            accumulator += `
                <li class="list__items" style="cursor: pointer" onclick="displaySuggestionsOnInput('${suggestion.name}')">
                    <div class='list__text__container'>
                        <img src="./assets/icons/home/location.svg"> 
                        <p class='list__text'><b>${suggestion.name.substr(0, input.value.lenght)}</b></p>
                    </div>
                
                    <div class='list__text__container'>
                        <p class='list__description'><b>${suggestion.region.substr(0, input.value.lenght)}</b></p>
                    </div>
                </li>
            `
            return accumulator
    }, '')

    if(lisSuggestions.length === 0) {
        lisSuggestions = `
            <li class="list__items not__found")>
                Nenhum resultado encontrado
            </li>
        `
    }

    document.querySelector('.field__list').innerHTML = lisSuggestions
}

const displaySuggestionsOnInput = value => {
    input.value = value
    list.style.display = 'none'
}

const removeElements = () => {
    const items = document.querySelectorAll('.list__items')
    items.forEach(item => item.remove())
}

const applyFilters = () => {
    const quantityAdults = document.querySelector('.adults').value
    const quantityKids = document.querySelector('.kids').value

    document.getElementById('quantity-visitants').value = `${quantityAdults} Adulto(s), ${quantityKids} Criança(s)`
    document.querySelector('.options_visitant').classList.add('hide__options')
}

const incrementCounter = field => {
    let value = parseInt(document.querySelector(`.${field}`).value)
    document.querySelector(`.${field}`).value = ++value
}

const decrementCounter = field => {
    let value = parseInt(document.querySelector(`.${field}`).value)
    if(value === 0) return false
    
    document.querySelector(`.${field}`).value = --value
}