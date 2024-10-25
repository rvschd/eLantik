<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate List - eLantik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h3 class="text-center">Candidate List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>IC Number</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Dummy Data -->
                <tr>
                    <td>John Doe</td>
                    <td>123456-78-9012</td>
                    <td>Software Engineer</td>
                    <td>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#candidateModal" data-name="John Doe" data-ic="123456-78-9012" data-position="Software Engineer">View Details</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>987654-32-1098</td>
                    <td>Product Manager</td>
                    <td>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#candidateModal" data-name="Jane Smith" data-ic="987654-32-1098" data-position="Product Manager">View Details</button>
                    </td>
                </tr>
                <!-- Add more candidates as needed -->
            </tbody>
        </table>
    </div>

    <!-- Modal Structure -->
    <div class="modal fade" id="candidateModal" tabindex="-1" aria-labelledby="candidateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="candidateModalLabel">Candidate Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> <span id="candidateName"></span></p>
                    <p><strong>IC Number:</strong> <span id="candidateIC"></span></p>
                    <p><strong>Position:</strong> <span id="candidatePosition"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript to handle modal population
        const candidateModal = document.getElementById('candidateModal');
        candidateModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget; // Button that triggered the modal
            const name = button.getAttribute('data-name');
            const ic = button.getAttribute('data-ic');
            const position = button.getAttribute('data-position');

            // Update the modal's content.
            const modalTitle = candidateModal.querySelector('.modal-title');
            const modalBodyName = candidateModal.querySelector('#candidateName');
            const modalBodyIC = candidateModal.querySelector('#candidateIC');
            const modalBodyPosition = candidateModal.querySelector('#candidatePosition');

            modalTitle.textContent = 'Candidate Details';
            modalBodyName.textContent = name;
            modalBodyIC.textContent = ic;
            modalBodyPosition.textContent = position;
        });
    </script>
</body>

</html>