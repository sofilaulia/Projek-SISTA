<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/tools/header');
?>
<div class="main-content">
    <section class="section">


        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php $this->load->view('layouts/_alerts.php') ?>
                            <form action="<?= base_url('Admin/updateDosen/' . $dosen->id) ?>" method="POST">
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <input type="text" name="nidn" value="<?= $dosen->nidn ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" value="<?= $dosen->nama ?>" class="form-control">
                                </div>
                                <a href="<?= base_url('Admin/dosen') ?>" class="btn btn-danger">Back</a>
                                <input type="submit" class="btn btn-primary" value="SUBMIT">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('admin/tools/footer'); ?>