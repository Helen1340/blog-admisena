<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de trainingCenter</h1>

    <form action="{{ route('trainingcenter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"><br> <br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location"><br> <br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>