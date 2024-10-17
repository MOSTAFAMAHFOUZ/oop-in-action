<?php 



class RequestFactory{


    public static function create() : Request{

        return new Request($_REQUEST,getallheaders(),$_COOKIE,$_FILES,$_SERVER);
    }
}