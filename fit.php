<?php
class Fit{
  private $kyori;
  protected $zei = 35000;

  public function soko($km){
    if($km > 0 )
    $this->kyori += $km;	
  }
  public function getKyori(){
    return  $this->kyori;
  }
  public function kyori(){
    echo  $this->kyori;
  }
}

$fitA = new Fit;
$fitA->soko(50);
echo "<p>Fit Aの走行距離は",  $fitA->getKyori();
$fitA->kyori();

$fitB = new Fit;
$fitB->soko(100);
echo "<p>Fit Bの走行距離は",  $fitB->getKyori();

$fitA->soko(60);
echo "<p>Fit Aの走行距離は",  $fitA->getKyori();
echo "<p>AとBの走行距離の差は ",$fitA->getKyori() - $fitB->getKyori();


// $fitA->kyori=0;  //publicなアクセス権なので直接代入できる
// echo "<p>Fit Aの走行距離は",  $fitA->kyori;

class Lexus extends Fit{
  protected $zei = 50000;
}
$lexusA = new Lexus();
$lexusA->soko(50);
echo '<h4>レクサスの走行距離は､',$lexusA->getKyori();
