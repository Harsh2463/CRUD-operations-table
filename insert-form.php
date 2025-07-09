<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql table</title>
    <link href="form.css" rel="stylesheet"/>
</head>
<body>

    <?php
        include 'conn.php';
    ?>


                            <div class="container">
                                    <form action="insert.php" method="post" enctype="multipart/form-data">
                                        <h2>Add your details</h2>
                                        <div class="content">
                                            <div class="input-box">
                                                <label style="display:none;" for="student_id">Student ID</label>
                                                <input type="hidden" name="student_id" placeholder="your id"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="student_name" placeholder="your name"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="phone">Mobile no.</label>
                                                <input type="tel" name="phone" placeholder="your phone"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" placeholder="your email"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="DOB">D.O.B</label>
                                                <input type="date" name="DOB" placeholder="your dob"/>
                                            </div>
                                            <div class="input-box">
                                                <label for="img">Photo</label>
                                                <input type="file" name="img"/>
                                            </div>                                            
                                        </div>
                                        <div class="button-container">
                                            <button type="submit" name="insert">Insert</button>

                                            <a id="cancel-btn" href="index.php">Cancel</a>
                                        </div>
                                    </form>
                            </div>  







</body>
</html>