<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro PHP</title>
</head>
<body>
<h1>aula 01. hitória do php.</h1>

A Linguagem PHP começou em 1994, quando Rasmus Lerdorf resolveu criar um gerenciador de visitas para o seu site. Sua primeira criação não era uma linguagem, e sim uma ferramenta. Batizada de Personal Home Page, usava comandos simples inspirados da linguagem PERL. A segunda versão da ferramenta já permitia a manipulação de formulários e pequenos livros de visita: o Personal Home Page/ Forms Interpreter, ou PHP/FI. Essa versão ficou bastante popular e começou a se espalhar em 1995.

Com o objetivo de fazer sua ferramenta crescer, Rasmus liberou o acesso ao código-fonte da CGI em 1996, o que despertou o interesse de diversos programadores, entre eles os israelenses Zeev Suraski e Andi Gutmans. Esses dois reescreveram o núcleo da ferramenta e a transformou em uma Linguagem de Scripts, nos moldes em que nós temos o PHP atualmente. A partir de 1998, o PHP já começava a se destacar como uma das linguagens mais utilizadas na Internet. Foi nessa época que a linguagem foi rebatizada e passou a se chamar PHP: Hypertext Preprocessor e chegou à sua versão 3.0, com muitas funcionalidades interessantes.

Em 2000, a quarta versão do PHP surge para eliminar a maioria dos erros e falhas de segurança encontrados pela comunidade. Enquanto isso, Zeev e Andi resolveram reescrever todo o núcleo da linguagem, abandonando quase que completamente o projeto original de Rasmus Lerdorf. Quatro anos depois, em 2004, surge o PHP5 que ficou mundialmente conhecido e atualmente conta com 32 versões internas, com mais de 1000 correções de falhas de segurança.

-------------------------

aula 02. como funciona o php.

Como funciona o PHP? Como transformar meu computador em um servidor? Como funciona tecnologias server-side? Qual é a diferença entre tecnologias PHP, ASP, JSP e etc? A segunda aula do seu Curso de PHP do Curso em Vídeo vai responder a essas e muitas outras perguntas que normalmente são feitas por quem está iniciando seus estudos em PHP.

A infra-estrutura da Internet é baseada no modelo cliente x servidor. A Internet interliga clientes a servidores que possuem arquivos e fornecem cópias desses documentos.

Nas tecnologias client-side, a função do servidor é apenas fornecer arquivos que o cliente solicita. Quem vai ter mais trabalho de processamento é o lado do cliente (client-side) que terá seu navegador trabalhando para interpretar os códigos e arquivos enviados pelo server. São exemplos de tecnologias client-side: HTML, CSS, JavaScript e Flash.

Já nas tecnologias server-side, o servidor vai assumir a maior parte do trabalho, já que existe a interpretação de códigos do lado do servidor (server-side), que no caso do PHP são chamados scripts de servidor.

Para o PHP funcionar corretamente, o servidor precisa ter o Apache, que é um program server, um interpretador PHP (engine) e suporte a um ou mais tipos de banco de dados (geralmente MySQL).

Para transformar seu computador em um servidor com suporte PHP, você precisa de um sistema AMP (Apache + MySQL + PHP). Para usar PHP no Windows, instalamos um sistema WAMP. Para usar PHP no Linux, instalamos um sistema LAMP. Para usar PHP no Mac, instalamos um sistema MAMP.

-----------------------
<h1>aula 03. como instalar php.</h1>

Nessa aula do Curso Grátis de PHP para Iniciantes você vai aprender como instalar um servidor PHP no seu computador e vai ver como criar o seu primeiro exemplo de código PHP: o “Olá, Mundo!”.

É possível instalar o PHP no seu PC, bem como todas as ferramentas necessárias para o desenvolvimento na linguagem, como o Apache, MySQL, PHPMyAdmin, interpretadores e etc.

easyphp, versão para desenvolvedor. não fechar apenas minimizar.
editor de texto phpstorm, site jetbrains
    <h1>testando php</h1>
    <p>supertag para adicionar outras linguagens. no caso do php: sinal de menor sinal de interrogação sigla php e fecha com sinal de interrogação e sinal de maior, o código php será escrito entre a sigla php e o segundo sinal de interrogação ficando: <?php ?>. o comando echo faz algo ser mostrado no navegador, um texto deve ser inserido entre aspas duplas "" e finalizado com ponto e vírgula ; ficando: echo "Texto aqui!"; é como o comando print em c.</p>
    <?php
        echo "Olá mundo!";
    ?>
    <p>as tags do html funcionam dentro da supertag php. também funciona a tag style no head do arquivo, como css. a supertag não é interpretada em um arquivo de extensão .html.</p>
    <p>documentação do php no site php.net aba documentação. referência da linguagem. pode ser feito o download da documentação do php, versão many html files é menos espaçoso.</p>

-----------------------
<h1>aula 04. variáveis em php.</h1>

Como criar variáveis em PHP? Como declarar variáveis em PHP? Quais são os tipos primitivos do PHP? Como realizar conversões em PHP? A resposta para essas e muitas outras perguntas você vai ter nessa quarta aula do Curso Grátis de PHP para Iniciantes.

Antes de mais nada, é importante que você entenda os conceitos de variáveis em Algoritmos e saiba utilizá-las corretamente. Nós temos uma aula no Curso Grátis de Algoritmos que fala sobre variáveis, assista esse vídeo antes de prosseguir com essa aula, caso você não esteja familiarizado com esse conceito.

Comandos de saída do PHP:

Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela. Um exemplo simples desse comando é:

echo “Estou aprendendo variáveis em PHP”;

A pronúncia correta do comando echo é ECO (aquele som que se repete quando gritamos dentro de cavernas, lembra?).

Note que no comando acima, foi utilizada uma tag HTML para a quebra de linha. Isso é possível, já que o PHP se integra com essa tecnologia. Fique à vontade para utilizar tags de marcação hipertexto dentro dos seus comandos de saída em PHP.

Usando variáveis

Variáveis são espaços na memória do computador que podem conter valores. Variáveis simples armazenam apenas um valor de cada vez, dependendo do seu tipo.

Todas as variáveis no PHP possuem um $ na frente e seguem as mesmas regras de construção de nomes de identificadores:

– Devem começar com uma letra (após o $)

– Podem conter letras e números

– Não podem conter caracteres acentuados

– Não podem conter símbolos como % # * & etc (exceto _ e $)

OBS: O PHP faz a diferenciação entre as letras maiúsculas e minúsculas, por isso recomendamos que você utilize apenas identificadores com letras minúsculas em seus scripts PHP.

Declaração de variáveis

No PHP não existe a necessidade de declarar variáveis. Os tipos serão atribuídos automaticamente de acordo com o valor que a variável receber. Esse processo é conhecido como coerção. Isso pode ser até empolgante no início, mas é preciso prestar bastante atenção para não fazer nada errado.

Você pode forçar um tipo primitivo a uma variável por TYPECAST, utilizando (int) (real) (float) (double) (string) antes do valor na atribuição.

Não existe typecast para variáveis lógicas. Os valores booleanos são considerados números, sendo o valor 1 atribuído para true e vazio para false.

Atribuição de valores

Atribuir valor é colocar um conteúdo em uma variável. Utilizamos o operador de atribuição = para realizar essa tarefa. Veja alguns exemplos:

$idade = 15;

$salario = 1500.25;

$nome = “Gustavo”;

$casado = true;

Concatenação de valores

Concatenar é juntar valores para tratá-los em conjunto. A concatenação em PHP é realizada pelo operador ponto (.) como no trecho de código a seguir.

$idade = 18;

$nome = “Maria”;

echo $nome . “ tem “ . $idade . “ anos “;

No script acima, será exibido “Maria tem 18 anos”, já que acontecerão concatenações.

Porém, já que os identificadores PHP começam com um $, é possível realizar o comando de saída utilizando um modo simplificado:

echo “$nome tem $idade anos”; O comando acima pode ser usado sem problemas, contanto que sejam utilizadas aspas duplas.

<p>dentro das aspas duplas do comando echo eco pode adicionar qualquer tag html.</p>
<p>toda variável em php começa com o sinal de cifrão $ e tem diferença entre maiúscula e minúsculas. o php não tem um tipo deifnido de variável portanto não é necessário declarar uma variável, ao se usar alguma variável em algum momento o php já interpreta o tipo dela, de acordo com o valor adicionado, se uma variável aparace como um número inteiro o php já percebe essa variável como inteiro e se essa variável por algum motivo receber um valor pós vírgula por exemplo, o php já percebe e já altera para variável do tipo real.</p>
<p>para forçar um tipo de variável pode usar o typrecast, como na linguagem c onde: inteiro int ou integer; real real float ou double; caracterer string; e lógico não possui typecast pois em php variáveis lógicas são consideradas números inteiros onde verdadeiro true recebe 1 e falso false recebe nada, é deixado vazio.o typecast é definido antes das aspas duplas "" dentro de parênteses () onde dentro dos parênteses é definido se inteiro int ou qualquer outro. sem typecast o php interpreta automaticamente o tipo da variável</p>
<p>em um arquivo tipo php dento do head é possível adicionar um link para um arquivo css, da mesma forma que no html normal.</p>
<p>para concatenação em php cada junção é representada por ponto . no javascript por exemplo é uma vírugla , porém em php como toda variável inicia com cifrão $ então desde que fique tudo dentro de aspas duplas "" é desnecessário o ponto . ou a vírgula , e o texto é exibido normalmente ficando: $nome = "Dener"; $idade = 41; echo "$nome tem $idade anos."; sempre finalizando com ponto e vírgula. se for usado aspas simples '' o navegador não interpretará as variáveis mostrando por extenso o nome dessa variável e não o conteúdo. o nome de variável tem diferença de maiúscula e minúsculas então todos os lugares precisam estar iguais para a mesma variável.</p>

-----------------------
<h1>aula 05. operadores aritméticos.</h1>

Como fazer contas no PHP? Como realizar somas, multiplicações e mais? Exponenciações em PHP? Raiz quadrada em PHP? Os operadores aritméticos do PHP são:

+ é o operador de adição

– é o operador de subtração

* é o operador de multiplicaçã

o / é o operador de divisão Real

% é o operador de módulo (resto da divisão)

O código a seguir, vai somar dois números:

$n1 = 3;

$n2 = 2;

$s = $n1 + $n2;

echo “A soma entre $n1 e $n2 é igual a $s”;

O código acima vai mostrar na tela a mensagem

A soma entre 3 e 2 é igual a 5

Outra coisa importante a saber é a ordem de precedência de operadores aritméticos em PHP. Sempre em uma expressão, os operadores que serão executados são, na ordem:

Em primeiro lugar, parênteses ( )

Em segundo lugar, operadores de multiplicação, divisão e módulo * / %

Em seguida, as adições e subtrações + –

Por exemplo, considerando o código a seguir:

$media = $nota1 + $nota2 / 2;

A média será calculada de maneira errada, já que segundo a ordem de precedência, a divisão será feita antes. O correto seria escrever:

$media = ($nota1 + $nota2) / 2;

Note que o uso dos parênteses muda bastante as coisas.

Obtendo valores da URL com PHP

Vamos analisar a URL abaixo: 

http://localhost/aula05/operadores.php?a=3&b=2

No link acima, o arquivo operadores.php está sendo chamado dentro da pasta aula05 do servidor local. Na linha, serão passados dois valores: a valendo 3 e b valendo 2.

Para pegar esses valores no script PHP, use o código

$valor1 = $_GET[“a”];

$valor2 = $_GET[“b”];

No código acima, o parâmetro a (3) passado pela URL será armazenado na variável $valor1. De maneira similar, a variável $valor2 vai conter o valor do parâmetro b (2).

Obs: use sempre $_GET com todas as letras maiúsculas.

Funções Matemáticas em PHP abs() : Retorna o valor absoluto de um número.

Ex: abs(-5) = 5

pow() : Calcula uma potência

. Ex: pow(3,2) = 32 = 9

sqrt() : Calcula a raiz quadrada de um número.

Ex: sqrt(25) = 5

round() : Arredonda valores.

Ex: round(3.8) = 4

intval() : Trunca um número.

Retorna a parte inteira de um valor.

Ex: abs(8.7) = 8

number_format() : Formata um número Real.

Ex: number_format(3258.754, 2, “,”, “.”) = 3.258. 75.

Obs: Ainda existem os métodos ceil() e floor() para arredondamentos para cima e para baixo, respectivamente. A função round() vai usar as regras de arredondamento.

<p>operadores em php funcionam da mesma forma que em outras linguagens. as variáveis são definidas sempre com cifrão $ no início. para que a operação seja mostrada pode usar uma variável para guardar o resultado, no exemplo $s, ou a operação pode ser adicionada no comando echo, porém entre parênteses () e fora das aspas duplas "" separados por ponto . ao invés de vírgula , exemplo abaixo</p>
<p>a sequência de realzização das operações em uma expressão segue as regras da matemática, onde o que está entre parênteses () é efetuado primeiro, sem seguida da esquerda pra direita na ordem em que aparecem da esquerda para direita multiplicação * divisão / e módulo % e por último na ordem em que aparecem da esquerda para direita adição + e subtração -.</p>
<p>pode passar os valores para os cálculos através da url no navegador, adicinando, após o nome do arquivo seguido da extensão no caso php onde um parâmetro na url recebe com sinal de igual = o valor a ser usado seguindo do sinal de e comercial & caso tenha mais variáveis ou parâmetros a serem usadas e a variável seguinte da mesma forma da primeira ficando: https://localhost/pastadoarquivo/nomedoarquivo.php?a=3$b=2 então no código do arquivo php uma variável irá receber os valores passados pela url através do get, onde uma variável $n1 recebe = através da url no navegador &_GET o valor de a ["a"] entre aspas duplas e colchetes[] finalizado por ponto e vírgula, e a segunda variável ou variáveis seguintes repetem esse comando: $n1 = &_GET["a"]; e $n2 = &_GET["b"]; precisar ter a diferença de maiúsculas e minúsculas.</p>
    <p>usando os parâmetros x e y na url: https://localhost/pastadoarquivo/nomedoarquivo.php?x=5$y=-3&a=3$b=2 a abreviação abs calcula o valor absoluto de um valor insrido em uma variável ou parâmetro na url os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla abs: abs($v2);. usando pow faz uma potencialização, elevação a potência, x elevado a y os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla pow: pow($v2);. usando sqrt faz conta da raiz quadrada, os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla sqrt: sqrt($v2);. usando round faz o arredondamento, os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla round: round($v2); round segue as regras comuns de arredondamento e pode ser substituído por ceil que sempre arredonda para cima ou floor que sempre arredonda para baixo. usando intval pega a parte inteira truncagem de um número real, os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla intval: intval($v2);. usando number_format formata um número em moeda adiciondo casas decimais após a vírgula de um número real adicionando uma vírgula após o nome da variável entre parênteses após uma segunda vírgula entre aspas duplas fica qual sinal vai separar as casas decimais e uma terceira indica qual separa o milhar, os valores ou as variáveis devem ser adicionadas entre parênteses () logo após a sigla number_format: number_format($v2,2,",",".");. </p>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8"/>
        <link rel="stylesheet" href="estilos/style.css">
        <title></titel>
</head>
<body>
    <?php
        <h1>operações com operadores aritméticos</h1>
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        $m = $n1 + $n2 /2;
        $m2 = ($n1 + $n2) / 2;
        echo "A soma de $n1 mais $n2 é: $s";
        echo "<br/>A soma é: ". ($n1 + $n2);
        echo "<br/>A subtração é: ". ($n1 - $n2);
        echo "<br/>A divisão é: ". ($n1 / $n2);
        echo "<br/>A multiplicação é: ". ($n1 * $n2);
        echo "<br/>O módulo (resto da divisão) é: ". ($n1 % $n2);
        echo "<br/>A média errada é $m";
        echo "<br/>A média certa é: $m2";

        <h1>funções aritméticas</h1>
        $v1 = &_GET["x"];
        $v2 = &_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        echo "<br/>A raiz quadrada de $v1 e " . sqrt($v1);
        echo "<br/>O arredondamento de $v1 e " . round($v1);
        echo "<br/>A parte inteira de $v1 e " . intval($v1);
        echo "<br/>O valor em moeda de $v1 e R$ " . number_format($v1, 2, ",", ".";
    ?>
</body>
</html>

-----------------------
<h1>aula 06. operadores de atribuição.</h1>
<p>Uma atribuição acontece quando queremos colocar algum valor dentro de uma variável, seja ele um número ou string estática, o resultado de uma expressão, o retorno de uma função ou o conteúdo de outra variável.

== Operadores de Atribuição do PHP

Os operadores de atribuição do PHP são += -= *= /= %= e .=

Vejamos alguns exemplos:

$c = $c + 5; $c += 5;

$c = $c – $a; $c -= $a;

$c = $c + 1; $c += 1;

Na última linha da tabela acima, você verifica a adição de apenas uma unidade na variável. Nesses casos, podemos usar os operadores de incremento.

== Operadores de Incremento ou Decremento

$c = $c + 1; $c += 1; $c++;

Qualquer uma das formas acima é válida. De maneira similar, temos:

$c = $c – 1; $c -= 1; $c–;

A forma de utilizar o operador de incremento/ decremento faz toda diferença se ele aparece antes ou depois da variável. Assim:

$c ++ $c–

vão apresentar resultados diferentes de acordo com a situação. Durante a aula, vai ser explicado melhor como utilizar pré-incremento, pós-incremento, pré-decremento e pós-decremento em PHP.

 == Comentários em PHP

Existem três tipos de comentários em PHP. Os comentários inline // e # transformam tudo o que está após o(s) símbolo(s) será considerado comentário.

Existe também o comentário multiline, que vai criar comentários que ocupem várias linhas:

<?php

      /* Esse comentário vai ocupar várias linhas do seu código e todas serão ignoradas */

     $a += 1; // Esse é um comentário de uma linha

     $b ++; # Esse aqui também é

?>

== Variáveis Referenciadas

Colocar um caractere & na frente de uma variável vai criar um ponteiro em PHP. Ela não será uma variável de fato, mas será uma referência à variável original. Considere o código:

<?php

     $x = 3;

     $y = $x;

     $z = &$x;

?>

A variável $x vai receber 3. A variável $y vai receber o valor que está dentro da variável $x. A variável $z vai ser uma ligação com a variável $x. Mais tarde, qualquer modificação em $y não vai alterar o valor de $x. Porém, se mudarmos o valor de $z, o valor de $x será afetado, já que existe uma relação entre as duas.

== Variáveis de Variáveis (variáveis variantes)

Colocar um segundo $ na frente de uma variável também possui um efeito bem peculiar. Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável original. Essas são as variáveis de variáveis em PHP.

<?php

    $nome = “gustavo”;

    $$nome = “professor”;

?>

Com essas linhas, teremos uma variável $nome, como o conteúdo “gustavo” e a linha de baixo vai criar uma variável $gustavo, com o conteúdo “professor”.

Veja a aula em vídeo e tire todas as suas dúvidas sobre esses conteúdos sobre atribuição de valores em PHP.</p>

<p>atribuição é pegar um valor e adicionar a uma variável.</p>
<p>operadores quando adicionam ao valor da variável podem receber shorthand para encurtar a expressão exemplo a variável $a recebe o total de $a mais o valor da variável $b: $a = $a + $b; pode ser reduzido a: $a += $b; onde += representa $a mais o que tem na variável $a então adiciona o total de $b, esse tipo de shorthand serve para todas os operadores de de atribuição inclusive concatenação sendo esses adição +; subtração -; multiplicação *; divisão /; módulo %; concatenação .. os valores de atribuição para as variáveis podem ser passadas pela url no navegador e pegada usando $_GET[""] onde a atribuição entre as aspas duplas "" é direcionada a uma variável.</p>
<p>usando a concateação com sinal de ponto final . em um comando echo pode usar as funções aritméticas, por exemplo number_format.</p>
<p>operadores de incremento, 4 tipos: pré-incremento ++$a; pós-incremento $a++; pré decremento --$a; pós decremento $a++. onde pré sempre vai retirar ou adicionar antes de mostrar a variável se for o caso, e pós vai retirar ou adicionar após mostrar a variável onde uma linha seguinte mostraria o valor atualizado.</p>
<p>tipos de comentários 3 tipos. em linha iniciado por barra barra / / ou serquilha jogo da velha # tudp que estiver depois de algum desses símbolos será considerado um comentário porém finaliza automaticamente ao trocar de linha. limitando multilinha com barra asterísitco /* e finalizando com asterísitco barra */ onde tudo que estiver entre esses dois conjuntos de símbolos independente da quantidade de linhas será considerado comentário. ter comentários no código ajuda a identificar detalhes importantes no código.</p>
<p>Referencias entre variáveis. para referênciar uma variável a outra uma variável recebe o valor da anterior antecedido por e comercial &: $b = &$a; onde o que for alterado em na primeira acontecerá na segunda variável.</p>
<p>variáveis de variáveis. ao atribuir um valor a uma varível, se usado 2 cifrões antes do nome dessa variável fará com que esta receba o nome da variável anterior; $site = "cursoemvideo"; $$site = "cursophp";</p>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8"/>
        <link rel="stylesheet" href="estilos/style.css">
        <title></titel>
</head>
<body>
    <?php
        <h1>operadores de atribuição</h1>
        $a = 1;
        $b = 2;
        $c = $a + $b;
        $c = $c + 5; ou $c += 5;
        $b = $b + $a; ou $b += $a;
        $a = $a + 1; ou $a += 1; ou $a++;

        adição          $a = $a + $b; ou $a += $b;
        subtração       $a = $a - $b; ou $a -= $b;
        multiplicação   $a = $a * $b; ou $a *= $b;
        divisão         $a = $a / $b; ou $a /= $b;
        módulo          $a = $a % $b; ou $a %= $b;
        concatenação    $a = $a . $b; ou $a .= $b;

        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco";
        $preco = $preco + ($preco*10/100);
        $preco += ($preco*10/100);
        echo "<br/>O preço atual é $preco";

        // concatenação com funções aritméticas
        $preco = $_GET["p"];
        echo "O preço do produto é R$ R$ " . number_format($preco, 2);
        $preco = $preco + ($preco*10/100);
        $preco += ($preco*10/100);
        echo "<br/>O preço atual é R$ ". number_format($preco, 2);

        // mostar o ano atual pego via url e o anterior com incremento ou decremento.
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é " . --$atual;

        // variáveis referenciadas
        $a = 3;
        $b = $a;
        $b += 5;
        echo $a; // mostra o valor 3
        echo $b; // mostra o valor 8

        $a = 3;
        $b = &$a;
        $b += 5;
        echo $a; // mostra o valor 8
        echo $b; // mostra o valor 8

        // variáveis de variáveis
        $site = "cursoemvideo";
        $$site = "cursophp";
        echo $site; // mostra cursoemvideo
        echo $cursoemvideo; // mostra cursophp. o conteúdo da variável $site virou uma variável.
    ?>
</body>
</html>

-----------------------
<h1>aula 07. operadores relacionais.</h1>
<p>comparações com operadores relaciionais. símbolos: maior > ; menor < ; maior ou igual >= ; menor ou igual <= ; diferente <> ou != ; igual == ; idêntico === testa se é igual e do mesmo tipo.</p>
<p>operador unário representado por um ponto de interrogação ? seguido de dois pontos : onde há uma expressão, por exemplo se maior ou menor, interrogação o que seria verdadeiro dois pontos e o que seria falso, que pode ser atribuído a uma variável: $variávelmaior = expressão?verdadeiro:falso ou $variávelmaior = $a>$b?$a:$b que é se $a for maior que $b é verdadeiro então $variávelmaior recebe $a, se $a for menor do que $b então é falso então  $variávelmaior recebe $b. essa expressão é igual a se então e senão.</p>
<p>também pode ser usado com strings texto ou letras ou uma comparação ter um resultado de soma, exemplo: se $a maior que $b então $r resultado recebe $a+$b senão $a menor que $b então $r recebe $a-$b ficando: $r = $a>$b ? $a+$b : $a-$b;. no caso de usar uma string caso uma comparação seja verdadeira a variável de resultado receberá um texto ou uma palavra, uma string, se o resultado for falso a variável de resultado receberá outra palavra ou texto ou string diferente ficando: $sit = $m>7 ? "aprovado" : "recuperação"; </p>
<p>o operador unário faz apenas comparações simples, de apenas 1 tipo, se verdadeiro ou falso, básicas. a expressão unária pode ser concatenada no comando echo de mostrar na tela, porém deve estar toda entre parênteses ().</p>
<p>operadores lógicos. usando o operador e and ou && uma expressão só será verdadeira de todos elementos da expressão forem verdadeiros, se este e aquele for verdadeiro é verdadeiro. no operador or ou || uma expressão será verdadeira se qualquer um dos elementos forem verdadeiro, se este ou aquele for verdadeiro será verdadeiro. no operador xou xor ou exclusivo pode ser verdadeiro ou falso mas não os dois, só será verdadeiro se apenas um elemento for verdadeiro, se todos os elementos forem verdadeiro ou falso será falso. o operador não ! not inverte o elemento, se verdadeiro será falso, se falso é verdadeiro. operadores lógicos podem ser usado na expressão de operadores unários, onde a expressão a ser comparada estará entre parênteses () usando os símbolos se operadores lógicos.</p>


<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores relacionais</title>
</head>
<body>
    <?php
        maior $a > $b
        menor $a < $b
        maior ou igual $a >= $b
        menor ou igual $a <= $b
        diferente $a <> $b ou $a != $b
        igual $a == $b
        idêntico $a === $b

        $r = $a>$b ? $a+$b : $a-$b;
        $sit = $m>7 ? "aprovado" : "recuperação";

        $n1 = $_GET["a"];
        $n2 = $_GET["ab"];
        $tipo = $_GET["op"];
        echo "Os valores são $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "O rsultado é $r";

        // uso idêntico
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃo";
        echo "As variáveis são iguais? $r"; // mostrará SIM
        $r = ($a === $b) ? "SIM" : "NÃo";
        echo "As variáveis são idênticas? $r"; // mostrará NÃO

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A média é $m <br/>";
        // opção 1
        $sit = ($m<6) ? "Reprovado" : "Aprovado";
        echo "O aluno foi $sit";
        // opção 2
        echo "O aluno foi " . (($m<6) ? "Reprovado" : "Aprovado");

        // operadorse lógicos
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Nasceu em $ano e a idade é $idade";
        $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório" : "Não obrigatório";
        echo "Seu voto é $tipo";

    ?>
</body>
</html>

-----------------------
<h1>aula 08. integração html5 + php.</h1>
<p>Ligação formulário HTML PHP, integração HTML5 com PHP via formulário.

Nessa oitava aula do Curso de PHP, vamos aprender como aumentar a interatividade dos nossos scripts PHP com formulários HTML5.

Formulários em HTML5

Se você não sabe como lidar com formulários HTML5, não se esqueça de assistir antes as duas aulas que tratam desse assunto no Curso em Vídeo Grátis de HTML5.

Formulários HTML5 – Parte 1: http://youtu.be/metoFY-x_yg

Formulários HTML5 – Parte 2: http://youtu.be/lwuDJN9Udfc

Formulários HTML5 e JavaScript: http://youtu.be/YY5hqlcbfoI

Lá você vai aprender como escrever códigos específicos para a criação de formulários completos e vai estudar todos os novos controles de formulários adicionados ao HTML5, como o range, color, number, date, etc.

Por exemplo, vamos considerar um formulário que use o método GET e envie um valor V para o arquivo DADOS.PHP:

    Obs: O método GET envia dados de um formulário diretamente pela URL.

Interligando o formulário HTML com o script PHP

Para interligar o formulário, vamos usar a cláusula $_GET

<?php

     $valor = $_GET[“v”];

     echo “Digitou $valor”;

?>

Obs: O $_GET sempre vai utilizar todas as letras maiúsculas. Obs: Se por acaso seu formulário utilizar o método post, você vai precisar usar $_POST.

Interligando outros tipos de controles de formulários HTML5 com PHP

A integração de qualquer controle de formulário PHP pode ser feita através do parâmetro NAME de cada um deles. Durante a aula, criamos um formulário com vários tipos de controles e interligamos eles ao arquivo PHP.

Pegando o ano atual com PHP Para obter o ano atual no PHP, utilizamos

$idade = date(“Y”) – $ano;</p>

<p></p>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integração html5 + php. aula 08</title>
</head>
<body>
    
</body>
</html>




</body>
</html>

