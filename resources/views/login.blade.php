<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SIJAGA POSYANDU</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header text-center bg-success text-white">
                    <h3>SIJAGA POSYANDU</h3>
                    <small>Login Admin</small>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>

                        <button class="btn btn-success w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>