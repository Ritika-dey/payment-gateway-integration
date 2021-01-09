<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
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
        form{ 
            background-color: rgba(0,0,0,0.7);
            height: 70vh;
            margin: 50px auto;
            padding: 30px
        }
        form label{
            color:white;
        }
    </style>
</head>
<body>
    <!-- navbar start -->
    <?php include 'navbar.php'; ?>
    <!-- navbar end -->

    <!-- container start -->
    <div class="container"> 
        <form action="request.php" method="post">
          <div class="form-group">
              <label for="name">Name : </label> <br>
              <input type="text" name="name" id="name" class="form-control" required>

              <br>

              <label for="email">Email : </label><br>
              <input type="text" name="email" id="email" class="form-control" required>

              <br>

              <label for="phn_no">Contact No. : </label><br>
              <input type="text" name="phn_no" id="phn_no" class="form-control" required>

              <br>

              <label for="amount">Amount : </label> <br>
              <input type="text" name="amount" id="amount" class="form-control" required>

              <br>

              <input type="submit" name="submit" id="submit" class="btn btn-primary">
          </div>
        </form>
    </div>
    <!-- container end -->
</body>
</html>
