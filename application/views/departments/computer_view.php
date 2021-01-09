<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>computer science department</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    </head>
    <body style="background-image:url('http://localhost/e-library/images/cs.jpg')">
        <div class="head">computer science</div>
        <div class="add">
            <button ><a href="http://localhost/e-library/index.php/Departments/home_view">home</a></button>
        </div>
        <h4>first year</h4><br>
        <?php
        foreach ($departments as $department){
            if($department->department=="computer department"&&$department->level=="first year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>second year</h4><br>
        <?php
        foreach ($departments as $department){
            if($department->department=="computer department"&&$department->level=="second year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>third year</h4><br>
        <?php
        foreach ($departments as $department){
            if($department->department=="computer department"&&$department->level=="third year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>fourth year</h4><br>
        <?php
        foreach ($departments as $department){
            if($department->department=="computer department"&&$department->level=="fourth year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>

            <?php }}?>
    </body>
</html>