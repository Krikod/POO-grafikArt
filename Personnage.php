<?php

class Personnage {
    public $vie = 80;
    public $atk = 20;
    public $nom;

    public function regenerer()
    {
        $this->vie = 100;
    }
}