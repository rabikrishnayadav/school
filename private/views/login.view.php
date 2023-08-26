<?php $this->view('includes/header'); ?>

<div class="container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top:50px; width:100%; max-width:310px;">
        <h2 class="text-center">School System</h2>    
        <img src="<?=ROOT?>/assets/logo.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;">
        <h3>Login</h3>    
        <input type="email" name="email" placeholder="Email"class="form-control" autofocus>
        <br>
        <input type="password" name="password" placeholder="Password"class="form-control">
        <br>
        <button class="btn btn-primary">Login</button>
    </div>

</div>

<?php $this->view('includes/footer'); ?>