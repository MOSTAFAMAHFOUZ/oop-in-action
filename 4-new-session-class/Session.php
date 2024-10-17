<?php 



class Session{

    /**
     * 
     * set value in session
     * get value from session
     * flash session 
     * remove value from session
     * clear session 
     * regenerate session id
     * 
     */


    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function has($key){
        return isset($_SESSION[$key]);
    }

    public static function get($key){
        return Session::has($key) ? $_SESSION[$key] : false;
    }

    public static function flash($key){
        $value = Session::get($key);
        Session::remove($key);
        return $value;
    }

    public static function remove($key){
        if(Session::has($key)){
            unset($_SESSION[$key]);
        }
    }

    public static function regenerate(){
        session_regenerate_id(true);
    }

    public static function clear(){
        $_SESSION = [];
        session_destroy();
    }


    public static function error($key){
        $error =  Session::get("errors")[$key] ?? false;
        unset($_SESSION["errors"][$key]);
        if($error){
            $error_message = "<div class='alert alert-danger  p-1 my-1'>
                    $error
            </div>";
        }else{
            $error_message = '';
        }
        
        return $error_message;
    }

}
