<?php 
require_once 'App/rute.php';

head();
if(isset($_GET['a'])){
    $page = $_GET['a'];

    if($page == 'beranda'){
        beranda();
    }
    
    else{
        beranda();
    }
}
else{
    beranda();
}