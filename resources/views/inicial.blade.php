<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEPODS</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-100 text-gray-800 font-sans">

    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">

        <div class="mb-4 flex justify-between items-center">
            <div class="flex items-center">
                <!-- Ajuste a classe 'h-12' e 'w-12' para o tamanho desejado da imagem -->
                <img src="favicon/favicon.ico" alt="Favicon" class="mr-2 h-12 w-12">
                <h1 class="text-3xl font-bold mb-4">Bem-vindo ao GEPODS</h1>
            </div>
            <div>
                <a href="/cadastra-usuario" class="text-lg font-bold text-blue-700 hover:underline">Criar Conta</a>
                <span class="mx-2">|</span>
                <a href="/login" class="text-lg font-bold text-blue-700 hover:underline">Login</a>
            </div>
        </div>

        <div class="mb-8">
            <a href="/cria-post" class="text-lg font-bold text-blue-700 hover:underline">Nova Postagem</a>
        </div>

        <h2 class="text-2xl font-bold mb-4">Últimas Postagens:</h2>

        @foreach ($posts as $post)
            <div class="mb-8 p-6 bg-gray-200 rounded-md">
                <div class="text-lg font-bold text-blue-700 mb-2">Postagem - {{$post->id}}</div>
                <p class="text-gray-700">{{$post->mensagens}}</p>
            </div>
        @endforeach

    </div>

</body>

</html>
