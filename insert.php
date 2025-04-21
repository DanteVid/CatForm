<?php
    header('Content-Type: text/html; charset=UTF-8');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $catBreedSelect = $_POST['catBreedSelect'];
    $catmyth = $_POST['catmyth'];
    $catsloveArray = $_POST['catslove'] ?? [];
    $catslove = implode(',', $catsloveArray);
    $coment = $_POST['coment'];

    $conn = new mysqli('db', 'abc', 'abc123', 'catApp');
    if($conn->connect_errno){
        die('Connection Failed : ' .$conn->connect_error);    
    }else{
        $stmt = $conn->prepare("insert into results(username, email, age, catBreedSelect, catmyth, catslove, coment)
            values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiiss",$username, $email, $age, $catBreedSelect, $catmyth, $catslove, $coment);
        $stmt->execute();
        echo "¡Thank you for participating!";
        $stmt->close();
        $conn->close();
    }
?>
