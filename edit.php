<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="form.css" rel="stylesheet"/>
</head>
<body>


<?php

include 'conn.php';

                $student_id = $_POST['student_id'];


                $sql = "select * from student_table where student_id = $student_id";

                $check = mysqli_query($connect,$sql);

                if(!$check){
                    die(mysqli_error($check));
                }

                else{
                    
                    while($row = mysqli_fetch_assoc($check)){

                        ?>

                            <div class="container">
                                    <form action="update.php" method="post">
                                        <h2>Update your details</h2>
                                        <div class="content">
                                            <div class="input-box">
                                                <label style="display:none;" for="student_id">Student ID</label>
                                                <input type="hidden" name="student_id" placeholder="your id" value="<?php echo $row['student_id']?>"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="student_name" placeholder="your name" value="<?php echo $row['student_name']?>"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="phone">Mobile no.</label>
                                                <input type="tel" name="phone" placeholder="your name" value="<?php echo $row['phone']?>"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" placeholder="your name" value="<?php echo $row['email']?>"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="DOB">D.O.B</label>
                                                <input type="date" name="DOB" placeholder="your name" value="<?php echo $row['DOB']?>"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="img">Photo</label>
                                                <img id="image" style="height:100px;cursor:pointer;" src="images/<?php echo $row['img_path']?>" alt=""/>
                                                <input type="text" id="textInput" name="img" value="<?php echo $row['img_path']?>"/>
                                                <input type="file" id="fileInput" name="img"/>
                                            </div>
                                            
                                        </div>
                                        <div class="button-container">
                                            <button type="submit" name="update">Update</button>

                                            <a id="cancel-btn" href="index.php">Cancel</a>
                                        </div>
                                    </form>
                            </div>    
                            
                            <div class="bg-overlay">
                                <img src="images/<?php echo $row['img_path']?>" alt="">
                                <i class="fa-regular fa-circle-xmark close"></i>
                            </div>


                        <?php


                    }


                }



?>

<script>
    let image = document.getElementById("image");
    let overlay = document.getElementsByClassName("bg-overlay")[0];
    let close = overlay.getElementsByClassName("close")[0];

    image.addEventListener('click' , () => {
        if(overlay.style.display=="none"){
            overlay.style.display="flex";
        }

        else{
            overlay.style.display="none";
        }
    })

    close.addEventListener('click',()=>{
        overlay.style.display="none";
    })




    document.getElementById('fileInput').addEventListener('change', function() {
        var fileInput = document.getElementById('fileInput');
        var textInput = document.getElementById('textInput');

        // Check if a file has been selected
        if (fileInput.files.length > 0) {
            // Get the name of the selected file
            var fileName = fileInput.files[0].name;
            // Set the value of the text input to the file name
            textInput.value = fileName;
        }
    });



    
    

</script>


    
</body>
</html>



