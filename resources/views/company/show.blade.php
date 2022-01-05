@extends('layout')
@include('partials/header')
@section('content')

<section class="bg-primary w-full h-auto p-8 xl:p-24 flex flex-col xl:flex-row gap-8 xl:justify-center xl:place-items-center">
  <div class="rounded-full bg-white shadow-md p-4 xl:p-8 w-fit m-auto xl:m-0">
    <img class="h-32 xl:w-sm xl:h-auto object-contain m-auto" src="./img/logo.png" alt="logo">
  </div>
  <div class="w-full text-center xl:text-left xl:w-1/2 text-white ">
    <h1 class="font-bold text-xl xl:text-3xl pb-8">Nom de l'entreprise</h1>
    <div class="text-lg leading-relaxed">
      <p>Description de l'entreprise, Lorem ipsum dolor sit amet consectetur adipisicing elit. Et sint non quos veniam, nam aliquam ab quam odit tempore qui, quidem eaque, molestias id repudiandae! Ut, error eos. Consequatur, consequuntur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolorum impedit, quo fugit ratione enim doloribus voluptates unde veniam autem quod dolor vel atque explicabo nostrum ab, nobis, incidunt fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id amet, nemo accusamus nam impedit enim corrupti neque illo autem hic nesciunt sed tempora, dignissimos, dolorum incidunt perferendis voluptates odit?</p>
    </div>
  </div>
</section>

<section class="py-16 flex flex-col gap-16">

  <article class="w-3/4 m-auto bg-white shadow-md p-8 rounded-[20px]">
    <h3 class="font-bold text-lg xl:text-xl pb-4">Nom de la proposition d'emploi</h3>
    <div class="leading-relaxed">
      <p>Description de la proposition. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae autem, est laborum possimus et necessitatibus a, aperiam, provident corrupti eos dolor deleniti ab quasi perferendis molestias sunt perspiciatis excepturi atque.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eligendi sequi eius fugiat numquam error enim pariatur, labore, nesciunt perferendis, possimus praesentium minima totam expedita adipisci ratione nulla ad cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eligendi officia incidunt? Commodi sint quae minima adipisci quas. Veniam nulla accusantium culpa tempore beatae officia earum rem hic aspernatur sed?</p>
    </div>
  </article>
  <article class="bg-primary text-white text-center m-24 xl:mx-20 p-10 flex flex-col justify-center place-items-center gap-8">
    <h3 class="font-title xl:text-4xl text-2xl">Pour créer un nouveau travail, cliquez ici</h3>
    <a href="/employer/new-job" class="rounded-full border-2 border-white bg-white text-xl xl:text-2xl text-primary py-2 px-4 hover:text-white hover:bg-primary hover:border-2 hover:border-white transition duration-150 ease-out hover:ease-in">Créer un job</a>
  </article>



</section>

@endsection