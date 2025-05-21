<?php 
require_once("./settings.php");

if($conn){
    $query = "select * from cars";
    $result = mysqli_query($conn,$query);
    // echo (mysqli_fetch_assoc($result));
    if($result){
        echo "<table border=1>";
        while($row = mysqli_fetch_assoc($result)){
           echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>"; 
        }
        echo "</table>";
        echo "<a href='search_form.php'>Search</a>";
    }else{
        echo "There are no cars to display";
    }
    
}else{
    die ("Connection Failed". mysqli_connect_error($conn));
}



mysqli_close($conn);
?>