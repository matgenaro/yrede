<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Inscreva-se</title>
</head>

<body class="bg-blue-100 min-h-screen text-blue-900 font-sans">

    <div class="w-full text-center text-4xl font-bold mt-8 mb-6 text-blue-700">Inscreva-se no GEPODS</div>

    <form class="max-w-md m-auto p-8 bg-white rounded shadow-md" action="{{route('salva-usuario')}}" method="post">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-2 text-gray-800">Usuário</label>
            <input name="usuario" type="text" placeholder="Digite seu usuário" class="input input-bordered w-full"
                required />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-2 text-gray-800">Bio</label>
            <input name="bio" type="text" placeholder="Digite sua bio" class="input input-bordered w-full" required />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-2 text-gray-800">Nome</label>
            <input name="nome" type="text" placeholder="Digite seu nome" class="input input-bordered w-full" required />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-2 text-gray-800">E-mail</label>
            <input name="email" type="email" placeholder="Digite seu e-mail" class="input input-bordered w-full"
                required />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-2 text-gray-800">Senha</label>
            <input name="senha" type="password" placeholder="Digite sua senha" class="input input-bordered w-full"
                required />
        </div>

        <button type="submit"
            class="btn btn-primary w-full bg-blue-500 hover:bg-blue-600 focus:ring focus:ring-blue-300 text-white">
            Salvar
        </button>

    </form>

</body>

</html>
