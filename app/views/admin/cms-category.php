<div class="row my-5">
    <h3 class="fs-4 mb-3">All Categories</h3>
        <div class="row mb-3" style="width: 150px; margin: 0 0 16px;">
            <?php require_once "./app/views/admin/createForm.php" ?>
        </div>
    <div class="row">
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th class="detail" style="width: 15vh;">id</th>
                        <th class="detail" style="width: 20vh;">Title</th>
                        <th class="detail" style="width: 30vh;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php echo $data["output"] ?>
                        
                </tbody>
            </table>
        </div>
    </div>
</div>