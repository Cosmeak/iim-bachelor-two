const colors = {
	normal: '#A8A77A',
	fire: '#EE8130',
	water: '#6390F0',
	electric: '#F7D02C',
	grass: '#7AC74C',
	ice: '#96D9D6',
	fighting: '#C22E28',
	poison: '#A33EA1',
	ground: '#E2BF65',
	flying: '#A98FF3',
	psychic: '#F95587',
	bug: '#A6B91A',
	rock: '#B6A136',
	ghost: '#735797',
	dragon: '#6F35FC',
	dark: '#705746',
	steel: '#B7B7CE',
	fairy: '#D685AD',
};

const fetch_pokemon = async () => {
	const pokemon_numbers = 898; // Nombre de pokémon que l'on souhait affiché ( ici le nombre total de pokémon existant )
	for (let id = 1; id <= pokemon_numbers; id++){ // id démarre à 1, tant que id est <= au nombre de pokémon existant on ajoute un a id 
		await get_pokemon(id); // On récupère le pokémon en appelant la const suivant à chaque i et on attend la réponse avant de passer au prochain
	}
};

const get_pokemon = async id => { // On cherche dans l'api les pokémons puis on récupère leur json
	const API_URL = "https://pokeapi.co/api/v2/pokemon/" + id ;
	const response = await fetch(API_URL); // On demande les infos à l'API
	const pokemon = await response.json(); // On stock le json du pokémon du pokémon dans une variable

	show_pokemon(pokemon); // On appelle la fonction qui affiche le pokémon dans une card
};

function show_pokemon(pokemon) {

	const name = (pokemon.name).charAt(0).toUpperCase() + (pokemon.name).slice(1); // On récupère le nom du pokémon en anglais et on met la première lettre en du nom en majuscule
	const id = pokemon.id; // On récupère l'id du pokémon
	const sprite = pokemon.sprites.front_default; // On récupère l'image principal du pokémon

	let types = [];
	(pokemon.types).forEach(element => { // on récupère tout le ce qui concerne chaque type du pokemon puis on récupère uniquement le nom et on l'ajoute à la liste qui contient tout les types
		types.push(element.type.name); // On ajoute le nom du type à la liste
	});

	const wrap = document.querySelector('.container-wrap');
	const pokediv = document.createElement('div'); // On crée une division qui va contenir le pokémon
	pokediv.classList.add('pokemon-card'); // On ajoute une class à la div
	const color_type = colors[types[0]]; // On met dans une variable l'hexa decimal de la couleur du type principal du pokemon
	pokediv.style.backgroundColor = color_type; // On ajoute la couleur en background de la div

	const card = ` 
		<div class="img-container">
			<img src="${sprite}" alt="${name}" />
		</div>
		<div class="info">
				<h3 class="name">${name} #${id}</h3>
				<p class="type">Type: ${types}</p>
		</div>
	`; // On ajoute tout les html requis pour l'affichage du pokémon avec ses variables

	pokediv.innerHTML = card; // On ajoute le html que doit contenir la card à notre div qui doit contenir le pokemon
	wrap.appendChild(pokediv); // On ajoute notre div avec tout les éléments à notre divsion de base dans le html qui va contenir tout les cards de pokémon
};

fetch_pokemon(); // On lance le programme