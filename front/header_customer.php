<!DOCTYPE html>
<html lang="en">
<head>
  <title>Boxit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



  
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
<header class="nav-item_header shadow-sm">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm nav_custom">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
      </button>
      <!-- **** my_account guest *** 
      <?php include 'menu_guest.php';?>-->

      <!-- **** my_account customer *** -->
      <?php include 'menu_customer.php';?>
  </nav>
    </div>
</header>