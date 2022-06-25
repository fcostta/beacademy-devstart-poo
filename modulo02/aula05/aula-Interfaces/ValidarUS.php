<?php

declare (strict_types=1);

class ValidarUS implements Validar //implements, poque não estamos herdando mas implementando modelos definidos no arquivo Validar.php
{

    public function validarDocumento(string $documento): void
    {
        if (strlen($documento)!==14){
            die ('Documento USA inválido!');
        }
    }


}