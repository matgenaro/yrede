<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Login</title>
</head>

<body class="bg-blue-100 dark:bg-gray-900 flex items-center justify-center min-h-screen">

    <section class="w-full max-w-md bg-white rounded-lg shadow-md dark:border dark:border-gray-700">
        <div class="p-8 space-y-4 md:space-y-6">

            <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white mb-6 text-center">
                Bem-vindo de volta!
            </h1>

            <form class="space-y-4 md:space-y-6" action="/logar" method="POST">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                        class="input input-bordered w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:ring-primary-600 focus:border-primary-600"
                        placeholder="email cadastrado" required="">
                </div>

                <div>
                    <label for="senha" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">
                        Senha
                    </label>
                    <input type="password" name="senha" id="senha"
                        class="input input-bordered w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:ring-primary-600 focus:border-primary-600"
                        placeholder="••••••••" required="">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Lembre-me</label>
                        </div>
                    </div>
                    <a href="#"
                        class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Esqueceu
                        a senha?</a>
                </div>

                <button type="submit"
                    class="btn btn-primary w-full bg-blue-500 hover:bg-blue-600 focus:ring focus:ring-blue-300 text-white">
                    Login
                </button>

                <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                    Não tem cadastro? <a href="cadastra-usuario"
                        class="font-medium text-primary-600 hover:underline dark:text-primary-500">Criar conta</a>
                </p>
            </form>
        </div>
    </section>

</body>

</html>
