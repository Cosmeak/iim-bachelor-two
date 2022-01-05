<header class="w-full bg-white hidden xl:flex items-center justify-between px-10">
  <div class="w-1/2">
    <a href="/"><img src="../img/logo.png" alt="logo" class="h-medium"></a>
  </div>
  @auth
    <ul class="flex justify-evenly xl:w-1/2 items-center">
      <li>
        <a href="/" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Accueil</a>
      </li>
      <li>
        <a href="/candidate" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Candidat</a>
      </li>
      <li>
        <a href="/employer" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Entreprise</a>
      </li>
      <li class="flex rounded-full border-2 border-primary hover:text-white hover:bg-primary transition duration-300 ease-out hover:ease-in px-4 py-2">
        <img src="../img/search.png" alt="">
        <a href="/search" class=" mx-2 text-xl ">Recherche</a>
      </li>
      <form method="POST" action="/logout" class="w-sm px-6 py-4 bg-primary text-white rounded-2xl shadow-md hover:bg-blue-500 transition duration-150 ease-out hover:ease-in focus:outline-none focus:ring-2 cursor-pointer text-center">@csrf<button type="submit" >Se déconnecter</button></form>
      
      
    </ul>
    @else
    <ul class="flex justify-evenly xl:w-1/3 items-center">
      <li>
        <a href="/" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Accueil</a>
      </li>
      <li>
        <a href="/search" class="rounded-full border-2 border-primary text-xl hover:text-white hover:bg-primary transition duration-300 ease-out hover:ease-in px-4 py-2">Recherche</a>
      </li>
      <li>
        <a href="/login" class="w-sm px-6 py-4 bg-primary text-white rounded-2xl shadow-md hover:bg-blue-500 transition duration-150 ease-out hover:ease-in focus:outline-none focus:ring-2 cursor-pointer text-center">Se connecter</a>
      </li>
  @endauth

</header>

<header class="flex xl:hidden w-full py-20">


</header>