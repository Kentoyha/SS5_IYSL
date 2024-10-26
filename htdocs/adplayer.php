<?php
include("db_connect.php");
include("menu.php");
include("header.php");
?>
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $dateofbirth = $_POST['birthdate'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $playerid =  $_POST['playerid'];

    $sql = "SELECT * FROM Players WHERE Player_id = '$playerid'";
            $query = mysqli_query($conn, $sql);
            if(mysqli_num_rows($query) > 0) {
                echo "<script> alert('Student already exists'); </script>";
            } else {
                $sql = "INSERT INTO Players (  Playerid,Firstname, Lastname, Middlename, Birthdate,Email,Contact ) VALUES (' $player','$firstname', '$lastname', '$middlename', '$dateofbirth'', '$email')";
                $query = mysqli_query($conn, $sql);
                if($query) {
                    echo "<script> alert('Student inserted successfully'); window.location='student_list.php';</script>";
                } else {
                    echo "<script> alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "'); </script>";
                }
            }
                
        }
    ?>

<body>
<form method="Post">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Playerid</td>
                <td> <input type="number" name="playerid" required> </td>
            </tr>
            <tr>
                <td> Firstname</td>
                <td> <input type="text" name="firstname" required> </td>
            </tr>
            <tr>
                <td> lastname </td>
                <td> <input type="text" name="lastname" required> </td>
            </tr>
            <tr>
                <td> middlename </td>
                <td> <input type="text" name="middlename" required> </td>
            </tr>
            <tr>
                <td> birthdate </td>
                <td> <input type="date" name="birthdate" required> </td>
            </tr>
            <tr>
                <td> email </td>
                <td> <input type="text" name="email" required> </td>
            </tr>
            <tr>
                <td> contact </td>
                <td> <input type="number" name="contact" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit"> Insert Student </button>
                </td>
            </tr>
    </form>
</body>