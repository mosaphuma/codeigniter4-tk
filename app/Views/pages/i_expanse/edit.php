<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card rounded-0">
    <div class="card-header">
        <div class="d-flex w-100 justify-content-between">
            <div class="col-auto">
                <div class="card-title h4 mb-0 fw-bolder">Update Expanse Details</div>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('I_expansectl/i_expansef') ?>" class="btn btn btn-light bg-gradient border rounded-0"><i class="fa fa-angle-left"></i> Back to List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('I_expansectl/expanse_edit/'.(isset($countrys1['ID'])? $countrys1['ID'] : '')) ?>" method="POST">
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
                            <label for="department_id" class="control-label">ICODE</label>
                            <select class="form-select rounded-0" id="code" name="code" value="<?= isset($countrys1['ICODE']) ? $countrys1['ICODE'] : '' ?>" required="required">
                                <option value="" disabled selected></option>
                                <?php foreach($i_codef as $row): ?>
                                <option value="<?= $row['ICODE'] ?>" <?= isset($countrys1['ICODE']) && $countrys1['ICODE'] == $row['ICODE'] ? 'selected' : '' ?>><?= $row['IDESC'] ?></option>
                                <?php endforeach; ?>
                            </select>
                 </div>
                
                <div class="mb-3">
                    <label for="code" class="control-label">BUYDATE</label>
                    <input type="date" class="form-control rounded-0" id="issuedate" name="issuedate" autofocus placeholder="ITD" value="<?= !empty($countrys1['BUYDATE']) ? $countrys1['BUYDATE'] : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="name" class="control-label">BUYDESC</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name" autofocus placeholder="ITD" value="<?= !empty($countrys1['BUYDETAIL']) ? $countrys1['BUYDETAIL'] : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="name" class="control-label">QTY</label>
                    <input type="text" class="form-control rounded-0" id="issuefor" name="issuefor" autofocus placeholder="ITD" value="<?= !empty($countrys1['QTY']) ? $countrys1['QTY'] : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="name" class="control-label">PRiceRL</label>
                    <input type="text" class="form-control rounded-0" id="issuewhere" name="issuewhere" autofocus placeholder="ITD" value="<?= !empty($countrys1['PRICERL']) ? $countrys1['PRICERL'] : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="name" class="control-label">PriceUSD</label>
                    <input type="text" class="form-control rounded-0" id="issuehow" name="issuehow" autofocus placeholder="ITD" value="<?= !empty($countrys1['PRICEUSD']) ? $countrys1['PRICEUSD'] : '' ?>" required="required">
                </div>
                
                    <button class="btn rounded-0 btn-primary bg-gradient">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>