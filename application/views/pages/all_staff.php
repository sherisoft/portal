<title>G-AjirI :: Staffs</title>
    <div id="page_content">
        <div id="page_content_inner">
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">Name</th>
                                <th colspan="5">G-AJIRI STAFFS</th>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php foreach($data as $item) { ?>
                            <tr>
                                <td><?php echo $item->name; ?></td>
                                <td><?php echo $item->role; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td><?php echo $item->status; ?></td>
                                <td><?php echo $item->created_on; ?></td>
                                <td>
                                    <?php
                                        if ($item->status == 'active') {
                                            # code...
                                            echo '
                                                <form method="post" action="update_staff_status">
                                                    <input type="text" name="id" value="'.$item->staffid.'" hidden>
                                                    <input type="text" name="state" value="disabled" hidden>
                                                    <button type="submit" class="md-btn md-btn-warning md-btn-wave-light">Disable</button>
                                                </form>
                                            ';
                                        }else{
                                            # code...
                                            echo '
                                                <form method="post" action="update_staff_status">
                                                    <input type="text" name="id" value="'.$item->staffid.'" hidden>
                                                    <input type="text" name="state" value="active" hidden>
                                                    <button type="submit" class="md-btn md-btn-primary md-btn-wave-light">Acivate</button>
                                                </form>
                                            ';

                                        }

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