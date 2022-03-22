<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>
</head>
<body>
    
    <?php 
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $hour = date('H');
        // $hour = 21; #for testing
        if($hour >= 6 and $hour <= 12){
            $image = "morning.jpg";
        }
        else if($hour >= 12 and $hour <= 18){
            $image = "afternoon.jpg";
        }
        else{   
            $image = "night.jpg";
        }
        echo '<body style="background-image:url(media/'.$image.')">';
    ?>

</body>
</html>