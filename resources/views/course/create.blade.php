<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Course</title>
</head>

<body>
    <h1>Formulario de Course</h1>
    <br><br>

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="course_number">Número del Curso</label>
        <input type="text" id="course_number" name="course_number" required><br><br>

        <label for="day">Día</label>
        <input type="text" id="day" name="day"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>