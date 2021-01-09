<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/loginstyle.css">

</head>

<body>


<div class="container">

    <?php
    $attributes = array('class' => 'login', 'id' => 'loginid');
    //echo validation_errors();
    echo form_open('Admins/login/',$attributes);
    ?>

    <div class="row">
        <h4>E-LIBRARY</h4>
        <div class="input-group input-group-icon ">
            <input class="username" name="username" type="text" placeholder="Enter Your User Name" required/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input-group input-group-icon">
            <input class="password" name="password" type="password" placeholder="Password" required/>
            <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
        <button class="btn btn-success " id="logout"><a href="http://localhost/e-library/index.php/Admins/register">register</a></button>

    </div>

    <?php
    echo form_submit('submit', 'login');
    echo form_close();
    ?>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="<?php echo base_url(); ?>js/index.js"></script>




</body>

</html>
