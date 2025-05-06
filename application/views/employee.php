
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
                    <h2>Employee List</h2>
<a href="<?php echo site_url('employee/add'); ?>">Add New Employee</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
        <th>Salary</th>
        <th>Picture</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($employees as $emp): ?>
    <tr>
        <td><?php echo $emp->id; ?></td>
        <td><?php echo $emp->name; ?></td>
        <td><?php echo $emp->address; ?></td>
        <td><?php echo $emp->designation; ?></td>
        <td><?php echo $emp->salary; ?></td>
        <td>
            <?php if ($emp->picture): ?>
                <img src="<?php echo base_url('uploads/'.$emp->picture); ?>" width="80">
            <?php else: ?>
                No Image
            <?php endif; ?>
        </td>
        <td>
            <a href="<?php echo site_url('employee/edit/'.$emp->id); ?>">Edit</a> |
            <a href="<?php echo site_url('employee/delete/'.$emp->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php $this->load->view('footer'); ?>

            </body>
            </html>
