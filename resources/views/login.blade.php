<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alfasoft</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="text-danger mt-1">
                {{ session('error') }}
            </div>
        </div>
    @endif
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ route('auth.login') }}">
            @csrf
            <div class="mb-3 p-3">
                <label for="contact">E-mail:</label>
                <input required type="email" class="form-control" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
                <label for="password">Password:</label>
                <input required type="password" class="form-control" name="password" value="{{ old('password') }}">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>
         </form>
    </div>
</body>
</html>