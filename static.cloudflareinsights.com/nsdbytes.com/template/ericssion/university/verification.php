



<?php

include("header.php");


?>








<div class="section-body">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="header-action">
                            <h1 class="page-title">Verification </h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Traboon</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Verification</li>
                            </ol>
                        </div>
                        <!-- <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Dep-all">List
                                    View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Dep-add">Add</a></li>
                            <li class="nav-item"><a class="nav-link" id="Dep-tab-Boot" data-toggle="tab"
                                    href="#Dep-add-Boot">Add Car</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="section-body mt-4">
                <div class="container-fluid">



               

                    <div class="tab-content">
                        <div class="tab-pane active" id="Dep-all">

                           
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Verification</h3>
                                    <div class="card-options ">
                                       
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Phone <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <label class="col-md-3 col-form-label"> N/A<span class="badge badge-secondary">Not Verified</span></label>
                                            <!-- <input type="text" placeholder="Car Number" class="form-control"> -->
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Id Card <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <label class="col-md-3 col-form-label">N/A <span class="badge badge-secondary">Not Verified</span></label>
                                            <!-- <input type="number" placeholder="Car Price" class="form-control"> -->
                                        
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Trade License<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <label class="col-md-3 col-form-label">N/A<span class="badge badge-secondary">Not Verified</span></label>
                                            <!-- <input type="text" placeholder="Car Number" class="form-control"> -->
                                        </div>
                                    </div>
                                 
                                </form>
                            </div>


                        </div>
                        <div class="tab-pane" id="Dep-add">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Department Basic Info</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                    class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Department Name ">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Head of Department">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        placeholder="No. of Students ">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input data-provide="datepicker" data-date-autoclose="true"
                                                        class="form-control" placeholder="Department Start Date">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea rows="4" class="form-control no-resize"
                                                        placeholder="Brief"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit"
                                                    class="btn btn-outline-secondary btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="tab-pane" id="Dep-add-Boot">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add New Car</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Title <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Content <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <div class="summernote">
                                                Hello there,
                                                <br />
                                                <p>The toolbar can be customized and it also supports various callbacks
                                                    such as <code>oninit</code>, <code>onfocus</code>,
                                                    <code>onpaste</code> and many more.</p>
                                                <p>Please try <b>paste some texts</b> here</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">YouTube Video <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="Youtube Link Video" class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-group row">

                                        <label class="col-form-label">FAQ </label>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <div class="table-responsive card">
                                                    <table
                                                        class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                                                        <thead>
                                                            <tr>

                                                                <th>Title</th>
                                                                <th>Content</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>Title</td>

                                                                <td>Content</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="ml-auto">
                                            <button type="submit" class="btn btn-primary ">Add Items</button>
                                        </div>
                                       
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Gallery </label>
                                        <div class="col-md-7">
                                            <span class="btn btn-primary btn-field-upload"
                                                @click="openUploader">Gallery</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-7">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Extra Info</h3>
                                    <div class="card-options ">
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Passenger</label>
                                                <input type="number" value="" placeholder="Example: 3" name="passenger"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Gear Shift</label>
                                                <input type="text" value="" placeholder="Example: Auto" name="gear"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Baggage</label>
                                                <input type="number" value="" placeholder="Example: 5" name="baggage"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Door</label>
                                                <input type="number" value="" placeholder="Example: 4" name="door"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Location</h3>
                                    <div class="card-options ">
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Location <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>--Please Select--<s /option>
                                                <option value="">Adventure Travel</option>
                                                <option value="">Ecotourism</option>
                                                <option value=""> Sea Travel </option>
                                                <option value=""> Hosted Tour </option>
                                                <option value=""> City Trips </option>
                                                <option value=""> Escorted Tour </option>
                                            </select>
                                        </div>
                                    </div>

    

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Real Address <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="Real Address" class="form-control">
                                        </div>
                                    </div>


                                    <!-- <div class="form-group">
                <label class="control-label">Map Engine</label>
                <div class="control-map-group">
                    <div id="map_content" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0" style="position: relative; outline: none;"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-134px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/12/2871/1625.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(158px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/12/2871/1624.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(158px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/12/2870/1625.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-98px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/12/2872/1625.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(414px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/12/2871/1626.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(158px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/12/2870/1624.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-98px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/12/2872/1624.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(414px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/12/2870/1626.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-98px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/12/2872/1626.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(414px, 266px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(735052px, 416140px, 0px) scale(2048);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors</div></div></div></div>
                    <input type="text" placeholder="Search by name..." class="bravo_searchbox form-control" autocomplete="off" onkeydown="return event.key !== 'Enter';" style="display: none;">
                    <div class="g-control">
                        <div class="form-group">
                            <label>Map Lat:</label>
                            <input type="text" name="map_lat" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
                        </div>
                        <div class="form-group">
                            <label>Map Lng:</label>
                            <input type="text" name="map_lng" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
                        </div>
                        <div class="form-group">
                            <label>Map Zoom:</label>
                            <input type="text" name="map_zoom" class="form-control" value="8" onkeydown="return event.key !== 'Enter';">
                        </div>
                    </div>
                </div>
            </div> -->

<div class="form-group">
    <label class="control-label">Map Engine</label><br />
    <div class="col-md-6">
        <div class="g-control">
            <div class="form-group">
                <label>Map Lat:</label>
                <input type="text" name="map_lat" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
            </div>
            <div class="form-group">
                <label>Map Lng:</label>
                <input type="text" name="map_lng" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
            </div>
            <div class="form-group">
                <label>Map Zoom:</label>
                <input type="text" name="map_zoom" class="form-control" value="8" onkeydown="return event.key !== 'Enter';">
            </div>
        </div>
    </div>
    <div class="col-md-6">
  
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0619641689!2d66.59499551729773!3d25.192146526892635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1631187826606!5m2!1sen!2s" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
     
        <!-- <div id="map-container-google-11" class="z-depth-1-half " style="height: 400px;">
            <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div> -->
    </div>
</div>


            <!-- <div class="form-group row ">
            <label class="control-label">Map Engine</label><br />
            <div class="col-md-4">
                <div class="g-control">
                    <div class="form-group">
                        <label>Map Lat:</label>
                        <input type="text" name="map_lat" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
                    </div>
                    <div class="form-group">
                        <label>Map Lng:</label>
                        <input type="text" name="map_lng" class="form-control" value="" onkeydown="return event.key !== 'Enter';">
                    </div>
                    <div class="form-group">
                        <label>Map Zoom:</label>
                        <input type="text" name="map_zoom" class="form-control" value="8" onkeydown="return event.key !== 'Enter';">
                    </div>
                </div>
            </div>
            <div class="col-md-7">

<div id="map-container-google-11" class="z-depth-1-half " style="height: 500px;">
    <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
      frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
            </div>       
          
  
        </div>  -->





                                </form>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Pricing</h3>
                                    <div class="card-options ">
                                       
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Car Number <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="Car Number" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Price <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input type="number" placeholder="Car Price" class="form-control">
                                            <!-- <select class="form-control" aria-label="Default select example">
                                <option selected>--Please Select--<s/option>
                                    <option value="">Adventure Travel</option>
                                    <option value="">Ecotourism</option>
                                    <option value=""> Sea Travel  </option>
                                    <option value=""> Hosted Tour </option>
                                    <option value=""> City Trips </option>
                                    <option value=""> Escorted Tour </option>
                              </select> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Sales Price <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>--Please Select--<s /option>
                                                <option value="">Adventure Travel</option>
                                                <option value="">Ecotourism</option>
                                                <option value=""> Sea Travel </option>
                                                <option value=""> Hosted Tour </option>
                                                <option value=""> City Trips </option>
                                                <option value=""> Escorted Tour </option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>




                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Seo Manager</h3>
                                    <div class="card-options ">
                                       
                                    </div>
                                </div>
                                <form class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Allow search engines to show this service
                                            in search results?<span class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <select class="form-control" aria-label="Default select example">
                                                <option selected>Yes<s /option>
                                                <option value="">No</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-md-12">






                                            <ul class="nav nav-tabs" data-condition="seo_index:is(1)">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#seo_1">General
                                                        Options</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#seo_2">Share
                                                        Facebook</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#seo_3">Share
                                                        Twitter</a>
                                                </li>
                                            </ul>




                                            <div class="tab-content" data-condition="seo_index:is(1)">
                                                <div class="tab-pane active" id="seo_1">
                                                    <div class="form-group pt-1">
                                                        <label class="control-label pt-2">Seo Title</label>
                                                        <input type="text" name="seo_title" class="form-control"
                                                            placeholder="Leave blank to use service title" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Seo Description</label>
                                                        <textarea name="seo_desc" rows="3" class="form-control"
                                                            placeholder="Enter description..."></textarea>
                                                    </div>
                                                    <div class="form-group form-group-image">
                                                        <label class="control-label">Featured Image</label>
                                                        <div class="dungdt-upload-box dungdt-upload-box-normal "
                                                            data-val="">
                                                            <div class="upload-box" v-show="!value">
                                                                <input type="hidden" name="seo_image" v-model="value"
                                                                    value="">
                                                                <div class="text-center">

                                                                </div>
                                                                <div class="text-center">
                                                                    <span class="btn btn-primary btn-field-upload"
                                                                        @click="openUploader">Upload image</span>
                                                                </div>
                                                            </div>
                                                            <div class="attach-demo" title="Change file">
                                                            </div>
                                                            <div class="upload-actions justify-content-between"
                                                                v-show="value">
                                                                <span></span>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="seo_2">
                                                    <div class="form-group pt-1">
                                                        <label class="control-label pt-2">Facebook Title</label>
                                                        <input type="text" name="seo_share[facebook][title]"
                                                            class="form-control" placeholder="Enter title..." value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Facebook Description</label>
                                                        <textarea name="seo_share[facebook][desc]" rows="3"
                                                            class="form-control"
                                                            placeholder="Enter description..."></textarea>
                                                    </div>
                                                    <div class="form-group form-group-image">
                                                        <label class="control-label">Facebook Image</label>
                                                        <div class="dungdt-upload-box dungdt-upload-box-normal "
                                                            data-val="">
                                                            <div class="upload-box" v-show="!value">
                                                                <input type="hidden" name="seo_share[facebook][image]"
                                                                    v-model="value" value="">
                                                                <div class="text-center">

                                                                </div>
                                                                <div class="text-center">
                                                                    <span class="btn btn-primary btn-field-upload"
                                                                        @click="openUploader">Upload image</span>
                                                                </div>
                                                            </div>
                                                            <div class="attach-demo" title="Change file">
                                                            </div>
                                                            <div class="upload-actions justify-content-between"
                                                                v-show="value">
                                                                <span></span>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="seo_3">
                                                    <div class="form-group pt-1">
                                                        <label class="control-label pt-2">Twitter Title</label>
                                                        <input type="text" name="seo_share[twitter][title]"
                                                            class="form-control" placeholder="Enter title..." value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Twitter Description</label>
                                                        <textarea name="seo_share[twitter][desc]" rows="3"
                                                            class="form-control"
                                                            placeholder="Enter description..."></textarea>
                                                    </div>
                                                    <div class="form-group form-group-image">
                                                        <label class="control-label">Twitter Image</label>
                                                        <div class="dungdt-upload-box dungdt-upload-box-normal "
                                                            data-val="">
                                                            <div class="upload-box" v-show="!value">
                                                                <input type="hidden" name="seo_share[twitter][image]"
                                                                    v-model="value" value="">
                                                                <div class="text-center">

                                                                </div>

                                                            </div>
                                                            <div class="attach-demo" title="Change file">
                                                            </div>
                                                            <div class="upload-actions justify-content-between"
                                                                v-show="value">
                                                                <span></span>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </form>
                            </div>




                        </div>
                    </div>
                </div>
            </div>


            
<?php

include("footer.php");


?>