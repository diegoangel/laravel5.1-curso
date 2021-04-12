<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                position: relative;
                text-align: left;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                position: relative;
                text-align: center;
                display: inline-block;|
            }

            .title {
                font-size: 96px;
            }
            .vertical-menu {
             width: 200px; /* Set a width if you like */
            }

            .vertical-menu a {
                background-color: #eee; /* Grey background color */
                color: black; /* Black text color */
                display: block; /* Make the links appear below each other */
                padding: 12px; /* Add some padding */
                text-decoration: none; /* Remove underline from links */
                font-weight: bold;
            }

            .vertical-menu a:hover {
                background-color: #ccc; /* Dark grey background on mouse-over */
            }

            .vertical-menu a.active {
                background-color: #4CAF50; /* Add a green color to the "active/current" link */
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="vertical-menu">
            <a href="#" class="active">Home</a>
            <a href="/users">Listado de usuarios</a>
            <a href="/users/create">Nuevo usuario</a>
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
        </div>
        <div class="container">
            <div class="content">
                <div class="title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLaravel 5</div>
            </div>     
        </div>
    </body>
</html>
