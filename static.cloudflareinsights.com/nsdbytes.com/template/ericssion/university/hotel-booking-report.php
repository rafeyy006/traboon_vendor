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
  
  </div>
  <ul class="nav nav-tabs page-header-tab"  style="color: white; font-weight: bold; margin-right: 250px; margin-top: 3px;">
  <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Company_Settings"  style="color: white; font-weight: bold;">ALL BOOKING</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Localization"  style="color: white; font-weight: bold;">COMPLETED</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Email_Settings"  style="color: white; font-weight: bold;">PROCESSING</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions"  style="color: white; font-weight: bold;">CONFIRMED</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">CANCELLED</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">PIAD</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions2 "  style="color: white; font-weight: bold;">UNPIAD</a></li>
  </ul>
  </div>
    </div>
    </div>
<div class="section-body mt-4">
    <div class="container-fluid">
    <div class="tab-content">
    <div class="tab-pane active" id="Staff-all">
    <div class="card">
    <div class="table-responsive">
    <table class="table table-hover table-vcenter text-nowrap table-striped mb-0">
    <thead>
    <tr>
    <th>Type</th>
    <th>Title</th>
    <th>Order Date</th>
    <th>Execution Time</th>
    <th>Cost</th>
    <th>Status</th>
    
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Ken Smith</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Start date : 08/20/2021 <br>
        End date : 08/21/2021<br>
        Duration : 1 night</span></td>
    <td><span>1500rs</span></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Alice A Smith</div></td>
    <td><span>(417) 646-5023</span></td>
    <td><span class="text-muted">Purchase Officer</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c485a8ada7a184adaaa2abeaa7aba9">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Gladys J Smith</div></td>
    <td><span>(417) 646-9207</span></td>
    <td><span class="text-muted">Receptionist</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6e1cac7c2dfd5e6cfc8c0c988c5c9cb">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </div>
    </td>
    <td><div class="font-15">Gladys J Smith</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Clerk</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5d6c4d7c4cde5c2c8c4ccc98b">[email&#160;protected]</a>com</td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Alan Johnson</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Librarian</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="563d33383e16313b373f3a7835393b">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">James A Johnson</div></td>
    <td><span>(417) 646-1636</span></td>
    <td><span class="text-muted">Librarian</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d686f6974686947606a666e6b2964686a">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Gladys J Smith</div></td>
    <td><span>(417) 646-9207</span></td>
    <td><span class="text-muted">Driver</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="41062d2025383201282f272e6f222e2c">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Danny M Johnson</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Driver</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="793d181717003910171f16571a1614">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Patricia Smith</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Purchase Officer</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4f4c5d0d6cdc7cdc5e4cdcac2cb8ac7cbc9">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>
    </td>
    <td><div class="font-15">Gladys J Smith</div></td>
    <td><span>(417) 646-9207</span></td>
    <td><span class="text-muted">Librarian</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c4b606d68757f4c65626a63226f6361">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
   
    </tr>
    <tr>
    <td class="w60">
        <i class="fa fa-building-o"></i>
        <small>hotel</small>    
    </td>
    <td><div class="font-15">Gerald K Smith</div></td>
    <td><span>(417) 646-8377</span></td>
    <td><span class="text-muted">Lab Assistent</span></td>
    <td><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a1927233e220a23242c2564292527">[email&#160;protected]</a></td>
    <td><strong>04 Jan, 2019</strong></td>
    <td><span class="tag tag-info">Details</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>



</div>
</div>
</div>


</div>





<?php

include("footer.php");


?>