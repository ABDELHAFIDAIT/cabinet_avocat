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
                <a href="#">Home</a>
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


    <main>
        
    </main>


    <?php 
        include_once '../includes/footer.php';
    ?>

    <script src="../assets/js/script.js"></script>
    <script>
        function Menu(e){
            let list = document.querySelector('#links');

            e.name === 'menu' ? (e.name = "close", list.classList.add('left-0'), list.classList.add('opacity-100'), document.body.classList.add('overflow-hidden')) : (e.name = "menu" ,list.classList.remove('left-0'), list.classList.remove('opacity-100'), document.body.classList.remove('overflow-hidden'))
        }
    </script>
</body>
</html>