<?php
class Fit{
  private $kyori;
  protected $zei = 35000;
  
  public function soko($km){
    $this->kyori += $km;	
  }
  public function getKyori(){
    return  $this->kyori;
  }
}

$fitA = new Fit;
$fitA->soko(50);
echo $fitA->getKyori();

$fitB = new Fit;
$fitB->soko(100);
echo '<p>', $fitB->getKyori();

// echo '<p>', $fitA->hoken;


