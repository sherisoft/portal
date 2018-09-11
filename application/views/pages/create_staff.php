<title>G-AJIRI::CREATE STAFF</title>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Create Staff</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                        <form  id="form_validation" class="uk-form-stacked create_staff"  action="register_staff_" method="post" role="search">
                        <!-- <div id="form_validation" > -->
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="fullname">Full Name<span class="req">*</span></label>
                                    <input type="text" id="reg_staff_names" name="fullname" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" id="reg_staff_email" name="email" data-parsley-trigger="change" required  class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="password">Password<span class="req">*</span></label>
                                    <input type="password" id="reg_staff_password" name="password" data-parsley-trigger="change" required  class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <label for="val_select" class="uk-form-label">Position</label>
                                <div class="uk-input-group parsley-row">
                                    <span class="uk-input-group-addon">
                                        <i class="md-list-addon-icon material-icons">role</i>
                                    </span>
                                    <select id="reg_staff_position" required data-md-selectize>
                                        <option value="">Choose..</option>
                                        <option value="manager">Manager</option>
                                        <option value="superadmin">Super Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="register-message-success" style="color: green;"></div>
                        <div class="register-message-error" style="color: red;"></div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <button type="submit" class="md-btn md-btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
