<?php

include("header.php");


?>

<div class="section-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center ">
<div class="header-action">
<h1 style="font-size: 30px; margin-top: 10px; margin-bottom: 10px;" class="page-title" >Availability Tours </h1>
<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="#">Traboon</a></li>
<li class="breadcrumb-item active" style="font-weight: bold;" aria-current="page">Availability Tour</li>
</ol>
</div>
</div>
</div>
</div>
<div class="section-body mt-4">
<div class="container-fluid">
<div class="row clearfix row-deck">
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-body">
<h3 class="card-title">Tour List</h3>
<div id="event-list" class="fc event_list">
<div class='fc-event bg-primary' data-class="bg-primary">tour 1</div>
<div class='fc-event bg-info' data-class="bg-info">tour 2</div>
<div class='fc-event bg-success' data-class="bg-success">Tour 3</div>
<div class='fc-event bg-warning' data-class="bg-warning">Conference</div>
<div class='fc-event bg-danger' data-class="bg-danger">My Event 5</div>
</div>
 
</div>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="card">
<div class="card-body">
<div id="calendar"></div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>

<div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"><strong>Add</strong> an event</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-md-6">
<label class="control-label">Event Name</label>
<input class="form-control" placeholder="Enter name" type="text" name="category-name">
</div>
<div class="col-md-6">
<label class="control-label">Choose Event Color</label>
<select class="form-control" data-placeholder="Choose a color..." name="category-color">
<option value="success">Success</option>
<option value="danger">Danger</option>
<option value="info">Info</option>
<option value="primary">Primary</option>
<option value="warning">Warning</option>
</select>
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Direct Event</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Event Name</label>
<input class="form-control" name="event-name" type="text" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Event Type</label>
<select name="event-bg" class="form-control">
<option value="success">Success</option>
<option value="danger">Danger</option>
<option value="info">Info</option>
<option value="primary">Primary</option>
<option value="warning">Warning</option>
</select>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn save-btn btn-success">Save</button>
<button class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Edit Event</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Event Name</label>
<input class="form-control" name="event-name" type="text" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Event Type</label>
<select name="event-bg" class="form-control">
<option value="success">Success</option>
<option value="danger">Danger</option>
<option value="info">Info</option>
<option value="primary">Primary</option>
<option value="warning">Warning</option>
</select>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn mr-auto delete-btn btn-danger">Delete</button>
<button class="btn save-btn btn-success">Save</button>
<button class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>

<script src="../assets/bundles/lib.vendor.bundle.js" type="17220c5f16e09aad2c95fff3-text/javascript"></script>

<script src="../assets/bundles/fullcalendar.bundle.js" type="17220c5f16e09aad2c95fff3-text/javascript"></script>

<script src="../assets/js/core.js" type="17220c5f16e09aad2c95fff3-text/javascript"></script>
<script src="assets/js/page/calendar.js" type="17220c5f16e09aad2c95fff3-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="17220c5f16e09aad2c95fff3-|49" defer=""></script><script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"67d46320de2a46df","version":"2021.8.0","r":1,"token":"f79813393a9345e8a59bb86abc14d67d","si":10}'></script>




<?php

include("footer.php");


?>