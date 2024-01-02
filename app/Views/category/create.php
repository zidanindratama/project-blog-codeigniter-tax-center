<?= $this->extend('layout/template') ?>

<?= $this->section("content") ?>
<div class="container">
    <div class="vh-100">
        <h1 class="mt-3">Add Category</h1>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>