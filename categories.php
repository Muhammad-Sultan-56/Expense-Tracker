<?php require_once("./auth.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Categories - Expense Tracker</title>
    <!-- css file includes -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>
    <div class="main-wrapper">

        <!-- header includes -->
        <?php require_once("./includes/header.php") ?>

        <!-- sidebar includes -->
        <?php require_once("./includes/sidebar.php") ?>

        <div class="page-wrapper">

            <div class="content">

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="page-title"><i class="fa fa-plus text-primary mr-2"></i> Add Categories</h4>
                            <hr>
                            <!-- category form start -->
                            <form class="row" action="#">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter here..." required>
                                    </div>
                                </div>
                                <div class="col-md-4 p-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-100 mt-md-4">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- category form end -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="page-title"><i class="fa fa-eye text-primary mr-2"></i>View All Categories</h4>
                            <hr>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Javascript Developer</td>
                                                <td><span class="custom-badge status-green">Active</span></td>
                                                <td>
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="btn btn-outline-secondary btn-sm">Actions</span></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Software Engineer</td>
                                                <td><span class="custom-badge status-red">Inactive</span></td>
                                                <td>23</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>

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

        <!-- js file includes -->
        <?php require_once("./includes/javascript-links.php") ?>


    </div>
</body>

</html>