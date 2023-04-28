<div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3 style="text-align: center;">Create Order</h3>
                <div class="form-wrapper" style="padding: 8px 40px 0 0;">
                    <form action="/asignment_web/Cart/Submit" method="post" style="position: relative; width: 50%; margin-left: auto; margin-right: auto;">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
                        </div>
                        <input type="hidden" name ="total" value="<?php echo $data['total'];?>">
                        <div class="button-wrapper" style="margin-top: 16px; position: relative; right: 0;">
                            <button type="submit" name="btnOrder" class="btn btn-outline-success" onclick="window.location='Cart'">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>