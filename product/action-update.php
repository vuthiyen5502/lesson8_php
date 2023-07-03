<?php 
    require_once "pdo.php";
    $data = [
        'prodId' => $_POST['prodID'],
        'prodName' => $_POST['prodName'],
        'prodPrice' => $_POST['prodPrice'],
        'cateId' => $_POST['cateId'],
        'id' => $_GET['id']
    ];
    updateProdData($data);
    header("Location: http://localhost/lesson8_php/product/index.php");
?>