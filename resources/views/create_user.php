<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <form method="post" action="http://127.0.0.1:8000/user/">
            @csrf
            <label>
                Nombre
            </label>
            <input type="text" name="nombre">
            <label>
                Correo
            </label>
            <input type="email" name="email">
            <label>
                Password
            </label>
            <input type="password" name="contraseña">
            <button>
                Acceder
            </button>
        </form>
    </h1>
</body>
</html>