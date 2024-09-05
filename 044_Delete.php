<?php
include 'condb.php';
include 'header.php';
include 'footer.php';
if (isset($_POST['shoe_id'])) {
    $id = $_POST['shoe_id'];
    try {

        $sql = "DELETE FROM $table WHERE shoe_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $result = $stmt->execute();
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        if ($result) {
            echo '<script>
                        setTimeout(function() {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "ลบข้อมูลสําเร็จ",
                                showConfirmButton: true,
                                // timer: 1500
                            }).then(function() {
                            window.location = "show.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
                        });
                            }, 1000);
                            </script>';
        } else {
            echo '<script>
            setTimeout(function() {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "เกิดข้อผิดพลาด",
                        showConfirmButton: true,
                        // timer: 1500
                        }).then(function() {
                    window.location = "show.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
                        });
                    }, 1000);
                </script>';
        }




      } catch (PDOException $e) {
        echo $e->getMessage();
      }

    
}
?>