
<?php

function dd($value){
echo "<pre>";
    var_dump($value);
    die();
    echo "</pre>";
}

function isActive($path){
    return $_SERVER['REQUEST_URI'] == $path ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white";
}

function authorize($condition, $status = Response::FORBIDDEN){
    if (!$condition){
        abort($status);
    }
}

?>