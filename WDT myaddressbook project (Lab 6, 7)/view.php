<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php include("conn.php");
    $result = mysqli_query($con,"SELECT * FROM contacts");
    ?>

    <table width="90%">
        <tr bgcolor="#CC99FF">
            <td>Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Relationship</td>
            <td>DOB</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>   
        <?php
            while($row = mysqli_fetch_array($result))
            {
            echo '<tr bgcolor="#99FF66">';
                echo "<td>";
                echo $row['contact_name'];
                echo "</td>";

                echo "<td>";
                echo $row['contact_phone'];
                echo "</td>";

                echo "<td>";
                echo " <a href=\"mailto:" . $row['contact_email']. "\">". $row['contact_email'] . "</a> "; // Hyperlink 
                echo "</td>";

                echo "<td>";
                echo $row['contact_address'];
                echo "</td>";

                echo "<td>";
                echo $row['contact_gender'];
                echo "</td>";

                echo "<td>";
                echo $row['contact_relationship'];
                echo "</td>";

                echo "<td>";
                echo $row['contact_dob'];
                echo "</td>";

                echo "<td><a href=\"edit.php?id="; //edit.php will be created in Lab 8
                echo $row['id'];
                echo "\">Edit</a></td>";
                
                echo "<td><a href=\"delete.php?id="; //hyperlink to delete.php page with ‘id’ parameter
                echo $row['id'];
                echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
                echo $row['contact_name'];
                echo " details?');\">Delete</a></td></tr>";
            }
            mysqli_close($con); //to close the database connection
        ?>
    </table>


    
</body>
</html>