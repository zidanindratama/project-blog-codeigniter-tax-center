<?= $this->extend('layout/template') ?>

<?= $this->section("content") ?>
<div class="container">
    <div class="vh-100">
        <h1 class="mt-3">List Category</h1>
        <a href="/category/create" class="btn btn-primary my-3">Add New Category</a>
        <table class="table mt-3">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Programming</td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>