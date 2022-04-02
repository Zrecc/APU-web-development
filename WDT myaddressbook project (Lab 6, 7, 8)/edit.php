<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit profile</title>
</head>
<body>
    <?php
    include("conn.php");
    $id = intval($_GET['id']); //intval — Get the integer value of a variable
    $result = mysqli_query($con,"SELECT * FROM contacts WHERE id=$id");
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <table style="width:30%; border: 1px solid black;">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $row['contact_name'] ?>" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone_num" value="<?php echo $row['contact_phone'] ?>" required></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email_address" value="<?php echo $row['contact_email'] ?>" required></td>
            </tr>
            <tr>
                <td>Home Address:</td>
                <td><textarea name="home_address" required><?php echo $row['contact_address'] ?></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label><input type="radio" name="gender" 
                    <?php if ($row['contact_gender'] == "Male") { ?> checked="checked"
                    <?php } ?> value="Male" required>Male</label>
                    <label><input type="radio" name="gender" 
                    <?php if ($row['contact_gender'] == "Female") { ?>
                    checked="checked"
                    <?php } ?> value="Female" required>Female</label>
                </td>
            </tr>
            <tr>
                <td>Relationship:</td>
                <td><select name="relationship" required="required">
                        <option value="">Please select</option>
                        <option value="Family" 
                        <?php if ($row['contact_relationship'] == "Family") { ?> 
                            selected="selected"
                        <?php } ?> >Family</option>

                        <option value="Friend"
                        <?php if ($row['contact_relationship'] == "Friend") { ?> 
                            selected="selected"
                        <?php } ?> >Friend</option>
                        
                        <option value="Colleague" 
                        <?php if ($row['contact_relationship'] == "Colleague") { ?> 
                            selected="selected"
                        <?php } ?> >Colleague</option>
                        <option value="Other" 
                        <?php if ($row['contact_relationship'] == "Other") { ?> 
                            selected="selected"
                        <?php } ?> >Colleague</option> >Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" value="<?php echo $row['contact_dob'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><br><br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    mysqli_close($con);
    ?>
</body>
</html>