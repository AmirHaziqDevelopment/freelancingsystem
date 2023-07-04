<?php

require '../databasefunction/Database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database();

//process apa yang kau nak buat
$storeUsers = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)',[
    ':email'=>$email,
    ':password'=>$password
]);

//tunjuk bukti yang kau dah buat
$searchUser = $db->query('select * from users where email = :email',[
    ':email'=>$email
])->find();

if($searchUser){
    header('location: /MYPROJECT/view/jobsView.php');
}



