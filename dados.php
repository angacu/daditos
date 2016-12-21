<?php
//creamos la clase
class JugadorDado{

//creamos las propiedades
private $minNumDado=0;
private $maxNumDado=0;
public $tirarDado=0;

//creamos los setters
public function setminNumDado($minNumDado){
if ($minNumDado>0){
  $this->minNumDado=0;
}
else{
  $this->minNumDado = $minNumDado;
}
}
public function setmaxNumDado($maxNumDado){
if ($maxNumDado<0){
  $this->maxNumDado=0;
}
else{
  $this->maxNumDado = $maxNumDado;
}
}
//ahora los getters
public function getminNumDado(){
return $this->minNumDado=$minNumDado;
}
public function getmaxNumDado(){
return $this->maxNumDado=$maxNumDado;
}
public function tirarDado(){
return $this->tirarDado=rand($this->maxNumDado,$this->minNumDado);

}
}
 ?>
