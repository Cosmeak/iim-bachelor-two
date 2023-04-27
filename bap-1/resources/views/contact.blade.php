@extends('layout')
@include('partials/header')

@section('content')

    <section class=" xl:min-h-screen overflow-hidden relative">
        <section class=" text-xl flex flex-col items-center xl:min-h-screen mt-24 xl:mt-0">
            <div
                class=" hidden xl:block rounded-full w-base h-base bg-primary absolute -left-52 -top-2 border-2 border-blue-400">
            </div>
            <div
                class="hidden xl:block rounded-md w-xl h-xl bg-primary absolute right-52 -bottom-1/4 border-2 border-blue-400">
            </div>
            <div
                class="hidden xl:block  rounded-full w-xl h-xl bg-primary absolute left-20 bottom-52 border-2 border-blue-400">
            </div>
            <div
                class="hidden xl:block rounded-full w-lg h-lg bg-primary absolute  border-2 -right-52 bottom-1/2  border-blue-400">
            </div>

            <h1 class="text-primary text-center text-5xl py-10">Contactez-nous</h1>
            <form class="flex flex-col bg-white xl:w-1/2 z-10 py-10 rounded-xl shadow-xl">
                <div class="flex justify-evenly mb-6 flex-wrap">
                    <div class="flex flex-col">
                        <label for="">Email</label>
                        <input type="text" class="btn-primary">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Prénom & Nom</label>
                        <input type="text" class="btn-primary">
                    </div>

                </div>
                <label for="msg" class="mx-8">Message</label>
                <textarea
                    class="resize-none py-2 px-4 bg-white rounded shadow-inset focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mx-8 h-xl"
                    name="msg"></textarea>
                <div class="flex justify-center pt-10">
                    <button type="submit" class="btn-form">Envoyer</button>
                </div>
            </form>
            <section class="z-10 text-xl flex items-center  py-10 my-20 flex-wrap justify-center text-center">
                <div class="px-12 xl:px-64 justify-center flex flex-col bg-white mx-36 h-tiny shadow-md rounded-xl my-6 ">
                    <h3 class="py-5 text-3xl text-primary">Horaires</h3>
                    <p>Du lundi au vendredi :</p>
                    <p>09:00 - 19:00</p>
                    <p>Samedi et dimanche :</p>
                    <p>Fermé</p>
                </div>
                <div class="px-12 xl:px-64 justify-center flex flex-col bg-white mx-36 h-tiny shadow-md rounded-xl my-6">
                    <h3 class="py-5 text-3xl text-primary">Nos Contacts</h3>
                    <p class="flex items-center"><span><i class="fas fa-phone-alt px-3 hover:text-primary transition"></i></span>+336 11 08 58 01</p>
                    <a href="mailto: project@easyapply.fr" class="flex items-center "><span><i class="fas fa-envelope-open-text px-3 hover:text-primary transition"></i></span>projet@easyapply.fr</a>
                </div>
            </section>
        </section>
    </section>


    @include('partials/footer')
@endsection
