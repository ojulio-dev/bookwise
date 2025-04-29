<?php

require 'functions.php';

class Celular {

    // propriedades e características
    public $tamanho;

    public $cor;

    // açoes
    public function ligar() {

        echo 'estou ligando';

        echo '<br><br>';

    }

}

$celular1 = new Celular;

$celular1->cor = 'preto';

$celular1->tamanho = 'grande';

$celular1->ligar();

$celular2 = new Celular;

$celular2->cor = 'branco';

$celular2->tamanho = 'pequeno';

dd ($celular1, $celular2);