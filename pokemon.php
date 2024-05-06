<?php
require_once "tipo.php";
require_once "ataque.php";
class Pokemon {

    private string $nombre;
    private Tipo $tipo;
    private int $nivel;
    private int $puntosVida;
    private array $ataques;

    public function __construct(string $nombre, Tipo $tipo, int $nivel, int $puntosVida){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->puntosVida = $puntosVida;
        $this->ataques = [];

    }
    public function anadirAtaque($ataque) {
        $this->ataques[] = $ataque;
    }

    public function buscarAtaquePoderoso(){
        $ataqueMasPoderoso = null;
        $poderMaximo = 0;

        foreach ($this->ataques as $ataque) {
            if ($ataque->getPoder() > $poderMaximo) {
                $poderMaximo = $ataque->getPoder();
                $ataqueMasPoderoso = $ataque;
            }
        }

        return "El ataque más poderodo de " . $this->nombre . " es " . $ataqueMasPoderoso->getNombre() . PHP_EOL;
            
        }
    public function atacar(Ataque $ataque){
        return $this->nombre . " ataca usando " . $ataque->getNombre() . " con un poder de " . $ataque->getPoder() . PHP_EOL;
    }
    
    }
