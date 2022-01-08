<header class="w-full h-[80px] bg-white hidden xl:flex items-center justify-between px-10 sticky top-0 z-20 shadow-md">
    <a href="/" class="w-fit"><img src="../../img/logo.png" alt="logo" class="h-full w-fit"></a>
    @auth
        <ul class="flex justify-evenly xl:w-1/3 items-center">
            <li>
                <a href="{{ route('home') }}" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Accueil</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Contact</a>
            </li>
            <li>
                <a href="{{ route('job.index') }}" class="btn-white">Recherche</a>
            </li>
            <li>
                <form method="POST" action="{{ route('user.logout') }}" class="btn-blue flex item-center m-0">
                    @csrf
                    <button type="submit">Se déconnecter</button>
                </form>
            </li>
        </ul>
    @else
        <ul class="flex justify-evenly xl:w-1/3 items-center">
            <li>
                <a href="{{ route('home') }}"
                   class="text-xl hover:text-primary transition duration-300 ease-out hover:ease-in">Accueil</a>
            </li>
            <li>
                <a href="{{ route('job.index') }}" class="btn-white">Recherche</a>
            </li>
            <li>
                <a href="{{ route('login.index') }}" class="btn-blue">Se connecter</a>
            </li>
    @endauth

</header>

<header class="w-full flex xl:hidden h-[80] bg-white sticky top-0 z-20 shadow-md">
    <div class="flex justify-evenly items-center">
        <a href="{{ route('home') }}" class="w-fit ml-4"><img src="../../img/logo.png" alt="logo"
                                                              class="h-full w-fit"></a>
        <i class="fas fa-bars fa-2x fixed right-8 w-xs cursor-pointer transition duration-500 text-primary"
           id="burger"></i>
    </div>
    <div class=" xl:hidden w-base h-full rounded-xl p-20 text-3xl flex flex-col items-center fixed right-0 top-0 bg-white translate-x-xl transition duration-500 shadow-2xl"
         id='menu-burger'>
        <img src="../../img/logo.png" alt="">
        <i class="fas fa-times fa-2x cursor-pointer my-5 text-primary" id="x"></i>
        <ul class="">
            <a href="{{ route('home') }}">
                <li class="py-4 hover:bg-slate-200 w-base text-center transition">Accueil</li>
            </a>
            <a href="{{ route('job.index') }}">
                <li class="py-4 hover:bg-slate-200 w-base text-center transition">Recherche</li>
            </a>
            @auth
                <a href="{{ route('login.index') }}">
                    <li class="py-4 hover:bg-slate-200 w-base text-center transition">Connexion</li>
                </a>
            @else
                <a href="/logout">
                    <li class="btn-blue w-base">Déconnexion</li>
                </a>
            @endauth
        </ul>
    </div>
</header>
