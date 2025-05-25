<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Aprendiz</title>
</head>
<body>
    <h1>Formulario de Apprentice</h1>

    <form action="{{ route('apprentice.store') }}" method="POST">
        @csrf

        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required><br>

        <label for="cell_number">Cell Number</label><br>
        <input type="text" name="cell_number" id="cell_number"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
