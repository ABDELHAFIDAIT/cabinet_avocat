<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LexAdvisor - SIGN UP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="icon" type="image/png" href="../assets/img/logo.png">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
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

        <ul id="links" class="md:flex md:items-center z-[0] md:z-auto md:static absolute bg-[#02101f] w-full top-[80px] md:w-auto md:py-0 pb-4 md:pl-0 pl-7 md:opacity-100 opacity-0 left-[-400px] transition-all ease-in duration-500 md:h-auto h-screen">
            <li class="mx-4 my-6 md:my-0 hover:text-[#01FF70] md:text-lg duration-500 font-medium">
                <a href="./index.php">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                <a href="#">Services</a>
            </li>
            <li class="mx-4 my-6 md:my-0 md:text-lg hover:text-[#01FF70] duration-500 font-medium">
                <a href="#">Our Lawyers</a>
            </li>

            <a href="./login.php"><button class="bg-[#01FF70] text-black font-semibold py-2 px-5 mx-4 rounded-sm duration-500 hover:scale-105 hover:bg-transparent hover:border hover:text-white">
                LOGIN
            </button></a>
        </ul>
    </nav>

    <!-- FORMULAIRE DE SIGN UP -->
    <main>
        <form method="POST" action="" class="max-w-md mx-auto px-5 py-20">
            <!-- CHAMPS NOM & PRENOM -->
            <div class="mb-5 flex gap-5 w-[100%]">
                <div class="w-[50%]">
                    <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                    <input type="text" name="nom" id="nom" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: Jackson" required />
                </div>
                <div class="w-[50%]">
                    <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: Peter" required />
                </div>
            </div>
            <!-- CHAMPS IDENTITE (CLIENT || AVOCAT) -->
            <div class="mb-5">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identité</label>
                <select id="role" name="role" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="Client">Client</option>
                    <option value="Avocat">Avocat</option>
                </select>
            </div>
            <!-- CHAMPS INFOS AVOCAT -->
            <div id="infos-avocat-signup" class="hidden">
                <div class="mb-5 flex gap-5 w-[100%]">
                    <div class="w-[70%]">
                        <label for="specialite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spécialité</label>
                        <select id="specialite" name="specialite" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option>Droit Public</option>
                            <option>Droit des Assurances</option>
                            <option>Droit Commercial</option>
                            <option>Droit Immobilier</option>
                            <option>Droit des Sociétés</option>
                        </select>
                    </div>
                    <div class="w-[30%]">
                        <label for="experience" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expérience</label>
                        <input type="number" name="experience" id="experience" min="1" max="30" value="1" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biographie</label>
                    <textarea id="biography" name="biography" rows="4" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrer Votre Biographie Ici..."></textarea>
                </div>
            </div>
            <!-- CHAMPS EMAIL -->
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="signup_email" id="signup_email" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: peter.jackson@gmail.com" required />
            </div>
            <!-- CHAMPS PASSWORD -->
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm  focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none font-medium rounded-sm text-sm w-full sm:w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700">SIGN UP</button>
        </form>
    </main>

    <!-- PIED DE PAGE -->
    <?php 
        include_once '../includes/footer.php';
    ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>