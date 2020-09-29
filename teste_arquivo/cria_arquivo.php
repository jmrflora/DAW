<?php

$dados = 'nome'.$_POST['nome']."\n".
'matricula:'.$_POST['matricula']."\n".
'endereço:'.$_POST['endereço']."\n".
'cep:'.$_POST['cep']."\n".
'cidade:'.$_POST['cidade']."\n".
'estado:'.$_POST['estado']."\n".
'cpf:'.$_POST['cpf']."\n".
'data'.$_POST['nascimento']."\n";

$nome_arquivo = 'arquivo.txt';

$ret = file_put_contents($nome_arquivo, $dados);
if($ret === false) {
        die('ocorreu um erro ao gravar esse arquivo');
    }
