<h3 style="text-align: center;">Edit Category</h3>
<div class="form-wrapper" style="padding: 8px 32px 0 0;">
    <form action="/asignment_web/admin/cmsCategory/edit" method="post" style="position: relative; width: 50%; margin-left: auto; margin-right: auto;">
        <div class="form-group">
            <input type="text" class="form-control" id="id" placeholder="Name" name="id" value="<?php echo $data["id"] ?>" hidden>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Name" name="title">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" placeholder="Image" name="image">
        </div>
        <div class="button-wrapper" style="margin-top: 16px; position: relative; right: 0;">
            <input type="submit" onclick="location.href='../..';" class="btn btn-outline-success" value="Submit">
            <button type="reset" class="btn btn-outline-danger">Reset</button>
        </div>
    </form>
</div>