<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de Computers</h1>
    <br>
    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="number">Numero</label>

        <input type="number" id="number" name="number"> <br>

        <label for="brand">Marca</label>

        <input type="text" id="brand" name="brand"> <br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>