<?php

include("header.php");


?>

 

<div class="section-body">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="header-action">
                            <h1 style="font-size: 25px;" class="page-title">Dashboard</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Traboon</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                       
                    </div>
                </div>
            </div>




  <!-- 4 CARDS  -->
  <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-4 col-12 col-sm-12">
                        <div class="dashboard-report-card card purple">
                            <div class="card-content">
                                <span class="card-title">Hotels</span>
                                <span class="card-amount">20</span>
                              
                            </div>
                            <div class="card-media">
                                <i class="fa fa-hotel"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-4 col-12 col-sm-12">
                        <div class="dashboard-report-card card pink">
                            <div class="card-content">
                                <span class="card-title">Cars</span>
                                <span class="card-amount">300</span>
                             
                            </div>
                            <div class="card-media">
                                <i class="fa fa-car"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-cl-3 col-md-4 col-12 col-sm-12">
                        <div class="dashboard-report-card card info">
                            <div class="card-content">
                                <span class="card-title">Tour Guide</span>
                                <span class="card-amount">19</span>
                                
                            </div>
                            <div class="card-media">
                                <i class="fa fa-tags"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-4 col-12 col-sm-12">
                        <div class="dashboard-report-card card success">
                            <div class="card-content">
                                <span class="card-title">Trips</span>
                                <span class="card-amount">12600</span>
                        
                            </div>
                            <div class="card-media">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4 CARDS  Ends-->
            <!-- 4 cards css  -->
            <style>
                .dashboard-report-card.purple {
                    background-color: #8892d6;
                    border-color: #8892d6;
                    height: 20vh;
                    width: 100%;
                    
                }
                .dashboard-report-card.pink {
                    background-color: #f06292;
                    border-color: #f06292;
                    height: 20vh;
                    width: 100%;
                }
                .dashboard-report-card.info {
                    background-color: #45bbe0;
                    border-color: #45bbe0;
                    height: 20vh;
                    width: 100%;
                    
                }
                .dashboard-report-card.success {
                    background-color: #78c350;
                    border-color: #78c350;
                    height: 20vh;
                    width: 100%;
                    
                }
               
                .dashboard-report-card .card-media{
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                    flex-shrink: 0;
                    margin-left: 15px;
                    display: flex;
                    align-items: center;
                    text-align: center;
                      background-color: hsla(0,0%,100%,.2);
                     justify-content: center;
                    right: 20px;
                     top: 20px;
                     position: absolute;
                }
                .dashboard-report-card .card-media i{
                    font-size: 35px;
                    color: #fff;
                }
                .card-title{
                    position: absolute;
                    margin-top: 10%;
                    margin-left: 5%;
                    color: #fff !important;
                }
                .card-amount{
                    position: absolute;
                    margin-top: 25%;
                    margin-left: 5%;
                    color: #fff !important;
                    font-weight: bold;
                    font-size: 1.5rem;
                }
                .card-desc{
                    position: absolute;
                    margin-top: 40%;
                    margin-left: 5%;
                    color: #fff !important;
                }
        
            </style>
            <!-- 4 cards css  Ends-->
            <div class="section-body mt-4">
                <div class="container-fluid">
                    <div class="row clearfix row-deck">
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body ribbon">
                                    <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">5</div>
                                    <a href="professors.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-hotel"></i>
                                        <span>Hotels</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body">
                                    <a href="app-contact.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-car"></i>
                                        <span>Cars</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body ribbon">
                                    <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff">8</div>
                                    <a href="staff.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-plane"></i>
                                        <span>Tour</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body">
                                    <a href="app-filemanager.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-folder"></i>
                                        <span>Tour Guide</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body">
                                    <a href="library.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-phone"></i>
                                        <span>Contact</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card">
                                <div class="card-body">
                                    <a href="holiday.html" class="my_sort_cut text-muted">
                                        <i class="fa fa-bullhorn"></i>
                                        <span>Holiday plans</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                            <div class="row clearfix">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Our Services</h3>
                                            <!-- <div class="card-options">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between">
                                                <div class="font-12 mb-2"><span>Measure How Fast You’re Growing Customers
                                                         <a href="#">Learn More</a></span></div>
                                                <!-- <div class="selectgroup w250">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="low"
                                                            class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">1D</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="medium"
                                                            class="selectgroup-input">
                                                        <span class="selectgroup-button">1W</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="high"
                                                            class="selectgroup-input">
                                                        <span class="selectgroup-button">1M</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="veryhigh"
                                                            class="selectgroup-input">
                                                        <span class="selectgroup-button">1Y</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="apex-chart-line-columns"></div> -->
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 mb-2">
                                                    <div class="clearfix">
                                                        <div class="float-left"><strong>Tour</strong></div>
                                                        <div class="float-right"><small class="text-muted">35%</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-indigo" role="progressbar"
                                                            style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="text-uppercase font-10">Compared to last year</span>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-2">
                                                    <div class="clearfix">
                                                        <div class="float-left"><strong>Hotels booked</strong></div>
                                                        <div class="float-right"><small class="text-muted">61%</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-yellow" role="progressbar"
                                                            style="width: 61%" aria-valuenow="61" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="text-uppercase font-10">Compared to last year</span>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-2">
                                                    <div class="clearfix">
                                                        <div class="float-left"><strong>Trip arranged</strong></div>
                                                        <div class="float-right"><small class="text-muted">87%</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-green" role="progressbar"
                                                            style="width: 87%" aria-valuenow="87" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="text-uppercase font-10">Compared to last year</span>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-2">
                                                    <div class="clearfix">
                                                        <div class="float-left"><strong>satisfied customers</strong></div>
                                                        <div class="float-right"><small class="text-muted">95%</small>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-pink" role="progressbar"
                                                            style="width: 95%" aria-valuenow="42" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="text-uppercase font-10">Compared to last year</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                       
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0 text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Role</th>
                                                            <th>Date Of Joining</th>
                                                            <th>Verification</th>
                                                            <th>Location</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Abdul Wajid</td>
                                                            <td>Admin</td>
                                                            <td>08/09/2021</td>
                                                            <td>
                                                                <span class="tag tag-success">Verified</span>
                                                            </td>
                                                            <td>Karachi</td>
                                                            <td>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-check"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Asif</td>
                                                            <td>Vender</td>
                                                            <td>08/09/2021</td>
                                                            <td>
                                                                <span class="tag tag-primary">In process</span>
                                                            </td>
                                                            <td>Karachi</td>
                                                            <td>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-check"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Ali</td>
                                                            <td>Vender</td>
                                                            <td>08/09/2021</td>
                                                            <td>
                                                                <span class="tag tag-success">Verified</span>
                                                            </td>
                                                            <td>Karachi</td>
                                                            <td>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-check"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Ashraf</td>
                                                            <td>Vender</td>
                                                            <td>08/09/2021</td>
                                                            <td>
                                                                <span class="tag tag-danger">Un Verified</span>
                                                            </td>
                                                            <td>Karachi</td>
                                                            <td>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-check"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Kashif</td>
                                                            <td>Vender</td>
                                                            <td>08/09/2021</td>
                                                            <td>
                                                                <span class="tag tag-success">Verified</span>
                                                            </td>
                                                            <td>Karachi</td>
                                                            <td>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-check"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
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
                </div>
            </div>
            <?php

include("footer.php");


?>
