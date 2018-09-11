<title>G-AJIRI::ADMIN LOGIN</title>
<body class="login_page login_page_v2">

    <div class="uk-container uk-container-center">
        <div class="md-card">
            <div class="md-card-content padding-reset">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-large-2-3 uk-hidden-medium uk-hidden-small">
                        <div class="login_page_info uk-height-1-1" style="background-image: url('<?php echo base_url(); ?>static/img/others/sabri-tuzcu-331970.jpg')">
                            <div class="info_content">
                                <h1 class="heading_b">G-AJIRI ADMINISTRATOR</h1>
                                Welcome to G-ajiri administrator account. Use you staff account to be able to proceed to perform administrative duties based on your account permission. If you do not have an account, create one but you will have to request the Space owner to approve your account to be able to use it. Thank you!!!
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-1-3 uk-width-medium-2-3 uk-container-center">
                        <div class="login_page_forms"> 
                            <div id="login_card">
                                <div id="login_form">
                                    <div class="login_heading">
                                        <div class="user_avatar"></div>
                                    </div>
                                    <form method="post" action="login_user" id="loginform" class="navbar-form navbar-right" role="search">
                                        <div class="uk-form-row">
                                            <label for="login_email">Email</label>
                                            <input class="md-input" type="email" id="login_email" name="email" required="" />
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="login_password">Password</label>
                                            <input class="md-input" type="password" id="login_password" name="password" required="" />
                                        </div>
                                        <div class="login-message" style="color: red;"></div>
                                        <div class="uk-margin-medium-top">
                                            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
<!-- <a type="submit" href="dashboard" class="md-btn md-btn-primary md-btn-block md-btn-large">Dashboard</a> -->
                                        </div>
                                            <div class="uk-margin-top">
                                            <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                                            <span class="icheck-inline">
                                                <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                                                <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="uk-position-relative" id="login_help" style="display: none">
                                    <button type="button" class="uk-position-top-right uk-close uk-margin-right back_to_login"></button>
                                    <h2 class="heading_b uk-text-success">Can't log in?</h2>
                                    <p>Here’s the info to get you back in to your account as quickly as possible.</p>
                                    <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                                    <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
                                </div>
                                <div id="login_password_reset" style="display: none">
                                    <button type="button" class="uk-position-top-right uk-close uk-margin-right back_to_login"></button>
                                    <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                                    <form>
                                        <div class="uk-form-row">
                                            <label for="login_email_reset">Your email address</label>
                                            <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                                        </div>
                                        <div class="uk-margin-medium-top">
                                            <a href="index-2.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                                        </div>
                                    </form>
                                </div>
                                <div id="register_form" style="display: none">
                                    <button type="button" class="uk-position-top-right uk-close uk-margin-right back_to_login"></button>
                                    <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
                                    <form id="signupform" class="navbar-form navbar-right" action="register_user" method="post" role="search">
                                        <div class="uk-form-row">
                                            <label for="register_username">Full Name</label>
                                            <input class="md-input" type="text" id="register_username" name="register_username" />
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="register_password">Password</label>
                                            <input class="md-input" type="password" id="register_password" name="register_password" />
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="register_password_repeat">Repeat Password</label>
                                            <input class="md-input" type="password" id="register_password_repeat" name="register_password_repeat" />
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="register_email">E-mail</label>
                                            <input class="md-input" type="text" id="register_email" name="register_email" />
                                        </div>
                                        <div class="register-message-success" style="color: green;"></div>
                                        <div class="register-message-error" style="color: red;"></div>
                                        <div class="uk-margin-medium-top">
                                            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-text-center">
                                <a href="#" id="signup_form_show">Create an account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>