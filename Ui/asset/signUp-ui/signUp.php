<?php
require_once "../layouts/layouts.php";
require_once "../../../class/signUp.inc.php";


?>
<div class="container-fluid col-md-6 mt-5">
    <form class="row g-3 needs-validation p-2" novalidate method="post">
        <!-- //First Name Field -->
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" required name="fName">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please Enter First Name
            </div>
        </div>
        <!-- //Last Name Field -->
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" required name="lName">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please Enter Last Name
            </div>
        </div>
        <!-- //Email Field -->
        <div class="col-md-12">
            <label for="validationCustomUsername" class="form-label">User Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="Email" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="gmail.com" name="email">
                <div class="invalid-feedback">
                    Please Enter Email
                </div>
            </div>
        </div>
        <!-- //Password Field -->
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom01" required name="password">
            <div class="invalid-feedback">
                Please Enter Password
            </div>
        </div>
        <!-- //Confirm Password Field -->
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="validationCustom01" required name="confirmPassword">
            <div class="invalid-feedback">
                Please Enter Confirm Password
            </div>
        </div>
        <!-- //Check Filed -->
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <!-- //Submit Btn Field -->
        <button class="btn btn-primary" type="submit" name="btnSignUp">Sign Up</button>
    </form>
</div>
<script src="app.js"></script>