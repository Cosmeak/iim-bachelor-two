@extends('layout')
@include('partials/header')

@section('content')

    <section class="w-full h-auto overflow-hidden">
        <div class="wave w-full h-[70rem] flex flex-col bg-primary px-8 xl:px-24 text-center xl:text-left text-white">
            <div class="z-10 xl:mt-16 flex flex-col-reverse xl:flex-row justify-around place-items-center">
                <div class="xl:w-1/2 w-5/6">
                    <h1 class="font-title text-3xl xl:text-5xl my-10 xl:my-3">Et si on postulait autrement ?</h1><br>
                    <h3 class="text-xl xl:text-3xl font-bold my-2 xl:my-3">Favorisons la rencontre entre l'offre et la demande d'emploi</h3>
                    <p class="text-white text-lg xl:text-2xl">Optimisez votre recrutement à moindre coût grâce à notre service tout en un : publications illimitées d’offres, matching et scoring des candidats, gestion automatisé des candidatures.</p>
                </div>
                <div class="">
                    <img src="../img/contrat.png" alt="" class="w-[330px]">
                </div>
            </div>
        </div>
    </section>

    <article class="w-full mb-36">
        <h2 class="font-title text-center text-6xl xl:mb-32  hover:text-light-blue transition duration-300 ease-out hover:ease-in"><span class="text-light-blue">E</span>asy <span class="text-light-blue">A</span>pply</h2>

        <div class="w-full flex flex-col justify-center place-items-center my-12 xl:justify-evenly xl:flex-row">
            <div class="flex justify-center my-14">
                <video class="w-[450px] xl:w-[800px] h-[250px] xl:h-[500px] p-4 xl:p-0" controls>
                    <source src="../img/EasyApply.mp4" type=video/mp4>
                </video>
            </div>
            <div class="w-5/6 xl:w-1/4 highlight shadow-md bg-white rounded px-10 py-24 relative mx-8 my-14">
                <div class="flex justify-center place-items-center rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm ">
                    <img width="170" height="170" class="m-auto" src="./img/logo.png" alt="logo">
                </div>

                <h3 class="font-title uppercase text-center text-3xl font-bold mt-12 ">Easy Apply</h3>
                <p class="text-center text-lg xl:text-xl">Application de recrutement pas système de matching</p>

                <h4 class="font-title text-primary text-2xl xl:text-3xl mt-14">Qui sommes-nous ?</h4>
                <p class="mt-5 font-title text-lg xl:text-2xl font-bold">Nous sommes un site d’offres d’emploi qui favorise la
                    rencontre entre l’offre et la demande d’emploi.</p>
                <h4 class="font-title text-primary text-2xl xl:text-3xl mt-14">Quel-est notre objectif ?</h4>
                <p class="mt-5 font-title text-lg xl:text-2xl font-bold">Nous avons pour but d'augmenter le taux de candidature à moindre coût en favorisant la rencontre entre l’offre et
                    la demande d’emploi via un système de matching.</p>
            </div>
        </div>
    </article>

    <section class="w-full xl:flex xl:flex-row xl:justify-evenly xl:mt-24 flex flex-col justify-center place-items-center">

        <div class="perk-card">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="fas fa-infinity fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-3xl font-bold pt-16">Offres illimitées</h3>
                <p class="pt-20 text-lg xl:text-2xl text-justify">Les publications d’offres d’emplois sont illimitées. Trouvez la personne la plus qualifié pour une mission, ou la mission qui vous correspondra le mieux, dès maintenant !</p>
            </div>

        </div>

        <div class="perk-card">
            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="fas fa-bullseye fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-3xl font-bold pt-16">Visibilité de l’offre</h3>
                <p class="pt-20 text-lg xl:text-2xl text-justify">Votre offre est proposée aux profils recherchés et à ceux intéressés par vos missions. EasyApply se charge de vous mettre en relation le plus facilement possible.</p>
            </div>

        </div>


        <div class="perk-card">
            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="far fa-clock fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-3xl font-bold pt-16">Gain de temps</h3>
                <p class="pt-20 text-lg xl:text-2xl text-justify">Les candidatures sont classées automatiquement selon vos critères. Économisez un temps précieux pour vous consacrer à votre productivité.
                </p>
            </div>

        </div>


        <div class="perk-card">

            <div class="flex rounded-full bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-24 w-sm h-sm justify-center place-items-center text-center">
                <i class="far fa-money-bill-alt fa-4x text-primary"></i>
            </div>

            <div class="">
                <h3 class="font-title uppercase text-center text-xl xl:text-3xl font-bold pt-16">Economies</h3>
                <p class="pt-20 text-lg xl:text-2xl text-justify">Un tarif annuel et unique pour l’utilisation complète et illimitée de nos services. Un prix abordable pour un résultat garantie !
                </p>
            </div>

        </div>

    </section>

    <article class="w-5/6 moving-gradient h-[60vh] xl:h-[30vh] rounded text-white m-auto text-center xl:m-36 p-10 flex flex-col justify-center place-items-center gap-8">
        <h3 class="font-title xl:text-4xl text-2xl">Vous aimeriez voir votre entreprise sur notre site ?</h3>
        <p class="font-bold xl:text-2xl text-xl">Créez votre page d'entreprise en appuyant simplement ici !</p><br>
        <a href="{{route('company.create')}}" class="rounded-full border-2 border-white bg-white text-xl xl:text-2xl text-primary py-2 px-4 hover:text-white hover:bg-primary hover:border-2 hover:border-white transition duration-150 ease-out hover:ease-in">Page d'entreprise</a>
    </article>
    @include('partials/footer')
@endsection
