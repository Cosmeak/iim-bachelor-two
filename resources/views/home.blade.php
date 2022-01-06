@extends('layout')
@include('partials/header')

@section('content')


    <div class="w-full h-screen flex flex-col justify-center bg-primary p-8 pt-24 xl:p-24 xl:pb-48 text-center xl:text-left text-white">
        <h1 class="font-title text-5xl my-5">Et si on postulait autrement ?</h1><br>
        <h3 class="text-3xl font-bold my-10 xl:my-3">Favorisons la rencontre entre l'offre et la demande d'emploi</h3>
        <p class="text-white text-xl">Optimisez votre recrutement à moindre coût grâce à notre service tout en un : publications illimitées d’offres, matching et scoring des</p>
        <p class="text-white text-xl">candidats, gestion automatisé des candidatures.</p>
    </div>

    <article class="my-36 ">
        <h2 class="font-title text-center text-6xl xl:mb-32  hover:text-light-blue transition duration-300 ease-out hover:ease-in">Qui sommes-nous ?</h2>

        <div class=" flex flex-col justify-center place-items-center my-12 xl:justify-evenly xl:flex-row">
            <div class="flex justify-center my-14">
                <iframe class="w-screen xl:w-[800px] h-[250px] xl:h-[500px] p-4 xl:p-0" src="https://www.youtube.com/watch?v=o01l3sotf1Q&list=PLXaH20eIS38afy5jGOV9yRws_UOant1__&index=4"></iframe>
            </div>
            <div class="highlight shadow-md bg-white rounded-lg px-10 py-24 relative m-14">
                <div class="flex justify-center place-items-center rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm ">
                    <img width="170" height="170" class="m-auto" src="./img/logo.png" alt="logo">
                </div>

                <h3 class="font-title uppercase text-center text-3xl font-bold mt-12 ">Easy Apply</h3>
                <p class="text-center">Application de recrutement pas système de matching</p>

                <h4 class="font-title text-primary text-2xl mt-14">Qui sommes-nous ?</h4>
                <p class="mt-5 font-title font-bold">Nous sommes un site d’offres d’emploi qui favorise la
                    rencontre entre l’offre et la demande d’emploi.</p>
                <h4 class="font-title text-primary text-2xl mt-14">Quel-est notre objectif ?</h4>
                <p class="mt-5 font-title font-bold">Augmenter le taux de candidature à moindre coût.</p>
            </div>
        </div>
    </article>

    <section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-24 flex flex-col justify-center place-items-center">
        <div class="h-lg shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-16 xl:my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="fas fa-infinity fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-2xl font-bold pt-16">Offres illimitées</h3>
                <p class="pt-20 text-lg xl:text-xl text-justify">Les publications d’offres d’emplois sont illimitées. Trouvez la personne la plus qualifié pour une mission, ou la mission qui vous correspondra le mieux, dès maintenant !</p>
            </div>

        </div>

        <div class="h-lg shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-16 xl:my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="fas fa-bullseye fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-2xl font-bold pt-16">Visibilité de l’offre</h3>
                <p class="pt-20 text-lg xl:text-xl text-justify">Votre offre est proposée aux profils recherchés et à ceux intéressés par vos missions. EasyApply se charge de vous mettre en relation le plus facilement possible.</p>
            </div>

        </div>


        <div class="h-lg shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-16 xl:my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="far fa-clock fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-2xl font-bold pt-16">Gain de temps</h3>
                <p class="pt-20 text-lg xl:text-xl text-justify">Les candidatures sont classées automatiquement selon vos critères. Économisez un temps précieux pour vous consacrer à votre productivité.
                </p>
            </div>

        </div>


        <div class="h-lg shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-16 xl:my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="far fa-money-bill-alt fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-2xl font-bold pt-16">Economies</h3>
                <p class="pt-20 text-lg xl:text-xl text-justify">Un tarif annuel et unique pour l’utilisation complète et illimitée de nos services. Un prix abordable pour un résultat garantie !
                </p>
            </div>

        </div>

    </section>

    <article class="bg-primary text-white text-center m-24 xl:m-36 p-10 flex flex-col justify-center place-items-center gap-8">
        <h3 class="font-title xl:text-4xl text-2xl">Vous aimeriez voir votre entreprise sur notre site ?</h3>
        <p class="font-bold xl:text-2xl text-xl">Créez votre page d'entreprise en appuyant simplement ici !</p><br>
        <a href="/employer" class="rounded-full border-2 border-white bg-white text-xl xl:text-2xl text-primary py-2 px-4 hover:text-white hover:bg-primary hover:border-2 hover:border-white transition duration-150 ease-out hover:ease-in">Page d'entreprise</a>
    </article>
@include('partials/footer')
@endsection
