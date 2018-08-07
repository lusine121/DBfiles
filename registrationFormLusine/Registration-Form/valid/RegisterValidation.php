<?php

$email = trim($_POST['email']);
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$login = trim($_POST['login']);
$password = trim($_POST['password']);

function validation($post){
$resp = []; 


//validate email
function emailValidation($email){
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
        $resp["email"] = "Pleas  Write Your Email Correctly";
    }
}

//validate firstname
function firstnameValidation($firstname){
if (empty($post["firstname"])){
    $resp["firstname"] = " Data can not be empty. ";
  }
}

//validate lastname
function lastnameValidation($lastname){
    if (empty($post["lastname"])){
        $resp["lastname"] = " Data can not be empty. ";
  }
}

//validate login
function passwordValidation($login){
    if (empty($post["login"])){
      $resp["login"] =  " Data can not be empty. ";
    }
  }

//validate password
function passwordValidation($password){
  if (empty($post["password"])){
    $resp["password"] =  " Data can not be empty. ";
  }
}

function isEmpty($data){
   if (empty($data)){
        return ["isValid" =>false, "message"=> " Data can not be empty. "];
    }
    return ['isValid'=>true,'message'=>''];
  }

  return $resp;

}


if (isset($_POST["save"])) {
    if (!required($_POST['email']) || !required($_POST['firstname']) || !required($_POST['lastname'])  || !required($_POST['login']) || !required($_POST['password']) !isset($_POST['select'])) {
        echo "All fields are nessesary" . "<br>";
        echo "<a href='Register.php'>Go Back</a>";
    } else {

  try {
    require_once "components/db_functions.php";
    echo "Connected successfully" . "<br>";
  /////////
  $sql = "Insert into  forms(email, first_name, last_name, login, password) values('" . $email . "' , '" . $firstname  . "', '" . $lastname  . " ', '" . $login . " ', '" . $password . " ')";
  //$sql_forms = "Insert into  forms value('"  . $select . " ')";
  if ($conn->exec($sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: ";
  }

}catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// $resp = validation($_POST);
if (!empty($_POST)){
    var_dump($_POST);
   $resp = validation($_POST);
}

?>