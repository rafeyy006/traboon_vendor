<?php

include("header.php");


?>

<style>
    .nav-link:hover {
          color: rgb(65, 54, 54)!important;
    }     
  
     
  </style>

<div class="section-body">


<h3 style="font-weight: bold; margin-left: 20px; margin-top: 10px; margin-bottom: 10px;">Booking Report</h3>
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center "  style="background-color:#0faab4 ; color: white; font-weight: bold;">
<div class="header-action">
<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="#" style="color: white; font-weight: bold; margin-left: 10px;">Traboon</a></li>
<li class="breadcrumb-item active" aria-current="page"  style="color: white; font-weight: bold;">Add Activity</li>
</ol>
</div>
<ul class="nav nav-tabs page-header-tab"  style="color: white; font-weight: bold; margin-right: 10px; margin-top: 3px;">
<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Company_Settings"  style="color: white; font-weight: bold;"> ALL BOOKING</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Localization"  style="color: white; font-weight: bold;">COMPLETED</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Email_Settings"  style="color: white; font-weight: bold;">PROCESSING</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions"  style="color: white; font-weight: bold;">CONFIRMED</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">CANCELLED</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">PIAD</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">UNPAID</a></li>
</ul>
</div>
</div>
</div>
<div class="section-body mt-4">
<div class="container-fluid">
<div class="tab-content">
<div class="tab-pane active show" id="Company_Settings">
 

   
  

    <div class="card">
        <p class="p-2">No Booking</p>
    </div>
</div>    
 
</div>









<?php

include("footer.php");


?>
