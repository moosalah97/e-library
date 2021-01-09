<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>math  department</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/math.css">
    </head>
    <body style="background-image:url('http://localhost/e-library/images/maths.jpg')">

        <div class="head">math department</div>
        <div class="add">
            <button ><a href="http://localhost/e-library/index.php/Departments/home_view">home</a></button>
        </div>
        <h4>first year</h4>
        <?php
        foreach ($departments as $department){
            if($department->department=="math department"&&$department->level=="first year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>second year</h4>
        <?php
        foreach ($departments as $department){
            if($department->department=="math department"&&$department->level=="second year"){
                ?>
                <LI><?php echo $department->book_name ; ?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>third year</h4>
        <?php
        foreach ($departments as $department){
            if($department->department=="math department"&&$department->level=="third year"){
                ?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>fourth year</h4>
        <?php
        foreach ($departments as $department){
            if($department->department=="math department"&&$department->level=="fourth year"){
                ?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
    </body>
</html>