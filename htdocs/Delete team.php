<?php
include("db_connect.php");
include("menu.php");
include ("header.php");

?>
<html>
<head>
    <link rel="stylesheet" href="delteam.css"></link>
</head>
<body>
<br>
<br>
<br>
<h1>Delete Team</h1>
<form method="get">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Team id  </td>
                <td> <input type="text" name="team_id" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="DeleteT"> Delete</button>
                </td>
            </tr>
    
    </form>
    
</body>
</html>


    
    <?php
    

    if(isset($_GET['DeleteT'])) {
        $team_id = $_GET['team_id'];
       
        $sql = "DELETE FROM Team WHERE Team_id = $team_id";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            echo"<script>alert ('Team is deleted'); window.location='Teams.php'; </script>";

        }else {
            echo "<script> alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "'); </script>";
        }
            
    }



    ?>