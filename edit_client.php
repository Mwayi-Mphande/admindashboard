<?php
    $conn = mysqli_connect("localhost", "root", "", "zamphanvu_fitness");

    

   
    $id = "";
    $client_name = "";
    $category = "";
    $age = "";
    $payment = "";
    $date = "";

    $errorMessage = "";
    $successMessage= "";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //GET method :show data of the client
        if(!isset($_GET["id"])){
            header("location: /Zamphanvu Fitness/clients.php");
            exit;
        }
        $id = $_GET["id"];

        //read the row of the selectected client from the database table
        $sql ="SELECT * FROM clients WHERE id=$id ";
        $result =$conn-> query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header("location:/Zamphanvu fitness/clients.php");
            exit;
        }

        $client_name = $_POST['name'];
        $category = $_POST["category"];
        $age = $_POST["age"];
        $payment = $_POST["payment"];
        $date = $_POST["date"];
    }
    else{
        //POST method: update the data of the client
        $id =$_POST["id"];
        $client_name = $_POST['name'];
        $category = $_POST["category"];
        $age = $_POST["age"];
        $payment = $_POST["payment"];
        $date = $_POST["date"];

        do{
            if( empty($id) ||  empty($client_name) ||  empty($category) ||  empty($age) ||  empty($payment) || empty($date) ){
                $errorMessage = "Fill fields";
                break;
            }

            $sql ="UPDATE clients";
                    "SET name = '$client_name', category= '$category', age= '$age', payment= '$payment', date= '$date'". 
                    "WHERE id = $id";

            $result =$conn->query($sql);
            
            if(!$result){
                $errorMessage ="Invalid query: " .$conn->error;
                break;
            }

            $successMessage = "client update correctly";

            header("location:/Zamphanvu fitness/clients.php");
            exit;
        }while(true);
            
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Clients</title>

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
</head>
<body>
    
   <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/ZAMPHANVU FITNESS LOGO.png" alt="">
                                    <span class="d-none d-lg-block">Zamphanvu Fitness</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                            <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Add Client</h5>
                                <p class="text-center small">Enter Clients`s Details</p>
                            </div>

                            <form action="#" method="POST" class="row g-3 needs-validation" novalidate>
                                <input type="hidden" value="<?php echo $id['id'];?>">
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="yourName" value="<?php echo $client_name['name'];?>" required>
                                </div>

                                <div class="col-12">
                                    <label for="yourName" class="form-label">Category</label>
                                    <input type="text" name="category" class="form-control" id="yourName" value="<?php echo $category['category'];?>" required>
                                </div>

                                <div class="col-12">
                                    <label for="yourName" class="form-label">Age</label>
                                    <input type="text" name="age" class="form-control" id="yourName" value="<?php echo $age['age'];?>" required>
                                </div>    

                                <div class="col-12">
                                    <label for="yourName" class="form-label">Payment</label>
                                    <input type="text" name="payment" class="form-control" id="yourName" value="<?php echo $payment['payment'];?>" required>
                                </div>

                                <div class="col-12">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                         <div class="col-sm-10">
                                            <input type="date"  name="date" class="form-control" value="<?php echo $date['date'];?>">
                                        </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" name="submit" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="credits">
                        By Zamphanvu Fitness  <a href="index.php">Dashboard</a>
                    </div>
                </div>
            </section>
        </div>
   </main>
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