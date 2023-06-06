<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Pharmaco</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" style="border-radius: 100px">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
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
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
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
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Medicine</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">

          <li>
            <a href="add_medicine.php">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>

          <li>
            <a href="includes\medicine_list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>

          <li>
            <a href="pharmacy_stock.php" class="active">
              <i class="bi bi-circle"></i><span>Stock</span>
            </a>
          </li>
    

        </ul>
      </li><!-- End Forms Nav -->
    
      <li class="nav-heading">Pages</li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Stock</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Stock</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card" style="border-radius: 30px">
                <div class="card-body">
                    <h6 class="card-title">Pharmacy Stock</h6>
                    <div class="ml-auto py-1">
                        <a href="manage_pharmacy.php" class="btn btn-primary rounded-pill">REQUISITION</a>
                    </div>
                    <!-- Search Bar -->
                    <div class="input-group mb-2 py-2">
                        <input type="text" id="search-input" class="form-control" placeholder="Medicine Name" style="border-radius: 100px; margin-right: 4px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-pill px-3" id="search-btn">Search</button>
                        </div>
                    </div>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <!-- Table headers -->
                        <thead>
                            <tr class="bg-warning">
                                <th scope="col"><a href="pharmacy_stock.php?sort=id">ID</a></th>
                                <th scope="col"><a href="pharmacy_stock.php?sort=medicine_name">Medicine Name</a></th>
                                <th scope="col"><a href="pharmacy_stock.php?sort=medicine_type">Stock Available</a></th>
                                <th scope="col"><a href="pharmacy_stock.php?sort=capacity">Capacity</a></th>
                                <th scope="col"><a href="pharmacy_stock.php?sort=expiry_date">Expiry Date</a></th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body -->
                        <tbody id="output">
                            <?php
                            // DB connection 
                            require "includes\conn.php";

                            // Check if search query is set
                            $search = isset($_GET['search']) ? $_GET['search'] : '';

                            // Pagination 
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $num_per_page = 5;
                            $start_from = ($page - 1) * $num_per_page;

                            // Sorting
                            $sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
                            $sort_query = "SELECT * FROM store WHERE medicine_name LIKE '%$search%' ORDER BY $sort ASC LIMIT $start_from, $num_per_page";
                            $res = mysqli_query($conn, $sort_query);

                            // Check if there are any records in the DB
                            if ($res == TRUE) {
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        $id = $rows['id'];
                                        $medicine_name = $rows['medicine_name'];
                                        $medicine_type = $rows['medicine_type']; // Updated column name
                                        $capacity = $rows['capacity'];
                                        $expiry_date = $rows['expiry_date'];
                                        ?>
                                        <tr>
                                            <th><?php echo $id; ?></th>
                                            <td class="px-3"><?php echo $medicine_name; ?></td>
                                            <td class="px-3"><?php echo $medicine_type; ?></td> <!-- Updated variable name -->
                                            <td class="px-3"><?php echo $capacity; ?></td>
                                            <td class="px-3"><?php echo $expiry_date; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-danger rounded-pill"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="6" class="text-center">No records found.</td></tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table><!-- End Table with hoverable rows -->

                    <!-- Pagination -->
                    <div class="col-md-6 col-md-3">
                        <?php
                        // Select data from DB
                        $pr_query = "SELECT COUNT(*) AS total FROM store WHERE medicine_name LIKE '%$search%'";
                        $pr_result = mysqli_query($conn, $pr_query);
                        $row = mysqli_fetch_assoc($pr_result);
                        $total_record = $row['total'];
                        $total_page = ceil($total_record / $num_per_page);

                        if ($page > 1) {
                            echo "<a href='pharmacy_stock.php?page=" . ($page - 1) . "&sort=$sort&search=$search' class='btn btn-secondary rounded-pill'>Previous</a> ";
                        }

                        for ($i = 1; $i <= $total_page; $i++) {
                            echo "<a href='pharmacy_stock.php?page=" . $i . "&sort=$sort&search=$search' class='btn btn-success rounded-pill'>$i</a> ";
                        }

                        if ($page < $total_page) {
                            echo "<a href='pharmacy_stock.php?page=" . ($page + 1) . "&sort=$sort&search=$search' class='btn btn-warning rounded-pill'>Next</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<script>
    // JavaScript code for searching the table dynamically
    document.getElementById("search-btn").addEventListener("click", function() {
        var searchInput = document.getElementById("search-input").value;
        var searchQuery = encodeURIComponent(searchInput.trim());
        var currentUrl = window.location.href;
        var newUrl;

        if (currentUrl.includes("?")) {
            if (currentUrl.includes("search=")) {
                newUrl = currentUrl.replace(/search=[^&]+/, "search=" + searchQuery);
            } else {
                newUrl = currentUrl + "&search=" + searchQuery;
            }
        } else {
            newUrl = currentUrl + "?search=" + searchQuery;
        }

        window.location.href = newUrl;
    });
</script>




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Pharmaco</span></strong>. All Rights Reserved
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>