<?php
require_once "efecto.php";
class ataque {

    private string $nombreAtaque;
    private int $poderAtaque;
    private Efecto $efecto;

    public function __construct(string $nombreAtaque, int $poderAtaque, Efecto $efecto){
        $this->nombreAtaque = $nombreAtaque;
        $this->poderAtaque = $poderAtaque;
        $this->efecto = $efecto;
    }

    public function getNombre() {
        return $this->nombreAtaque;
    }

    public function getPoder() {
        return $this->poderAtaque;
    }

    public function getEfecto() {
        return $this->efecto;
    }
}