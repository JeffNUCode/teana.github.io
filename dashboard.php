<!doctype html>
 <html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/title.png"/>

    <link rel="apple-touch-icon" href="../apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/stylez.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="open">


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php"><img src="images/teana.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="dashboard.php"><img src="images/title-2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                </ul>
            </div>
              <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="specs.php"> <i class="menu-icon fa fa-file-text"></i>Order Specification</a>
                    </li>
                </ul>
            </div>
                   <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active">
                        <a href="cusDet.php"> <i class="menu-icon fa fa-user"></i>Customer Details</a>
                    </li>
                </ul>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active">
                        <a href="supDet.php"> <i class="menu-icon fa fa-handshake-o"></i>Supplier Details</a>
                    </li>
                </ul>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active">
                        <a href="orderHis.php"> <i class="menu-icon fa fa-calendar"></i>Order History</a>
                    </li>
                </ul>
            </div>
              <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html" name="logout"> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
        

        

                        <div class="dropdown for-message">
                            <img src="images\head_final.png" height="100" width="600">
                        </div>
                    </div>
                </div>
                       <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                </div>
            </div>
            </div>

        </header><!-- /header -->

        <div class="content mt-3">
        <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Hi Admin!</span> Here's the Daily Reports and Records!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

          <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">

                              <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(*) FROM customer_order WHERE status = 'Delayed'");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(*)'];
                             }
                            ?>
                            <center><span class="count"><?php echo $mark ?></</span></center>
                        </h4>
                       <center> <p class="text-light">Items Delayed</p></center>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            </div>
                        </div>
                        <h4 class="mb-0">
                          <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(*) FROM customer_order WHERE status = 'To be delivered'");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(*)'];
                             }
                            ?>
                            <center><span class="count"><?php echo $mark ?></span></center>
                        </h4>
                            <center> <p class="text-light">Items to be Delivered</p> </center>

                    </div>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                </div>
            </div>

                  <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                      
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                            </div>
                        </div>
                        <h4 class="mb-0">
                                <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(*) FROM customer_order WHERE status = 'Delivered'");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(*)'];
                             }
                            ?>
                           <center> <span class="count"><?php echo $mark ?></span></center>
                        </h4>
                        <center><p class="text-light">Items Delivered</p></center>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>

                   <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            </div>
                        </div>
                        <h4 class="mb-0">
                               <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(supplier_id) FROM supplier");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(supplier_id)'];
                             }
                            ?>
                            <center><span class="count"><?php echo $mark ?></span></center>
                        </h4>
                            <center><p class="text-light">Total Number of Suppliers</p></center>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>



                        <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Company Performance Graph</h4>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                              
                            </div><!--/.col-->


                        </div><!--/.row-->
                        <div class="chart-wrapper mt-4" >
                            <canvas id="trafficChart" style="height:200px;" height="200" width="400"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                            <?php
 
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,'SELECT COUNT(customer_id) FROM `customer_order`');
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(customer_id)'];
                         }
                            ?>
                                <div class="text-muted">Customers</div>
                                <strong><?php echo $mark ?></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Delivered Products</div>

                                  <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(*) FROM customer_order WHERE status = 'Delivered'");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(*)'];
                             }
                            ?>
                                <strong><?php echo $mark ?></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                   <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <?php
 
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,'SELECT COUNT(customer_id) FROM `customer_order`');
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(customer_id)'];
                         }
                                $mark1 = $mark - 4;
                            ?>
                                        <div class="stat-digit"><?php echo $mark1 ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">9,065</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-stats-up text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Daily sales as of today</div>
                                            <div class="stat-text">Total: P8035.23</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-server text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Database status</div>
                                            <div class="stat-text">Very Good</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="ccol-lg-3 col-md-6">
                           <div class="card-group">
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-users"></i>
                                    </div>

                                    <div class="h4 mb-0">
                                        <?php
 
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,'SELECT COUNT(customer_id) FROM `customer_order`');
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(customer_id)'];
                         }
                            ?>
                                        <span class="count"><?php echo $mark ?></span>
                                    </div>

                                    <small class="text-muted text-uppercase font-weight-bold">Customers</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <?php
 
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,'SELECT COUNT(customer_id)  FROM `customer_order`');
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(customer_id)'];
                         }
                                $mark1 = $mark - 5;
                            ?>
                                        <span class="count"><?php echo $mark1 ?></span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-cart-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">

                                        <?php
                            $con = mysqli_connect('localhost', 'root','','teana');
                            $result=mysqli_query($con,"SELECT COUNT(*) FROM customer_order WHERE status = 'Delivered'");
                            while($row1 = mysqli_fetch_array($result)){
                               $mark = $row1['COUNT(*)'];
                             }
                            ?>

                                        <span class="count"><?php echo $mark ?></span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">80</span>%
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Returning Customers</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="h4 mb-0">5:34:11</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Delivery Time</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">25</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Feedbacks</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /# card -->
            </div>




                </div>
            </div>


           
           
          







        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
      <script>
      function initMap() {
            var uluru = {lat: 14.6043, lng: 120.9944};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>