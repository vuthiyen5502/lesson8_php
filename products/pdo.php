<?php
    require_once "../category/pdo.php";

    // Lấy dữ liệu
    function getProdData(){
        $sql = "SELECT * FROM products INNER JOIN categories ON products.cateId = categories.id";
        $select = prepareSQL($sql);
        $select->execute();
        return $select->fetchAll();
    }

    function getOneProdData($data){
        $sql = "SELECT * FROM products WHERE prodId = :id";
        $select = prepareSQL($sql);
        $select->execute($data);
        return $select->fetchAll();
    }

    function createNewProdData($data){
        $sql = "INSERT INTO products (prodId,prodName,prodPrice,cateId)VALUES (:prodId, :prodName, :prodPrice, :cateId)";
        $create = prepareSQL($sql);
        $create->execute($data);
    }

    function updateProdData($data){
        $sql = "UPDATE products SET  prodName = :prodName, prodPrice = :prodPrice, cateId = :cateId  WHERE prodId = :id";
        $update = prepareSQL($sql);
        $update->execute($data);
    }
    function deleteProdData($data){
        $sql = "DELETE FROM products WHERE prodId = :id";
        $update = prepareSQL($sql);
        $update->execute($data);
    }
?>