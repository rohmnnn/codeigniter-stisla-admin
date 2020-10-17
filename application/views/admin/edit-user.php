<div class="main-content">
    <section class="section">
        <div class="section-header">
            Edit User
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item"><a href="#">User</a></div>
                <div class="breadcrumb-item">Edit</div>
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
                        <form method="post" class="needs-validation" action="<?php echo base_url(); ?>/dashboard/update" oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
                        <input type="hidden" name="id" id="id" value="<?php echo $users->id; ?>"/>
                            <div class="card-header">
                                <h4>Edit User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group col-md-7 col-12">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $users->name; ?>" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $users->email; ?>" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>