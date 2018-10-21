<?php include('php_scripts/server.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Supplier Information</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                <a class="navbar-brand" href="updateSup.php"><img src="images/teana.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="updateSup.php"><img src="images/title-2.png" alt="Logo"></a>
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
                        <a href="php_scripts/logout.php" name="logout"> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>
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
                        <strong style="color:white;">Supplier Information</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" >
                                <?php include('php_scripts/errors.php'); ?>
                                 <?php
                                 $id = $_GET['ID'];

                                 $db = mysqli_connect('localhost', 'root','','teana');
                                 $query = "SELECT * FROM supplier WHERE supplier_id='$id'";

                                $result = mysqli_query($db, $query);

                                while($row = mysqli_fetch_assoc($result)){
                                $name = $row['supplier_name'];
                                $address = $row['address'];
                                $contact = $row['contact'];
                                $first = $row['first_material'];
                                $second = $row['second_material'];
                                $third = $row['third_material'];
                                $fourth = $row['fourth_material'];
                                $fifth = $row['fifth_material'];
                                 } 
                                 ?>
                            <!-- customer id -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Customer ID</label>
                            <input type="text" id="id" name="id" value="<?php echo $id ?>" hidden>
                            <input type="text" class="form-control" value="<?php echo $id ?>" disabled>
                            </div>
                            <!-- customer name -->
                          <div class="form-group"><label for="nf-picture" class=" form-control-label">Customer Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Customer Name" value="<?php echo $name ?>" disabled>
                            </div>
                            <!-- address -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $address ?>" disabled>
                            </div>
                            <!-- contact number -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Contact Number</label>
                            <input type="number" id="contact" name="contact" class="form-control" placeholder="Enter Contact Number" value="<?php echo $contact ?>" disabled>
                            </div>
                             <!-- Raw Materials -->
                            <div class="form-group"><label for="nf-picture" class=" form-control-label">Raw Materials</label>
                            <input type="text" id="first" name="first" class="form-control" value="<?php echo $first ?>" disabled>
                            <br>
                            <input type="text" id="second" name="second" class="form-control" value="<?php echo $second ?>" disabled>
                            <br>
                            <input type="text" id="third" name="third" class="form-control"  value="<?php echo $third ?>" disabled>
                            <br>
                            <input type="text" id="fourth" name="fourth" class="form-control" value="<?php echo $fourth ?>" disabled> 
                            <br>
                            <input type="text" id="fifth" name="fifth" class="form-control"  value="<?php echo $fifth ?>" disabled>
                            </div>
                             <div class="form-actions form-group">
                            <button type="submit" class="btn btn-success btn-lg"><a href="supDet.php" style="color:white" >Back</a></button>
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