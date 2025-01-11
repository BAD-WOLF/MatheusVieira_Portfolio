<?php
  $blue = "\033[34m";
  $green  = "\033[32m";
  $endColor = "\033[0m";  
?>

<?php
  // doc: Forma padrão de abrir e fechar tags PHP, usando a função echo para exibir uma string simples.
  echo "{$blue}echo 'Hello World'; :$endColor".PHP_EOL;
  echo "{$green}Hello World$endColor".PHP_EOL;
?>

<?=
  // doc: Sintaxe curta para saída, conhecida como short echo tag, usada como atalho para o echo. 
  // Obs.: Certifique-se de que short_open_tag esteja ativado no php.ini.
  "$blue<?= 'Hello World' ?> :$endColor".PHP_EOL;
  echo "{$green}Hello World$endColor".PHP_EOL;
?>

<?php
  // doc: Usando print para exibir "Hello World". 
  // Diferente de echo, print retorna um valor, permitindo seu uso em expressões.
  echo "{$blue}print('Hello World'); :$endColor".PHP_EOL;
  $result = print("{$green}Hello World$endColor".PHP_EOL);
  // $result será 1
?>

<?php
  // doc: Exemplo de saída usando printf, ideal para formatação avançada. Aqui, substituímos um marcador (%s) por "World".
  echo "{$blue}printf('Hello %s', 'World'); :$endColor".PHP_EOL;
  printf("%sHello %s%s%s", $green, 'World', $endColor, PHP_EOL);
?>

<?php
  // doc: Utilizando heredoc, útil para strings grandes e formatadas. Permite interpolação de variáveis.
  $name = "World";
  echo "{$blue}echo <<<HELLO Hello $name HELLO; :$endColor".PHP_EOL;
  echo <<<HELLO
  {$green}Hello $name$endColor
  HELLO.PHP_EOL;
?>

<?php
  // doc: Usando nowdoc, semelhante ao heredoc, mas não interpreta variáveis ou escapes. 
  // Ideal para exibir strings literalmente.
  echo "{$blue}echo <<<'HELLO' Hello $name HELLO; :$endColor".PHP_EOL;
  echo $green;
  echo <<<'HELLO'
  Hello $name
  HELLO.$endColor.PHP_EOL;
?>

<?php
  // doc: Usando var_dump para depuração. Exibe informações detalhadas sobre uma string, como tipo e tamanho.
  $array = ['Hello' => 'World'];
  echo "{$blue}var_dump('\$array'); :$endColor".PHP_EOL;
  echo $green;
  var_dump($array);
  echo $endColor;
?>

<?php
  // doc: Utilizando print_r, normalmente usado para exibir arrays e objetos, mas também pode exibir strings.
  echo "{$blue}print_r('\$array'); :$endColor".PHP_EOL;
  echo $green;
  print_r($array);
  echo $endColor;
?>

<?php
  // doc: Usando fwrite para saída em arquivos ou fluxo de saída padrão (php://stdout).
  echo "{$blue}fwrite(STDOUT, 'Hello World'); :$endColor".PHP_EOL;
  fwrite(STDOUT, "{$green}Hello World$endColor".PHP_EOL);
?>


