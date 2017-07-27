<?php

class Indice {
  public $cod;
  public $pos;

  public function __construct(int $co, int $po){
    $this->cod = $co;
    $this->pos = $po;
  }
}
