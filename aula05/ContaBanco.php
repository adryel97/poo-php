
<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Metodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);

            if($t == "CC"){
                $this->setSaldo(50);
            } elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta com dinheiro não pode fechar</p>";
            } elseif ($this->getSaldo() < 0){
                echo "<p>Conta em débito</p>";
            } else {
                $this->setSaldo(false);
                echo "<p>Conta fechada com sucesso</p>";
            }
        }
        public function depositar($v){
            if($this->getStatus() ){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p><b>Depósito de R$ $v na conta de {$this->getDono()}</b></p>";
            } else{
                echo "<p>Não consigo depositar</p>";
            }
        }
        public function sacar($v){
            if($this->getStatus() ){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de $v autorizado na conta de {$this->getDono()}</p>";
                }
                else{
                    echo "<p>Saldo insuficuente</p>";
                }
            } else {
                echo "<p>Impossivél sacar</p>";
            }
        }
        public function pagarMensal(){
           if ($this->getTipo () == "CC"){
               $v = 12;
           } else if ($this->getTipo () == "CP") {
               $v = 20;
           } 

           if ($this->getStatus() ) {
               $this->setSaldo($this->getSaldo() - $v);
               echo "<p>Mensalidade de $v debitada na conta de {$this->getDono()} </p>";
           } else {
               echo "<p>Problema com a conta. Não posso cobrar</p>";
           }
        }

        //Metodo especiais
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>conta criada com sucesso</p>";
        }

        public function getNumConta(){
           return $this->numConta;
        }
        public function setNumconta($numConta){
            $this->numConta = $numConta;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
             $this->tipo = $tipo;
        }

        public function getDono(){
            return $this->dono;
        }
        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
