<div class="modal fade" id="updateMemberModal" tabindex="-1" aria-labelledby="updateMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateMemberModalLabel">Update Board Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="update-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="update-name" value="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="update-email" value="john@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="update-position" value="Chairman" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Board Member</button>
                </form>
            </div>
        </div>
    </div>
</div>