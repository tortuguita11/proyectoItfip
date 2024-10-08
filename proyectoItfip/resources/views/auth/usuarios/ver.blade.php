<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Lista de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Correo Institucional</th>
                <th>Cédula de Ciudadanía</th>
                <th>Cargo</th>
                <th>Número de Teléfono</th>
                <th>Facultad</th>
                <th>Programa Académico</th>
                <th>Rol</th>
                <th>Fecha del Sistema</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $user)
            <tr>
                <td>{{ $user->id_users }}</td>
                <td>{{ $user->primerNombre }}</td>
                <td>{{ $user->segundoNombre }}</td>
                <td>{{ $user->primerApellido }}</td>
                <td>{{ $user->segundoApellido }}</td>
                <td>{{ $user->correo_institucional }}</td>
                <td>{{ $user->cedulaCiudadania }}</td>
                <td>{{ $user->cargo }}</td>
                <td>{{ $user->numero_telefono }}</td>
                <td>{{ $user->facultad }}</td>
                <td>{{ $user->programa_academico }}</td>
                <td>{{ $user->rol }}</td>
                <td>{{ $user->fecha_sistema }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
