<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card rounded-0">
    <div class="card-header">
        <div class="d-flex w-100 justify-content-between">
            <div class="col-auto">
                <div class="card-title h4 mb-0 fw-bolder">Update Staff Details</div>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('Main/staff') ?>" class="btn btn btn-light bg-gradient border rounded-0"><i class="fa fa-angle-left"></i> Back to List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('Main/staff_edit/'.(isset($staff['ID'])? $staff['ID'] : '')) ?>" method="POST">
                <?php if($session->getFlashdata('error')): ?>
                    <div class="alert alert-danger rounded-0">
                        <?= $session->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata('success')): ?>
                    <div class="alert alert-success rounded-0">
                        <?= $session->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="code" class="control-label">EMPCODE</label>
                    <input type="text" class="form-control rounded-0" id="code" name="code" autofocus placeholder="ITD" value="<?= !empty($staff['EMPCODE']) ? $staff['EMPCODE'] : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="name" class="control-label">FIRSTNAME</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name" autofocus placeholder="ITD" value="<?= !empty($staff['FIRSTNAME']) ? $staff['FIRSTNAME'] : '' ?>" required="required">
                </div>
                <div class="d-grid gap-1">
                    <button class="btn rounded-0 btn-primary bg-gradient">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>