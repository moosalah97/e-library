<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>physics  department</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/physics.css">
    </head>
    <body style="background-image:url('http://localhost/e-library/images/physics.jpg')">
        <div class="head">physics department</div>
        <div class="add">
            <button class="btn-success"><a href="http://localhost/e-library/index.php/Departments/add_physics_book">Add new book</a></button>
            <button ><a href="http://localhost/e-library/index.php/Departments/admin_home_view">home</a></button>
        </div>
        <h4>first year</h4>
            <?php
            foreach ($departments as $department){
             if($department->department=="physics department"&&$department->level=="first year"){?>
                    <LI><?php echo $department->book_name;?>
                        <a href="<?php echo base_url() . "index.php/Departments/remove_physics/". $department->id;?> ">
                            <button>Delete</button>
                        </a>
                        <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                            <button>Download</button>
                        </a>
                    </LI>
             <?php }}?>
        <h4>second year</h4>
            <?php
            foreach ($departments as $department){
            if($department->department=="physics department"&&$department->level=="second year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_physics/". $department->id;?> ">
                        <button>Delete</button>
                    </a>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>

        <h4>third year</h4>
            <?php
            foreach ($departments as $department){
            if($department->department=="physics department"&&$department->level=="third year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_physics/". $department->id;?> ">
                        <button>Delete</button>
                    </a>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
        <h4>fourth year</h4>
            <?php
            foreach ($departments as $department){
            if($department->department=="physics department"&&$department->level=="fourth year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_physics/". $department->id;?> ">
                        <button>Delete</button>
                    </a>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
    </body>
</html>