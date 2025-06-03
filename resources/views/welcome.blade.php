<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .welcome-box {
            margin-top: 10%;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8 welcome-box">
            <h1 class="mb-4">Welcome to Laravel Task Manager</h1>
            <p class="lead">This is a simple Laravel project to manage your tasks efficiently.</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-3">View Tasks</a>
        </div>
    </div>
</div>
</body>
</html>
