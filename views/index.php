<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <title>LexAdvisor - Home Page</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="bg-[#02101f]">
        <!-- BARRE DE NAVIGATION -->
        <nav class="py-5 px-5 md:px-10 bg-[#02101f] shadow md:flex md-items-center md:justify-between">
            <div class="flex items-center justify-between relative z-[10]">
                <div class="flex items-center gap-2">
                    <img class="h-10" src="../assets/img/logo.png" alt="Logo du Site LexAdvisor">
                    <h1 class="text-2xl font-semibold">Lex<span class="text-[#01FF70]">Advisor</span></h1>
                </div>
                <div class="text-4xl cursor-pointer mx-2 md:hidden flex items-center">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </div>
            </div>

            <ul id="links" class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-[#02101f] w-full top-[80px] md:w-auto md:py-0 pb-4 md:pl-0 pl-7 md:opacity-100 opacity-0 left-[-400px] transition-all ease-in duration-500 md:h-auto h-screen">
                <li class="text-[#01FF70] mx-4 my-6 md:my-0 hover:text-[#01FF70] md:text-lg duration-500 font-medium">
                    <a href="#">Home</a>
                </li>
                <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                    <a href="#">Services</a>
                </li>
                <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                    <a href="#">Our Lawyers</a>
                </li>

                <a href="./views/login.php"><button class="bg-[#01FF70] text-black font-semibold py-2 px-5 mx-4 rounded-sm duration-500 hover:scale-105 hover:bg-transparent hover:border hover:text-white">
                    LOGIN
                </button></a>
            </ul>
        </nav>
        <!-- HERO SECTION -->
        <section class="container flex flex-col px-14 py-10 mx-auto space-y-6 lg:h-[30rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                        Votre Partenaire de Confiance pour Tous vos Litiges
                    </h1>

                    <div class="mt-8 space-y-5">
                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Expertise spécialisée</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Service personnalisé</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Innovation</span>
                        </p>
                    </div>
                </div>

                <div class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm border-gray-700 focus-within:border-blue-400 outline-none">
                    <form class="flex flex-col lg:flex-row">
                        <input type="email" placeholder="Enter your email address" class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" />

                        <button type="button" class="h-10 px-4 py-2 m-1 text-white transition-colors z-0 duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                            S'Abonner
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="../assets/img/hero.jpg" alt="glasses photo">
            </div>
        </section>
    </header>


    <!-- PIED DE LA PAGE -->
    <?php
        include_once '../includes/footer.php';
    ?>




    <script src="../assets/js/script.js"></script>
</body>
</html>