<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <title>Lista Usuários</title>
</head>
<body>

    <h1 class="w-full text-center">Lista Usuários</h1>
    
    <div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)
      <!-- row 1 -->
      <tr>
        <th>{{$usuario->usuario}}</th>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
      </tr>
        @endforeach

    </tbody>
  </table>
</div>


</body>
</html>