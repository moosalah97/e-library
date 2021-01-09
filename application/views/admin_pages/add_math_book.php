<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Add book</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/loginstyle.css">
</head>
    <body>
        <div class="container">

            <?php
            $attributes = array('class' => 'register', 'id' => 'registration');
            echo validation_errors();
            echo form_open_multipart('Departments/insert_math',$attributes);
            ?>
            <div class="row">
                <h4>Add Books</h4>
                <div class="input-group input-group-icon">
                    <input class="book_name" name="book_name" type="text" placeholder="Enter Your Book Name" required/>
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <select name="department">
                        <option value="math department" name="mathdepartment">math</option>
                    </select>
                </div>
                <div class="input-group input-group-icon">
                    <select name="level">
                        <option value="first year"  name="first year">first year</option>
                        <option value="second year" name="second year">second year</option>
                        <option value="third year"  name="third year">third year</option>
                        <option value="fourth year" name="fourth year">fourth year</option>
                    </select>
                </div>
                <div class="input-group input-group-icon">
                    <input type="file" class="bookname" name="bookname" id="profilePic" required/>
                    <div class="input-icon"><i class="fa fa-file-pdf-o"></i></div>
            </div>
            <?php
            echo form_submit('submit', 'add');
            echo form_close();
            ?>
            <button id="logout"><a href="http://localhost/e-library/index.php/Admins/index">Home</a></button>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="<?php echo base_url(); ?>js/index.js"></script>
    </body>
</html>
