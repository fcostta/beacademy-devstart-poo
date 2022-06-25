<?php

declare (strict_types=1);

class ValidarBR implements Validar //implements, poque não estamos herdando mas implementando modelos definidos no arquivo Validar.php
{

    public function validarDocumento(string $documento): void
    {
        if (strlen($documento)!==11){
            die ('CPF inválido!');
        }
    }


}