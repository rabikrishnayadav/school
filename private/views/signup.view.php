<?php $this->view('includes/header'); ?>

<div class="container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top:50px; width:100%; max-width:310px;">
        <h2 class="text-center">School System</h2>    
        <img src="<?=ROOT?>/assets/logo.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;">
        <h3>Add User</h3>    
        <input type="firstname" name="firstname" placeholder="First Name"class="my-2 form-control">
        <input type="lastname" name="lastname" placeholder="Last Name"class="my-2 form-control">
        <input type="email" name="email" placeholder="Email"class="my-2 form-control">

        <select class="my-2 form-control">
            <option>--Select a Gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <select class="my-2 form-control">
            <option>--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="reception">Reception</option>
            <option value="lecturer">Lecturer</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>

        <input type="text" name="Password" placeholder="Password"class="my-2 form-control">
        <input type="text" name="Password" placeholder="Retype Password"class="my-2 form-control">
        <br>
        <button class="btn btn-danger">Cancel</button>
        <button class="btn btn-primary float-end">Login</button>
    </div>

</div>

<?php $this->view('includes/footer'); ?>