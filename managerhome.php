<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: ManagerView.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ManagerView.php');
}
?>
<!doctype html>
<html>
    <head>
        <style>
            a:link, a:visited {
  background-color:  #33adff;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #66c2ff;
}
        </style>
    </head>
    <body>
           <h2>Product Search</h2>
     <a href="employee_product_search.html" target="_blank">Search Product</a>
       <br> 
       <h2>Product Insert</h2>
     <a href="productIP.html" target="_blank">Add Product</a>
       <br>
     <h2>Product Delete</h2>
        <a href="productdelete.html" target="_blank">Delete Product</a>
        <br> 
      <br>
     <h2>Update Product</h2>
        <a href="update1.html" target="_blank">Update Product</a>
        <br>  
     <h2>Customer Insert</h2>
     <a href="inputcustomer1.html" target="_blank">Add Customer</a>
       <br>
     <h2>Customer Delete</h2>
        <a href="delete-customer.html" target="_blank">Delete Customer</a>
        <br>
         <h2>Insert Employee</h2>
        <a href="Employee_insert.html" target="_blank">Add Employee</a>
          <br>
         <h2>Delete Employee</h2>
        <a href="Employee_Deletes.html" target="_blank">Delete Employee</a>
            <form method='post' action="">
                <br>
      
          <!--       <h2>Add Manager</h2>
        <a href="inputManager1.html" target="_blank">Add Manager</a>
            <form method='post' action="">
                <br>
                       <h2>Delete Manager</h2>
        <a href="Manager_delete.html" target="_blank">Delete Manager</a>
            <form method='post' action=""> 
            -->
                <br>
                <br>
            <input type="submit" value="Logout" name="but_logout">
        </form>
        
        
       
    </body>
</html>