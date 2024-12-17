<nav class="py-5 px-5 md:px-10 bg-[#02101f] shadow md:flex md-items-center md:justify-between ">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <img class="h-10" src="../assets/img/logo.png" alt="Logo du Site LexAdvisor">
            <h1 class="text-2xl font-semibold">Lex<span class="text-[#01FF70]">Advisor</span></h1>
        </div>
        <div class="text-4xl cursor-pointer mx-2 md:hidden flex items-center">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </div>
    </div>

    <ul id="links" class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#02101f] w-full left-0 md:w-auto md:py-0 pb-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0 hover:text-[#01FF70] text-xl duration-500 uppercase">
            <a href="#">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0 text-xl hover:text-[#01FF70] duration-500 uppercase">
            <a href="#">Services</a>
        </li>
        <li class="mx-4 my-6 md:my-0 text-xl hover:text-[#01FF70] duration-500 uppercase">
            <a href="#">Our Lawyers</a>
        </li>

        <button class="bg-[#01FF70] text-black font-semibold py-2 px-5 mx-4 rounded-sm duration-500 hover:scale-105 hover:bg-transparent hover:border hover:text-white">
            <a href="#">LOGIN</a>
        </button>
    </ul>
</nav>