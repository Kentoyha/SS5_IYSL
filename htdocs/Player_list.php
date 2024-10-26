<?php
    include("db_connect.php");
    include("menu.php");
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

    <br>
    <br>
    <br>
    <br>


<h1> PLAYERS </h1>

</form>
<div>
<button ><a href="InsPlaya.php">Add player</a></button>
<button class="redd"><a href="Delete.php">Delete player</a></button>
</div>
    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <tr>
            <th> Player Id </th>
            <th>Last name</th>
            <th>First name</th>
            <th>Middle name</th>
            <th> Date of birth </th>
            <th> Email </th>
            <th>Contact Number</th>
            
            <th>Team id</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM Players ORDER BY Last_name ASC";
        $query = mysqli_query($conn, $sql);
        if(!$query) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            while($result = mysqli_fetch_assoc($query)) {

                echo "<tr>";
                echo "<td>" . $result["Player_id"] . "</td>";
                echo "<td>" . $result["Last_name"] . "</td>";
                echo "<td>"  . $result["First_name"] .   "</td>";
                echo "<td>"  . $result["Middle_name"] .  "</td>";
                echo "<td>" . date("F d, Y", strtotime($result["Date_of_birth"])) . "</td>";
                echo "<td>" . $result["Email"] . "</td>";
                echo "<td>" . $result["Contact_number"] . "</td>";
                echo "<td>" . $result["Team_id"] . "</td>";
                echo "<tr>";

            }
        }
    ?>
    </body>
    