@extends('layout')
@include('partials/header')

@section('content')

  <div class="text-center text-primary text-4xl my-14">
    <h1>Proposition d'emploi 1</h1>
  </div>

  <div class="bg-primary h-full xl:h-xl p-10">
    <div class="flex xl:flex-row flex-col justify-center place-items-center xl:justify-evenly my-14">
      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>496</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Candidatures reçues</p>
      </div>

      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>234</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Candidatures pertinentes</p>
      </div>

      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>1</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Emplois créés</p>
      </div>
    </div>
    <p class="text-center text-white text-2xl xl:text-4xl mt-12 xl:mt-24">Date de publication : 4 Décembre 2021</p>
  </div>

  <article class="h-75 m-36">

    <div class="">
      <h3 class="text-primary text-3xl xl:text-4xl my-14">Point de description 1</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="">
      <h3 class="text-primary text-3xl xl:text-4xl my-14">Point de description 2</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="">
      <h3 class="text-primary text-3xl xl:text-4xl my-14">Point de description 3</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>

    <div class="flex flex-col justify-center place-items-center my-14 ">
      <a href="" class="rounded-full border-2 border-primary bg-primary text-xl xl:text-2xl text-white py-2 px-5 hover:text-primary hover:bg-white hover:border-2 hover:border-primary transition duration-150 ease-out hover:ease-in">Proposer un entretien</a>
    </div>

  </article>
@include('partials/footer')
@endsection
