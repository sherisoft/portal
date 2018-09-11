<title>G-AjirI :: Jobs</title>
    <div id="page_content">
        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">All Job Seekers for <?php echo $jobdata->companyName; ?>'s <?php echo $jobdata->position; ?> position.</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Company</th>
                            <th>Applied On</th>
                            <th>Status</th>
                            <th>Applicant</th>
                            <th>Job Post</th>
                        </tr>
                        </thead>
 
                        <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Company</th>
                            <th>Applied On</th>
                            <th>Status</th>
                            <th>Applicant</th>
                            <th>Job Post</th>
                        </tr>
                        </tfoot>

                        <tbody>
                            <?php foreach($applicantsdata as $item) { ?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $userdata->emailAddress; ?></td>
                                    <td><?php echo $userdata->mobileNumber; ?></td>
                                    <td><?php echo $jobdata->position; ?></td>
                                    <td><?php echo $jobdata->companyName; ?></td>
                                    <td><?php echo $item->appliedOn; ?></td>
                                    <td><?php echo $item->status; ?></td>
                                    <td>
                                        <form method="post" action="get_employee">
                                            <input type="text" name="id" value="<?php echo $userdata->userId; ?>" hidden>
                                            <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="post" action="get_job">
                                            <input type="text" name="id" value="<?php echo $jobdata->jobId; ?>" hidden>
                                            <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>