<?php 
/**
 * AppzStory Admin PHP
 *
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: text/html; charset=UTF-8');
require_once('../connect.php');
require_once('../function.php');

if (isset($_POST['authen'])) {
    $username = cleanData($_POST['username']);
    $password = cleanData($_POST['password']);
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND status = 'true' ");
    $stmt->execute(array(":username" => $username));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if( !empty($row) && password_verify($password, $row['password']) ) {
        unset($row['password']);
        $_SESSION['AD_ID'] = $row['u_id'];
        $_SESSION['AD_FIRSTNAME'] = $row['firstname'];
        $_SESSION['AD_LASTNAME'] = $row['lastname'];
        $_SESSION['AD_USERNAME'] = $row['username'];
        $_SESSION['AD_IMAGE'] = $row['image'];
        $_SESSION['AD_ROLE'] = $row['role'];
        $_SESSION['AD_STATUS'] = $row['status'];

        header('Location: ../../pages/index.php');    

    } else {
        echo "<script> alert('ไม่สามารถเข้าสู่ระบบได้')</script>";
        header("Refresh:0; url=../../login.php");
    }
}
