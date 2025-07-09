<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql table</title>
    
</head>
<body>

    <?php
        include 'conn.php';
    ?>


    <?php
    
    if(isset($_POST['insert'])){
        $student_id = $_POST['student_id'];
        $student_name = $_POST['student_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $DOB = $_POST['DOB'];
        $img = $_FILES['img']['name'];
        $temp_img = $_FILES['img']['tmp_name'];
        $location = "images/" . $img;
    }
    
    $sql = "insert into student_table (student_name,phone,email,DOB,img_path) values ('$student_name','$phone','$email','$DOB','$img')";

                $check = mysqli_query($connect,$sql);

                if(move_uploaded_file($temp_img,$location)){
                    
                    header('location:http://localhost/php%20mysql%20table/index.php');
                }

                else{


                    // die(mysqli_error($check));
                    echo "not uploaded";


                }





    ?>





</body>
</html>