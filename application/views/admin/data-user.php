<div class="main-content">
    <section class="section">
        <div class="section-header">
            User
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item"><a href="#">User</a></div>
                <div class="breadcrumb-item">Data</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Data User</h4>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($users as $user) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->email; ?></td>
                                <td align="right">
                                    <a href="<?php echo base_url(); ?>index.php/dashboard/edit/<?php echo $user->id; ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo base_url(); ?>index.php/dashboard/delete/<?php echo $user->id; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</div>