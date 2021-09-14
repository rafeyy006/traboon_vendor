<?php

include("header.php");


?>

<div class="section-body">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="header-action">
                            <h1 class="page-title">Activity ATTRIBUTES</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Activity Attributes</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 form-1">
                            <div class="panel">
                                <div class="panel-title">Add Attributes</div>
                                <div class="panel-body">
                                    <form action="https://traboon.com/admin/module/hotel/attribute/store/-1?"
                                        method="post">
                                        <input type="hidden" name="_token"
                                            value="j3iAnoR0nhWa8Obk2i5MeqblGvpyleotr2SgUkV6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" value="" placeholder="Attribute name" name="name"
                                                class="form-control">
                                        </div>
                                        <div class="">
                                            <button class="btn btn-primary" type="submit">Add new</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 form-1">
                            <div class="filter-div d-flex justify-content-between ">
                                <div class="col-left">
                                    <form method="post"
                                        action="https://traboon.com/admin/module/hotel/attribute/editAttrBulk"
                                        class="filter-form filter-form-left d-flex justify-content-start">
                                        <input type="hidden" name="_token"
                                            value="j3iAnoR0nhWa8Obk2i5MeqblGvpyleotr2SgUkV6">
                                        <select name="action" class="form-control">
                                            <option value=""> Bulk Action </option>
                                            <option value="delete"> Delete </option>
                                        </select>
                                        <button data-confirm="Do you want to delete?"
                                            class="btn-primary btn btn-icon dungdt-apply-form-btn" type="button"
                                            style="margin-left: 15px;">Apply</button>
                                    </form>
                                </div>
                                <div class="col-left">
                                    <form method="get" action="https://traboon.com/admin/module/hotel/attribute "
                                        class="filter-form filter-form-right d-flex justify-content-end" role="search">
                                        <input type="text" name="s" value="" class="form-control"
                                            placeholder="Search by name">
                                        <button class="btn-primary btn btn-icon btn_search" id="search-submit"
                                            type="submit" style="margin-left: 15px;">Search</button>
                                    </form>
                                </div>

                            </div>
                            <div class="panel" style="margin-top: 3%;">
                                <div class="panel-title">All Attributes</div>
                                <div class="panel-body">
                                    <form class="bravo-form-item">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="60px"><input type="checkbox" class="check-all"></th>
                                                    <th>Name</th>
                                                    <th class="">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="ids[]"
                                                            value="12">
                                                    </td>
                                                    <td class="title">
                                                        <a
                                                            href="https://traboon.com/admin/module/hotel/attribute/edit/12">Resorts</a>
                                                    </td>
                                                    <td>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/edit/12"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/terms/12"
                                                            class="btn btn-sm btn-st"><i class="fa fa"></i> Manage
                                                            Terms
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="ids[]"
                                                            value="11">
                                                    </td>
                                                    <td class="title">
                                                        <a
                                                            href="https://traboon.com/admin/module/hotel/attribute/edit/11">Appartment</a>
                                                    </td>
                                                    <td>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/edit/11"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/terms/11"
                                                            class="btn btn-sm btn-st"><i class="fa fa"></i> Manage
                                                            Terms
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="ids[]"
                                                            value="7">
                                                    </td>
                                                    <td class="title">
                                                        <a
                                                            href="https://traboon.com/admin/module/hotel/attribute/edit/7">Restaurant</a>
                                                    </td>
                                                    <td>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/edit/7"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/terms/7"
                                                            class="btn btn-sm btn-st"><i class="fa fa"></i> Manage
                                                            Terms
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="ids[]"
                                                            value="6">
                                                    </td>
                                                    <td class="title">
                                                        <a
                                                            href="https://traboon.com/admin/module/hotel/attribute/edit/6">Amenities</a>
                                                    </td>
                                                    <td>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/edit/6"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/terms/6"
                                                            class="btn btn-sm btn-st"><i class="fa fa"></i> Manage
                                                            Terms
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="ids[]"
                                                            value="5">
                                                    </td>
                                                    <td class="title">
                                                        <a
                                                            href="https://traboon.com/admin/module/hotel/attribute/edit/5">Type
                                                            Of Accommodation</a>
                                                    </td>
                                                    <td>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/edit/5"
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="https://traboon.com/admin/module/hotel/attribute/terms/5"
                                                            class="btn btn-sm btn-st"><i class="fa fa"></i> Manage
                                                            Terms
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .form-1 {
                    margin-top: 5%;
                }

                .panel {
                    background-color: #f4f6f8 !important;
                    box-shadow: 0 0 0 1px rgb(63 63 68 / 5%), 0 1px 3px 0 rgb(63 63 68 / 15%);
                    border-radius: 3px;

                }

                .panel .panel-title {
                    padding: 14px 20px;
                    border-bottom: 1px solid #dfe4e8;
                    position: relative;
                }

                .panel-body {
                    padding: 20px;
                }
                .btn-st{
                    background-color: #28a745;
                    border: #28a745;
                    color: #fff;
                }
                .btn-st:hover{
                    color: #fff !important;
                }
            </style>



<?php

include("footer.php");


?>
