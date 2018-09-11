<title>G-Ajiri :: My Profile</title>
    <div id="page_content">
        <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
            <h1><?php echo $this->session->userdata('name'); ?></h1>
            <span class="uk-text-muted uk-text-upper uk-text-small">
                <?php
                    if ($this->session->userdata('status') == 'active') {
                        # code...
                        echo '<span class="uk-badge uk-badge-success">Active</span>';
                    }elseif ($this->session->userdata('status') == 'disabled') {
                        # code...
                        echo '<span class="uk-badge uk-badge-default">Disbaled</span>';
                    }else{

                    }
                ?>
            </span>
        </div>
        <div id="page_content_inner">

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                    <div class="md-card">
<!--                         <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Photos
                            </h3> 
                        </div> -->
                        <div class="md-card-content">
                            <div class="uk-margin-bottom uk-text-center">
                                <img src="<?php echo base_url(); ?>static/img/ecommerce/s6_edge.jpg" alt="" class="img_medium" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Details
                            </h3>
                        </div>
                        <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium">
                                <div class="uk-width-large-1-2">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Name (s)</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $this->session->userdata('name'); ?></a></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Role</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle">
                                                    <?php
                                                        if ($this->session->userdata('role') == 'manager') {
                                                            # code...
                                                            echo "Manager";
                                                        }elseif ($this->session->userdata('role') == 'superadmin') {
                                                            # code...
                                                            echo "Super Administrator";
                                                        }else{

                                                        }
                                                    ?>
                                            </span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Created On</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $this->session->userdata('created_on'); ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Email Address</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $this->session->userdata('email'); ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider uk-hidden-large">
                                </div>
                                <div class="uk-width-large-1-2">
                                    <p>
                                        <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">What You Can Do</span>
                                
                                            <?php
                                                if ($this->session->userdata('role') == 'manager') {
                                                    # code...
                                                    echo "As a staff with Manager level, you can be able to perform numerous functions limited to managing of other staff accounts.";
                                                }elseif ($this->session->userdata('role') == 'superadmin') {
                                                    # code...
                                                    echo "As a staff with Super Administrative level, you can be able to perform all functions without any limitations. This includes managing of other staff accounts.";
                                                }else{

                                                }
                                            ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary" href="editMyProfile">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>