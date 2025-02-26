<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
    <title>Document</title>
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
            <a  href="{{route('conta.show')}}" class="text-white text-xl font-medium rounded-xl bg-blue-700 px-10  hover:bg-blue-800 cursor-pointer">Sair</a>
        </ul>
    </div>
    </header>

   <div class="text-center text-blue-700">
        <h1 class="font-bold mt-4 text-2xl">Gerenciando o Futuro Fiscal de Maceió</h1>
        <p class="text-xl font-light">Compromisso com a Transparência e Eficiência na Administração Fiscal de Maceió</p>
    </div>

   
    <div class="flex w-full gap-4 overflow-hidden">
        <img class="h-72 ml-4 w-auto mt-10 rounded-md hover:scale-95 duration-200" src="{{ asset('assets/img/aZLnRIOQ.jpeg') }}" alt="Imagem 1">
        <img class="h-72 ml-2 w-auto mt-10 rounded-md hover:scale-95 duration-200" src="{{ asset('assets/img/OLZDgMlo.jpeg') }}" alt="Imagem 2">
        <img class="h-72 ml-3 w-auto mt-10 rounded-md hover:scale-95 duration-200" src="{{ asset('assets/img/2JoZrKsS.jpeg') }}" alt="Imagem 3">
    </div>

  
    <div class="rounded-2xl h-auto w-auto">
        <p class="text-sm ml-7 mr-7 text-blue-800 mt-10 font-semibold text-justify">A Secretaria de Fazenda de Maceió não é só números e arrecadação, é sobre transformar recursos em benefícios reais para a população. Na imagem, mostra moradores seguros com orgulho das chaves de sua nova casa, resultado de investimentos bem aplicados. Isso representa muito mais do que um simples imóvel; é segurança, dignidade e um novo começo. Esse é o compromisso de gestão fiscal eficiente e garante que cada centavo arrecadado volte para a cidade em forma de melhorias concretas para quem mais precisa. Através de uma administração transparente e responsável, projetos como esse se tornam realidade, proporcionando moradia acessível para centenas de famílias. O trabalho da Secretaria envolve desde a arrecadação até a destinação correta dos recursos, sempre com foco no bem-estar dos cidadãos.</p>
    </div>

  
    <div class="bg-orange-600 h-20 mt-11 rounded-md shadow-xl">
        <h1 class="text-2xl pt-5 text-white font-light text-center">Aqui estão mais obras realizadas pela Secretaria da Fazenda de Maceió</h1>
    </div>

    
    <div class="text-center text-orange-600">
        <h1 class="font-bold mt-4 text-2xl">Gerenciando o Futuro Fiscal de Maceió</h1>
        <p class="text-lg font-light">Com transparência e eficiência, gerenciamos os recursos para construir uma Maceió mais próspera e feliz para todos.</p>
    </div>

   
    <div class="flex w-full gap-8 overflow-hidden">
        <img class="h-72 ml-4 w-auto mt-10 rounded-md hover:scale-95 duration-200" src="{{ asset('assets/img/UMIQyFg.jpeg') }}" alt="Imagem Parque">
        <p class="text-xl-center ml-7 mr-7 text-orange-600 mt-10 font-semibold text-justify shadow-sm">O Parque Linear Freitas Neto representa um avanço significativo na infraestrutura urbana de Maceió, trazendo consigo uma nova perspectiva para a qualidade de vida dos moradores da parte alta da cidade. Antes uma área pouco aproveitada, agora se transforma em um espaço vivo e dinâmico, onde crianças, jovens, adultos e idosos podem desfrutar de atividades ao ar livre com segurança e conforto.

            A criação desse parque reflete uma gestão comprometida com o desenvolvimento sustentável e a inclusão social. A requalificação urbana da região não apenas oferece um local adequado para a prática de esportes e lazer, mas também promove o fortalecimento da comunidade ao incentivar o convívio social em um ambiente bem planejado.
            
            Os benefícios de um espaço como esse são diversos. Com pistas de caminhada e ciclovias, o parque estimula hábitos saudáveis, promovendo o bem-estar físico e mental dos cidadãos. Já as academias ao ar livre garantem que pessoas de todas as idades possam praticar exercícios sem a necessidade de altos investimentos. Para as famílias, as áreas de recreação infantil se tornam um ponto de encontro seguro para as crianças, incentivando a socialização desde cedo. Além disso, a implementação de um sistema de iluminação moderno amplia a sensação de segurança, permitindo que o espaço seja utilizado inclusive no período noturno.</p>
    </div>

    
    <div class="rounded-2xl flex gap-8 h-auto w-auto">
        <img class="h-72 ml-6 w-auto mt-10 rounded-md hover:scale-95 duration-200" src="{{ asset('assets/img/IMG-20250209-WA0001.jpg') }}" alt="Imagem Parque">
        <p class="text-xl-center ml-7 mr-7 text-orange-600 mt-16 font-semibold text-justify shadow-sm">Outro aspecto fundamental dessa iniciativa é a acessibilidade. O projeto do parque foi desenvolvido para garantir que todas as pessoas, independentemente de suas condições físicas, possam usufruir do espaço de maneira confortável e segura. Isso demonstra uma preocupação real com a inclusão e a igualdade de acesso aos equipamentos públicos.

            Por trás dessa obra, há um trabalho cuidadoso da administração municipal, que envolve planejamento, gestão eficiente de recursos e compromisso com a população. A transparência na arrecadação e na aplicação dos investimentos públicos permite que projetos como esse saiam do papel e beneficiem diretamente quem mais precisa.
            
            Dessa forma, o Parque Linear Freitas Neto não é apenas uma obra física, mas um símbolo de transformação urbana e social. Ele demonstra que, com boa governança e visão estratégica, é possível ressignificar espaços, melhorar a qualidade de vida e construir uma cidade mais humana, acessível e integrada. A expectativa é que esse seja apenas um dos muitos projetos que continuarão impactando positivamente a população de Maceió, promovendo um desenvolvimento sustentável e inclusivo.</div>

    <div class="bg-blue-800 h-20 mt-11 rounded-md shadow-xl mb-6">
        <h1 class="text-2xl pt-5 text-white font-bold text-center">Cadastro de Pessoas da Secretaria</h1>
    </div>
        <form action="{{route('conta.edit')}}" method="get" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="nome" class="grid text-lg  font-semibold mt-10 ml-6 ">Nome</label>
                <input  class="w-7/12 p-2 border border-gray-300 rounded 2 text-xl ml-4" type="text" name="nome" id="nome" class="w-full p-2 border border-gray-300 rounded" required>
           
            <div class="mb-4">
                <label for="setor" class="block text-lg font-semibold mt-3 ml-6  ">Setor</label>
                <select name="setor" id="setor" class="w-7/12 p-2 border ml-4 border-gray-300 rounded" required>
                    <option value="Contabilidade">Contabilidade</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Atendimento">Atendimento</option>
                    <option value="Orçamento">Orçamento</option>
                    <option value="TI">TI</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold ml-6">E-mail</label>
                <input type="email" name="email" id="email" class="w-7/12 p-2 border border-gray-300 ml-4 rounded" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 ml-10 rounded mb-4">Adicionar</button>
        </form>
</body>
</html>
