<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container mt-5 mb-5">
        <h1>IP Information</h1>
        <table id="ipTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>IP Address</th>
                    <th>Country</th>
                    <th>Region</th>
                    <th>City</th>
                    <th>ZIP</th>
                    <th>ISP</th>
                    <th>Created At</th> <!-- New column -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['query'] }}</td>
                        <td>{{ $item['country'] ?? 'N/A' }}</td>
                        <td>{{ $item['regionName'] ?? 'N/A' }}</td>
                        <td>{{ $item['city'] ?? 'N/A' }}</td>
                        <td>{{ $item['zip'] ?? 'N/A' }}</td>
                        <td>{{ $item['isp'] ?? 'N/A' }}</td>
                        <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#ipTable').DataTable({
                "order": [
                    [6, "desc"]
                ] // Sort by the 7th column (created_at) in descending order
            });
        });
    </script>

</body>

</html>
