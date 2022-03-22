<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 1</title>
</head>
<body>
    
    <?php 
        $title = "Contact Information";
        $name = "John Doe";
        $email = "john@apu.edu.my";
        $address[0] = "Lot 6 Technology Park Malaysia";
        $address[1] = "Bukit Jalil";
        $address[2] = "Kuala Lumpur";
        $postcode = "57000";
        $telephone = "0389961000";

        echo "<h1>$title</h1>";
        echo "
        <ul>
        <li>Name: $name</li>
        <li>Email: $email</li>
        <li>Address: 
            <ul>
            <li>$address[0]</li>
            <li>$postcode, $address[1]</li>
            <li>$address[2]</li>
            </ul>
        </li>
        <li>Telephone: $telephone</li>
        </ul>";
    ?>

</body>
</html>