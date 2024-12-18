function Menu(e){
    let list = document.querySelector('#links');

    e.name === 'menu' ? (e.name = "close", list.classList.add('left-0'), list.classList.add('opacity-100'), document.body.classList.add('overflow-hidden')) : (e.name = "menu" ,list.classList.remove('left-0'), list.classList.remove('opacity-100'), document.body.classList.remove('overflow-hidden'))
}

const selectRole = document.getElementById('role');
const infosAvocat = document.getElementById('infos-avocat-signup');

selectRole.addEventListener('change', function(){
    let choixRole = selectRole.value;
    console.log(choixRole);

    if(choixRole === "Avocat"){
        infosAvocat.classList.remove('hidden');
    }else{
        infosAvocat.classList.add('hidden');
    }
});