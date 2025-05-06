<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    
    <?php $this->load->view('links'); ?>
</head>

<body data-sidebar="colored">

    <div id="layout-wrapper">
        
        <?php $this->load->view('header'); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                
                    <div class="row">
                        <div class="col-xl-6 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="mb-4">Add New Employee</h2>

                                    <?php echo form_open_multipart('employee/insert'); ?>
                                    <div class="mb-3">
    <label>Employee ID</label>
    <input type="text" name="id" class="form-control">
</div>

                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Salary</label>
                                        <input type="text" name="salary" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Picture</label>
                                        <input type="file" name="picture" class="form-control">
                                    </div>

                                    <input type="submit" value="Add Employee" class="btn btn-primary">

                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div> <!-- page-content -->
        </div> <!-- main-content -->

        <?php $this->load->view('footer'); ?>
    </div> <!-- layout-wrapper -->

</body>
</html>
