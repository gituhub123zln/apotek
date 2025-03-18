<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            /* Abu-abu terang */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            background: white;
            width: 100%;
            max-width: 400px;
        }

        .profile-img {
            width: 80px;
            border: 2px solid #dee2e6;
            padding: 3px;
        }

        .btn-dark {
            transition: 0.3s;
        }

        .btn-dark:hover {
            background-color: #343a40;
        }
    </style>
</head>

<body>
    <div class="card text-center">
        <div class="d-flex justify-content-center">
            <img src="img/user.jpg" class="img-fluid rounded-circle profile-img" alt="Profile">
        </div>

        <h2 class="mt-3">Selamat Datang di Apotek SMK ISFI</h2>

        <form action="login_proses.php" method="POST">
            <div class="mb-3 text-start">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="login" class="btn btn-dark btn-lg w-100">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>