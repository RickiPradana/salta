<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">CAPTCHA Form</h2>
        <form action="{{ route('cek_ip') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="captcha">What is {{ $num1 }} + {{ $num2 }}?</label>
                <input type="text" class="form-control" id="captcha" name="captcha" required>
            </div>

            <input type="hidden" name="captcha_result" value="{{ $num1 + $num2 }}">

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <style>
        .toast-success {
            background-color: #28a745;
            /* Green for success */
            color: white;
            /* White text */
        }

        .toast-error {
            background-color: #dc3545;
            /* Red for error */
            color: white;
            /* White text */
        }

        .toast-info {
            background-color: #17a2b8;
            /* Blue for info */
            color: white;
            /* White text */
        }

        .toast-warning {
            background-color: #ffc107;
            /* Yellow for warning */
            color: black;
            /* Black text */
        }
    </style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            @if (session('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": "5000", // Adjust duration
                    "positionClass": "toast-top-right", // Positioning
                    "onclick": null // Click to dismiss
                };
                toastr.error("{{ session('error') }}", "Error");
            @endif
        });
    </script>
</body>

</html>
