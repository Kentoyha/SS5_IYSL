<?php
include("db_connect.php");
include("menu.php");
include("header.php");

?>
 <link rel="stylesheet" href="home.css">
<body>  
        <h1>International Youth Soccer League</h1>
        <h2 align="center">Latest Games </h2>
        <table border="1" align="center" cellspacing="0" cellpadding="10">
        <tr>
            <th>Game id</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Home team </th>
            <th>Away team </th>
            <th>Home score</th>
            <th>Away score</th>
        </tr>

        <?php
       $sql = "SELECT * FROM Game";
       $query = mysqli_query($conn, $sql);
        if (!$query){
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            while($result = mysqli_fetch_assoc($query)) {

                echo "<tr>";
                echo "<td><a href='game_details.php?game_id=" . $result["Game_id"] . "'>" . $result["Game_id"] . "</a></td>";
                echo "<td>" . $result["Date"] . "</td>";
                echo "<td>" . $result["Time"] . "</td>";
                echo "<td>" . $result["Location"] . "</td>";
                echo "<td>" . $result["Home_team_id"] . "</td>";
                echo "<td>" . $result["Away_team_id"] . "</td>";
                echo "<td>" . $result["home_score"] . "</td>";
                echo "<td>" . $result["away_score"] . "</td>";
                echo "</tr>";
            }
        }
  
       
        ?>

      
        
    </body>
