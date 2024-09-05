 <?php
    include "condb.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $user_table (fname,lname,email,password,role) VALUES (:fname,:lname,:email,:password,:role)";
        $smt = $conn->prepare($sql);
        $smt->bindParam("fname",$fname);
        $smt->bindParam("lname",$lname);
        $smt->bindParam("email",$email);
        $smt->bindParam("password",$password);
        $smt->bindParam("role",$role);
        $result = $smt->execute();
        //sweet alert
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        if ($result) {
            echo '<script>
                    setTimeout(function() {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "สมัครสมาชิกสําเร็จ",
                            showConfirmButton: true,
                            // timer: 1500
                        }).then(function() {
                        window.location = "index.php"; // Redirect to.. ปรับแก ้ชอไฟล์ตามที่ต้องการให ้ไป ื่
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
                window.location = "login.php"; // Redirect to.. ปรับแก ้ชอไฟล์ตามที่ต้องการให ้ไป ื่
                    });
                }, 1000);
            </script>';
        }
    }
    ?>


