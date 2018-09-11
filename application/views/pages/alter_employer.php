<?php foreach($items as $data) { ?>
<title>G-AJIRI:: <?php echo $data->firstName; ?> <?php echo $data->lastName; ?></title>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Edit <?php echo $data->firstName; ?> <?php echo $data->lastName; ?></h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                        <form  id="form_validation" class="uk-form-stacked update_employer_data"  action="update_employer_details" method="post" role="search">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="fname">First Name<span class="req">*</span></label>
                                    <input type="text" id="fname" name="fname" value="<?php echo $data->firstName; ?>" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="mname">Middle Name<span class="req">*</span></label>
                                    <input type="text" id="mname" name="mname" value="<?php echo $data->middleName; ?>" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="lname">Last Name<span class="req">*</span></label>
                                    <input type="text" id="lname" name="lname" value="<?php echo $data->lastName; ?>" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="mnumber">Mobile Number<span class="req">*</span></label>
                                    <input type="text" id="mnumber" name="mnumber" value="<?php echo $data->mobileNumber; ?>" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="username">Username<span class="req">*</span></label>
                                    <input type="text" id="username" name="username" value="<?php echo $data->username; ?>" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" id="email" name="email" value="<?php echo $data->emailAddress; ?>" data-parsley-trigger="change" required  class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bisname">Business Name<span class="req">*</span></label>
                                    <input type="text" id="bisname" name="bisname" value="<?php echo $data->businessName; ?>" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bislocation">Business Location<span class="req">*</span></label>
                                    <input type="text" id="bislocation" name="bislocation" value="<?php echo $data->businessLocation; ?>" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bisregno">Business Registration Nnmber<span class="req">*</span></label>
                                    <input type="text" id="bisregno" name="bisregno" value="<?php echo $data->businessRegNo; ?>" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <label for="val_select" class="uk-form-label">Industry</label>
                                <div class="uk-input-group parsley-row">
                                    <span class="uk-input-group-addon">
                                        <i class="md-list-addon-icon material-icons">hearing</i>
                                    </span>
                                    <select id="val_industry" required data-md-selectize>
                                        <option value="<?php echo $data->industry; ?>"><?php echo $data->industry; ?></option>
                                        <option value="sports">Sports</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="it">IT</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="hospitality">Hospitality</option>
                                        <option value="music">Music</option>
                                        <option value="constructions">Constructions</option>
                                        <option value="other">Other..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="about">About Employer (20 chars min, 100 max)</label>
                                    <textarea class="md-input" id="about" name="about" cols="10" rows="8" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 characters long comment about employer.." value="<?php echo $data->about; ?>"><?php echo $data->about; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="update-message-success" style="color: green;"></div>
                        <div class="update-message-error" style="color: red;"></div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <button type="submit" class="md-btn md-btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>