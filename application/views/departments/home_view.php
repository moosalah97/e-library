<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>science electronic library</title>
        <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    </head>
    <body style="background-image:url('http://localhost/e-library/images/wood.jpg');background-position: center;">
        <h1 style="text-align: center"> electronic libarary</h1>
        <div class="topnav" id="myTopnav">
            <a href="http://localhost/e-library/index.php/Admins/index" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Departments</button>
                <div id="myDropdown" class="dropdown-content" >
                    <a href="http://localhost/e-library/index.php/Departments/computer_view">Computer</a>
                    <a href="http://localhost/e-library/index.php/Departments/math_view">Math</a>
                    <a href="http://localhost/e-library/index.php/Departments/physics_view">Physics</a>
                    <a href="http://localhost/e-library/index.php/Departments/chemistry_view">Chemistry</a>
                </div>
            </div>

            <a href="http://localhost/e-library/index.php/Admins/login">Admin</a>
           <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
        </div>
        <script>
            /* When the user clicks on the button,
             toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
    </body>
</html>