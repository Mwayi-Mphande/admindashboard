<?php 
        require "connection.php";
        session_start();
         
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Dashboard - Zamphanvu Fitness</title>
    <meta content="" name="description">
    <meta content="" name="keyword">

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
    
    <!--======== Header =======-->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-itemns-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/ZAMPHANVU FITNESS LOGO.PNG" alt="">
                <span class="d-none d-lg-block">Zamphanvu Fitness</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- end logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="post" action="">
                <input type="text" name="" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End search bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End search icon-->

               <li class="nav-item dropdown">
             <!--   ?php 
                        $sql_get = mysqli_query($conn, "SELECT * FROM (databasename) WHERE (status= 0)");               
                        $count = mysqli_num_rows($sql_get);
                ?>-->
                
                <!--  notificaton -->
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number"><!--?php echo $count; ?>--></span>                                                                          
                </a><!-- end notificaton-->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have <?php echo"count";?>4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Peditsa Gongolo</h4>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <p>20 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Chisomo Misomali</h4>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <p>40 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-suuccess"></i>
                        <div>
                            <h4>Pachalo Gongwe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <p>20 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Fungie Kalumbe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <p>20 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!--end notification dropdown items -->

               </li><!-- end notification -->
               
               <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number"><!--php number-->3</span>
                </a><!--end message icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        <!--message php-->You have 3 messages
                        <a href="#"><span class="badge rounded-pill bg-primaty p-2 ms-2">View all </span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Janet Banda</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Peter Sono</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Mercy Phiri</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul><!-- end messages dropdown items -->

               </li><!-- end message nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-tems-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile.jpg" alt="profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Zamphanvu Admin</span>   
                    </a><!--end profile image -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>John Banda</h6>
                            <span>Trainer</span>
                        </li>
                        <li>
                            <hr class="dropdwon-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="user-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="user-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="user-profile.html">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown--->    
               </li><!-- End profile nav-->
            </ul>
        </nav><!-- End Icons  Navigation-->
    </header><!-- End Header --->
    

    <!---====== Sidebar =======------>
    <aside id="sidebar" class="sidebar">
        
        <ul class="sidebar-nav" id="sidebar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!--End Dashboard Nav-->

            <li class="nav-item">
                <a  class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Registered Clients</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parant="#sidebar-nav">
                    <li>
                        <a href="clients.php">
                            <i class="bi bi-circle" ></i><span>All Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_clients.php">
                            <i class="bi bi-circle" ></i><span>Add Clients</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a  class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Application</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse" data-bs-parant="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle" ></i><span>App Perfo<?php echo $row['']?>
                        </a>
                    </li>
                    
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a  class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="form-nav" class="nav-content collapse" data-bs-parant="#sidebar-nav">
                    <li>
                        <a href="admin_profile.php">
                            <i class="bi bi-circle" ></i><span>Account Settings</span>
                        </a>
                    </li>
                    
                </ul>
            </li><!-- End Components Nav -->
         </ul>   
          


    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Registration</li>
                    <li class="breadcrumb-item active">All Clients</li>
                </ol>   
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Clients Table</div>
                        

                        <!--Table Now-->
                        <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Payment</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php 
                                        $sql ="SELECT * FROM clients";
                                        $result =$conn-> query($sql);

                                        while ($row =mysqli_fetch_assoc($result)){
                                            ?>
                                <tr>
                                                <th scope="row"><?php echo $row['id']?></th>
                                                <td><?php echo $row['client_name']?></td>
                                                <td><?php echo $row['category']?></td>
                                                <td><?php echo $row['age']?></td>
                                                <td><?php echo $row['payment']?></td>
                                                <td><?php echo $row['date']?></td>
                                                <td>
                                                    <a href="edit_client.php?id=$row[id]" id=<?php echo $row['id'];?> class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="delete_clients.php?id=$row[id]" id=<?php echo $row['id'];?> class="btn btn-danger rounded-pill" onclick="return confirm('Are you sure you want to delete');"><i class="bi bi-trash"></i></a>
                                                </td>
                                </tr>
                                    <?php
                                        }
                                    ?>
                                
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>







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