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

                $student_id = $_GET['student_id'];

                $sql = "delete from student_table where student_id = $student_id";

                $check = mysqli_query($connect,$sql);

                if(!$check){
                    die(mysqli_error($check));
                }

                else{
                    
                    header('location:http://localhost/php%20mysql%20table/index.php');


                }

            ?>


</body>
</html>