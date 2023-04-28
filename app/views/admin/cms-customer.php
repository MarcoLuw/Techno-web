<div class="row my-5">
    <h3 class="fs-4 mb-3">All Users</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">Id</th>
                    <th scope="col">Full name</th>
                    <th scope="col">User name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">creationTime</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $data["output"];?>
            </tbody>
        </table>
    </div>
</div>