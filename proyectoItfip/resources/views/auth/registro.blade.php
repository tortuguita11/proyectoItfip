<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('auth.registro') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <input type="text" placeholder="Ingrese el primer nombre" id="primerNombre" name="primerNombre" class="form-control @error('primerNombre') is-invalid @enderror">
                    @error('primerNombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="text" placeholder="Ingrese el segundo nombre" id="segundoNombre" name="segundoNombre" class="form-control @error('segundoNombre') is-invalid @enderror">
                    @error('segundoNombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="text" placeholder="Ingrese el primer apellido" id="primerApellido" name="primerApellido" class="form-control @error('primerApellido') is-invalid @enderror">
                    @error('primerApellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="text" placeholder="Ingrese el segundo apellido" id="segundoApellido" name="segundoApellido" class="form-control @error('segundoApellido') is-invalid @enderror">
                    @error('segundoApellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="email" placeholder="Ingrese correo institucional" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="password" placeholder="Ingrese la contraseña" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                    <input type="number" placeholder="Ingrese la cedula" id="cedulaCiudadania" name="cedulaCiudadania" class="form-control @error('cedulaCiudadania') is-invalid @enderror">
                    @error('cedulaCiudadania')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
    <select id="cargo" name="cargo" class="form-select @error('cargo') is-invalid @enderror">
        <option value="" selected>-- Seleccione el cargo --</option>
        <option value="na">N/A</option>
        <option value="vicerrector">Vicerrector</option>
        <option value="decano">Decano</option>
        <option value="coordinador">Coordinador</option>
        <option value="docente">Docente</option>
    </select>
    @error('cargo')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

                <div class="col-md-6 col-lg-4">
                    <input type="number" placeholder="Ingrese el numero de telefono" id="numero_telefono" name="numero_telefono" class="form-control @error('numero_telefono') is-invalid @enderror">
                    @error('numero_telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                <select class="form-control @error('facultad') is-invalid @enderror" name="facultad">
                        <option selected>-- Seleccione la facultad --</option>
                        @foreach($facultades as $Faculty)
                        <option value="{{$Faculty->id_facultades}}">{{$Faculty->nombre_facultad}}</option>
                        @endforeach
                    </select>
                    @error('facultad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-4">
                <select class="form-control @error('numero_telefono') is-invalid @enderror" name="programa_academico">
        <option selected>-- Seleccione el programa academico --</option>
        @foreach($programa_academico as $Program)
            <option value="{{ $Program->id_prog_acad }}">{{ $Program->nombre_prog_acad }}</option>
        @endforeach
    </select>
    @error('programa_academico')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="col-md-6 col-lg-4">
    <select id="rol" name="rol" class="form-select @error('rol') is-invalid @enderror">
        <option value="" selected>-- Seleccione un rol --</option>
        <option value="administrador">Administrador</option>
        <option value="subadministrador">Subadministrador</option>
        <option value="docente">Docente</option>
    </select>
    @error('rol')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>


                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-warning alert-dismissible fade show text-dark">
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif

                <input class="btn btn-primary col-12" type="submit" value="Enviar">
            </div>
        </div>
    </form>

    </form>
</body>

</html>