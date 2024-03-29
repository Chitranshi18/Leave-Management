<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Staff Profile - <?= $panel_name ?></title>

</head>

<body class="sb-nav-fixed">

    <?php include("TopBar.php"); ?>

    <div id="layoutSidenav">
        <?php include("SideBar.php"); ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="sb-page-header pb-10 sb-page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="sb-page-header-content py-5">
                            <h1 class="sb-page-header-title">
                                <div class="sb-page-header-icon"><i data-feather="activity"></i></div>
                                <span>Manage Parent Profile</span>
                            </h1>
                            <div class="sb-page-header-subtitle"></div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">

                    <div class="modal fade" id="editprofile">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Details</h4>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>

                                </div>
                                <div class="modal-body">

                                    <form action="code/ManageProfileCode?action=editprofile" method="post">

                                        <div class="form-group">
                                            <label>Staff Name</label>
                                            <input type="name" value="<?php echo $row_admin["name"]; ?>" name="name" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Staff Email</label>
                                            <input type="email" value="<?php echo $row_admin["email"]; ?>" name="email" class="form-control" />
                                           </div>
                                        <div class="form-group">
                                            <label>Staff Password</label>
                                            <input type="text" value="<?php echo $row_admin["password"]; ?>" name="password" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary"> Submit </button>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="card">
                        <div class="card-header"> Staff Profile &emsp; <a href="#" data-toggle="modal" data-target="#editprofile" class="btn btn-secondary">Edit &nbsp; <i class="fa fa-edit"></i> </a> </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%" cellspacing="0">


                                    <tbody>
                                        <?php


                                        ?>
                                        <tr>
                                            <th>Staff Name</th>
                                            <td><?php echo $row_admin["name"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Staff Email</th>
                                            <td><?php echo $row_admin["email"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Staff Password</th>
                                            <td><?php echo $row_admin["password"]; ?></td>
                                        </tr>

                                        </tfoot>
                                </table>
                            </div>


                        </div>
                    </div>

                    <br /><br />



            </main>
            <?php include("Footer.php"); ?>
        </div>
    </div>
    <?php include("FooterLink.php"); ?>
</body>

</html>