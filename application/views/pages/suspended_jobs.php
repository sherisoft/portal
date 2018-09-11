<title>G-AjirI :: Jobs</title>
    <div id="page_content">
        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">All Suspended Jobs</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Position</th>
                            <th>Created On</th>
                            <th>Closing On</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>Applications</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Event Name</th>
                            <th>Position</th>
                            <th>Created On</th>
                            <th>Closing On</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>Applications</th>
                        </tr>
                        </tfoot>

                        <tbody>
                            <?php foreach($data as $item) { ?>
                                <tr>
                                    <td><?php echo $item->companyName; ?></td>
                                    <td><?php echo $item->position; ?></td>
                                    <td><?php echo $item->createdOn; ?></td>
                                    <td><?php echo $item->closedOn; ?></td>
                                    <td><?php echo $item->category; ?></td>
                                    <td><?php echo $item->status; ?></td>
                                    <td>
                                        <?php
                                                # code...
                                                echo '
                                                    <form method="post" action="get_job">
                                                        <input type="text" name="id" value="'.$item->jobId.'" hidden>
                                                        <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                                    </form>
                                                ';

                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                                # code...
                                                echo '
                                                    <form method="post" action="update_job_status">
                                                        <input type="text" name="id" value="'.$item->jobId.'" hidden>
                                                        <input type="text" name="state" value="open" hidden>
                                                        <input type="text" name="sender" value="suspended" hidden>
                                                        <button type="submit" class="md-btn md-btn-primary md-btn-wave-light">Open</button>
                                                    </form>
                                                ';

                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                                # code...
                                                echo '
                                                    <form method="post" action="update_job_status">
                                                        <input type="text" name="id" value="'.$item->jobId.'" hidden>
                                                        <input type="text" name="state" value="closed" hidden>
                                                        <input type="text" name="sender" value="suspended" hidden>
                                                        <button type="submit" class="md-btn md-btn-warning md-btn-wave-light">Close</button>
                                                    </form>
                                                ';

                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            # code...
                                            echo '
                                                <form method="post" action="view_job_applicants">
                                                    <input type="text" name="id" value="'.$item->jobId.'" hidden>
                                                    <button type="submit" class="md-btn md-btn-default md-btn-wave-light"><i class="material-icons">&#xE241;</i></button>
                                                </form>
                                            ';
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>