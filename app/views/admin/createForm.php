<!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalForm">Create</button> -->
<a href="/app/controllers/admin/cmsCategory/create" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalForm" >Create</a>
    <!-- <li data-bs-toggle="modal" data-bs-target="#ModalForm"><a class="nav-link" href="" ><img src="public/images/user.svg"></a></li> -->
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 style="text-align: center;">Create Category</h3>
                        <div class="form-wrapper" style="padding: 8px 32px 0 0;">
                            <form action="/asignment_web/admin/cmsCategory/create" method="post" style="position: relative; width: 50%; margin-left: auto; margin-right: auto;">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Name" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="text" class="form-control" id="image" placeholder="Image" name="image">
                                </div>
                                <div class="button-wrapper" style="margin-top: 16px; position: relative; right: 0;">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="reset" class="btn btn-outline-danger">Reset</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
