<?php

declare(strict_types=1);

Class GestorGeral extends Gestor //A herança nesse caso vai ser recebida de Gestor, e que por sua vez recebeu de Usuario
{

    private float $bonusAnual;

    // Construtor herdando do Gestor, o que vale é o mais proximo, ou seja, aquele que tem o caminho mais proximo
    public function getBonusAnual(): float
    {
       return $this->bonusAnual;
    }

    public function setBonusAnual(float $bonusAnual): void
    {
       $this->bonusAnual = $bonusAnual;
    }


}
