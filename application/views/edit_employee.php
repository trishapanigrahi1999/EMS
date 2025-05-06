<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit Employee | Tocly Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    
    <?php $this->load->view('links'); // Include CSS and meta links ?>
</head>
<body>

    <?php $this->load->view('header'); // Optional: include header ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <h2 class="mb-4">Edit Employee</h2>

                <?php echo form_open('employee/update/'.$employee->id); ?>
                
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $employee->name; ?>">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" name="address"><?php echo $employee->address; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="designation">Designation:</label>
                    <input type="text" class="form-control" name="designation" value="<?php echo $employee->designation; ?>">
                </div>

                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo $employee->salary; ?>">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Employee</button>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); // Optional: include footer ?>
    <?php $this->load->view('scripts'); // Include JS files ?>
    
</body>
</html>
