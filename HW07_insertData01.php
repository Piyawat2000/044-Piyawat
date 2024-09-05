<?php 
    include "condb.php";

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['shoes_name']) && isset($_POST['price']) && isset($_POST['uploadBy'])){
            $name = $_POST['shoes_name'];
            $price = $_POST['price'];
            $uploadBy = $_POST['uploadBy'];

            // $sql = "INSERT INTO $tableName (name, price, addBy) VALUES ('$name' , '$price' ,'$uploadBy' )";
            // $result = $conn->exec($sql); ธรรมดา

            $sql = "INSERT INTO $table (name, price, addBy) VALUES (:name, :price, :addBy)"; //sql 
            $smt = $conn->prepare($sql); //เตรียมข้อมูล
            $smt->bindParam(":name", $name); //เชื่อมข้อมูลแต่ละตัว เช่น ตัวแปลในฐานข้อมูล เชื่อมด้วย ตัวแปร name ที่จะอัพขึ้น database
            $smt->bindParam(":price", $price);//เชื่อมข้อมูลแต่ละตัว
            $smt->bindParam(":addBy", $uploadBy);//เชื่อมข้อมูลแต่ละตัว
            $result = $smt->execute(); //บันทึกข้อมูลลงฐานข้อมูล
            if ($result) {
              echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
            } else {
              echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล";
            }

            
    }

    }
?>