<!DOCTYPE html>
<html lang="en">
<head>
  <title>Price Scanner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  



  <?php 

  if(isset($_GET['success']))
  {
  ?>
  <div>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="" width="200" height="200" class="center-block">

    <br><br><br>
<!--<div class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Generate QR Code
</button></div>-->
<button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target="#exampleModal">
  Generate QR Code
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Food Details</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="generateqr.php">
        <div class="modal-body">
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" id="email" name="namaitem">
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="text" class="form-control" id="pwd" name="hargaitem">
            </div>
            <div class="form-group">
              <label>Brand Name</label>
              <input type="text" class="form-control" id="pwd" name="namabrand">
            </div>
            <div class="form-group">
              <label>Manufactured By</label>
              <input type="text" class="form-control" id="pwd" name="tempatbuat">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="create">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- Table -->
<br><br><br>
<div class="container"> 
  <table class="table table-hover">



    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Manufactured By</th>
      </tr>
    </thead>

    <tbody>
    <?php
    include('conscanner.php'); 

    if($stmt = $conn->prepare("SELECT * FROM item")) 
     {
         $stmt -> execute();
         $stmt -> bind_result($itemid, $nama, $harga, $brand, $tempatbuat);
         while($stmt->fetch()) 
         {
             echo '<tr>
                     <td>' . $itemid . '</td>
                     <td>' . $nama . '</td>
                     <td>' . $harga . '</td>
                     <td>' . $brand . '</td>
                     <td>' . $tempatbuat . '</td>
                 </tr>';
         }
           $stmt->close();
           $conn->close();
     }
    ?>
    </tbody>

  </table>
</div>




     
    
     </div>
  <?php
}




else
{
  ?>
<div>

  <br><br><br>
<!--<div class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Generate QR Code
</button></div>-->
<button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target="#exampleModal">
  Generate QR Code
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Food Details</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="generateqr.php">
        <div class="modal-body">
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" id="email" name="namaitem">
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="text" class="form-control" id="pwd" name="hargaitem">
            </div>
             <div class="form-group">
              <label>Brand Name</label>
              <input type="text" class="form-control" id="pwd" name="namabrand">
            </div>
            <div class="form-group">
              <label>Manufactured By</label>
              <input type="text" class="form-control" id="pwd" name="tempatbuat">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="create">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- Table -->
<br><br><br>
<div class="container"> 
  <table class="table table-hover">



    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Manufactured By</th>
      </tr>
    </thead>

    <tbody>
    <?php
    include('conscanner.php'); 

    if($stmt = $conn->prepare("SELECT * FROM item")) 
     {
         $stmt -> execute();
         $stmt -> bind_result($itemid, $nama, $harga, $brand, $tempatbuat);
         while($stmt->fetch()) 
         {
             echo '<tr>
                     <td>' . $itemid . '</td>
                     <td>' . $nama . '</td>
                     <td>' . $harga . '</td>
                     <td>' . $brand . '</td>
                     <td>' . $tempatbuat . '</td>
                 </tr>';
         }
           $stmt->close();
           $conn->close();
     }
    ?>
    </tbody>

  </table>
</div>

  
  

    <?php 
}
   ?>
</div>



</body>
</html>