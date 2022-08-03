<?php 

    require_once "conn.php";

    if (isset($_POST['save'])) {
        if (empty($_FILES['file']) && empty($_POST['description']) && empty($_POST['title'])) {
            $conn->close();
            header("location: main.php");
        }
        else {
            $file_name = $_FILES['file']['name'];
		    $file_temp = $_FILES['file']['tmp_name'];
		    //$file_size = $_FILES['file']['size'];

            $videos_type = array('avi', 'flv', 'wmv', 'mov', 'mp4');

            $end = explode('.', $file_name);
            $end = end($end);

            if (in_array($end, $videos_type))  {
                $location = "videos/".$file_name;

                if (move_uploaded_file($file_temp, $location)) {
                    
                    $title = $_POST['title'];
                    $desc = $_POST['description'];

                    if ($conn->query("INSERT INTO videos(title, description, location) VALUES ('$title', '$desc', '$location')")) {
                        $conn->close();
                        header("location: main.php");
                    }
                    else {
                        echo "<script>alert(\"Error\")</script>";
                        header("location: main.php");
                    }
                }
                else {
                    echo "";
                    header("location: main.php");
                }
            }
            else {
                echo "<script>alert(\"check your file type\")</script>";
                header("location: main.php");
            }
        }
    }
    else {
        $conn->close();
        header("location: main.php");
    }

?>