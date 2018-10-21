<?php include('php_scripts/server.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Details</title>
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
                <a class="navbar-brand" href="supDet.php"><img src="images/teana.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="supDet.php"><img src="images/title-2.png" alt="Logo"></a>
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
                       <div class="col-sm-12">
             <div class="card">
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
                                <strong style="color:white">Supplier Details</strong>
                            </div>
                <input type="text" id="myInput" class="light-table-filter" onkeyup="myFunction()" style="width:300px; margin-left:30px; margin-top: 10px; height:40px; margin-bottom: 10px" placeholder="Search"></input>
            
          <?php 
          $db = mysqli_connect('localhost', 'root','','teana');
          $results = mysqli_query($db, "SELECT * FROM supplier"); 
          ?>
            <table id="myTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                <thead>
            <tr>
            <th>Supplier ID</th>
            <th>Supplier Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th colspan="2">Action</th>
            </tr>
             </thead>
    
            <?php while ($row = mysqli_fetch_array($results)) { ?>
             <tr>
            <td><?php echo $row['supplier_id']; ?></td>
            <td><?php echo $row['supplier_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td style="display:none;"><?php echo $row['first_material']; ?></td>
            <td style="display:none;"><?php echo $row['second_material']; ?></td>
            <td style="display:none;"><?php echo $row['third_material']; ?></td>
            <td style="display:none;"><?php echo $row['fourth_material']; ?></td>
            <td style="display:none;"><?php echo $row['fifth_material']; ?></td>

            <td>

            <button type="submit" class="btn btn-info btn-sm">
                    <a href="showSup.php?ID=<?php echo $row['supplier_id']; ?>" style="color:white" >SHOW MORE</a>     
           </button>
        </td>

            <td>
                <button type="submit" class="btn btn-success btn-sm">
               <a href="updateSup.php?ID=<?php echo $row['supplier_id']; ?>" class="ed_year" style="color:white" >UPDATE</a> 
           </button>
            </td>
            </tr>
             <?php } ?>
            </table>
            </table>

               <div class="form-actions form-group">
                    <button type="submit" onclick="window.location.href='addSup.php'" class="btn btn-success btn-lg">Add Supplier</button>
               </div>
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
         function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i,td1,td2,td3;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    td3 = tr[i].getElementsByTagName("td")[3];
    td4 = tr[i].getElementsByTagName("td")[4];
    td5 = tr[i].getElementsByTagName("td")[5];
    td6 = tr[i].getElementsByTagName("td")[6];
    td7 = tr[i].getElementsByTagName("td")[7];
    td8 = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 ||
        td3.innerHTML.toUpperCase().indexOf(filter) > -1 || td4.innerHTML.toUpperCase().indexOf(filter) > -1 || td5.innerHTML.toUpperCase().indexOf(filter) > -1 || td6.innerHTML.toUpperCase().indexOf(filter) > -1 || td7.innerHTML.toUpperCase().indexOf(filter) > -1 || td8.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

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