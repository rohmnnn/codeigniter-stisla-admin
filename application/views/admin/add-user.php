<div class="main-content">
    <section class="section">
        <div class="section-header">
            Edit User
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item"><a href="#">User</a></div>
                <div class="breadcrumb-item">Add</div>
            </div>
        </div>
        <div class="section-body">
            <p class="section-lead">
                Change information about user on this page.
            </p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <?php
                        if (validation_errors() != false) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php
                        }
                        ?>
                        <form method="POST" action="<?php echo base_url(); ?>/register/proses1">
                            <div class="card-header">
                                <h4>Edit User</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                if ($this->session->flashdata('success_register') != '') {
                                    echo '<div class="alert alert-primary" role="alert">';
                                    echo $this->session->flashdata('success_register');
                                    echo '</div>';
                                    $url1 = $_SERVER['REQUEST_URI'];
                                    header("Refresh: 1; URL=$url1");
                                }

                                ?>
                                <div class="form-group col-md-7 col-12">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="name">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-md-7 col-12">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-md-7 col-12">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-left">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>