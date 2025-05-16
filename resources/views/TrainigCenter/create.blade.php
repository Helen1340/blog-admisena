<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de training Center</h1>

    <form action="{{ route('trainingcenter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nombre:</label>
        <input type="text" id="title" name="name"><br>
        <label for="title">location:</label>
        <input type="text" id="title" name="location"><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>