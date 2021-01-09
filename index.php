<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Integration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');
        *{
            padding: 0;
            margin: 0;
         } 
        body{ 
            width: 100vw;
            height: 100vh;
            background-image: url('imgs/bg.png');
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .maindiv{
            width:100vw;
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translatey(-50%);  
            transform: translatey(-50%);
        }
        .maindiv h1{
            color:white;
            font-family: 'Dancing Script', cursive;
            text-align:center;
            font-weight:bold;
        } 
        .donate button{ 
            width:150px;
            height:50px;
            font-size:20px;
            display:block;
            margin:10px auto; 
            background-color: rgba(0,0,0,0.7); 
            font-weight: bold;
        }
    </style>
</head>
<body>
   
   <?php include 'navbar.php'; ?>

    <!-- Container start -->
      <div class="maindiv"> 
        <h1>"An effort made for the happiness of others lifts us above ourselves."</h1> 
        <div class="donate">
          <a href="form.php"><button class="btn btn-primary">DONATE</button></a>
        </div>
      </div>
    <!-- Container end -->

    <!-- footer start -->
     <?php include 'footer.php' ?>
    <!-- footer end -->
</body>
</html>
