<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style> 
       *{
        padding:0px;
        margin:0px;
      }
      .container{
        text-align:center;
      }
      .container img{
        display:block;
        margin:0 auto;
      }
      .container h2{  
        font-family:sans-serif;
      }
      span{
        color:green;
      }
    </style>
  </head>
  <body>
      <?php 
      include 'navbar.php';
      ?>
      
      <div class="container">
        <img src="imgs/logo.png" alt="logo"> <br>
        <?php
        echo "<h3> Request Id : ".$_REQUEST['payment_id']."</h3>";
        echo "<h3> Status : <span>".$_REQUEST['payment_status']."</span></h3>";
        echo "<h3> Date : ".date('d-m-y')."</h3>";
        $timezone =date_default_timezone_get();
        date_default_timezone_set("Asia/Kolkata");
        echo "<h3> Time : ".date("h:ia")."</h3>";
        ?>
      </div>
      
  </body>
</html>

