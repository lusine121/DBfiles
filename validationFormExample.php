<?php

//Our global function
function validation ($post){
    $res = [];
    foreach ($post as $key=> $value){
        $res[$key] =  $isEmpty = isEmpty($value);
        if ($isEmpty["isValid"]){
            $function = $key . 'Validation';
            if (function_exists($function)) {
                $res[$key] = $function ( $value );
            }
    }
    
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000){
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

//Checking firstname
function firstNameValidation($firstname){
    if (!empty($firstname) && ctype_alpha($firstname)){
        return ["isValid" =>false, "message"=>''];
    }else{
    return ["isValid"=>true,"message"=>"First Name can't be empty or must include only Latin letters"];
  }
}

//Checking lastname
function lastNameValidation($lastname){
    if (!empty($lastname) && ctype_alpha($lastname)){
        return ["isValid" =>false, "message"=>''];
    }else{
    return ["isValid"=>true,"message"=>"Last Name can't be empty or must include only Latin letters"];
  }
}

//checking news heading
function commentsValidation($heading){
    if (empty($heading)){
        return ["isValid"=>false, "message"=>"News Heading not written.Please fill in this field"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
}

//checking news description
function commentsValidation($description){
    if (empty($description)){
        return ["isValid"=>false, "message"=>"Please fill in  News Description field"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
}

//Checking gender
function genderValidation($gender){
    if(empty($gender)){
        return ["isValid"=>false, "message"=>"Gender is not choosen"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
 }
 
}

echo "<pre>";
print_r ($_POST);
echo "<pre>";
?>