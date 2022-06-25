<?php

// interfaces srvem apenas de modelo para consiga alterar uma classe e outra desde que elas sejam do mesmo modelo
// INTERFACE é um modelo que será utilizado para as classes seguirem, então terenmos 2 ou mais classes que seguem o mesmo modelo, mas que fazem coisas diferentes

interface Validar 
{
// Estes métodos não possuem a abertura da chave porque não são os métodos em si, mas a assinatura do método
// Estamos dizendo que teremos uma interface para os métodos abaixo serem implementados
public function validarNome(string $nome): void;

public function validarDocumento(string $documento): void;

public function validarCodigoPostal(string $codigoPostal): void;

}