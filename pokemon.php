<?php
class Pokemon
{
  public $hp = 100;
  public $attack = 30;
  public function attacked($attack)
  {
    $this->hp -= $attack;
  }
  public function evolve()
  {
    $this->hp *= 2;
    $this->attack *= 2;
  }
  public function getHP()
  {
    return $this->hp;
  }
}

$pokemon = new Pokemon;
$pokemon->attacked(20);
$pokemon->evolve();
echo ($pokemon->getHP());
