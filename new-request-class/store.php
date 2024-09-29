<?php 

require_once 'Request.php';
require_once 'RequestFactory.php';

$request = RequestFactory::create();

echo "Post Inputs <br>  <hr>";
echo "<pre>";
    print_r($request->postInputs());
echo "</pre>";


echo "Get Inputs <br>  <hr>";

echo "<pre>";
    print_r($request->getInputs());
echo "</pre>";


echo "Files <br>  <hr>";
echo "<pre>";
    print_r($request->files());
echo "</pre>";


echo "All Inputs <br>  <hr>";
echo "<pre>";
    print_r($request->all());
echo "</pre>";

echo "All Headers <br> <hr>";
echo "<pre>";
    print_r($request->headers());
echo "</pre>";


echo "URL <br> <hr>";
echo "<pre>";
    echo $request->url();
echo "</pre>";


echo "Query Params <br> <hr>";
echo "<pre>";
    print_r($request->queryParams());
echo "</pre>";


echo "All Cookies <br> <hr>";
echo "<pre>";
    print_r($request->cookies());
echo "</pre>";
