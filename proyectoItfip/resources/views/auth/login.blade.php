<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - ITFIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="app.css" rel="stylesheet">
</head>
<body>










    <div class="login-container">
        <!-- Sección Izquierda con el Logo -->
        <div class="logo-container vertical-center">
            <img src="{{ asset('/img/logo_itfip.png') }}" alt="ITFIP Logo">
        </div>
        
        <!-- Sección Derecha con el Formulario -->
        <div class="vertical-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ route('auth.login') }}" method="post">
                            <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="Ingresa tu correo">
                                <label for="floatingInput">Correo electrónico</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Contraseña">
                                <label for="floatingPassword">Contraseña</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Recuérdame
                                </label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                            <p class="mt-5 mb-3 text-muted">
                                <a id="forgot-password" href="#">¿Ha olvidado su contraseña?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
