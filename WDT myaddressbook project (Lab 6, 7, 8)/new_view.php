<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New view</title>
    <style>
        * {
            font-family: "Microsoft yahei";
            margin: 0;
        }
        a {
            display: inline-block;
            height: 50px;
            line-height: 50px;
            width: 200px;
            background-color: #A2D5AB;
            margin-left: 20px;
            text-decoration: none;
            text-align: center;
            border-radius: 12px;
            color: white;
            border: 1px solid #557B83;
        }
        div.flex-container {
            height: 550px;
            width: 100%;
            display: flex;
        }
        .search {
            margin-left: 20px;
        }
        ul {
            list-style: none;
            display: inline-block;
            height: 530px;
            width: 300px;
            background-color: #E5EFC1;
            border-radius: 12px;
            text-align: center;
            padding-left: 0px;
            margin-left: 20px;
        }

        ul li img {
            width: 100px;
            height: 100px;
        }

    </style>

</head>
<body>
    <br>
    <a href="default.html">Add New Contact</a> <br><br>
    <form action="new_view.php" method="$_GET" class="search">
        <div>Search: <input type="text" name="search"> <input type="submit"></div>
    </form>
    
    <br>
    <h1 align="center"; ><ins>Search result</ins></h1>
    <br><br>

    <?php 
        include("conn.php");
        $search = $_GET['search'];
        $result = mysqli_query($con,"SELECT * FROM contacts WHERE contact_name LIKE '$search'");
    ?>
    <div class="flex-container">
        <?php
            if (isset($result)) {
                while($row = mysqli_fetch_array($result))
                        {
                            echo "<ul>";
                            echo "<li>&nbsp;</li>";
                            if ($row['contact_gender']=="Male") {
                                echo "<li><img src='media/male.png'></li>";
                            }
                            else if ($row['contact_gender']=="Female") {
                                echo "<li><img src='media/female.png'></li>";
                            }
                            
                            echo "<li>".$row['contact_name']."</li><br>";

                            echo "<li>"."Phone Number:"."</li>";
                            echo "<li>".$row['contact_phone']."</li><br>";

                            echo "<li>"."Email:"."</li>";
                            echo "<li>".$row['contact_email']."</li><br>";

                            echo "<li>"."Home Address:"."</li>";
                            echo "<li>".$row['contact_address']."</li><br>";

                            echo "<li>"."Relationship:"."</li>";
                            echo "<li>".$row['contact_relationship']."</li><br>";

                            echo "<li>"."Date of Birth:"."</li>";
                            echo "<li>".$row['contact_dob']."</li><br>";
                            echo "</ul>";
                        } 
            }
        ?>
    </div>
</body>
</html>