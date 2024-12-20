<?php

function isAuth($role){
    if(isset($_SESSION['id_user']) && isset($_SESSION['role'])){
        return $_SESSION['role'] == $role;
    }else if($role == 'visiteur'){
        return true;
    }

    return false;
}