<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid ">
      <!-- Introduction section -->
            <div style="background-color: #1e4620;" class="row intro py-1 " >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5 ">
                  <h1 style="color: #c5c4c0;">THE SPARK BANK</h1>
                  <h4 style="color: #c5c4c3;">For All Your Needs</h4>
                  <br>
                  <div class="col-sm-12 col-md img text-center">
                    <h2 style="color: gainsboro; font-family: monospace; ">About Us</h2>
                    <br>
                    <h5 style="color: darkgrey;">The Spark Bank is a project created under the sparks foundation as a part of intersnship. In which a dynamic website 
                has to be created with dummy 10 customers and transaction to be made between them.</h5>
                  
                </div>
                  

                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank2.png" class="img-fluid pt-2">
              </div>
            </div>
            
      <!-- About section -->
      <!-- <div class="row intro py-1"> -->
 <div>  
              <div class="col-sm-12 col-md" >
                <div class="heading text-center my-5">
                     <h1 style="font-size:xx-large; font-family: monospace;">OUR SERVICES</h1> 
                </div>
              </div>
              
            

      <!-- Activity section -->
            <div class="row activity text-center"  >
                  <div class="col-md act">
                    <img src="img/add_customers.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Add Customer</button></a>
                  </div>
				         <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid" style="margin-top: 18%;">
                    <br>
                    <a href="transfermoney.php"><button>Transfer Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/view_customers.png" class="img-fluid">
                    <br>
                    <a href="selectuserdetail.php"><button>View Customers</button></a>
                  </div>

            </div>
      </div>
</div>   
      <footer style="height: 10vh; width: 100%; " class="text-center mt-5 py-2 bg-dark">
        <p style="color:honeydew; font-weight: 100pt;">© By Naman Singh for Sparks Foundation Internship <b>#gripaugust21</b>  </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>