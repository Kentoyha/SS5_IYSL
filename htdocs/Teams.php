<?php
    include("db_connect.php");
    include("menu.php");
    include("header.php");
?>
    <head><link rel="stylesheet" href="teams.css"></head>
    <body>
    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <h1>TEAMS</h1>
<div class="button-container" >
    <button><a href="Insert_team.php">Add team</a></button>
  
</div>
        <tr>
            <th> Team Id </th>
            <th> Team Name </th>
            <th> City </th>
            <th> Manager's Full name</th>
            <th> Action </th>

           
            
        </tr>
        
        <?php
         $sql = "SELECT * FROM Team ORDER BY Team_Name ASC";
         $query = mysqli_query($conn, $sql);
         if(!$query) {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         } else {
             while($result = mysqli_fetch_assoc($query)) {
                 echo "<tr>";
                 echo "<td>" . $result["Team_id"] . "</td>";
                 echo "<td>" . $result["Team_name"] . "</td>";
                 echo "<td>" . $result["City"] . "</td>";
                 echo "<td>" . $result["Manager_Lastname"] . ", " . $result["Manager_Firstname"] . ", " . $result["Manager_Middlename"] . "</td>";
                    echo "<td><a class='actbutton' href='Edit_team.php?team_id=" . $result["Team_id"] . "'>Edit</a> <a class='actbutton' href='Delete_team.php?team_id=" . $result["Team_id"] . "'>Delete</a></td>";
                    

                echo "</tr>";
             }
         }

     ?>
     </table>
         </body>