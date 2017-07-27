<?php

class Usuario {
  public $id;
  public $nome;
  public $status;

  public function __construct(int $id, string $no, bool $st){
    $this->id = $id;
    $this->nome = $no;
    $this->status = $st;
  }
}
