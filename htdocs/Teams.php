<?php
    include("db_connect.php");
    include("menu.php");
    include("header.php");
?>
    <head><link rel="stylesheet" href="teams.css"></head>
    <body>
    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <h1>TEAMS</h1>
<div>
    <button><a href="Insert.php">Add team</a></button>
    <button class="red"><a href="Delete_team.php">Delete team</a></button>
</div>
        <tr>
            <th> Team Id </th>
            <th> Team Name </th>
            <th> City </th>
            <th> Manager's Last name</th>
            <th>  Manager'sFirst name</th>
            <th>Manager's Middle name</th>
            
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
                 echo "<td>" . $result["Manager_Lastname"] . "</td>";
                 echo "<td>" . $result["Manager_Firstname"] . "</td>";
                 echo "<td>" . $result["Manager_Middlename"] ."</td>";
             }
         }

     ?>
     </table>
         </body>