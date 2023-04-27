// API base URI
const URI_Swapi = 'https://swapi.dev/api/' 
const grid = document.querySelector('.grid')
const info = document.querySelector('.info')
const main = document.querySelector('.main')
const search = document.querySelector('.search')
const yoda = document.querySelector('.yoda-translator')
const jjbinks = document.querySelector('.jjbinks-translator')
const sith = document.querySelector('.sith-translator')

// Display none all section
const hidden = () => {
  document.querySelectorAll('section').forEach(section => {
    section.style.display = 'none'
  })
}

// Initialisation 
const init = async () => {
  hidden()
  document.querySelector('.wiki').style.display = 'block'
  let response = await fetch(URI_Swapi)
  response = await response.json()
  Object.entries(response).forEach(element => {
    document.querySelector('#wiki-select').innerHTML += `<option value='${element[1]}'>${element[0]}</option>`
    document.querySelector('.wiki-nav').innerHTML += `<li><button value="wiki" data-wiki='${element[1]}' class="btn-nav">${element[0]}</button></li>`
  })

  // Navidation menu
  document.querySelectorAll('.btn-nav').forEach(btn => {
    btn.addEventListener('click', () => {
      info.style.display = 'none'
      main.style.display = 'block'
      hidden() // Display none all section
      document.querySelector('.active').classList.remove('active')
      btn.classList.add('active')
      document.querySelector(`.${btn.value}`).style.display = 'block'
      if (btn.value === 'wiki') {
        fetchSwapi(btn.dataset.wiki)
      }
    })
  })

  // Yoda translator init
  yoda.querySelector('form').addEventListener('submit', event => {
    event.preventDefault()
    const text = document.querySelector('#yoda').value
    yodaTranslator(text)
  })

  // Gungan translator init
  jjbinks.querySelector('form').addEventListener('submit', event => {
    event.preventDefault()
    const text = document.querySelector('#jjbinks').value
    jjbinksTranslator(text)
  })

  initSearch()
}

// Go to previous page or next if it exist
const pages = (previous, next) => {
  const pages = document.querySelector('.pages')
  pages.innerHTML = ''
  if (previous !== null){
    pages.innerHTML += `<button class="btn-pages previous" data-pages='${previous}'>Previous</button>`
  }
  if(next !== null){
    pages.innerHTML += `<button class="btn-pages next" data-pages='${next}'>Next</button>`
  }
  document.querySelectorAll('.btn-pages').forEach(btn => {
    btn.addEventListener('click', () => {
      fetchSwapi(btn.dataset.pages)
    })
  })
}

// Search bar function
const initSearch = () => {
  search.addEventListener('submit', event => {
    event.preventDefault()
    const select = search.querySelector('#wiki-select').value
    const input = search.querySelector('#wiki-search').value
    fetchSwapi(select + '?search=' +input)
  })
}

// Fecth the swapi url given
const fetchSwapi = async (url) => {
  let response = await fetch(url)
  response = await response.json()
  grid.innerHTML = ''
  response.results.forEach(element => {
    showCard(element)
  })
  pages(response.previous, response.next)
}

// Create a card with the element given
const showCard = (element) => {
  grid.innerHTML += `
    <div class='card'>
      <img src="./assets/img/${element.name != undefined ? element.name : element.title}.jpg" alt="">
      <div>
        <h2>${element.name != undefined ? element.name : element.title}</h2>
        <button class='seeMore' value='${element.url}'>See More</button>
      </div>    
    </div>
  `
  document.querySelectorAll('.seeMore').forEach(btn => {
    btn.addEventListener('click', () => {
      seeMore(btn.value)
    })
  })
}

// This more about an element
const seeMore = async (url) => {
  let response = await fetch(url)
  response = await response.json()
  main.style.display = 'none'
  info.style.display = 'block'
  info.innerHTML = `
    <button class='back'>Return back</button>
    <div class='top-info'>
      <img src="./assets/img/${response.name != undefined ? response.name : response.title}.jpg" alt="">
      <div>
        <h2>${response.name != undefined ? response.name : response.title}</h2>
      </div>
    </div>
  `
  if(url.includes('people') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
      <ul>
        <li>Height: ${response.height} centimeters</li>
        <li>Weight: ${response.mass} kg</li>
        <li>Hair: ${response.hair_color}</li>
        <li>Eye: ${response.eye_color}</li>
        <li>Skin: ${response.skin_color}</li>
        <li>Gender: ${response.gender}</li>
        <li>Birth: ${response.birth_year}</li>

      </ul>
    `
  }
  else if (url.includes('planets') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
      <ul>
        <li>Rotation period: ${response.rotation_period}</li>
        <li>Orbital period: ${response.orbital_period}</li>
        <li>Diameter: ${response.diameter}</li>
        <li>Gravity: ${response.gravity}</li>
        <li>Climate: ${response.climate}</li>
        <li>Terrain: ${response.terrain}</li>
        <li>Surface water: ${response.surface_water}</li>
        <li>Population: ${response.population}</li>
      </ul>
    `
  }
  else if (url.includes('films') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
    <ul>
      <li>Episode: ${response.episode_id}</li>
      <li>Director: ${response.director}</li>    
      <li>Producer: ${response.producer}</li>
      <li>Release Date: ${response.release_date}</li>
      <li>Synopsis: <pre>${response.opening_crawl}</pre></li>
    </ul>
  `
  }

  else if (url.includes('species') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
    <ul>
      <li>Classification: ${response.classification}</li>
      <li>Designation: ${response.designation}</li>    
      <li>Average Height: ${response.average_height} centimeters</li>
      <li>Average Lifespawn: ${response.average_lifespan} years</li>
      <li>Hair: ${response.hair_colors}</li>
      <li>Eye: ${response.eye_colors}</li>
      <li>Skin: ${response.skin_colors}</li>
      <li>Languages: ${response.language}</li>
    </ul>
  `
  }

  else if (url.includes('vehicles') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
    <ul>
      <li>Model: ${response.model}</li>
      <li>Manufacturer: ${response.manufacturer}</li>    
      <li>Cost: ${response.cost_in_credits} credits</li>
      <li>Type: ${response.vehicle_class}</li>
      <li>Length: ${response.length} meters </li>
      <li>Crew: ${response.crew} persons</li>
      <li>Max speed: ${response.max_atmosphering_speed} km/h</li>
      <li>Max passengers: ${response.passengers} persons</li>
      <li>Max capacity: ${response.cargo_capacity} kg</li>
    </ul>
  `
  }

  else if (url.includes('starships') == true){
    info.querySelector('.top-info').querySelector('div').innerHTML += `
    <ul>
      <li>Model: ${response.model}</li>
      <li>Manufacturer: ${response.manufacturer}</li>    
      <li>Cost: ${response.cost_in_credits} credits</li>
      <li>Class: ${response.starship_class}</li>
      <li>Length: ${response.length} meters </li>
      <li>Crew: ${response.crew} persons</li>
      <li>Max speed: ${response.max_atmosphering_speed} km/h</li>
      <li>Max passengers: ${response.passengers} persons</li>
      <li>Max capacity: ${response.cargo_capacity} kg</li>
    </ul>
  `
  }
  
  showBack()
}

// Return back button
const showBack = () => {
  document.querySelector('.back').addEventListener('click', () => {
    main.style.display = 'block'
    info.style.display = 'none'
  })
}

// Translate a message in language of Yoda
const yodaTranslator = async (text) => {
  let response = await fetch('https://api.funtranslations.com/translate/yoda?text=' + text)
  response = await response.json()
  yoda.innerHTML += `<p>Yoda : ${response.contents.translated}</p>`
}

// Translate a message in langague of gungan
const jjbinksTranslator = async (text) => {
  let response = await fetch('https://api.funtranslations.com/translate/gungan?text=' + text)
  response = await response.json()
  jjbinks.innerHTML += `<p>Jar Jar: ${response.contents.translated}</p>`
}

// Launch website
init(); fetchSwapi(URI_Swapi + 'people');