<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteProdData($id);
    header("Location: http://localhost/lesson8_php/product/index.php");
?>