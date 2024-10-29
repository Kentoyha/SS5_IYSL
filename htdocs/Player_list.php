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
    
    <table border="1" align="center" cellspacing="0" cellpadding="5">
        <form method="post">
            <tr>
                <th>
                    <select name="Player_lastname">
                        <option value=""> -- SELECT A PLAYER --</option>
                        <?php
                            $sql = "SELECT * FROM Players ORDER BY Last_name ASC";
                            $query = mysqli_query($conn, $sql);
                            if (!$query) {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            } else {
                                while ($result = mysqli_fetch_assoc($query)) {
                                    echo "<option value='{$result['Player_id']}'>{$result['Last_name']}, {$result['First_name']}</option>";
                                }
                            }
                        ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <button type="submit" class="button green" name='process_edit'><a href="Edit.php">Edit</button>
                    <button type="submit" class="button red" name='process_delete'><a href="Delete.php">Delete</button>
                </th>
            </tr>
        </form>
    </table>

    <div class="button-container">
        <button><a href="Addplayer.php">Add player</a></button>
       
    </div>

    

    

    <table class="player-table" border="1" align="center" cellspacing="0" cellpadding="10">
        
        <thead>
            <tr>
            
                <th>Full Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Contact Number</th>
                
               
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
                       
                        echo "<td>" .($result["Last_name"]) . "," . ($result["First_name"]) . "," . ($result["Middle_name"]) ."</td>";
                        
                        echo "<td>" . date("F d, Y", strtotime($result["Date_of_birth"])) . "</td>";
                        echo "<td>" . ($result["Email"]) . "</td>";
                        echo "<td>" . ($result["Contact_number"]) . "</td>";
                       
                       
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
