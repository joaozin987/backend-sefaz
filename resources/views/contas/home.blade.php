<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./dist/output.css" rel="stylesheet">
    <script src="js.home.js"></script>
    <link rel="stylesheet" href="">

    <title>Sefaz</title>
    
</head>
<body class="h-full w-full">
    
    <header class="w-auto bg-orange-400 h-[80px] shadow-xl-black rounded-md"> 
        <div class="w-full  flex jusitify-between">
        <h1 class="text-white  text-3xl mt-5 ml-32 text-left  font-serif mr-52">Maceió IN</h1>
   
        <ul class=" mt-6 flex  space-x-12 justify-center">
            <li class="cursor-pointer font-extrabold text-white text-xl  hover:text-gray-700">
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
            <a class="text-white text-xl font-medium rounded-xl bg-blue-700 px-10  hover:bg-blue-800 "  href="{{route('Login')}}">Login</a>
        </ul>
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
            <p class="text-sm ml-7 mr-7 text-blue-800  mt-10 font-semibold text-justify">A Secretaria de Fazenda de Maceió não é só números e arrecadação é sobre transformar recursos em benefícios reais para a população. Na imagem,  mostra moradores seguros com orgulho das chaves de sua nova casa, resultado de investimentos bem aplicados. Isso representa muito mais do que um simples imóvel; é segurança, dignidade e um novo começo. Esse é o compromisso de gestão fiscal eficiente e garante que cada centavo arrecadado volte para a cidade em forma de melhorias concretas para quem mais precisa
                Através de uma administração transparente e responsável, projetos como esse se tornam realidade, proporcionando moradia acessível para centenas de famílias. O trabalho da Secretaria envolve desde a arrecadação até a destinação correta dos recursos, sempre com foco no bem-estar dos cidadãos. 
        </div>

        <div class="bg-orange-600 h-20 mt-11 rounded-md shadow-xl"  >
            <h1 class="text-2xl pt-5 text-white font-light text-center ">Aqui estão mais obras realizadas pela Secretaria da Fazenda de Maceió
            </h1>
        </div>
        <div class="text-center text-orange-600">
            <h1 class="font-bold mt-4 text-2xl">Gerenciando o Futuro Fiscal de Maceió</h1>
            <p class="text-lg font-light ">Com transparência e eficiência, gerenciamos os recursos para construir uma Maceió mais próspera e feliz para todos.</p>
        </div>
        
        <div class=" flex  w-1/1  gap-8 overflow-hidden">
            <img  class="h-72 ml-6 w-auto mt-10 rounded-md  hover:scale-95 duration-200 "   src="assets/img/UMIQyFg.jpeg" alt=""> 
            
                <p class="text-xl-center ml-7 mr-7 text-orange-600  mt-16  font-semibold text-justify shadow-sm">O Parque Linear Freitas Neto, inaugurado pela Prefeitura de Maceió, está localizado na parte alta da cidade e tem como objetivo oferecer um novo espaço de lazer, esporte e convivência para a população. A obra faz parte do programa de requalificação urbana da região, transformando uma área antes subutilizada em um ambiente seguro e agradável.
                    O parque conta com pistas de caminhada, ciclovias, academias ao ar livre, áreas de recreação infantil e paisagismo que valorizam o espaço. Além disso, há iluminação moderna e estruturas para garantir acessibilidade e conforto aos visitantes.
                    Através de uma administração transparente e responsável, projetos como esse se tornam realidade, proporcionando moradia acessível para centenas de famílias. O trabalho da Secretaria envolve desde a arrecadação até a destinação correta dos recursos, sempre com foco no bem-estar dos cidadãos. 
            </div>
        </div>
        <div class="rounded-2xl flex gap-8 h-auto w-auto">

        <img class="h-72 ml-6 w-auto mt-10 rounded-md  hover:scale-95 duration-200" src="assets/img/IMG-20250209-WA0001.jpg" alt="">
            <p class="text-xl-center ml-7  mr-7 text-orange-600  mt-16  font-semibold text-justify shadow-sm">O Parque Linear Freitas Neto, inaugurado pela Prefeitura de Maceió, está localizado na parte alta da cidade e tem como objetivo oferecer um novo espaço de lazer, esporte e convivência para a população. A obra faz parte do programa de requalificação urbana da região, transformando uma área antes subutilizada em um ambiente seguro e agradável.

                O parque conta com pistas de caminhada, ciclovias, academias ao ar livre, áreas de recreação infantil e paisagismo que valorizam o espaço. Além disso, há iluminação moderna e estruturas para garantir acessibilidade e conforto aos visitantes.
                Através de uma administração transparente e responsável, projetos como esse se tornam realidade, proporcionando moradia acessível para centenas de famílias. O trabalho da Secretaria envolve desde a arrecadação até a destinação correta dos recursos, sempre com foco no bem-estar dos cidadãos. 
        </div>
</body>
</html>