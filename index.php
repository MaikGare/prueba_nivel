<?php
require_once "pokemon.php";
require_once "ataque.php";

$pokemon = new Pokemon("Tinkaton", Tipo::hada, 100, 327);

$ataque1 = new Ataque("Martillo Colosal", 150, Efecto::paralizar);
$pokemon->anadirAtaque($ataque1);

$ataque2 = new Ataque("Carantoña", 80, Efecto::dormir);
$pokemon->anadirAtaque($ataque2);

$ataque3 = new Ataque("Escaldar", 120, Efecto::quemar);
$pokemon->anadirAtaque($ataque3);

$ataque4 = new Ataque("Rayo Hielo", 90, Efecto::congelar);
$pokemon->anadirAtaque($ataque4);

echo $pokemon->buscarAtaquePoderoso();
echo $pokemon->atacar($ataque2);
echo $pokemon->atacar($ataque4);

?>""