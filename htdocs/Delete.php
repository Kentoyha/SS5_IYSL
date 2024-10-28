<?php
include("db_connect.php");
include("menu.php");

?>
<html>
<head>
    <link rel="stylesheet" href="delete.css"></link>
</head>
<body>
    <br>
    <br>
    <br>
<h1>Delete Player</h1>
<form method="get">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Player id  </td>
                <td> <input type="text" name="player_id" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="Delete"> Delete</button>
                </td>
            </tr>
    
    </form>
    
</body>

    </html>

    
    <?php
    

    if(isset($_GET['Delete'])) {
        $player_id = $_GET['player_id'];
       
        $sql = "DELETE FROM Players WHERE Player_id = $player_id";
        $query = mysqli_query($conn, $sql);

        

        if($query){
            echo"<script>alert ('Player is deleted'); window.location='Player_list.php'; </script>";

        }else {
            echo "<script> alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "'); </script>";
        }
            
        

    }



    ?>