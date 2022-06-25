<?php

declare (strict_types=1);

abstract class Validar // ao utilizar o termo "ABSTRACT", a classe se torna abstrata e com isso não precisa e ela não pode mais ser instanciada pois  se torna um metodo estatio
{
    public static function validarCpf (string $cpf):void // para transformar este metodo em estatico, vamos informar o comando "static"
    {
        if (strlen($cpf) !== 11 ){ // strlen é uma função do PHP para contar caracteres
                	               // validação considerando que sejam digitados apenas numeros
            die('Opes, CPF inválido');

        }
    }

}