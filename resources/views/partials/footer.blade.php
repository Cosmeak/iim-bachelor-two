<footer class="xl:w-full bg-black-mat mt-28 text-white pt-20">
    <div class="flex xl:flex-row flex-col xl:justify-around items-center xl:mx-64 mb-24" >
      <a href="/"><img src="../img/logo.png" alt="easy-apply" class="object-contain max-w-sm"></a>
        <div class=" flex flex-col text-center xl:text-left">
            <h3 class="font-bold text-2xl py-10">Nous contacter</h3>
            <div class="flex items-center py-2">
                <i class="fas fa-envelope-open-text fa-2x text-white"></i>
                <a href="mailto: project@easyapply.fr" class="text-xl mx-4 link link-underline">project@easyapply.fr</a>
            </div>
            <div class="flex items-center pt-2 pb-10">
                <i class="fas fa-phone-alt fa-2x text-white"></i>
                <p class="text-xl mx-4">06.11.06.56.01</p>
            </div>
        </div>
        <div class=" flex flex-col justify-center text-center xl:text-left">
            <h3 class="font-bold text-2xl pb-12 ">Votre compte Easy Apply</h3>
            <a href="{{ route('login.index') }}" class="text-xl pb-6 font-display max-w-sm leading-tight">
                <span class="link link-underline">Se connecter</span></a>
            <a href="{{route('user.create')}}" class="text-xl pb-6 font-display max-w-sm leading-tight">
                <span class="link link-underline">S'inscrire</span></a>
        </div>
    </div>
    <div class="flex justify-center">
        <a class="mx-8 transition duration-150 ease-out hover:ease-in hover:text-primary" href="">
            <i class="fab fa-instagram fa-3x"></i>
        </a>
        <a class="mx-8 transition duration-150 ease-out hover:ease-in hover:text-primary" href="">
        <i class="fab fa-linkedin fa-3x"></i>
        </a>
        <a class="mx-8 transition duration-150 ease-out hover:ease-in hover:text-primary" href="">
            <i class="fab fa-facebook-square fa-3x"></i>
        </a>

    </div>
    <div class=" border-solid border-t-2 border-zinc-700 h-xs mx-96 mt-20">

    </div>
  </div>
</footer>
