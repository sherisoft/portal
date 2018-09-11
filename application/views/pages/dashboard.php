<title>G-AJIRI::DASHBOARD</title>

    <div id="page_content">
        <div id="page_content_inner">

            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                    <div>
                     <a href="employers">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                                <span class="uk-text-muted uk-text-small">Total Employers</span>
                                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript><?= $employers; ?></noscript></span></h2>
                            </div>
                        </div>
                        </a>
                    </div>
                

                    <div>
                <a href="jobs">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                                <span class="uk-text-muted uk-text-small">Total Job Posts</span>
                                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript><?= $jobs; ?></noscript></span></h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div>
                <a href="staffs">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                                <span class="uk-text-muted uk-text-small">Total Staff</span>
                                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript><?= $staff; ?></noscript></span></h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div>
                <a href="employees">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                                <span class="uk-text-muted uk-text-small">Total Employees</span>
                                <h2 class="uk-margin-remove" id="peity_live_text"><?= $employees; ?></h2>
                            </div>
                        </div>
                        </a>
                    </div>
            </div>

            <!-- circular charts -->
            <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                <a href="create_staff">
                    <div>
                        <div class="md-card md-card-hover md-card-overlay">
                            <div class="md-card-content">
                                <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                    <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                                </div>
                            </div>
                            <div class="md-card-overlay-content">
                                <div class="uk-clearfix md-card-overlay-header">
                                    <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                    <h3>
                                        Add New Staff
                                    </h3>
                                </div>
                                <p>Click to proceed to adding new Staff.</p>
                                <button class="md-btn md-btn-primary">More</button>
                            </div>
                        </div>
                    </div>                    
                </a>

                <a href="create_employer">
                    <div>
                        <div class="md-card md-card-hover md-card-overlay">
                            <div class="md-card-content">
                                <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                    <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                                </div>
                            </div>
                            <div class="md-card-overlay-content">
                                <div class="uk-clearfix md-card-overlay-header">
                                    <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                    <h3>
                                        Add New Employer
                                    </h3>
                                </div>
                                <p>Click to proceed to adding new Employer.</p>
                                <button class="md-btn md-btn-primary">More</button>
                            </div>
                        </div>
                    </div>                    
                </a>
                <a href="create_employee">
                    <div>
                        <div class="md-card md-card-hover md-card-overlay">
                            <div class="md-card-content">
                                <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                    <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                                </div>
                            </div>
                            <div class="md-card-overlay-content">
                                <div class="uk-clearfix md-card-overlay-header">
                                    <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                    <h3>
                                        Add New Employee
                                    </h3>
                                </div>
                                <p>Click to proceed to adding new Employee.</p>
                                <button class="md-btn md-btn-primary">More</button>
                            </div>
                        </div>
                    </div>                    
                </a>
                <a href="create_job">
                    <div>
                        <div class="md-card md-card-hover md-card-overlay">
                            <div class="md-card-content" id="canvas_1">
                                <div class="epc_chart" data-percent="37" data-bar-color="#9c27b0">
                                    <span class="epc_chart_icon"><i class="material-icons">&#xE85D;</i></span>
                                </div>
                            </div>
                            <div class="md-card-overlay-content">
                                <div class="uk-clearfix md-card-overlay-header">
                                    <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                    <h3>
                                        Add New Job Post
                                    </h3>
                                </div>
                                <p>This is the section for creating a Job Post.</p>
                                <button class="md-btn md-btn-primary">More</button>
                            </div>
                        </div>
                    </div>                    
                </a>
                <a href="finance">
                    <div>
                        <div class="md-card md-card-hover md-card-overlay">
                            <div class="md-card-content uk-flex uk-flex-center uk-flex-middle">
                                <span class="peity_conversions_large peity_data">5,3,9,6,5,9,7</span>
                            </div>
                            <div class="md-card-overlay-content">
                                <div class="uk-clearfix md-card-overlay-header">
                                    <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                    <h3>
                                        Finance
                                    </h3>
                                </div>
                                Click to proceed to.
                                <button class="md-btn md-btn-primary">More</button>
                            </div>
                        </div>
                    </div>                    
                </a>
            </div>

            <!-- tasks -->
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <span><p>Recent Jobs Posts</p></span>
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-nowrap">Position</th>
                                            <th class="uk-text-nowrap">Status</th>
                                            <th class="uk-text-nowrap">Open From</th>
                                            <th class="uk-text-nowrap uk-text-right">Closing On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Software Engineer</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In progress</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">24.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Waiter</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-warning">Open</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">21.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">DJ</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-primary">New</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Driver</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-success">Resolved</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">17.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Cleaner</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-danger">Overdue</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10"><a href="">Teacher</a></td>
                                            <td class="uk-width-2-10"><span class="uk-badge uk-badge-success">Open</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <span><p>Closed Jobs Posts</p></span>
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-nowrap">Position</th>
                                            <th class="uk-text-nowrap">Status</th>
                                            <th class="uk-text-nowrap">Open From</th>
                                            <th class="uk-text-nowrap uk-text-right">Closing On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Software Engineer</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In progress</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">24.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Waiter</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-warning">Open</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">21.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">DJ</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-primary">New</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Driver</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-success">Resolved</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">17.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a href="">Cleaner</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-danger">Overdue</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10"><a href="">Teacher</a></td>
                                            <td class="uk-width-2-10"><span class="uk-badge uk-badge-success">Open</span></td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>