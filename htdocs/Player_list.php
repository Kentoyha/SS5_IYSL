<?php
    include("db_connect.php");
    include("menu.php");
    include("header.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Player List</title>
    <link rel="stylesheet" href="playerlist.css">
</head>
<body>
    <h1 class="title">PLAYERS</h1>

    <div class="button-container">
        <button><a href="Addplayer.php">Add player</a></button>
        <button class="redd"><a href="Delete.php">Delete player</a></button>
    </div>

    

    

    <table class="player-table" border="1" align="center" cellspacing="0" cellpadding="10">
        
        <thead>
            <tr>
                <th>Player Id</th>
                <th>Full Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Team Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM Players  ORDER BY Last_name ASC";
                $query = mysqli_query($conn, $sql);
                if (!$query) {
                    echo "<tr><td colspan='8'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</td></tr>";
                } else {
                    while ($result = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>" . ($result["Player_id"]) . "</td>";
                        echo "<td>" .($result["Last_name"]) . "," . ($result["First_name"]) . "," . ($result["Middle_name"]) ."</td>";
                        
                        echo "<td>" . date("F d, Y", strtotime($result["Date_of_birth"])) . "</td>";
                        echo "<td>" . ($result["Email"]) . "</td>";
                        echo "<td>" . ($result["Contact_number"]) . "</td>";
                        echo "<td>" . ($result["Team_id"]) . "</td>";
                        echo"<td> Kupal kaba boss? </td> ";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
