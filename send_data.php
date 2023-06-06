<?php
    $conn = mysqli_connect("localhost", "root", "", "zamphanvu_fitness");

    mysqli_select_db($conn, "zamphanvu_fitness");

   if(isset($_POST['submit'])){
        $client_name = $_POST["name"];
        $category = $_POST["category"];
        $age = $_POST["age"];
        $payment = $_POST["payment"];
        $date = $_POST["date"];
        
        $query ="INSERT INTO `clients`(`name`,`category`,`age`,`payment`,`date`) VALUES ('".$client_name."', '".$category."', '".$age."', '".$payment."', '".$date."')";
        
        mysqli_query($conn,$query);  
    }

?>