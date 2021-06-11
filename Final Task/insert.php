<?php

header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

require ('connect.php');

// POST DATA
$data = json_decode(file_get_contents("php://input"));

if ( isset($data)&& !empty($data)) 
{

    $fName=$request->fName;
    $uName=$request->uName;
    $email=$request->email;
    $phone=$request->phone;
    $state=$request->state;
    //   if (filter_var($email, "FILTER_VALIDATE_EMAIL")) {
        $insertUser =("INSERT INTO `crud`(`name`,`email`,`phone`,`gender`,`state`) VALUES('$name','$email','$phone','$gender','$state')");
  
  
            if(mysqli_query($con,$sql))
            {
                http_response_code(201);

            } 
             else
             {
                http_response_code(422);
            }

          
}
?>