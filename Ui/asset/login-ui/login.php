<?php
require_once "../layouts/layouts.php";
require_once "../../../class/login.inc.php";
?>

<div class="container-fluid col-md-6 mt-5">
    <form class="row g-3 needs-validation p-2" novalidate method="POST">
        <!-- //Email Field -->
        <div class="col-md-12">
            <label for="validationCustomUsername" class="form-label">User Email</label>
            <div class="input-group has-validation">

                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="@gmail.com" name="email">
                <div class="invalid-feedback">
                    Please Enter Email
                </div>
            </div>
        </div>
        <!-- //Password Field -->
        <div class="col-md-12 mb-3">
            <label for="validationCustom01" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom01" required name="password">
            <div class="invalid-feedback">
                Please Enter Password
            </div>
        </div>
        <div class="mb-3 form-check ms-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me
                out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
    </form>
</div>
<script src="../signUp-ui/app.js"></script>