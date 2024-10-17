<?php 



class Request{

    private $inputs;
    private $headers;
    private $cookies;
    private $server;
    private $files;
    private $postInputs;
    private $getInputs;

    public function __construct(array $inputs, array $headers, array $cookies, array $files, array $server){
        $this->inputs   = $inputs;
        $this->headers  = $headers;
        $this->cookies  = $cookies;
        $this->files    = $files;
        $this->server   = $server;

        $this->postInputs = $this->postInputs();
        $this->getInputs = $this->getInputs();
    }

    private function sanitizeInput($input){
        return trim(htmlentities(htmlspecialchars($input)));
    }

    public function postInput($key){
        return $this->postInputs[$key] ?? null;
    }

    public function postInputs(){
        $data = [];
        foreach($_POST as $key => $value){
            $data[$key] = $this->sanitizeInput($value);
        }
        return $data;
    }

    public function getInput($key){
        return $this->getInputs[$key] ?? null;
    }

    public function getInputs(){
        $data = [];
        foreach($_GET as $key => $value){
            $data[$key] = $this->sanitizeInput($value);
        }
        return $data;
    }

    public function files(){
        return $this->files;
    }

    public function all(){
        // return [...$this->postInputs, ...$this->getInputs,...["files"=> [...$_FILES] ]];
        return [...$this->postInputs, ...$this->getInputs,...$this->files];
    }

    public function input($key){
        return $this->all()[$key] ?? null;
    }

    public function method(){
        return $this->server['REQUEST_METHOD'];
    }

    public function isPost(){
        return $this->method() == "POST";
    }

    public function isGet(){
        return $this->method() == "GET";
    }

    public function ip(){
        return $this->server['REMOTE_ADDR'];
    }

    public function path(){
        return $this->server['REQUEST_URI'];
    }

    public function url(){
        return $this->server['HTTP_HOST'];
    }

    public function queryParams(){
        $query = parse_url($this->path(), PHP_URL_QUERY);
        parse_str($query, $queryParams);
        return $queryParams;
    }

    public function server($key){
        return $this->server[$key]?? null;
    }


    public function headers(){
        return $this->headers;
    }

    public function header($key){
        return $this->headers[$key]?? null;
    }


    public function cookies(){
        return $this->cookies;
    }

    public function cookie($key){
        return $this->cookies[$key]?? null;
    }


}