<?php
include("db_connect.php");
?>

<head>
<link rel="stylesheet" href="all.css">  </link>
</head>

<body>
    <?php
        include("menu.php");
        include("header.php");
    ?>

<h1>Register a Team</h1>

    <form method="post">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
           
            <tr>
                <td> Team Name </td>
                <td> <input type="text" name="team_name" required> </td>
            </tr>
            <tr>
                <td> City </td>
                <td> <input type="text" name="city" required > </td>
            </tr>
            <tr>
                <td> Manager's Last Name </td>
                <td> <input type="text" name="Manager_lastname" required > </td>
            </tr>
            <tr>
                <td> Manager's First name </td>
                <td> <input type="text" name="Manager_firstname" required > </td>
            </tr>
            <tr>
                <td> Manager's Middle Name </td>
                <td> <input type="text" name="Manager_middlename" > </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" name="Insert"> Create Team</button>
                </td>
            </tr>
    </form>
    


    <?php
        if(isset($_POST['Insert'])) {
           
            $team_name = $_POST['team_name'];
            $city = $_POST['city'];
            $Manager_Lname = $_POST['Manager_lastname'];
            $Manager_Fname = $_POST['Manager_firstname'];
            $Manager_Mname = $_POST['Manager_middlename'];
           
           
           {
                $sql = "INSERT INTO Team (Team_name, City, Manager_Lastname , Manager_Firstname , Manager_Middlename)
                 VALUES ('$team_name', '$city', '$Manager_Lname', '$Manager_Fname' , '$Manager_Mname')";
                $query = mysqli_query($conn, $sql);
                if($query) {
                    echo "<script> alert(' Team is successfully registered'); window.location='Teams.php';</script>";
                } else {
                    echo "<script> alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "'); </script>";
                }
            }
                
        }
    ?>
</body>