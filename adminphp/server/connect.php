<?php
/**
 * AppzStory Admin PHP
 *
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
session_start();
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "hellojava";
$dbname = "stock";

/** เชื่อมต่อฐานข้อมูลด้วย PHP PDO */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    echo "การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage();
    exit();
}

