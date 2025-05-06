<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author"/>

    <?php $this->load->view('links'); ?>
</head>
<?php $this->load->view('header'); ?>

<body data-sidebar="colored">
    <!-- Begin page wrapper -->
    <div id="layout-wrapper">
    <form method="post" action="dashboard"> <!-- Make sure to add form tag with method and action -->

        <!-- Header -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Start Page Content -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-md flex-shrink-0">
                                            <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                <i class="uim uim-briefcase"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-muted mb-1">Welcome</h5>
                                            <h4 class="mb-0">Admin</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
    <li class="nav-item me-3">
        <span style="font-size: 20px;">👋</span> <!-- Emoji -->
    </li>
    <li class="nav-item">
        <a href="<?php echo base_url('logout'); ?>" class="btn btn-outline-danger btn-sm">
            Logout
        </a>
    </li>
</ul>
<?php $this->load->view('footer'); ?>

                    

</body>
</html>
