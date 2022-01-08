@extends('layout')
@include('partials/header')

@section('content')




    <div class="text-center text-primary text-4xl my-14">
        <h1>Proposition d'emploi 1</h1>
    </div>
  <div class="moving-gradient p-10">
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
      </div>
      <p class="text-center text-white text-2xl xl:text-4xl mt-12">Date de publication : 4 Décembre 2021</p>

      <div class="flex flex-row justify-evenly justify-center place-items-center my-16">
          <a href="" class="btn-yellow">Suspendre le poste</a>
          <a href="" class="btn-white">Modifier la fiche de poste</a>
          <a href="" class="btn-red">Supprimer le poste</a>
      </div>
  </div>

      <article class="flex flex-col justify-center place-items-center w-10/12 my-14 m-auto">

        <div class="highlight shadow-md bg-white rounded px-16 py-10 mb-14">
          <h3 class="text-primary text-3xl xl:text-4xl my-5">Point de description 1</h3>
          <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
        </div>
      </article>

          <section class="flex flex-col justify-center place-items-center w-10/12 my-14 m-auto">
              <div class="flex flex-row w-full justify-evenly my-5">
                  <div class="flex flex-row text-primary justify-between highlight shadow-md bg-white rounded px-10 py-4">
                      <div class="flex flex-col justify-center place-items-center mr-10">
                          <p class="font-bold underline text-2xl mb-2">Candidat</p>
                          <p class="text-xl">Nom du candidat</p>
                      </div>
                      <div class="flex flex-col justify-center place-items-center ml-10">
                          <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                          <p class="text-xl">84%</p>
                      </div>
                  </div>
                  <div class="flex flex-row text-primary justify-between highlight shadow-md bg-white rounded px-10 py-4">
                      <div class="flex flex-col justify-center place-items-center mr-10">
                          <p class="font-bold underline text-2xl mb-2">Candidat</p>
                          <p class="text-xl">Nom du candidat</p>
                      </div>
                      <div class="flex flex-col justify-center place-items-center ml-10">
                          <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                          <p class="text-xl">94%</p>
                      </div>
                  </div>
              </div>
              <div class="flex flex-row w-full justify-evenly my-5">
                  <div class="flex flex-row text-primary justify-between highlight shadow-md bg-white rounded px-10 py-4">
                      <div class="flex flex-col justify-center place-items-center mr-10">
                          <p class="font-bold underline text-2xl mb-2">Candidat</p>
                          <p class="text-xl">Mehdi AL SID CHEIKH</p>
                      </div>
                      <div class="flex flex-col justify-center place-items-center ml-10">
                          <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                          <p class="text-xl">78%</p>
                      </div>
                  </div>
                  <div class="flex flex-row text-primary justify-between highlight shadow-md bg-white rounded px-10 py-4">
                      <div class="flex flex-col justify-center place-items-center mr-10">
                          <p class="font-bold underline text-2xl mb-2">Candidat</p>
                          <p class="text-xl">Abdel-Aziz AL SID CHEIKH</p>
                      </div>
                      <div class="flex flex-col justify-center place-items-center ml-10">
                          <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                          <p class="text-xl">76%</p>
                      </div>
                  </div>
              </div>
          </section>





        <div class="flex flex-col justify-center place-items-center my-14 ">
          <a href="" class="rounded-full border-2 border-primary bg-primary text-xl xl:text-2xl text-white py-2 px-5 hover:text-primary hover:bg-white hover:border-2 hover:border-primary transition duration-150 ease-out hover:ease-in">Proposer un entretien</a>
        </div>


@include('partials/footer')
@endsection
