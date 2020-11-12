<?php

$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$cpf = $_POST["CPF"];
$nacionalidade = $_POST["nacionalidade"][0];

if(strlen(trim($email))>0 && strlen(trim($nome))>0)
{
    if($_FILES["arquivo"]["size"] > 0)
    {
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], "../files/".$_FILES["arquivo"]["name"]);
    }

    $arquivocontato = fopen("../arquivocontato/info_".$nome.".txt", "w+");

    fwrite($arquivocontato,
        "
        Nome: ".$nome."
        Fone: ".$fone."
        Email: ".$email."
        Cpf: ".$cpf."
        Nacionalidade: ".$nacionalidade
    );
    fclose($arquivocontato);

    Header("Location: contato.php?msg=Dados salvos com sucesso!");
    exit();
}
else
{
    Header("Location: contato.php?msg=Nome e Email são obrigatórios!");
    exit();
}

?>