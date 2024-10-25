<!-- resources/views/appointments/surat_pelantikan.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Appointment Letters - eLantik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Center the modal on the screen */
        .modal {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">eLantik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('appointments.index') }}">Candidate List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.memo') }}">Appointment Memos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.surat_pelantikan') }}">Appointment Letters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.sejarah_lantikan') }}">Appointment History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.search') }}">Search Candidates</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="text-center">Upload Appointment Letter</h3>

        <form>
            <div class="mb-3">
                <label for="letterFile" class="form-label">Choose File</label>
                <input type="file" class="form-control" id="letterFile" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <h5 class="mt-4">Uploaded Letters</h5>
        <ul class="list-group" id="letterList">
            <li class="list-group-item">
                Letter 1 <a href="#" class="btn btn-sm btn-danger float-end delete-btn" data-filename="Letter 1">Delete</a>
            </li>
            <li class="list-group-item">
                Letter 2 <a href="#" class="btn btn-sm btn-danger float-end delete-btn" data-filename="Letter 2">Delete</a>
            </li>
        </ul>

        <!-- Message area for feedback -->
        <div id="feedbackMessage" class="mt-3"></div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <strong id="filenameToDelete"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript to handle delete confirmation
        let filenameToDelete = '';

        // Attach click event to delete buttons
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                filenameToDelete = this.getAttribute('data-filename');
                const modalBody = document.getElementById('filenameToDelete');
                modalBody.textContent = filenameToDelete;
                const deleteConfirmationModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
                deleteConfirmationModal.show();
            });
        });

        // Confirm deletion and handle response
        document.getElementById('confirmDelete').addEventListener('click', function() {
            // Simulate deletion action
            const letterList = document.getElementById('letterList');
            const itemToDelete = [...letterList.children].find(item => item.textContent.includes(filenameToDelete));

            if (itemToDelete) {
                letterList.removeChild(itemToDelete);
                showFeedbackMessage(`${filenameToDelete} has been deleted successfully.`, 'success');
            } else {
                showFeedbackMessage(`Failed to delete ${filenameToDelete}.`, 'error');
            }

            // Hide the modal
            const deleteConfirmationModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
            deleteConfirmationModal.hide();
        });

        // Function to display feedback messages
        function showFeedbackMessage(message, type) {
            const feedbackMessage = document.getElementById('feedbackMessage');
            feedbackMessage.textContent = message;
            feedbackMessage.className = type === 'success' ? 'alert alert-success' : 'alert alert-danger';
            feedbackMessage.style.display = 'block';
        }
    </script>
</body>

</html>