<?php
           session_start();
           $db = mysqli_connect('localhost', 'root','','teana');
           $custName = " ";
           $address = " ";
           $contact = " ";
           $order = " ";
           $type = " ";
           $color = " ";
           $sole = " ";
           $quantity = " ";
           $errors =  array();

    //login user
  if(isset($_POST['login_user'])){

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {

      $logged_in_user = mysqli_fetch_assoc($results);

      $_SESSION['username'] = $username;
      $_SESSION['status'] = $logged_in_user;
      $_SESSION['success'] = "You are now logged in";

       echo "<script type='text/javascript'>alert('Logged in Successfully!');</script>";
       echo"<script type='text/javascript'>window.location = 'dashboard.php'</script>";
    }else {
      array_push($errors, "Wrong email/password combination");
    }
    }
  }

    //add order
    if(isset($_POST['addOrder'])){

            $custName = mysqli_real_escape_string($db, $_POST['name']);
            $address = mysqli_real_escape_string($db, $_POST['address']);
            $contact = mysqli_real_escape_string($db, $_POST['contact']);
            $order = mysqli_real_escape_string($db, $_POST['date']);
            $type = mysqli_real_escape_string($db, $_POST['shoes']);
            $color = mysqli_real_escape_string($db, $_POST['color']);
            $sole = mysqli_real_escape_string($db, $_POST['insole']);
            $size = mysqli_real_escape_string($db, $_POST['size']);
            $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
            $remarks = mysqli_real_escape_string($db, $_POST['remarks']);

            if(empty($custName)) { array_push($errors, "*Customer name is required!");}
            if(empty($address)) { array_push($errors, "*Address is required!");}
            if(empty($contact)) { array_push($errors, "*Contact number is required!");}
            if(empty($order)) { array_push($errors, "*Order date is required!");}
            if(empty($quantity)) { array_push($errors, "*Quantity is required!");}
            if(empty($remarks)){array_push($errors, "*Remarks is required!");}
            if($type == "shoe"){array_push($errors, "*Type of shoes is required!");}
            if($color == "color"){array_push($errors, "*Upper Color is required!");}
            if($sole == "insole" ){array_push($errors, "*In sole is required!");}

               if (count($errors) == 0){
                if($type == "Flat Shoes"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("10 days"));
                $date1 = date_format($date, "Y-m-d");
              }else if($type == "Sandals"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("7 days"));
                $date1 = date_format($date, "Y-m-d");
              }else if($type == "with Heels"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("14 days"));
                $date1 = date_format($date, "Y-m-d");
              }
                $stats = "To be delivered";
                $query = "INSERT INTO `customer_order`( `customer_name`, `address`, `contact`, `order_date`, `delivery_date`,`actual_delivery`, `shoe_type`, `upper_color`, `in_sole`, `quantity`, `status`,`feet_size`,`remarks`) VALUES ('$custName','$address','$contact','$order','$date1', '$date1' , '$type','$color','$sole','$quantity','$stats','$size','$remarks')";
                $query1 = "INSERT INTO `customer_info`(`customer_name`, `address`, `contact`) VALUES ('$custName','$address','$contact')";
                mysqli_query($db, $query);
                mysqli_query($db,$query1);
                echo "<script type='text/javascript'>alert('Order Added!');</script>";
                                          } 
      }

      //update customer
      if(isset($_POST['updateCust'])){
        $id = mysqli_real_escape_string($db, $_POST['id']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);

        if(empty($name)) {array_push($errors, "*Customer name is required!");}
        if(empty($address)){array_push($errors, "*Address is required!");}
        if(empty($contact)){array_push($errors, "*Contact Number is required!");}

        if(count($errors)==0){
          $query = "UPDATE `customer_order` SET `customer_name`='$name', `address`='$address' , `contact`='$contact' WHERE `customer_id`='$id'";
           $query1 = "UPDATE `customer_info` SET `customer_name`='$name', `address`='$address' , `contact`='$contact' WHERE `customer_id`='$id'";
          mysqli_query($db, $query);
          mysqli_query($db, $query1);
          echo "<script type='text/javascript'>alert('Customer Updated Successfully!');</script>";
          echo"<script type='text/javascript'>window.location = 'cusDet.php'</script>";
        }
      }

      //delete customer
      if(isset($_POST['delCust'])){
        $id = mysqli_real_escape_string($db, $_POST['id']);
        mysqli_query($db, "DELETE FROM customer_info WHERE customer_id=$id"); 
        echo "<script type='text/javascript'>alert('Customer deleted!');</script>";
        echo"<script type='text/javascript'>window.location = 'cusDet.php'</script>";
      }

      //add supplier

      if(isset($_POST['addSup'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $first = mysqli_real_escape_string($db, $_POST['first']);
        $second = mysqli_real_escape_string($db, $_POST['second']);
        $third = mysqli_real_escape_string($db, $_POST['third']);
        $fourth = mysqli_real_escape_string($db, $_POST['fourth']);
        $fifth = mysqli_real_escape_string($db, $_POST['fifth']);


        if(empty($name)) {array_push($errors, "*Customer name is required!");}
        if(empty($address)){array_push($errors, "*Address is required!");}
        if(empty($contact)){array_push($errors, "*Contact Number is required!");}
        if(empty($first)){array_push($errors, "*Please fill up First Raw Material Before Proceeding!");}

         if(count($errors)==0){
          $query = "INSERT INTO `supplier`(`supplier_name`, `address`, `contact`, `first_material`, `second_material`, `third_material`,`fourth_material`,`fifth_material`) VALUES ('$name','$address','$contact', '$first', '$second', '$third','$fourth', '$fifth')";
          mysqli_query($db, $query);
          echo "<script type='text/javascript'>alert('Supplier Added Successfully!');</script>";
          echo"<script type='text/javascript'>window.location = 'supDet.php'</script>";
        }

      }

      //update supplier
       if(isset($_POST['updateSup'])){
        $id = mysqli_real_escape_string($db, $_POST['id']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $first = mysqli_real_escape_string($db, $_POST['first']);
        $second = mysqli_real_escape_string($db, $_POST['second']);
        $third = mysqli_real_escape_string($db, $_POST['third']);
        $fourth = mysqli_real_escape_string($db, $_POST['fourth']);
        $fifth = mysqli_real_escape_string($db, $_POST['fifth']);

        if(empty($name)) {array_push($errors, "*Customer name is required!");}
        if(empty($address)){array_push($errors, "*Address is required!");}
        if(empty($contact)){array_push($errors, "*Contact Number is required!");}
        if(empty($first)){array_push($errors, "*Please fill up First Raw Material Before Proceeding!");}

        if(count($errors)==0){
          $query = "UPDATE `supplier` SET `supplier_name`='$name', `address`='$address' , `contact`='$contact' , `first_material`='$first' , `second_material`='$second', `third_material`='$third', `fourth_material`='$fourth' , `fifth_material`='$fifth'  WHERE `supplier_id`='$id'";
          mysqli_query($db, $query);
          echo "<script type='text/javascript'>alert('Supplier Updated Successfully!');</script>";
          echo"<script type='text/javascript'>window.location = 'supDet.php'</script>";
        }
      }

      //delete supplier
      if(isset($_POST['delSup'])){
        $id = mysqli_real_escape_string($db, $_POST['id']);
        mysqli_query($db, "DELETE FROM supplier WHERE supplier_id=$id"); 
        echo "<script type='text/javascript'>alert('Supplier deleted!');</script>";
        echo"<script type='text/javascript'>window.location = 'supDet.php'</script>";
      }

      //update history
      if(isset($_POST['updateHis'])){
            $id = mysqli_real_escape_string($db, $_POST['id']);
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $address = mysqli_real_escape_string($db, $_POST['address']);
            $contact = mysqli_real_escape_string($db, $_POST['contact']);
            $order = mysqli_real_escape_string($db, $_POST['order']);
            $actual = mysqli_real_escape_string($db, $_POST['actual']);
            $type = mysqli_real_escape_string($db, $_POST['shoes']);
            $color = mysqli_real_escape_string($db, $_POST['color']);
            $sole = mysqli_real_escape_string($db, $_POST['insole']);
            $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
            $status  = mysqli_real_escape_string($db, $_POST['status']);
            $size = mysqli_real_escape_string($db, $_POST['size']);
            $remarks = mysqli_real_escape_string($db, $_POST['remarks']);

            if(empty($name)) { array_push($errors, "*Customer name is required!");}
            if(empty($address)) { array_push($errors, "*Address is required!");}
            if(empty($contact)) { array_push($errors, "*Contact number is required!");}
            if(empty($order)) { array_push($errors, "*Order date is required!");}
            if(empty($quantity)) { array_push($errors, "*Quantity is required!");}
            if(empty($status)){array_push($errors, "*Status is required!");}
            if(empty($actual)){array_push($errors, "*Actual delivery date is required!");}
            if(empty($size)){array_push($errors, "*Size is required!");}
            if(empty($remarks)){array_push($errors, "*Remarks is required!");}
            if($type == "shoe"){array_push($errors, "*Type of shoes is required!");}
            if($color == "color"){array_push($errors, "*Upper Color is required!");}
            if($sole == "insole" ){array_push($errors, "*In sole is required!");}
            if($status == "status" ){array_push($errors, "*Delivery Status is required!");}

            if(count($errors)==0){
              if($type == "Flat Shoes"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("10 days"));
                $date1 = date_format($date, "Y-m-d");
              }else if($type == "Sandals"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("7 days"));
                $date1 = date_format($date, "Y-m-d");
              }else if($type == "with Heels"){
                $date = date_create($order);
                date_add($date,date_interval_create_from_date_string("14 days"));
                $date1 = date_format($date, "Y-m-d");
              }
              $query = "UPDATE `customer_order` SET `customer_name`='$name',`address`='$address',`contact`='$contact',`order_date`='$order',`delivery_date`='$date1',`actual_delivery`='$actual',`shoe_type`='$type',`upper_color`='$color',`in_sole`='$sole',`quantity`='$quantity',`status`='$status', `feet_size`='$size',`remarks`='$remarks' WHERE `customer_id`='$id'";
               $query1 = "UPDATE `customer_info` SET `customer_name`='$name', `address`='$address' , `contact`='$contact' WHERE `customer_id`='$id'";
               mysqli_query($db, $query);
               mysqli_query($db,$query1);
               echo "<script type='text/javascript'>alert('Order History Updated Successfully!');</script>";
               echo"<script type='text/javascript'>window.location = 'orderHis.php'</script>";
              
            }
      }

        if(isset($_POST['delHis'])){
        $id = mysqli_real_escape_string($db, $_POST['id']);
        mysqli_query($db, "DELETE FROM customer_order WHERE customer_id=$id"); 
        echo "<script type='text/javascript'>alert('History deleted!');</script>";
        echo"<script type='text/javascript'>window.location = 'orderHis.php'</script>";
      }
      



?>