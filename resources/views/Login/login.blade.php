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
<body>
    
    <header class="w-auto bg-orange-400 h-[80px] shadow-lg rounded-md"> 
        <div class="w-full  flex jusitify-between">
        <h1 class="text-white cursor-pointer  text-3xl mt-5 ml-32 text-left  font-serif mr-52" href="{{route('Home')}}">Maceió IN</h1>
   
        <ul class=" mt-6 flex  space-x-12 justify-center">
            <li class="cursor-pointer font-extrabold text-white text-xl hover:text-gray-700">
                <a href="">Sobre</a>
            </li>
            <li class="cursor-pointer font-extrabold text-white text-xl hover:text-gray-700">
                <a href="">Noticias</a>
            </li>
            <li class="text-white font-extrabold text-xl hover:text-gray-700">
                <a href="">Contato</a>
            </li>
            <li class="text-white font-extrabold text-xl hover:text-gray-700">
                <a href="">Serviços</a>
            </li>
        </ul>
        </div>

    </div>
</header>
    <div class="text-center text-blue-700">
        <h1 class="font-bold mt-4 text-2xl">Gerenciando o Futuro Fiscal de Maceió</h1>
        <p class="text-xl font-light ">Compromisso com a Transparência e Eficiência na Administração Fiscal de Maceió</p>
    </div>
    <div class=" flex  w-1/1  gap-4  overflow-hidden">
        <img  class="h-72 ml-6 w-auto mt-10 rounded-md  hover:scale-95 duration-200 "   src="assets/img/aZLnRIOQ.jpeg" alt="">
        <img  class="h-72 ml-6 w-auto mt-10 rounded-md  hover:scale-95 duration-200"   src="assets/img/OLZDgMlo.jpeg" alt="">
        <img class="h-72 ml-6 w-auto mt-10 rounded-md  hover:scale-95 duration-200" src="assets/img/2JoZrKsS.jpeg" alt="">
    </div>
    <div class="rounded-2xl h-auto w-auto">
        <p class="text-sm ml-7 mr-7 text-blue-800  mt-10 font-semibold text-justify">A Secretaria de Fazenda de Maceió não é só números e arrecadação é sobre transformar recursos em benefícios reais para a população. Na imagem,  moradores seguros com orgulho das chaves de sua nova casa, resultado de investimentos bem aplicados. Isso representa muito mais do que um simples imóvel; é segurança, dignidade e um novo começo. Esse é o compromisso de gestão fiscal eficiente e garantir que cada centavo arrecadado volte para a cidade em forma de melhorias concretas para quem mais precisa
            Através de uma administração transparente e responsável, projetos como esse se tornam realidade, proporcionando moradia acessível para centenas de famílias. O trabalho da Secretaria envolve desde a arrecadação até a destinação correta dos recursos, sempre com foco no bem-estar dos cidadãos. 
    </div>

        <div class="bg-blue-800 h-20 mt-11 rounded-md shadow-xl"  >
            <h1 class="text-2xl pt-5 text-white font-serif text-center ">Sistema para gerenciar os cadastros da Secretaria de Fazenda de Maceió.</h1>
        </div>
    </header>
</body>
</html>