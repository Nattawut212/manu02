<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://github.com/Nattawut212">Bom</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="https://nattawut224.000webhostapp.com/">00webhost</a></li>
      <li class="active"><a href="http://localhost/menu02.php">Home</a></li>
      <li><a href="abutme.php">Abutme</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">64 Update
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/64%20update/categories/s0em.php">Allcategories</a></li>
          <li><a href="http://localhost/64%20update/customers/s0em.php">Allcustomers</a></li>
          <li><a href="http://localhost/64%20update/employees/s0em.php">Allemployees</a></li>          
          <li><a href="http://localhost/64%20update/order_details/s0em.php">Allorder_details</a></li>	
		  <li><a href="http://localhost/64%20update/products/s0em.php">Allproducts</a></li>
		  <li><a href="http://localhost/64%20update/shippers/s0em.php">Allshippers</a></li>
		  <li><a href="http://localhost/64%20update/suppliers/s0em.php">Allsuppliers</a></li>
		

        </ul>
      </li>

<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">8 Update
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/8db/categories.php">categoriesUpdate</a></li>
          <li><a href="http://localhost/8db/customers.php">customersUpdate</a></li>
		  <li><a href="http://localhost/8db/employee_update.php">employeeUpdate</a></li>
		  <li><a href="http://localhost/8db/order_details.php">order_detailsUpdate</a></li>
		  <li><a href="http://localhost/8db/orders.php">ordersUpdate</a></li>
		  <li><a href="http://localhost/8db/products.php">productsUpdate</a></li>
          <li><a href="http://localhost/8db/shippers.php">shippersUpdate</a></li>          
          <li><a href="http://localhost/8db/suppliers.php">suppliersUpdate</a></li>		  
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">64 peramit
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/36%20peramit/bom_all.php">BomAllPeramit</a></li> 
        </ul>
      </li>



    </ul>	    
    <ul class="nav navbar-nav navbar-right">
    	<?php if(isset($_SESSION["user"]) && $_SESSION["user"] =="pass") { ?>
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> signin</a></li>
        <?php } ?>
        <?php if(!isset($_SESSION["user"]) ||  $_SESSION["user"] !="pass") { ?>
      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> signout</a></li>
     <?php } ?>
    </ul>
  </div> 
</nav>
<div class="container">