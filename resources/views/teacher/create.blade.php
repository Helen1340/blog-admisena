<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Teacher</title>
</head>
<body>
    <h1>Formulario de Teacher</h1>
    <br><br>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email"><br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>
