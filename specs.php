<?php include('php_scripts/server.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Specification</title>
    <meta name="description" content="Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/title.png"/>

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

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
                <a class="navbar-brand" href="./"><img src="images/teana.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/title-2.png" alt="Logo"></a>
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
            </div>
            <!-- /.navbar-collapse -->
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
                                 <img src="images\head_final.png" height="100" width="650">
                       
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
                  <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
            
                    <div class="card"  style="margin-left: 500px; width: 800px; margin-top: 50px">
                        <style type="text/css">
                            .card-header {
                        padding: 0.75rem 1.25rem;
                        margin-bottom: 0;
                         background-color: #28a745;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
                        .card-header:first-child {
                        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
                       .card-header + .list-group .list-group-item:first-child {
                        border-top: 0; }
                        </style>
                      <div class="card-header">
                        <strong style="color:white;">Order Specification</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" >
                              <?php include('php_scripts/errors.php'); ?>
                            <!-- customer name -->
                          <div class="form-group"><label for="nf-picture" class=" form-control-label">Customer Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Customer Name">
                            </div>
                            <!-- address -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
                            </div>
                            <!-- contact number -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Contact Number</label>
                            <input type="number" id="contact" name="contact" class="form-control" placeholder="Enter Contact Number">
                            </div>
                            <!-- order date -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Order Date</label>
                            <input type="date" id="date" name="date" class="form-control">
                            </div>
                            <!-- type of shoe -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Type of Shoes</label>
                            <br>
                            <select id="shoes" name="shoes" style="width:755px; height: 35px">
                                    <option value="shoe" selected>Select Type of Shoes</option>
                                    <option value="Flat Shoes">Flat Shoes</option>
                                    <option value="Sandals">Sandals</option>
                                    <option value="with Heels">with Heels</option>
                                </select>
                            </div>
                            <!-- upper color -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Upper Color</label>
                            <br>
                            <select id="color" name="color" style="width:755px; height: 35px">
                                    <option value="color" selected>Select Upper Color</option>
                                    <option value="Red">Red</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Gray">Gray</option>
                                </select>
                            </div>
                            <!-- insole -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">In Sole</label>
                            <br>
                            <select id="insole" name="insole" style="width:755px; height: 35px">
                                    <option value="insole" selected>Select Insole</option>
                                    <option value="Plain">Plain</option>
                                    <option value="with Design">with Design</option>
                                </select>
                            </div>
                            <!-- quantity -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Enter Quantity">
                            </div>
                             <div class="form-actions form-group"><button type="submit" name="addOrder" class="btn btn-success btn-lg">Submit</button>
                             </div>
                        </form>
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
    <script src="js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
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