<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>

    <!-- Link de Bootstrap 5.3 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="text-center">
        <h1 class="display-4 text-primary">Informacion del post</h1>
    </div>
    <h1 class="text-primary" > El id es : {{$post}} </h1>
    <h3 class="text-secondary"> su categoria es :  {{$categoria}}  </h3>
    
    @if($categoria == "comida")
    <span class="badge bg-secondary">delicioso</span>
    @else
    <span class="badge bg-primary">no es comida</span>
    @endif

    <h2 class="mb-4">Lista de ítems</h2>

<ul class="list-group">
    @for($i = 0; $i < 5; $i++)
        <li class="list-group-item">
            Este es el ítem {{ $i + 1 }}
        </li>
    @endfor
</ul>


    <!-- Script de Bootstrap (opcional si necesitas JS de componentes) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YsmEpl1cR6KAGgO9h+QHbf/fcH0zv+G9YjF8PqG1NNSJByXWZC9kNLO13VboE2E3" crossorigin="anonymous"></script>
</body>
</html>