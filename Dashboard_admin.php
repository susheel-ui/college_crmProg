<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style1.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<?php
   include('session.php');
?>
<body>
                 <div class="main-bar">
                 <nav>
               
                     <input type="checkbox" id="check">
                    
                     <label for="check" class="checkbtn">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     </label>
               <div class="logo-header">
                 <h1 style="color:white;">CRM</h1>
               </div>
               <div id="namebar">
               <h2><?php echo strtoupper($name);?></h2>
               </div>
               
                <ul>
                    <!-- <span  id="nameShown"style="color:white; margin-right:20px; font-size:25px;"><h2><?php echo strtoupper($name);?></h2></span> -->
                    <li class="active"><a href="#">Admin</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                   
</body>
</html>