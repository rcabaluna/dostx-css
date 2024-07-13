<?= $this->extend('admin/main') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Responses</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a class="breadcrumb-item" href="#">Reports</a>
                <span class="breadcrumb-item active">Responses</span>
            </nav>
        </div>
    </div>
    <?php if (isset($_SESSION['update'])) {
            ?>
            <div class="mt-3 alert alert-success alert-dismissible fade show" id="alert-update-status">
                <div class="d-flex align-items-center justify-content-start">
                    <span class="alert-icon">
                        <i class="anticon anticon-check-o"></i>
                    </span>
                    z<span>The status has been updated successfully!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php }
        ?>
    <div class="card">
        <div class="card-body">
        <div class="row m-b-30">
                                <div class="col-lg-8">
                                    <div class="d-md-flex">
                                        <div class="m-b-10 m-r-15"><label for="">Year</label>
                                            <select class="custom-select" style="min-width: 180px;">
                                                <?php for ($i=date('Y')-5; $i <= date('Y'); $i++) {  ?>
                                                    <option value="<?=$i?>"><?=$i?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="m-b-10 m-r-15">
                                            <label for="">Quarter</label>
                                            <select class="custom-select" style="min-width: 180px;">
                                                <option selected="">Status</option>
                                                <option value="all">All</option>
                                                <option value="inStock">In Stock </option>
                                                <option value="outOfStock">Out of Stock</option>
                                            </select>
                                        </div>
                                        <div class="m-b-10 m-r-15">
                                            <label for="">Office</label>
                                            <select class="custom-select" style="min-width: 180px;">
                                                <option value="all">All</option>
                                                <option value="inStock">In Stock </option>
                                                <option value="outOfStock">Out of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary">
                                        <i class="anticon anticon-plus-circle m-r-5"></i>
                                        <span>Add Product</span>
                                    </button>
                                </div>
                            </div>
            <h4>Quarter Period Status</h4>
            <p>This table displays the s tatus of quarters, showing the semesters and their corresponding quarters. Only one quarter can be set to active at a time.</p>
            <div class="m-t-25">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Quarter</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>