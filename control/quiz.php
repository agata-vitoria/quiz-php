<?php
    class Quiz {
        private $pergunta1;
        private $pergunta2;
        private $pergunta3;
        private $pergunta4;
        private $pergunta5;
        private $pergunta6;
        private $quantRespostas = 0;

        public function setPergunta1($p1) {
            $this->pergunta1 = $p1;
        }
        public function getPergunta1() {
            return $this->pergunta1;
        }

        public function setPergunta2($p2) {
            $this->pergunta2 = $p2;
        }
        public function getPergunta2() {
            return $this->pergunta2;
        }

        public function setPergunta3($p3) {
            $this->pergunta3 = $p3;
        }
        public function getPergunta3() {
            return $this->pergunta3;
        }
        
        public function setPergunta4($p4) {
            $this->pergunta4 = $p4;
        }
        public function getPergunta4() {
            return $this->pergunta4;
        }

        public function setPergunta5($p5) {
            $this->pergunta5 = $p5;
        }
        public function getPergunta5() {
            return $this->pergunta5;
        }

        public function setPergunta6($p6) {
            $this->pergunta6 = $p6;
        }
        public function getPergunta6() {
            return $this->pergunta6;
        }

        public function setResposta() {
            $this->quantRespostas++;
        }
        public function getResposta() {
            return $this->quantRespostas;
        }

        public function verificaRespostas() {
            if ($this->pergunta1 == "op1") {
                $this->setResposta();
            }
            if ($this->pergunta2 == "op2") {
                $this->setResposta();
            }
            if ($this->pergunta3 == "op1") {
                $this->setResposta();
            }
            if ($this->pergunta4 == "op1") {
                $this->setResposta();
            }
            if ($this->pergunta5 == "op3") {
                $this->setResposta();
            }
            if ($this->pergunta6 == "op2") {
                $this->setResposta();
            }
        }
    }
?>