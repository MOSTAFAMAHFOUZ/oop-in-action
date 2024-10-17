<?php 



class Route{


    private static array $routes = [];


    public static function add($path){
        self::$routes[] = $path;
    }


    public static function get($name, $path){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            if(self::getUri() == $name){
                require_once $path.".php";
                die;
            }
        }

    }



    public static function getAll(){
        return self::$routes;
    }


    public static function check(){
        if(in_array(self::getUri(), self::$routes)){
            return true;
        }
        return false;
    }

    public static function getUri(){
        return $_SERVER['REQUEST_URI'];
    }

}