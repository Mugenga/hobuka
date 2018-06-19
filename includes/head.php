<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashoard Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>

  <!-- navigation-bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
    <a class="navbar-brand" href="index.php">ElectriData Dashoard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="customers.php">Customers</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="orders.php">Orders</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="customers.php?method=new">Add Customer</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="orders.php?method=new">New order</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Container  -->
  <div class="container">
    <!-- Sidebar-Navbar -->
    <div class="sidenav">
      <a href="customers.php">Customers</a>
      <a href="orders.php">Orders</a>
      <a href="customers.php?method=new">Add Customer</a>
      <a href="orders.php?method=new">New order</a>
    </div>
