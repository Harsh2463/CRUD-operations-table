<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql table</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>

    <?php
        include 'conn.php';
    ?>

    <div class="container">
        <h1>Student Table</h1>
        <table class="rwd-table">
            <thead>
                <tr>
                    <th>show/hide</th>
                    <th>Student_id</th>
                    <th>Student Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Delete</th>
                    <th>Image</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    $sql = 'select * from student_table';

                    $check = mysqli_query($connect,$sql);

                    if(!$check){
                        die(mysqli_error($check));
                    }

                    else{
                        
                        while($row = mysqli_fetch_assoc($check)){

                            ?>

                                <tr>
                                    <td>
                                        <button class="show" style="display:none;">Show</button>
                                        <button class="hide">Hide</button>
                                    </td>
                                    <td scope="row"><input type="text" value="<?php echo $row['student_id'] ?>" disabled></td>
                                    <td><input type="text" value="<?php echo $row['student_name'] ?>" disabled></td>
                                    <td><input type="text" value="<?php echo $row['phone'] ?>" disabled></td>
                                    <td><input type="text" value="<?php echo $row['email'] ?>" disabled></td>
                                    <td><input type="text" value="<?php echo $row['DOB'] ?>" disabled></td>
                                    <td>
                                        <form method="POST" action="edit.php">
                                            <button id="edit-btn" name="student_id" value="<?php echo $row['student_id'] ?>">Edit</button>
                                            <a id="dlt-btn" href="delete.php?student_id=<?php echo $row['student_id'] ?>" onclick = "return confirm('Are you sure you want to delete data!')">Delete</a>
                                        </form>                                        
                                    </td>
                                    <td>
                                        <img style="height:100px;width:80px;border:1px solid black;" src="images/<?php echo $row['img_path'] ?>" alt="">
                                    </td>
                                </tr>                        


                            <?php


                        }


                    }

                ?>
                
            </tbody>

            

        </table>

    </div>

    <a href="insert-form.php" id="insert-btn">Insert Data</a>

    <script>


        let rows = document.querySelectorAll("tr");

rows.forEach((row) => {

    let inputs = row.querySelectorAll("input");
    let show = row.querySelector(".show"); 
    let hide = row.querySelector(".hide"); 

    if (show) { 
        show.addEventListener('click', () => {
            inputs.forEach((input) => {
                if (input.type === "password") {
                    input.type = "text"; 
                }
            });
            hide.style.display = "block"; 
            show.style.display = "none"; 
        });
    }

    if (hide) { 
        hide.addEventListener('click', () => {
            inputs.forEach((input) => {
                if (input.type === "text") {
                    input.type = "password"; 
                }
            });
            hide.style.display = "none"; 
            show.style.display = "block"; 
        });
    }
});

        

        // hide.addEventListener('click', () =>{
        //     inputs.forEach((input) =>{
        //         if(input.type == "text"){
        //             input.type = "password";
        //             show.style.display = "block";
        //             hide.style.display = "none";
        //         }
        //     })
        // });
    </script>
    
</body>
</html>