<title>G-AjirI :: Job Seekers</title>
    <div id="page_content">
        <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Active Job Seekers</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>ID Number</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>ID Number</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php foreach($data as $item) { ?>
                            <tr>
                                <td><?php echo $item->firstName; ?> <?php echo $item->middleName; ?> <?php echo $item->lastName; ?></td>
                                <td><?php echo $item->emailAddress; ?></td>
                                <td><?php echo $item->mobileNumber; ?></td>
                                <td><?php echo $item->idNumber; ?></td>
                                <td><?php echo $item->status; ?></td>
                                <td><?php echo $item->createOn; ?></td>
                                <td>
                                    <?php
                                            # code...
                                            echo '
                                                <form method="post" action="get_employee">
                                                    <input type="text" name="id" value="'.$item->userId.'" hidden>
                                                    <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                                </form>
                                            ';

                                    ?>
                                </td>
                                <td>
                                    <?php
                                            # code...
                                            echo '
                                                <form method="post" action="update_employee_status">
                                                    <input type="text" name="id" value="'.$item->userId.'" hidden>
                                                    <input type="text" name="state" value="suspended" hidden>
                                                    <button type="submit" class="md-btn md-btn-warning md-btn-wave-light">Suspend</button>
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