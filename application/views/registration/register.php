<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/loginstyle.css">

</head>

<body>


<div class="container">

        <?php
            $attributes = array('class' => 'register', 'id' => 'registration');
            echo validation_errors();
            echo form_open_multipart('admins/register',$attributes);
        ?>

        <div class="row">
            <h4>E-LIBRARY</h4>
            <div class="input-group input-group-icon">
                 <input class="username" name="username" type="text" placeholder="Enter Your User Name" required/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
            <div class="input-group input-group-icon">
               <input class="email" name="email" type="email" placeholder="Enter Your Email" required/>
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <div class="input-group input-group-icon">
             <input class="password" name="password" type="password" placeholder="Password"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
            <div class="input-group input-group-icon">
                <input name="phonenumber" type="phonenumber" placeholder="phone number"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
        </div>
        <div class="row">
            <h4>Terms and Conditions</h4>
            <div class="input-group">
                <input type="checkbox" id="terms"/>
                <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
            </div>
        </div>
        <?php
        echo form_submit('submit', 'add');
        echo form_close();
        ?>
    <button id="logout"><a href="http://localhost/e-library/index.php/Admins/login">login</a></button>
</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?php echo base_url(); ?>js/index.js"></script>

</body>

</html>
