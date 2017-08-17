<?php
    $con = mysqli_connect("mysql10.000webhost.com", "a3288368_user", "abcd1234", "a3288368_data");
    
    $name = $_POST["username"];
    $username = $_POST["password"];
    $password = $_POST["repassword"];

    $statement = mysqli_prepare($con, "INSERT INTO user (username, password, repassword) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $username, $password, $repassword);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
