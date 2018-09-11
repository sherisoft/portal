<title>G-AJIRI::CREATE JOB POST</title>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Create Job Post</h3>
 
            <div class="md-card">
                <div class="md-card-content large-padding">
                    <form  id="form_validation" class="uk-form-stacked new_job"  action="create_new_job_" method="post" role="search">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="companyName">Company Name<span class="req">*</span></label>
                                    <input type="text" id="companyName" name="companyName" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="position">Position<span class="req">*</span></label>
                                    <input type="text" id="position" name="position" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="howMany">How Many?<span class="req">*</span></label>
                                    <input type="text" id="howMany" name="howMany" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <label for="val_select" class="uk-form-label">Category*</label>
                                <div class="uk-input-group parsley-row">
                                    <span class="uk-input-group-addon">
                                        <i class="md-list-addon-icon material-icons">Category</i>
                                    </span>
                                    <select id="category" required data-md-selectize>
                                        <option value="">Choose..</option>
                                        <option value="internship">Internship</option>
                                        <option value="contract">Contract</option>
                                        <option value="permanent">Permanent</option>
                                        <option value="other">Other..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="minSalary">Min. Salary<span class="req">*</span></label>
                                    <input type="text" id="minSalary" name="minSalary" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="maxSalary">Max. Salary<span class="req">*</span></label>
                                    <input type="text" id="maxSalary" name="maxSalary" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="openingDate">Opening Date<span class="req">*</span></label>
                                    <input type="text" id="openingDate" name="openingDate" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="closingDate">Due Date<span class="req">*</span></label>
                                    <input type="text" id="closingDate" name="closingDate" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="employer">Employer<span class="req">*</span></label>
                                    <input type="text" id="employer" name="employer" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="about">About Job (20 chars min, 100 max)</label>
                                    <textarea class="md-input" id="about" name="about" cols="10" rows="8" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 characters long comment about employer.."></textarea>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
