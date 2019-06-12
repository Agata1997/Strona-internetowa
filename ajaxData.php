<?php
//Include the database configuration file
//include 'connect.php';
include 'dbConfig.php';

if(!empty($_POST["miasto_id"])){
    //Fetch all usluga data
    $query = $db->query("SELECT * FROM usluga WHERE miasto_id = ".$_POST['miasto_id']." AND status = 1 ORDER BY usluga_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //usluga option list
    if($rowCount > 0){
        echo '<option value="">Select usluga</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['usluga_id'].'">'.$row['usluga_name'].'</option>';
        }
    }else{
        echo '<option value="">usluga not available</option>';
    }
}elseif(!empty($_POST["usluga_id"])){
    //Fetch all asystent data
    $query = $db->query("SELECT * FROM usługa WHERE usluga_id = ".$_POST['usluga_id']." AND status = 1 ORDER BY asystent_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //asystent option list
    if($rowCount > 0){
        echo '<option value="">Select asystent</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['asystent_id'].'">'.$row['asystent_name'].'</option>';
        }
    }else{
        echo '<option value="">asystent not available</option>';
    }
}
?>