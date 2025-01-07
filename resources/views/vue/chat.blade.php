<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App</title>
    @vite(['resources/js/app.js'])
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="py-4">
            <div class="container">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <chat :exit-url="{{ json_encode(route('superadmin.Dashboard')) }}"></chat>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
