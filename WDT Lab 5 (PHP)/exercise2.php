<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 2</title>
</head>
<body>
    <h1>Temperature Conversion</h1>
    <form action="exercise2.php" method="post">
        Temperature Value: <br>
        <input type="number" name="temperature">
        <br>
        <select name="temp_unit" id="temp_unit">
            <option value="Please Select" selected>Please Select</option>
            <option value="Degree Centigrade">Degree Centigrade</option>
            <option value="Degree Fahrenheit">Degree Fahrenheit</option>
        </select>
        <br><br><br><br>
        <input type="submit">
    </form>
    
    <?php 
        $temperature = $_POST["temperature"];
        $temp_unit = $_POST["temp_unit"];
        if (isset($temperature) and $temp_unit== "Degree Centigrade")
        {
            $result = $temperature * 9 / 5 + 32;
            echo "$temperature $temp_unit = $result Degree Fahrenheit";
        }
        else if (isset($temperature) and $temp_unit == "Degree Fahrenheit")
        {
            $result = ($temperature - 32) * 5 / 9;
            echo "$temperature $temp_unit = $result Degree Centigrade";
        }
        else{
            echo "Please insert a number or choose a temperature unit.";
        }
    ?>


</body>
</html>