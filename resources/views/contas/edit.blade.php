<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    


    <table class=" bg-green-500 mr-20 rounded-lg max-auto w-full ml-0 h-32 table-auto">
        <thead>
            <h1 class="font-serif text-2xl  mt-4 ml-10 mb-3">Lista de Funcionarios</h1>
            <tr class="">
                <th class="px-4 py-1 p-1 mr-20 text-white"></th>
                <th class="px-4 py-2 ml-72 text-white"></th>
                <th class="px-4 py-2 ml-56 text-white"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contas as $conta)
            <tr>
                <td>{{ $conta->id }}</td>
                <td>{{$conta->nome}}</td>
                <td>{{ $conta->setor }}</td>
                <td>{{ $conta->email }}</td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

</body>
</html>