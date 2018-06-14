<?php
if($_POST["email"] == 'admin@gmail.com'){
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
                "email" => $_POST["email"]
        ));
}