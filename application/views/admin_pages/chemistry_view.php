<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>chemistry department</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/chemistry.css">
    </head>
    <body style="background-image:url('http://localhost/e-library/images/chemistry.jpg')">
        <div class="head">chemistry department</div>
        <div class="add">
            <button ><a href="http://localhost/e-library/index.php/Departments/add_chemistry_book">Add new book</a></button>
            <button ><a href="http://localhost/e-library/index.php/Departments/admin_home_view">home</a></button>
        </div>
        <h4>first year</h4>
        <?php
        foreach ($departments as $department){
            if($department->department=="chemistry department"&&$department->level=="first year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_chemistry/". $department->id;?> ">
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
            if($department->department=="chemistry department"&&$department->level=="second year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_chemistry/". $department->id;?> ">
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
            if($department->department=="chemistry department"&&$department->level=="third year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_chemistry/". $department->id;?> ">
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
            if($department->department=="chemistry department"&&$department->level=="fourth year"){?>
                <LI><?php echo $department->book_name;?>
                    <a href="<?php echo base_url() . "index.php/Departments/remove_chemistry/". $department->id;?> ">
                        <button>Delete</button>
                    </a>
                    <a href="<?php echo base_url()."index.php/Departments/download/".$department->book_name; ?>" class="dwn">
                        <button>Download</button>
                    </a>
                </LI>
            <?php }}?>
    </body>
</html>