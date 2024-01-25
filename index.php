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

<p>todo formulário em html começa com as tags form e barra form form /form. onde dentro da tag form adiciona o método method de envio fo formulário como get que vai na url e post que é um pacote e nao aparece na url, o atributo action é uma ação, o que o formulário vai fazer com os dados digitados, normalmente quando tem um nome de um outro arquivo com extensão os dados são enviados para esse arquivo que vai fazer o tratamento dos dados. um input dentro de um form precisa de um name nome para identificar e é esse atributo que será identificado pelo arquivo que vai receber os dados do formulário.</p>
<!-- exercício 01 -->
<p>para configurar quais valores serão passsados para o arquivo php pelo botão de input tipo radio em cada input tipo radio, cada botão de escolha é necessário o atributo value com o conteúdo para informar qual a informação ou escolha do usuário para o arquivo php.</p>
<!-- exercício 01 -->

<!-- exercício 02 -->
<p>se o arquivo php for aberto diretamente sem receber os dados de formulário será mostrado mensagens de erro para cada input não preenchido. para resolver pode usar o operador unário antecedido por isset que é se foi configurado o operador unário deve estar completamente entre parênteses.</p>
<!-- exercício 02 -->

<!-- exercício 03 -->
<p>a supertag de php não precisa estar somente no body corpo do arquivo html, pode ser adicionado também no head cabeça do html podendo ter mais de uma supertag. assim como um seletor css para variáveis em css uma supertag php no head de um arquivo html pode receber alguma configuração do formulário e guardar em uma variável para ser usada posteriormente quando necessário sendo necessário a criação da variável que receberá uma configuração usando ou não isset.</p>
<p>para acessar uma configuração de uma variável php em um seletor css, via arquivo ou style no head é necessário que a configuração que receberá a configuração da variável php esteja dentro da supertag php, ficando: seletor {configuração: <?php echo $variavelphp; ?>;}. ao usar esse conjunto de configurações será gerado um arquivo html diferente mais resumido apenas com as configurações geradas pela escolha das variáveis php e seletor css.</p>
<!-- exercício 03 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- exercício 03 -->
    <!-- arquivo php 03cores.php -->
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <!-- arquivo php 03cores.php -->
    <!-- exercício 03 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integração html5 + php. aula 08</title>
</head>
<body>
    <!-- exercício 01 -->
    <!-- arquivo html -->
    <form action="arquivo.php" method="get">
        Valor: <input type="number" name="v">
        <input type="submit" value="Calcular Raiz">
    </form>
    <!-- arquivo html -->

    <!-- arquivo php arquivo.php-->
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $rq é $valor"; // ou
        echo "A raiz de $rq é " . number_format($rq, 2);
    ?>
    <a href="arquivo.html">Voltar</a>
    <!-- arquivo php arquivo.php-->
    <!-- exercício 01 -->

    <!-- exercício 02 -->
    <!-- arquivo html -->
    <form action="02idade.php" method="get">
        Nome: <input type="text" name="nome"/><br>
        Ano de Nascimento: <input type="number" name="ano"/><br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked/>
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar"/>
    </form>
    <!-- arquivo html -->
    
    <!-- arquivo php 02idade.php-->
    <?php // assim dá erro quando abre o arquivo php diretamente
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome e tem $idade anos.";
    ?>
    <a href="arquivo.html">Voltar</a>

    <?php // assim verifica se foi enviado e passa o valor definido no operador unário
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Sem sexo informado";
        $idade = date("Y") - $ano;
        echo "$nome e tem $idade anos.";
    ?>
    <a href="arquivo.html">Voltar</a>
    <!-- arquivo php 02idade.php-->
    <!-- exercício 02 -->
    
    <!-- exercício 03 -->
    <!-- arquivo html -->
    <div>
        <form action="03cores.php" method="get">
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="itxt"><br>
            <label for="itam">Tamanho: </label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select><br>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"><br>
            <input type="submit" value="Gerar">
        </form>
    </div>
    <!-- arquivo html -->
    
    <!-- arquivo php 03cores.php -->
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <!-- arquivo php 03cores.php -->
    <!-- exercício 03 -->
</body>
</html>

-----------------------
<h1>aula 09. estrutura condicional if.</h1>
<p>O PHP permite a criação de condicões. Nessa aula, veremos como utilizar a estrutura IF.

A estrutura condicional em PHP é representada da seguinte forma:

if ($idade = 18) {

     $vota = true;

} else {

    $vota = false;

}

Estruturas condicionais aninhadas

Quando colocamos uma condicional dentro da outra, dizemos que estamos aninhando estruturas (termo que se refere a ninho). Para aninhar blocos, utilizamos uma sintaxe semelhante à anterior:

if ($peso 50) {

    $tipo = “muito magro”;

} else {

    if ($peso =50 && $peso 70) {

          $tipo = “peso normal”;

     } else {

        $tipo = “acima do peso”;

     }

}

Simplificando estruturas condicionais aninhadas

No PHP, podemos substituir uma cláusula else seguida de outro if (como feito acima) por uma estrutura elseif {} que vai se comportar exatamente da mesma maneira, mas usará menos blocos.

if ($tipo == “nacional”) {

     $imposto = 0;

} elseif ($tipo == “importado”) {

     $imposto = 60;

} elseif ($tipo == “mercosul”) {

     $imposto = 20;

} else {

     $imposto = 80;

}

Na próxima aula veremos como criar estruturas condicionais com múltiplos valores utilizando o comando switch. Até lá!</p>
<p>operadores unários são operadores ternários.</p>
<!-- exercício 01 -->
<p>uma estrutura if pode verificar várias condições de uma expressão, onde caso a primeira condição entre parênteses não seja satisfeita se será verificado uma segunda condição senão else ou outras condições antes de finalizar onde: if se (condição) {comandos se satisfefito} else {comandos se if não for satisfeito}</p>
<!-- exercício 01 -->

<!-- exercício 02 -->
<p>uma condição if  pode ficar dentro de outra estrutura condicional if, é uma estrutura de condição aninhada. pode usar o comando elseif senao se para resumir a quantidade de linhas e colchetes usados.</p>
<!-- exercício 02 -->

<!-- exercício 03 -->
<p>ler 2 notas entre 0 e 10 cada, calcular a média, verificar se a média está entre 0 e 5 está reprovado, entre 5 e 7 em recuperação e 7 ou mais está aprovado.</p>
<!-- exercício 03 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. aula 09</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
        <form action="01.php" action="get">
            Ano de Nascimento:
            <input type="number" name="ano" placeholder="4 dígitos">
            <input type="submit" value="Verificar">
        </form>
    </div>
    <!-- arquivo html -->
    
    <!-- arquivo php 01.php -->
    <div>
        <?php
            $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Nasceu em $a e a idade é $i anos."<br>;
            if ($i >= 18) {
                $v = "pode votar";
                $d = "pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            echo "Então $v e $d.";
        ?>
    </div>
    <!-- arquivo php 01.php -->

    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
        <form action="02.php" action="get">
            Ano de Nascimento:
            <input type="number" name="ano" placeholder="4 dígitos">
            <input type="submit" value="Verificar">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 02.php -->
    <div>
        <?php
            $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Nasceu em $a e a idade é $i anos."<br>;
            if ($i < 16) {
                $tipodevoto = "Não vota.";
            }
            else {
                if (($i >= 16 && $i < 18) || ($i > 65)) {
                    $tipodevoto = "Opcional";
                }
                else {
                    $tipodevoto = "Obrigatório.";
                }
            }
            echo "Então $tipodevoto.";
            // ou
            if ($i < 16) {
                $tipodevoto = "Não vota.";
            }
            elseif (($i >= 16 && $i < 18) || ($i > 65)) {
                $tipodevoto = "Opcional";
            }
            else {
                $tipodevoto = "Obrigatório.";
            }
            echo "Então $tipodevoto.";
        ?>
    </div>
    <!-- arquivo php 02.php -->
    <!-- exercício 2 -->

    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
        <form action="03.php" action="get">
            Notas de 0 a 10:
            <input type="number" name="nota1" placeholder="Nota 1">
            <input type="number" name="nota2" placeholder="Nota 2">
            <input type="submit" value="Calcular Média">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 02.php -->
    <div>
        <?php
            $nota1 = isset ($_GET["nota1"]) ? $_GET["nota1"] : "Não informado 1";
            $nota2 = isset ($_GET["nota2"]) ? $_GET["nota2"] : "Não informado 2";
            $media = ($nota1 + $nota2) / 2;
            if ($media <= 5) {
                $situacao = "Reprovado";
            }
            elseif (($media >= 5) || ($media <= 7)) {
                $situacao = "Em recuperação";
            }
            elseif ($media >= 7) {
                $situacao = "Aprovado";
            }
            else {
                echo "Faltou alguma coisa."
            }
            echo "Com essa nota está: $situacao.";
        ?>
    </div>
    <!-- arquivo php 02.php -->
    <!-- exercício 3 -->
</body>
</html>


-----------------------
<h1>aula 10. estrutura condicional switch.</h1>
<p>Estruturas de condição de múltipla escolha em PHP. Switch case em PHP usa a mesma sintaxe do Java e da Linguagem C e C++.</p>
<!-- exercício 1 -->
<p>usando a estrutura condicional switch em cada caso escolha deve ser finalizado com break quebrar para que não seja executados os comandos case seguintes, não é necessário em defout ou na última opção case. a estrutura switch funciona como escolha caso, caso case a escolha seja uma coisa execute um comando e pare break, caso a escolha seja outra execute o comando e pare break. a escolha será comparada em uma variável marcada entre parênteses logo após o termo switch ficando: switch ($variavel) {case opcao1: echo "oucomando1"; break; case opcao2: echo "oucomando2"; break; default: echo "Erro";}</p>
<p>uma variável recebe através de um input a escolha do usuário, o comando switch recebe essa variável entre parênteses e compara com os casos case, onde se o conteúdo da variável for igual valor após o case, será executado o comando, se não será comparado com o segundo case e assim por diante, caso encontre o valor igual os comandos do case será executado e em seguida o break será executado para sair bloco switch.</p>
<!-- exercício 1 -->
<!-- exercício 2 -->
<p>para cada caso só se pode ter um valor, mas para múltiplos casos pode ter cases diferentes, ficando: switch ($variavel) {case1: case2: case3: echo "escolha1"; break; case4: case5: echo "escolha2"; break; default: echo "nenhumaescolha";}.</p>
<p>o código em javascript: javascript: history.go(-1) significa volte uma página ou volte para a página anterior. esse código pode ser adicionado a um link ou botão.</p>
<!-- exercício 2 -->
<p>lista de estados form tipo select. ao escolher o estado o sistema vai dizer qual a região o estado pertence. inlcuindo distrito federeal.</p>
<!-- exercício 3 -->
<p></p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. aula 09</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
        <form action="a1001.php" method="get">
            Número: <input type="number" name="num"><br>
            <fieldset><legend>Operação</legend>
                <input type="radio" name="oper" value="1" id="dobro" checked>
                <label for="dobro">Dobro</label>
                <input type="radio" name="oper" value="2" id="cubo">
                <label for="cubo">Cubo</label>
                <input type="radio" name="oper" value="3" id="raiz">
                <label for="raiz">Raiz Quadrada</label>
            </fieldset>
            <input type="submit" class="botao" value="Calcular">
        </form>
    </div>
    <!-- arquivo html -->
    
    <!-- arquivo a1001.php -->
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // ou $n ^ (1/2) ou ^ (0.5)
            }
            echo "O resultado é: $r.";
            <a href="a1001.php">Voltar</a>
        ?>
    </div>
    <!-- arquivo a1001.php -->
    <!-- exercício 1 -->

    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
        <form method="get" action="1002.php">
            Dia da semana:
            <input type="number" name="ds" min="2" max="8" require>
            <input type="submit" class="botao" value="Analisar">
        </form>
    </div>
    <!-- arquivo html -->
    
    <!-- arquivo php 1002.php -->
    <div>
        <?php
            $d = isset ($_GET["ds"]) ? $_GET["ds"] : 0;
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Dia útil!";
                    break;
                case 7:
                case 8:
                    echo "Fim de semana!";
                    break;
                default:
                    echo "Dia inválido";
            }
        ?>
        <br>
        <a href="javascript: history.go(-1)" classbotao>Voltar</a>
    </div>
    <!-- arquivo php 1002.php -->
    <!-- exercício 2 -->

    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
        <form action="1003.php" method="get">
            <select name="estado">
                <option value="MG">Minas Gerais</option>
                <option value="ES">Espírito Santo</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio grande do Sul</option>
                <option value="PR">Paraná</option>
            </select>
        </form>
        <input type="submit" value="Enviar">
    </div>
    <!-- arquivo html -->
    
    <!-- arquivo php 1003.php -->
    <div>
        <?php
            $escolha = isset ($_GET["estado"]) ? $_GET["estado"] : "Inválido";
            switch ($escolha) {
                case MG:
                case ES:
                case SP:
                case RJ:
                    echo "Região Sudeste";
                    break;
                case SC:
                case RS:
                case PR:
                    echo "Região Sul";
                    break;
                default:
                    echo "Inválido";
            }
        ?>
    </div>
    <!-- arquivo php 1003.php -->
    <!-- exercício 3 -->
</body>
</html>


-----------------------
<h1>aula 11. estrutura de repetição while.</h1>
<p>Vamos agora começar as Estruturas de Repetição em PHP, partindo da estrutura WHILE (enquanto).

A Estrutura While (enquanto), também conhecida como Estrutura de Repetição com Teste Lógico no início, realiza o teste de uma expressão lógica sempre na primeira linha da estrutura. Vamos ver como realizar uma contagem progressiva de 1 até 10, utilizando a estrutura while em PHP.

$c = 1;

while ($c = 10) {

    echo $c; $c++;

}

Durante a aula, veremos também como realizar outras contagens, como por exemplo a contagem regressiva.

Outra coisa que vamos aprender durante essa aula de repetição é criar código HTML dinamicamente, utilizando scripts PHP. No exemplo apresentado, vamos criar várias caixas de texto com nomes e etiquetas diferentes usando uma estrutura de repetição em PHP.</p>
<!-- exercício 1 -->
<p>a estrutura de repetição while enquanto testa a condição antes de executar os comandos. sempre deve adicionar ao comando de execução entre chaves {} um encremento ou decremento para que não a estrutura não entre em loop infinino, nunca pare de se executado. uma variável de controle ou contador recebe um valor e a estrutura while enquanto verifica se essa variável está nas condições configuradas entre parênteses () caso sim será executado os comandos entre chaves, incluindo o incremento ou decremando na variável de controle, quando a variável não satisfaz a condição, o loop while para de ser executado e a variável para de ser alterada, ficando: $variaveldecontrole = valor; while ($variaveldecontrole condiçãológica) {comandos $variaveldecontrole++ ou --} onde a condição lógica pode ser <= >= == != ou qualquer outra desse tipo.</p>
<p>caso a contagem seja maior que de 1 em 1 não funciona usar $variaveldecontrole++ ou -- deve usar $variaveldecontrole += 2 ou -+ 2 por exemplo. a contagem pode ser regressiva ou progressiva, de 1 em 1 ou 3 em 3 ou qualquer contagem.</p>
<p>não pode ter aspas duplas dentro de um comando echo de string.</p>
<!-- exercício 1 -->
<!-- exercício 2 -->
<p>para que um formulário seja requerido várias vezes esse formulário pode ficar dentro de um loop while, onde o formulário está em um comando echo, após a tag form e antes da tag barra form usar a supertag php com a variável contador e dentro do while o comando echo com o campo do formulário que precisa repetir. para que cada campo do formulário repetido fique com um name diferente basta nomear o name com a variável de controle: name="v$controle" o texto que indentifica, label não a tag esse eu não sei não testei, também pode ser nomeado dessa forma, então pode ser que o id tampém possa. criação de conteúdo dinâmico.</p>
<p>para criar uma variável de outra variável usar dois símbolos de cifrão $$ juntos seguidos da variável origem.</p>
<p><?php
        $i = 1;
        while ($1 <= 5) {
            $v = "num".$i;
            $nr1 = "v".$i;
            $$V = isset($_GET["url"]) ? $_GET["url"] : 0;
            $i++;
        }
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            echo "valor $i: " . $$v . "<br/>";
            $i++;
        }
        echo "$num1 $num2 $num3 $num4 $num5"; // mostrando variáveis de variáveis. mesmo efeito do segundo while dessa supertag php.
    ?></p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p>na estrutura while o comando break também funciona, porém ele para o loop independente de se ter finalizado a contagem do contador ou não, o break pode ser usado dentro uma estrutura if else mesmo dentro de um bloco while</p>
<p>na estrutura while o comando continue continuar faz com que o a estritura continue a ser executada tendo o contador finalizado ou não.</p>
<p>contador personalizado. 3 campos input number digitáveis, um para indicar o início de uma contagem, outro para indicar o final de uma contagem, máximo e nímimo, um campo para indicar qual o intervalo da contagem, de quanto em quanto aumentar até chegar no máximo deve ser de 1 a 5, botão de enviar. o php deve receber esses valores e iniciando do mínimo contar e mostrar essa contagem até o máximo e finalizar, contando de acordo com o incremento informado. caso o início seja maior que o final, a contagem deve ser regressiva.</p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estrutura de repetição while. aula 11</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
            $contador = 1;
            while ($contador <= 10) {
                echo "Verificado $contador <br/>";
                $contador++; // $contador += 1; ou $contador = $contador + 1;
            }

            $contador = 10;
            while ($contador >= 1) {
                echo "Verificado $contador <br/>";
                $contador-- // $contador -= 1; ou $contador = $contador - 1;
            }
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->

    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
        <form action="1102.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c:
                    <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                }
            
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 2 -->

    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
        <form action="1103.php" method="get">
            Início:
            <input type="number" name="inicio" value="inicio"><br>
            Final:
            <input type="number" name="final" value="final"><br>
            Incremento:
            <select name="incre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>

            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 1103.php -->
    <div>
        <?php
            $ini = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $fim = isset($_GET["final"]) ? $_GET["final"] : 0;
            $inc = isset($_GET["incre"]) ? $_GET["incre"] : 0;
            if ($ini < $fim) {
                while ($ini <= $fim) {
                    echo "valor: " . $ini + $inc;
                    $ini = $ini + $inc;
                }
            }
            elseif ($fim < $ini) {
                while ($fim <= $ini) {
                    echo "valor: " . $fim + $inc;
                    $fim = $fim + $inc;
                }
            }
            else {
                echo "tudo igual: $fim";
            }
        ?>
    </div>
    <!-- arquivo php 1103.php -->
    <!-- exercício 3 -->
</body>
</html>


-----------------------
<h1>aula 12. estrutura de repetição do while.</h1>
<p>Na aula de hoje veremos como funciona a estrutura de repetição while.</p>
<!-- exercício 1 -->
<p>a estrutura de repetição do while faz o teste da condição após a execução dos comandos e após o incremento ou decremento da variável de controle. após o comando do faça segue as chaves {} onde estarão os comandos e incremento ou decremento, em seguida o termo while enquanto seguido de parênteses () onde estará as condições para que se volte ou não ao início do comando do faça, finalizado com ponto de vírgula;  ficando: do {comando; $controle ++ ou --;} while (condição); .</p>
<!-- exercício 1 -->
<!-- exercício 2 -->
<p>em um input o que estiver na configuração value será o valor padrão do formulário. calculando fatorial usando do while.</p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p>exibir uma tabuada de 1 a 10, de acordo com a escolha select de 1 a 10. se o número escolhido for 5, por exemplo mostrar na tela toda a tabuada de 5 na multiplicação de 1 a 10. botão de voltar.</p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estrutura de repetição do while. aula 12</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
            $c = 1;
            do {
                echo "$c";
                $c++;
            } while ($c <= 10);

            $c1 = 1;
            do {
                echo "$c1";
                $c1 += 2;
            } while ($c1 <= 20);

            $c2 = 10; // regressiva
            do {
                echo "$c2";
                $c2--;
            } while ($c2 >= 1);

            $c3 = 20; // regressiva
            do {
                echo "$c3";
                $c3 -= 2;
            } while ($c3 >= 1);
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
        <form action="1202.php" method="get">
            Valor: 
            <input type="number" name="val" min="0" max="15" vaule="1">
            <input type="submit" value="Fatorial">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 1202.php -->
    <div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>calculando o fatorial de $v </h1>";
            $c = $v; // contador inicia com o valor recebido do formulário
            $fat = ;
            do {
                $fat = $fat * $c;
                $c--;
            } while ();
            echo "<h2>$v ! = $fat";
        ?>
        <p><a href="1202.php" class="botao">Voltar</a></p>
    </div>
    <!-- arquivo php 1202.php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
        <form action="1203.php" method="get">
            <select name="tabuada" value="1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 1203.php -->
    <div>
        <?php
            $selec = isset($_GET["tabuada"]) ? $_GET["tabuada"] : 1;
            $cont = $selec; // contador
            echo "<h1>A tabuada de $selec é: </h1><br>";
            do {
                $x = 1;
                $resul = $selec * $x;
                echo "$selec x $x = $resul";
                $x++;
                $cont--;
            } while ($cont > 0);
        ?>
        <p><a href="1203.php" class="botao">Voltar</a></p>
    </div>
    <!-- arquivo php 1203.php -->
    <!-- exercício 3 -->
</body>
</html>
</body>
</html>


-----------------------
<h1>aula 13. estrutura de repetição for.</h1>
<p>Aprenda a utilizar a estrutura de repetição For do PHP com vários exercícios práticos, demonstrações detalhadas e exercícios de fixação.</p>
<p>a estrutura de repetição for para é semelhante a estrutura de repetição while. formada por variável contador ou de controle no início condição no meio e incremento ou decremento no final onde após segue os comandos entre chaves. inicia com o termo for e abre parênteses () onde dentro estarão separados por ponto e vírgula ; a variável de controle seguido da condição e incremento ou decremento fecha parênteses e abre chaves onde ficará os comandos fecha chaves {} ficando: for ($variaveldecontrole; condição; $variaveldecontrole++ ou --) {comandos} a condição pode ser uma condição lógica maior igual >= menor igual <= igual == ou qualquer outra que funcione. o comando echo pode ser substituido por print sem dano, ambos são comandos de saída.</p>
<!-- exercício 1 -->
<p>a variável contadora ou de controle dentro de um for para só funciona dentro do for a qual pertence, portanto pode ter vários for com o mesmo nome de variável de controle.</p>
<!-- exercício 1 -->
<!-- exercício 2 -->
<p>é possível criar formulários por exemplo em um arquivo html. dentro de uma tag select pode ser usado um script php de uma estrutura de repetição para criar dinamicamente as opções option do formulário ficando na linha de identação tag form, dentro dessa a tag select, dentro dessa a supertag php e dentro dessa uma estrutura de repetição com um comando echo para um option.</p>
<p>o script do javascript: javascript:history.go(-1) pode ser usado em um link a para voltar uma página ou página anterior.</p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p>receber um número do usuário e dizer se esse número é ou não primo. mostrar quais os múltiplos quantidade de múltiplos e se é ou não primo.</p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estrutura de repetição for. aula 13</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "$i ";
            }
            echo "<br>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "<br>";
            for ($i = 0; $i <= 50; $i++) {
                echo "$i ";
            }
            echo "<br>";
            for ($i = 20; $i >= 1; $i -= 2) {
                print "$i ";
            }
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 1301.php -->
    <div> <!-- este trecho cria dinamicamente options para o formulário select -->
        <form method="get" action="1302.php">
            <select name="num">
                <?php
                    for ($c = 1; $c <= 1; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
    <!-- arquivo php 1301.php -->
    <!-- arquivo php 1302.php -->
    <div>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            for ($c = 1; $c <= 10; $c++) {
                $r = $n * $c;
                echo "$n x $c = $r <br>";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
    <!-- arquivo php 1302.php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
        <form action="1303.php" method="get">
            Digite um número:
            <input type="number" name="num">
            <input type="submit" value="É primo?">
        </form>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php 1303.php -->
    <div>
        <?php
            $imp = isset($_GET["num"]) ? $_GET["num"] : 1;
            echo "Analisando: $imp ... <br>" 
            $tot = 0;
            $cond = 0;
            echo "Multiplos: "; // tem que estar dentro de um for?
            for ($c = 1; $c <= $imp; $c++){
                if (($imp % $c) == 0) {
                    echo $c;
                    $tot++;
                    if ($tot <= 2) {
                        $cond = "É primo";
                    }
                    elseif ($tot > 2) {
                        $cond = "Não é primo";
                    }
                }
            }
            echo "<br>"            
            echo "Total: $tot";
            echo "Resultado: o número $imp $cond";
        ?>
        <br><a href="html" class="botao">Voltar</a>
    </div>
    <!-- arquivo php 1303.php -->
    <!-- exercício 3 -->
</body>
</html>




-----------------------
<h1>aula 14. rotinas em php parte 1.</h1>
<p>procedimento pode ser o mesmo que uma função function. a função recebe os parâmetros entre parênteses logo após o nome da função procedimento: function nomedafuncao (parâmetro1, parâmetro2) {} os comandos ou procedimentos a serem executados fican entre chaves {} alguma função não retorna valor, portando algum comando para exibir ou retornar esse valor encontrado após a realização dos procedimentos comandos deve ser adicionado, em php pode existir funções que retornam ou não algum valor. ao chamar uma função que recebe parâmetros entre parênteses deve adicionar os valores desses parâmetros: nomedafuncao(valorparâmetro1, valorparâmetro2); e finalizar com ponto e vírgula ; o primeiro valor na chamada será atribuído ao primeiro parâmetro na criação da função e o segundo valor ao segundo parâmetro, e assim em diante caso tenha mais parâmetros.</p>
<!-- exercício 1 -->
<p>uma função pode ter várias chamadas com valores de parâmetros diferentes. os parâmetros também pode ser variáveis. uma função com retorno usa o comando return retorne que devolve para a chamada da função o valor do resultado, a uma variável pode receber uma chamada de função passando os valores, então após a execução da função o comando return irá enviar para a variável que chamou a função o valor encontrado, e a variável terá como valor esse resultado retornado: $variavel = nomedafuncao(valorparâmetro1, valorparâmetro2); onde o retorno da função será atribuído a variável $variavel. o comando return deve ser seguido da variável ou valor que se precise retornar.</p>
<!-- exercício 2 -->

<!-- exercício 2 -->
<p>o comando return pode ser seguuido de uma expressão aritmética por exemplo: return $a +$b; e uma função de soma não necessariamente vai precisar de uma variável de resultado.</p>
<!-- exercício 2 -->

<!-- exercício 3 -->
<p>uma função pode ser criada sem receber parâmetros entre parênteses () e a chamada dessa função pode ter vários valores de parâmetros, em php o a função func_get_args() recebe esses parâmetros e guarda em uma variável tipo vetor, caso receba muitos parâmetros, ficando a chamda da função: $variavel = nomedafuncao(1, 2, 3, 4, 5); onde cada número é um parâmetro e function nomedafuncao () {$p = func_get_args();} onde a variável $p receberá todos os valores repassados na chamada da função.</p>a função em php func_num_args(); recebe um valor referente a quantidade de parâmetros repassados pela chamada da função: $variavel = nomedafuncao(10, 20, 30, 40, 50); onde: function nomedafuncao () {$tot = func_num_args();} o qual a variável $tot receberá o valor 5 que é a quantidade de parâmetros repassados. no caso de se fazer uma soma com esses valores, basta usar uma estrutura de repetição for.</p>
<p>em uma estrutura de repetição for para indicar que vai utilizar o valor que está sendo usado na marcação da contagem, usar colchetes [] antecedido pela variável que se está contando e dentro dos colchetes a variável de controle.</p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas em php parte 1. aula 14</title>
</head>
<body>

    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
            function soma ($a, $b) { // função sem retorno
                $s = $a + $b;
                echo "<p>A soma é: $s</p>";
            }
            soma(3, 4);
            soma(2, 8);
            $x = 9;
            $y = 15;
            soma($x, $y);

            function soma2($a, $b) { // função com retorno
                $s = $a + $b;
                return $s;
            }
            $resul = soma(3, 4);
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
            function soma3($a, $b) { // função com retorno, os parâmentros $a e $b receberão os valores repassados pela chamada da função que estão dentro das variáveis $x e $y
                $s = $a + $b;
                return $s; // ou
                //function soma3($a, $b) {return $a + $b;}
            }
            $x = 9;
            $y = 15;
            $r = soma3($x, $y); // os valore de $x e $y serão enviados para a função soma3
            echo "A soma de $x e $y é: $r";
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
            function soma4 () {
                $p = func_get_args();
                $tot = func_num_args();
                $s = 0;
                for ($i = 0; $i < $tot; $i++) {
                    $s = $s + $p[$i]; // ou $s += $p[$i];
                }
                return $s;
            }
            $res = soma4(3, 4, 8, 1, 2);

            function soma5 () {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i = 0; $i < $t; $i++) {
                    $s = $s + $p[$i]; // ou $s += $p[$i];
                }
                return $s;
            }
            $r = soma5(2, 3, 5, 8, 9, 4);
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>

-----------------------
<h1>aula 15. rotinas em php parte 2.</h1>
<p>Criando funções e procedimentos em PHP com passagem de parâmetros por valor e passagem de parâmetros por referência.

Aprenda como utilizar as instruções include, require, include_once, require_once para incluir arquivos externos em seu script PHP.</p>

<!-- exercício 1 -->
<p>o valor do parâmetro repassado para a função como passagem por valor não altera o valor da variável que está fora da função, como foi feito na aula 14 o retorno da função será o resultado dos comandos, porém a variável fora da função não terá o valor alterado. na passagem por referência não é o valor que é repassado e sim a variável, portanto o valor é alterado após a chamada e execução da função, para se passar por referência, na criação da função entre parêntes usar e comercial & antes da variável que será a referência ficando: function nomedafuncao (&$variavel) {comandos}.</p>
<!-- exercício 1 -->

<!-- exercício 2 -->
<p>rotinas externas estão em pacotes ou arquivos separados. para que uma função ou outra configuração possa ser executado em um arquivo estando em outro arquivo usar a função include no arquivo que vai receber que vai usar um determinado comando ou função, o nome do arquivo onde a função a ser usada está deve estar entre aspas duplas "" com exensão do arquivo finalizado por ponto e vírgula ; e antecedido pelo termo include, ficando: include "nomedoarquivo.exensao"; dentro da supertag php. include pode incluir tags html ou php.</p>
<!-- exercício 2 -->

<!-- exercício 3 -->
<p>o comando require requerido funciona como o comando include ficando: require "nomedoarquivo.exensao";. a diferença é que no caso do require, o arquivo a ser incluído tem que estar disponível, caso não esteja a função será parada e não haverá resultados disponíveis. no caso do comando inlcude, caso o arquivo não esteja disponível, o sistema continuará sendo executado.</p>
<p>os comandos include_once e require_once fazem com que um arquivo que precise ser carregado em outro arquivo, ao receber esse comando verifique se já foi carregado, se não, carregue, e se sim, não carregue. quando não tem o termo once, caso tenha um segundo ou terceiro e por aí vai, comando para incluir ou requerer um outro arquivo ele será carregado mesmo que já tenha sido carregado, tendo portanto duplicidade ou mais.</p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas em php parte 2. aula 14</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
            function nomedafuncao ($x) { // passagem por valor
                $x = $x + 2;
                echo $x;
            }
            $a = 3;
            nomedafuncao ($a);
            echo $a; // vai mostrar o valor 3

            function nomedafuncao2 (&$x) { // passagem por referência
                $x = $x + 2; // ou $x += 2;
                echo $x;
            }
            $a = 3;
            nomedafuncao2 ($a);
            echo $a; // vai mostrar o valor 5


            function nomedafuncao3 ($x) { // passagem por valor
                $x += 5;
                echo "<p>O valor na função é: $x</p>"; // mostra o valor 9
            }
            $a = 4;
            nomedafuncao3 ($a);
            echo $a; // vai mostrar o valor 4

            function nomedafuncao4 (&$x) { // passagem por referência
                $x += 5;
                echo "<p>O valor na função é: $x</p>"; // mostra o valor 9
            }
            $a = 4;
            nomedafuncao4 ($a);
            echo $a; // vai mostrar o valor 9
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php // arquivodasfunções.php
            function ola() {
                echo "<h1>Olá mundo!</h1>";
            }
            function mostrarvalor ($v) {
                echo "<h2>Recebi o valor de $v</h2>";
            }
        ?>// arquivodasfunções.php

        <?php // arquivo que vai usar as funções da supertag anterior que seria um outro arquivo php
            include "arquivodasfuncoes.php"; // comando que inclui o arquivo que tem as funções
            echo "<h1>Chamando função de outro arquivo</h1>";
            ola(); // comando que chama a função ola do arquivo anterior
            mostrarvalor(4); // comando que chama a função mostrarvalor do arquivo anterior enviando o valor 4 que será salvo na variável $v da função.
        ?> <!-- arquivo que vai usar as funções da supertag anterior que seria um outro arquivo php -->
    </div>
    <!-- arquivo php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>

-----------------------
<h1>aula 16. funções string em php parte 1.</h1>
<p></p>
<!-- exercício 1 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 2 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p></p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções string em php parte 1. aula 16</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>

-----------------------
<h1>aula 17. .</h1>
<p></p>
<!-- exercício 1 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 2 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p></p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. aula 14</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>

-----------------------
<h1>aula 18. .</h1>
<p></p>
<!-- exercício 1 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 2 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p></p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. aula 14</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>

-----------------------
<h1>aula 19. .</h1>
<p></p>
<!-- exercício 1 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 2 -->
<p></p>
<!-- exercício 2 -->
<!-- exercício 3 -->
<p></p>
<!-- exercício 3 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. aula 14</title>
</head>
<body>
    <!-- exercício 1 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php -->
    <!-- exercício 1 -->


    <!-- exercício 2 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 2 -->


    <!-- exercício 3 -->
    <!-- arquivo html -->
    <div>
    </div>
    <!-- arquivo html -->
    <!-- arquivo php .php -->
    <div>
        <?php
        ?>
    </div>
    <!-- arquivo php .php -->
    <!-- exercício 3 -->
</body>
</html>
-----------------------
-----------------------

</body>
</html>

