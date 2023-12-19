<?php 
require_once 'App/rute.php';

head();
if(isset($_GET['a'])){
    $page = $_GET['a'];

    if($page == 'beranda'){
        beranda();
    }
    elseif($page == 'login'){
        login();
    }
    elseif($page == 'joki'){
        joki();
    }
    elseif($page == 'tugas'){
        tugas();
    }
    else{
        beranda();
    }
}
else{
    beranda();
}