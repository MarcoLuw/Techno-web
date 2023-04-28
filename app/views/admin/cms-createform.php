<div class="form-section" style="margin-top: 5%;">
    <h3 style="text-align: center;">Create Product</h3>
    <div class="form-wrapper" style="padding: 8px 32px 0 0;">
        <form action="/asignment_web/admin/cmsProduct/cmsCreated" method="post" style="position: relative; width: 50%; margin-left: auto; margin-right: auto;">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Image" name="image">
            </div>
            <div class="form-group">
                <label for="category_id">Category Id</label><br>
                <span style="font-size: 12px; color: rgba(155, 10, 10, 1); font-style: italic;">1 is laptop, 2 is phone, 3 is headphone</span>
                <input type="number" class="form-control" id="category_id" placeholder="Category_id" name="category_id">
            </div>
            <div class="button-wrapper" style="margin-top: 16px; position: absolute; right: 0;">
                <button type="submit" class="btn btn-outline-success">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
            </div>
        </form>
    </div>
</div>