<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style 1.css">
</head>

<body>
    <div id="form">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                        <li><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="login">
                            <h2 class="text-uppercase text-center"> Log in</h2>
                            <form id="login" method="post" action="login_form.php">
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email" name="mail" required
                                        data-validation-required-message="Please enter your email address."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" id="password" name="pass" required
                                        data-validation-required-message="Please enter your password"
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block" name="send">
                                    Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade in" id="signup">
                            <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
                            <form id="signup" method="post" action="signin_form.php">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" id="first_name" name="fname" required
                                                data-validation-required-message="Please enter your name."
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Last Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" id="last_name" name="lname" required
                                                data-validation-required-message="Please enter your name."
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email" name="mail" required
                                        data-validation-required-message="Please enter your email address."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Your Phone<span class="req">*</span> </label>
                                    <input type="tel" class="form-control" id="phone" name="number" required
                                        data-validation-required-message="Please enter your phone number."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" id="password" name="pass" required
                                        data-validation-required-message="Please enter your password"
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block" name="send">
                                    Sign up
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script 1.js"></script>
</body>