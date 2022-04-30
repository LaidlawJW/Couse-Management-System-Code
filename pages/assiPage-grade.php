<?php
include_once("../includes/dbh.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/787fe15a79.js" crossorigin="anonymous"></script>
    <script src="../JS/main.js"></script>
    <link rel="stylesheet" href="../CSS/Main.css">
    <title>Document</title>
</head>

<body>
    <aside></aside>
    <nav class="nav">
        <ul class="out">
            <li class="nav_items">
                <a href="Dashboard_temp.html">
                    <i class="fa-solid fa-bars"></i>
                    <span class="n-text">
                        Dashboard
                    </span>
                </a>

            </li>

            <li class="nav_items">
                <a href="profilePage_temp.html">
                    <i class="fa-solid fa-book"></i>
                    <span class="n-text">
                        Classes
                    </span>
                </a>

            </li>

            <li class="nav_items">
                <a href="Submissions.html">
                    <i class="fa-solid fa-clipboard-check"></i>
                    <span class="n-text">
                        Completed Work
                    </span>
                </a>

            </li>
            <li class="nav_items">
                <a href="edit-prof.html">
                    <i class="fa-solid fa-user"></i>
                    <span class="n-text">
                        Profile
                    </span>
                </a>

            </li>
            <!--
            <li class="nav_items">
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="n-text">
                        Settings
                    </span>
                </a>

            </li>
            -->
        </ul>

        <ul class="logout">
            <li class="nav_items">
                <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="n-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="col-2">
        <header>
            <h2>Current Date: <span id='date'></span></h2>

            <h2>Hello
            <?php    
            //$sql = "SELECT * FROM main WHERE UserID = 1";

            $name = query($conn, $sql);
            //echo $name;
            echo $_SESSION["uname"];
            ?>
            !
            </h2>

            
        </header>
        <main>
            <div class="form-temp">
                <form id="form-ass">
                    <h1 class="class-head">Homework03</h1>
                    <div class="message-area">
                        <h4>Assigment message</h4>
                        <label for="message"></label>
                        <textarea readonly name="msg" id="" msg cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="upload-area">
                        <p>View Uploaded files </p>
                        <h4>
                            <a href="../THIS IS THE HOMEWORK TURNED IN.docx" download>Download</a>
                        </h4>
                    </div>

                    <div class="point-area">
                        <p> How many points out of 25</p>
                        <input type='number' />
                    </div>

                    <div class="post-area">
                        <button type="button" id="post" class="btn">Post Grade</button>
                    </div>
                </form>
            </div>

        </main>
        <footer></footer>
    </div>
    <aside></aside>
</body>

<script>
    var dt = new Date();
    var NoTimeDate = dt.getFullYear() + '/' + (dt.getMonth() + 1) + '/' + dt.getDate();
    document.getElementById('date').innerHTML = NoTimeDate;
</script>



</html>