<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST"){
	$json = file_get_contents("php://input");
	$input = json_decode($json, true);
	if($input["email"] == 'admin@gmail.com'){
                echo json_encode(array(
                        "success" => true,
                        "userToken" => "1234567890",
                        "dataUser" => array(
                                "fullName" => "Quyen Luu",
                                "phone" => "0987654321"
                        )
                ));
        }else{
                echo json_encode(array(
                        "success" => false,
                        "message" => "Username or Password invalid",
                        "email" => $input["email"]
                ));
        }
	
}