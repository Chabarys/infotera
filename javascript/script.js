const suggestionsNames = []
let suggestionsSorted = []

async function fetchSuggestions () {
    try {
        const response = await fetch('http://localhost:3333/suggestions')
        const suggestionsList = await response.json()
        const suggestions = suggestionsList.map(suggestion => suggestion) 
        suggestionsSorted = suggestions.sort()
    } catch (error) {
        console.error(error)
    }
}

fetchSuggestions ()

const list = document.querySelector('.field__list')
const input = document.getElementById('input-destination')

list.style.display = 'none'

input.addEventListener('keyup', () => {
    removeElements();
    if(input.value.length < 3) {
        const listItem = document.createElement('li')

        listItem.classList.add('list-items')
        listItem.classList.add('not-found')
        listItem.innerHTML = 'Digite no mínimo 3 caracteres'
        list.style.display = 'block'

        list.appendChild(listItem)
    } else {
        for(let suggestion of suggestionsSorted) {
            if(suggestion.name.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != '') {
                const listItem = document.createElement('li')

                listItem.classList.add('list-items')
                listItem.style.cursor = 'pointer'
                listItem.setAttribute('onclick', `displaysuggestions('${suggestion.name}')`)

                const element = `
                    <div class='list__text__container'>
                        <img src="./assets/icons/home/location.svg"> 
                        <p class='list__text'><b>${suggestion.name.substr(0, input.value.lenght)}</b></p>
                    </div>
                    
                    <div class='list__text__container'>
                        <p class='list__description'><b>${suggestion.region.substr(0, input.value.lenght)}</b></p>
                    </div>
                `
                listItem.innerHTML = element
                list.style.display = 'block'

                list.appendChild(listItem)
            }
        }

        if(document.querySelectorAll('.list-items').length === 0) {
            const listItemNotFound = document.createElement('li')

            listItemNotFound.classList.add('list-items')
            listItemNotFound.classList.add('not-found')
            listItemNotFound.innerHTML = 'Nenhum resultado encontrado'
            list.style.display = 'block'

            list.appendChild(listItemNotFound)
        }
    }
});

const optionsVisitant = document.querySelector('.options_visitant')

document.querySelector('#quantity-visitants').addEventListener('click', () => {
    document.querySelector('.options_visitant').classList.remove('hide__options')
})

// Ao clicar em qualquer lugar da tela, devera esconder o dropdown 
window.addEventListener('click', () => {
    if(document.querySelectorAll('.list-items').length !== 0) {
        removeElements()
    }
})

function displaysuggestions(value) {
    input.value = value
    list.style.display = 'none'
}

function removeElements() {
    const items = document.querySelectorAll('.list-items');
    items.forEach(item => item.remove())
}

const btnApplyFilters = document.getElementById('apply_filters')

btnApplyFilters.addEventListener('click', () => applyFilters())

function applyFilters () {
    const quantityAdults = document.querySelector('.adults').value
    const quantityKids = document.querySelector('.kids').value

    document.getElementById('quantity-visitants').value = `${quantityAdults} Adulto(s), ${quantityKids} Criança(s)`
    document.querySelector('.options_visitant').classList.add('hide__options')
}

function incrementCounter (field) {
    let value = parseInt(document.querySelector(`.${field}`).value)
    document.querySelector(`.${field}`).value = ++value
}

function decrementCounter (field) {
    let value = parseInt(document.querySelector(`.${field}`).value)
    if(value === 0) {
        return false;
    }
    document.querySelector(`.${field}`).value = --value
}