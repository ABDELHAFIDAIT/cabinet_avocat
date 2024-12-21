<?php

    session_start();

    if(isset($_SESSION['id_user']) && isset($_SESSION['role'])){
        if($_SESSION['role'] == 'Avocat'){
            header('location: ./home.php');
            exit;
        }
    }else{
        header('location: ./index.php');
        exit;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <title>LexAdvisor - Client Dashborad</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!-- HEADER SECTON -->
    <header class="px-5 md:px-10 lg:px-16 py-5 bg-[#02101f] shadow-lg">
        <nav class="flex justify-between items-center">
            <div class="flex gap-5 items-center">
                <div class="flex items-center gap-2 cursor-pointer order-2">
                    <img class="h-8" src="../assets/img/logo.png" alt="Logo du Site LexAdvisor">
                    <h1 class="text-xl font-semibold">Lex<span class="text-[#01FF70]">Advisor</span></h1>
                </div>
                <div class="text-4xl cursor-pointer mx-2 md:hidden flex items-center order-1">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </div>
            </div>
            <ul id="links" class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-[#02101f] w-full top-[80px] md:w-auto md:py-0 pb-4 md:pl-0 pl-7 md:opacity-100 opacity-0 left-[-400px] transition-all ease-in duration-500 md:h-auto h-screen">
                <li class="mx-4 my-6 md:my-0 hover:text-[#01FF70] md:text-lg duration-500 font-medium">
                    <a href="./home.php">Home</a>
                </li>
                <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                    <a href="#">Services</a>
                </li>
                <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                    <a href="./lawyers.php">Our Lawyers</a>
                </li>
            </ul>
            <div class="flex items-center gap-2">
                <a href="./logout.php"><button class="text-sm pl-5 pr-2 underline duration-500 hover:text-[#01FF70]">
                    DECONNEXION
                </button></a>
                <a href="#"><img class="rounded-full border-2 border-[#01FF70] w-14" src="../assets/img/client.jpg" alt="Image du Client"></a>
            </div>
        </nav>
    </header>

    <main>
        <section class="py-10 px-5 flex flex-col gap-10">
            <h1 class="font-semibold text-3xl text-center text-gray-300">Statistiques</h1>
            <div class="flex flex-wrap items-center justify-center gap-5">
                <div class="p-5 bg-[#02101f] flex flex-col gap-5 items-center justify-center rounded-sm">
                    <h1 class="font-semibold text-xl text-center text-gray-300">Nombre Total des Réservations</h1>
                    <h2 class="font-semibold text-xl text-center text-[#01FF70]">
                        <?php
                            require '../config/db.php';

                            
                        ?>
                    </h2>
                </div>
                <div class="p-5 bg-[#02101f] flex flex-col gap-5 items-center justify-center rounded-sm">
                    <h1 class="font-semibold text-xl text-center text-gray-300">Nombre Total des Réservations</h1>
                    <h2 class="font-semibold text-xl text-center text-[#01FF70]">16</h2>
                </div>
                <div class="p-5 bg-[#02101f] flex flex-col gap-5 items-center justify-center rounded-sm">
                    <h1 class="font-semibold text-xl text-center text-gray-300">Nombre Total des Réservations</h1>
                    <h2 class="font-semibold text-xl text-center text-[#01FF70]">16</h2>
                </div>
                <div class="p-5 bg-[#02101f] flex flex-col gap-5 items-center justify-center rounded-sm">
                    <h1 class="font-semibold text-xl text-center text-gray-300">Nombre Total des Réservations</h1>
                    <h2 class="font-semibold text-xl text-center text-[#01FF70]">16</h2>
                </div>
            </div>
        </section>
    </main>



    <script src="../assets/js/script.js"></script>
</body>
</html>