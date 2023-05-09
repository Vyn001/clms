<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php include "inc/head.html"; ?>
</head>

<body id="top">
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <?php include "inc/nav.php" ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "inc/header.php" ?>
            <!-- Navbar End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-calendar fa-3x"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pending</p>
                                <h6 class="mb-0 text-danger ">2</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x"></i>
                            <div class="ms-3">
                                <p class="mb-2">Lab Assistants</p>
                                <h6 class="mb-0 text-dark">15</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-check-square fa-3x"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today's Classes</p>
                                <h6 class="mb-0 text-dark">10</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x"></i>
                            <div class="ms-3">
                                <p class="mb-2">On Duty Today</p>
                                <h6 class="mb-0 text-success">7</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- List of Lab Assistants -->
            <div class="container-fluid pt-4 px-4" id="tab">
                <div class="bg-secondary text-center rounded p-4">

                    <h5 class="fw-bold text-dark">List of Laboratory Assitants</h5>
                    <div class="table-responsive">
                        <table class="table text-start align-middle  table-hover mb-0 " id="Lab">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Doe</td>
                                    <td>Jhon</td>
                                    <td>Paid@gmail.com</td>
                                    <td>123456</td>
                                </tr>
                            </tbody>
                        </table>
                        <script>
                            let adminsTable = new DataTable('#Lab', {
                                responsive: true,
                                lengthMenu: [
                                    [5, 10, 15, -1],
                                    [5, 10, 15, 'All']
                                ],
                                scrollX: false,
                                initComplete: function() {
                                    table.columns.adjust();
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!-- End of list -->
            <!--Time in -->
            <div class="container-fluid pt-4 px-4" id="tab">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-end mb-4 text-danger">
                        <a href="" class=" text-dark text-end" style="background-color:#F97B22;"></a>
                    </div>
                    <h5 class="fw-bold text-dark">Time in and Time out</h5>
                    <div class="table-responsive">
                        <table class="table text-start align-middle  table-hover mb-0 " id="timein">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Doe</td>
                                    <td>Jhon</td>
                                    <td>Paid@gmail.com</td>
                                    <td>123456</td>
                                </tr>
                            </tbody>
                        </table>
                        <script>
                            let timein = new DataTable('#timein', {
                                responsive: true,
                                lengthMenu: [
                                    [5, 10, 15, -1],
                                    [5, 10, 15, 'All']
                                ],
                                scrollX: false,
                                initComplete: function() {
                                    table.columns.adjust();
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!--end time in-->





        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>