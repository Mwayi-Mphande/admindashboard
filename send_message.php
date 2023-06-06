<?php 

   include_once 'connection.php';
    if(isset($_POST['submit'])){

    }
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $date = date('y-m-d   h:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send message</title>

    <!-- Favicons -->
    <link href="assets/img/ZAMPHANVU FITNESS LOGO.PNG" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        img{
            height: 700px;
        }
    </style>
</head>
<body>
    <form method="POST">    

        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Your Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control">
                </div>
        </div>

        <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="msg"  placeholder="Enter your message" style="height: 100px"></textarea>
                </div>
        </div>  

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                    <button type="submit" name="Submit" class="btn btn-primary">Submit Form</button>
                </div>
        </div>   

    </form>  

     <!-- Vendor JS Files -->
     <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>






