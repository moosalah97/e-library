<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home View</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/homestyle.css">

    </head>

    <body style="background-image:url('http://localhost/e-library/images/book-1528240.jpg');background-position: inherit ; ">
        <header style="text-align: center">
         <h1>science electronic library</h1>
        </header>
        <footer class="end">
                <img src="<?php echo base_url(); ?>images/zag.png" class= "zag">

                <h4 >choose your submitting</h4>
                <a href="http://localhost/e-library/index.php/Departments/home_view">
                    <button type="button">Student!</button>
                </a>
                <br><br>
                <a href="http://localhost/e-library/index.php/Admins/login">
                <button type="button">Admin!</button>
                </a>
        </footer>
    </body>
</html>