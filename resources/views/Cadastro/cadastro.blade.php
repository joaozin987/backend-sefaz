<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-orange-400">
        @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        @endif

    <form action="{{route('.')}}" method="POST">    
        @csrf
    <div class="bg-orange-600 w-96 h-96 mx-auto mt-52 rounded-xl">
     
        <h1 class="font-serif text-2xl text-center pt-3 text-white">Crie sua Conta</h1>

        <div class="mt-3">
        <label  class="text-white text-xl ml-6 font-serif mt-10" for="">Nome</label>
        <input  class="p-2 mt-2 items-center ml-6 w-80 rounded-lg" type="text" name="name" placeholder=" Digite seu Usuario"text>
    </div>

        <div class="mt-3">
        <label class="text-xl text-white ml-6 font-serif" for="senha">E-mail</label>
        <input class="p-2 mt-2  ml-6 rounded-lg w-80" type="text" name="email" placeholder="Digite seu E-mail">
        </div>

        <div class="mt-3">
            <label class="text-xl text-white ml-6 font-serif" for="senha">Senha</label>
            <input class="p-2 mt-2  ml-6 rounded-lg w-80" type="text" name="password" placeholder="Digite sua Senha">
            </div>

        <div class="flex justify-center mt-5">
            <button class="bg-white p-2  font-normal rounded-xl text-orange-600 hover:bg-yellow-100 cursor-pointer" >Continuar</button>
        </div>
    </div>
</form>
</body>
</html>