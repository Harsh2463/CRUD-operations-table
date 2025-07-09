<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include 'conn.php';




            $student_id = $_POST['student_id'];
            $student_name = $_POST['student_name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $DOB = $_POST['DOB'];
            $img = $_POST['img'];



                $sql = "update student_table set student_name = '$student_name', phone = '$phone', email = '$email', DOB = '$DOB', img_path = '$img' where student_id = $student_id ";

                $check = mysqli_query($connect,$sql);

                if(!$check){
                    die(mysqli_error($check));
                }

                else{
                    
                    // echo "updated successfully";
                    // echo "<script> alert('data updated successfully!') </script>";
                    // echo "<script> window.location.href = 'index.php' </script>";
                    // echo "<script> window.open('index.php','_self') </script>";

                    header('location:http://localhost/php%20mysql%20table/index.php');


                }



    ?>


    
</body>
</html>