<?php
    // echo $data['output']['name'];
    $output = $data['output'];
?>

<div class="form-section" style="margin-top: 5%;">
    <h3 style="text-align: center;">Edit Product</h3>
    <div class="form-wrapper" style="padding: 8px 32px 0 0;">
        <form action="/asignment_web/admin/cmsProduct/cmsEdited" method="post" style="position: relative; width: 50%; margin-left: auto; margin-right: auto;">
            <div class="form-group" style="display: none;">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" placeholder="Id" name="id" value="<?php echo $output['id']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo $output['name']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="<?php echo $output['description']; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Price" name="price" value="<?php echo $output['price']; ?>">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Image" name="image" value="<?php echo $output['image']; ?>">
            </div>
            <div class="form-group">
                <label for="category_id">Category Id</label>
                <input type="number" class="form-control" id="category_id" placeholder="Category_id" name="category_id" value="<?php echo $output['category_id']; ?>">
            </div>
            <div class="button-wrapper" style="margin-top: 16px; position: absolute; right: 0;">
                <button type="submit" class="btn btn-outline-success">Confirm</button>
            </div>
        </form>
    </div>
</div>