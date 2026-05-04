<!-- IT23252554 -->
<?php
    require __DIR__ . '/config/config.php';

    if(isset($_POST['nam'], $_POST['ema'], $_POST['sub'], $_POST['mess'])) {
       
        $name = $_POST['nam'];
        $email = $_POST['ema'];
        $subject = $_POST['sub'];
        $message = $_POST['message']; 
       
        $stmt = $conn->prepare("INSERT INTO contactus(nam, ema, sub, mess) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nam, $ema, $sub, $mess); 

        if($stmt->execute()){
            echo "<script>alert('Submit successfully');
             window.location.href = '/fashion%20Store/ContactUs.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else 
    {
        echo "Error: Form data not set";
    }

    $stmt->close();
    $conn->close();
?>
