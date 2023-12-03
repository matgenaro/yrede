<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST-IT!</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Adicionando o Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-200 font-sans p-4">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-10">

        <h1 class="text-2xl font-bold mb-4">Nova Postagem</h1>

        <form action="/salva-post" method="POST" class="space-y-4">
            @csrf

            <textarea name="mensagem" id="mensagem"
                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400"
                cols="30" rows="5" placeholder="Digite sua mensagem aqui..."></textarea>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-400">
                Postar
            </button>
        </form>

    </div>

</body>

</html>
