<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<header class="text-gray-600 body-font ">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img class="h-28" src="Assets/img/logo.svg" alt="aaa">
        </a>
        <nav class=" md:ml-auto  md:mr-auto flex flex-wrap items-center text-base justify-center uppercase hidden 2xl:block ">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-900  uppercase rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">Cours <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:text-orange-200 hover:bg-gray-100">TERRE</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:text-red-200 hover:bg-gray-100">FEU</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:text-cyan-200 hover:bg-gray-100">EAU</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:text-gray-200 hover:bg-gray-100">AIR</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="mr-5 hover:text-gray-900">Packs</a>
            <a href="#" class="mr-5 hover:text-gray-900">Contact</a>
            <a href="#" class="mr-5 hover:text-gray-900">Blog</a>
            <button type="button" class=" ml-52 text-white uppercase bg-black hover:bg-white hover:text-black hover:border-black  hover:border font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Inscription</button>
            <button type="button" class=" text-black border uppercase hover:bg-black hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Connexion</button>
        </nav>
        <button  class="text-black font-medium rounded-lg text-3xl px-5 py-2.5 mr-2 mb-2 ml-auto 2xl:hidden" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>




<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-full h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-black uppercase dark:text-gray-400">Menu</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg">
                    <svg class="w-6 h-6 text-black transition duration-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    <span class="ml-3">Accueil</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center p-2 text-black transition duration-75 rounded-lg group" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg class="w-6 h-6 text-black transition duration-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM126.5 199.3c-1 .4-1.9 .8-2.9 1.2l-8 3.5c-16.4 7.3-29 21.2-34.7 38.2l-2.6 7.8c-5.6 16.8-23.7 25.8-40.5 20.2s-25.8-23.7-20.2-40.5l2.6-7.8c11.4-34.1 36.6-61.9 69.4-76.5l8-3.5c20.8-9.2 43.3-14 66.1-14c44.6 0 84.8 26.8 101.9 67.9L281 232.7l21.4 10.7c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3L247 287.3c-10.3-5.2-18.4-13.8-22.8-24.5l-9.6-23-19.3 65.5 49.5 54c5.4 5.9 9.2 13 11.2 20.8l23 92.1c4.3 17.1-6.1 34.5-23.3 38.8s-34.5-6.1-38.8-23.3l-22-88.1-70.7-77.1c-14.8-16.1-20.3-38.6-14.7-59.7l16.9-63.5zM68.7 398l25-62.4c2.1 3 4.5 5.8 7 8.6l40.7 44.4-14.5 36.2c-2.4 6-6 11.5-10.6 16.1L54.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L68.7 398z"/></svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Cours</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group ">TERRE</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-red-100">FEU</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-cyan-100">EAU</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">AIR</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Contact</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Blog</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center mt-10 p-2 text-black rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inscription</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Connexion</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<section class="relative h-screen">
    <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
    <div class="absolute inset-0">
        <iframe src="https://www.youtube.com/embed/ITBMT-sUeH0?autoplay=1&loop=1&controls=0&mute=1&playlist=ITBMT-sUeH0"
                modestbranding=1 frameborder="0" allowfullscreen class="w-full h-full"></iframe>
    </div>
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="text-white text-7xl font-bold text-center">Une pratique au rythme des cycles de la nature en
            résonance avec l’astrologie traditionnelle occidentale</h2>
    </div>
</section>
<main class="bg-white min-h-screen">
    <section class="hidden 2xl:block">
        <h1 class=" mt-20 text-center text-7xl font-bold">MES COURS</h1>
        <p class="text-center text-xl mt-10">Whether you’re a complete beginner or you want to step up your routine, get
            the
            full studio experience at home with thousands of classes for body, mind, and spirit.</p>

        <section
                class="flex flex-col items-center 2xl:place-items-start w-full space-y-14 2xl:space-y-0 2xl:flex-row 2xl:w-auto justify-center pt-20 2xl:space-x-20 ">

            <!--CARD TERRE-->
            <a href="Views/Terre.php">
                <div class="2xl:max-w-sm bg-white rounded-lg shadow max-w-2xl w-full  h-full transform hover:scale-110 duration-300 ease-in-out ">
                    <img class="hover:opacity-50 transition duration-300 ease-in-out rounded-t-lg mx-auto" src="Assets/img/img1.jpg" alt=""/>
                    <div class="p-5 h-[300px]">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">TERRE</h5>
                        <span class="text-2xl italic font-light tracking-tight text-gray-700">Pilates</span>
                        <p class="mt-10 mb-3 text-xl font-normal text-gray-700">L’ancrage en soi-même. Enracinement
                            intérieur. Fondations solides.</p>

                    </div>
                </div>
            </a>
            <!--        CARD FEU-->
            <a href="#">
                <div class="2xl:max-w-sm bg-white rounded-lg shadow max-w-2xl w-full h-full transform hover:scale-110 duration-300 ease-in-out ">
                    <img class="hover:opacity-50 transition duration-300 ease-in-out rounded-t-lg mx-auto" src="Assets/img/img2.jpg" alt=""/>
                    <div class="p-5 text-right 2xl:text-left h-[300px]">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900t">FEU</h5>
                        <span class="text-2xl italic font-thin tracking-tight text-gray-700">Yoga/Etirement</span>

                        <p class="mt-10 mb-3 text-xl font-normal text-gray-700">Cardio, Fitness, Total barre… l’élément
                            roi
                            des
                            transformations, la force de création brute.</p>
                    </div>

                </div>
            </a>
            <!--        CARD EAU-->
            <a href="#">
                <div class="2xl:max-w-sm bg-white rounded-lg shadow max-w-2xl w-full h-full transform hover:scale-110 duration-300 ease-in-out  ">

                    <img class="hover:opacity-50 transition duration-300 ease-in-out rounded-t-lg mx-auto" src="Assets/img/img3.jpg" alt=""/>
                    <div class="p-5 h-[300px]">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">EAU</h5>
                        <span class="text-2xl italic font-thin tracking-tight text-gray-700">Cardio/Fitness</span>
                        <p class="mt-10 mb-3 text-xl font-normal text-gray-700">Yoga flow, stretching, yin yoga, barre
                            au
                            sol…
                            L’expansion en mouvement depuis son intériorité.</p>

                    </div>
                </div>
            </a>

            <!--        CARD AIR-->
            <a href="#">
                <div class="2xl:max-w-sm bg-white rounded-lg shadow max-w-2xl w-full h-full transform hover:scale-110 duration-300 ease-in-out  ">
                    <img class="hover:opacity-50 transition duration-300 ease-in-out rounded-t-lg mx-auto"
                         src="Assets/img/img4.jpg" alt=""/>
                    <div class="p-5 text-right 2xl:text-left h-[300px]">
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">AIR </h5>
                        <p class="text-2xl italic font-thin tracking-tight text-gray-700">Méditation</p>
                        <p class="mt-10 mb-3 text-xl font-normal text-gray-700">Relaxation & Méditation guidée :
                            l’esprit qui s’envole et se déploie, affranchi des contingences de la matière.</p>
                    </div>
                </div>
            </a>
        </section>
    </section>
    <section>
        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto 2xl:hidden">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800 text-center md:text-left">

                <h1 class=" mt-20 text-center text-7xl font-bold">MES COURS</h1>
                <p class="text-center text-xl mb-10 mt-10">Whether you’re a complete beginner or you want to step up
                    your routine, get the
                    full studio experience at home with thousands of classes for body, mind, and spirit.</p>

                <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
                    <div class="mb-6 md:mb-0">
                        <div
                                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="Assets/img/img1.jpg"
                                 class="w-full" alt="Louvre"/>
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-6 md:mb-0">
                        <h3 class="text-3xl font-bold mb-3">TERRE</h3>
                        <div class="mb-3  font-thin italic text-2xl flex items-center justify-center md:justify-start">
                            <p>Pilates</p>
                        </div>
                        <p class="text-gray-500">
                            L’ancrage en soi-même. Enracinement intérieur. Fondations solides.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
                    <div class="mb-6 md:mb-0 md:order-2">
                        <div
                                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="Assets/img/img2.jpg"
                                 class="w-full" alt="Louvre"/>
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-6 md:mb-0 md:order-1">
                        <h3 class="text-3xl font-bold mb-3">FEU</h3>
                        <div class="mb-3 font-thin italic text-2xl flex items-center justify-center md:justify-start">
                            <p>Yoga/Etirement</p>
                        </div>
                        <p class="text-gray-500">
                            Cardio, Fitness, Total barre… l’élément roi des transformations, la force de création brute.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
                    <div class="mb-6 md:mb-0">
                        <div
                                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="Assets/img/img3.jpg"
                                 class="w-full" alt="Louvre"/>
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-6 md:mb-0">
                        <h3 class="text-3xl font-bold mb-3">EAU</h3>
                        <div class="mb-3 font-thin italic text-2xl flex items-center justify-center md:justify-start">
                            <p>Cardio/Fitness</p>
                        </div>
                        <p class="text-gray-500">
                            Yoga flow, stretching, yin yoga, barre au sol… L’expansion en mouvement depuis son
                            intériorité.
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
                    <div class="mb-6 md:mb-0 md:order-2">
                        <div
                                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img src="Assets/img/img4.jpg"
                                 class="w-full" alt="Louvre"/>
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-6 md:mb-0 md:order-1">
                        <h3 class="text-3xl font-bold mb-3">AIR</h3>
                        <div class="mb-3 font-thin italic text-2xl flex items-center justify-center md:justify-start">
                            <p>Méditation</p>
                        </div>
                        <p class="text-gray-500">
                            Relaxation & Méditation guidée : l’esprit qui s’envole et se déploie, affranchi des
                            contingences de la matière
                        </p>
                    </div>
                </div>

            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->
    </section>

</main>
<?php include 'Views/footer.php' ?>
