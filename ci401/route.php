<?php
function getRoute(array $routes):string{
    if (isset($_REQUEST['url'])){
        $url=$_REQUEST['url'];
    }else{
        $url='Home';
    }
    if (in_array($url,(array) $routes)){
        return $url;
    }else{
        return 'error';
    }
    /*foreach($routes as $ruta){
        if($ruta==$url){
            return $url;
        }
    }*/
    /*switch($url){
        case 'login.php';
        default:
            return 'home';
    }*/
}