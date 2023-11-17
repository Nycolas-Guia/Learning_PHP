<?php
$gestor = new PDO("mysql:host=localhost; dbname=bancoteste; charset=utf8", "root", "");
# DSN = Data Source Name (Servidor MySQL)
    # mysql:host=localhost;
    # dbname = Base de Dados (BancoTeste)
    # charset = opções não obrigatórias 
# User = "root" 
# Password = null,
# $options = null,

# Uma variável para conter os dados de tabela
$dados = $gestor->query("SELECT * FROM fornecedores");

# Um método FETCH do PDO de busca de todos os dados armazenados 
# Associado a um ARRAY.
$fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($fornecedores);
?>