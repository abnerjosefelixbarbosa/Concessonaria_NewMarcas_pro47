<?php
 include("Conexao.php");
require_once 'Controle.php';
require_once 'cadastrar.php';
class Carro {
    private $IdCarro;
    private $Valor;
    private $Km;
    private $Nome_Modelo;
    private $Cor;
    private $Ano;
    private $Potencia;
    private $Cambio;
    private $Combustivel;
    private $Marca;    
    
    public function Carro( $valor, $km, $modelo, $cor, $ano, $potencia,
                          $cambio, $combustivel, $marca) {
        
        $this->Valor = $valor;
        $this->Km = $km;
        $this->Nome_Modelo = $modelo;
        $this->Cor= $cor;
        $this->Ano = $ano;
        $this->Potencia = $potencia;
        $this->Cambio = $cambio;
        $this->Combustivel = $combustivel;
        $this->Marca = $marca;
        if(mysql_query("inser into carro (Nome_marca,Nome_modelo,Cor,Ano, Valor,KM,Combustivel,Potencia,Cambio) values ('$this->Marca','$this->Nome_Modelo','$this->Cor','$this->Ano',' $this->Valor','$this->Km','$this->Combustivel','$this->Potencia','$this->Cambio')")){
         
        echo "Cadastrado com sucesso!! <br> <a href='javascript:history.back(-1);'>voltar</a>" ;
        exit;
     }else{
       echo "erro" ;
       exit;
     }
        
    }

    
    
     public function getValor() {
        return $this->Valor;
    }
    public function setValor($val) {
       $this->Valor = $val;
    }
    
     public function getKm() {
        return $this->Km;
    }
    public function setKm($km) {
        $this->Km = $km;
        
    }
     public function getNome_Modelo() {
        return $this->Nome_Modelo;
    }
    public function setINome_Modelo($modelo) {
        $this->Nome_Modelo = $modelo;
    }
    
    public function getCor() {
        return $this->Cor;
    }
    public function setCor($cor) {
        $this->Cor= $cor;
        
    }
    public function getAno() {
        return $this->Ano;
    }
    public function setAno($ano) {
        $this->Ano = $ano;
        
    }
    public function getPotencia() {
        return $this->Potencia;
    }
    public function setPotencia($potencia) {
        $this->Potencia = $potencia;
        
    }
    public function getCambio() {
        return $this->Cambio;
    }
    public function setCambio($cambio) {
        $this->Cambio = $cambio;
    }
    
    public function getCombustivel() {
        return $this->Combustivel;
    }
    public function setCombustivel($combustivel) {
        $this->Combustivel = $combustivel;
    }
     public function getMarca() {
        return $this->Marca;
    }
    public function setMarca($marca) {
        $this->Marca= $marca;
    }
}
