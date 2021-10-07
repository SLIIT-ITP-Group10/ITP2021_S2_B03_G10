<!DOCTYPE html>
<!-- Created by Spathodea |www.youtube.com/SpathodeaYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive  Menu  | Spathodea </title>-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/side-nav-bar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">

    <style>
      body {
        background-image: url('<?=base_url();?>/assets/img/pixel.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
      }
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-atom icon'></i>
        <div class="logo_name">Spathodea</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx  bx-search'></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="<?php echo site_url('Committee/loadManagerDashboard') ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>

     <li>
       <a href="<?php echo site_url('Committee/CommitteeMembers') ?>">
         <i class='bx bx-user-circle' ></i>
         <span class="links_name">Committee</span>
       </a>
       <span class="tooltip">Committee</span>
     </li>

     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-message' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-user-pin' ></i>
         <span class="links_name">Complaints</span>
       </a>
       <span class="tooltip">Complaints</span>
     </li>
     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Payment</span>
       </a>
       <span class="tooltip">Payment</span>
     </li>
     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-calendar' ></i>
         <span class="links_name">Event</span>
       </a>
       <span class="tooltip">Event</span>
     </li>
     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-face' ></i>
         <span class="links_name">Visitors</span>
       </a>
       <span class="tooltip">Visitors</span>
     </li>
     <li>
       <a href="<?php echo site_url('Welcome/loadLogin') ?>">
         <i class='bx bx-car' ></i>
         <span class="links_name">Car Park</span>
       </a>
       <span class="tooltip">Car Park</span>
     </li>
    </ul>
  </div>
  <?php include 'application/views/Layout/header.php';?>
  <section class="home-section">

  

