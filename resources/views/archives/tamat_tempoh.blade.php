<!-- resources/views/archives/tamat_tempoh.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Expired Board Members</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
            /* Dark color for heading */
        }

        table {
            margin-top: 20px;
        }

        th {
            background-color: #e9ecef;
            /* Light gray header */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">List of Expired Board Members</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>IC</th>
                    <th>Position</th>
                    <th>Expiry Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expiredMembers as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->ic }}</td>
                    <td>{{ $member->position }}</td>
                    <td>{{ $member->expiry_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(empty($expiredMembers))
        <div class="alert alert-info mt-3">
            No expired board members found.
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>