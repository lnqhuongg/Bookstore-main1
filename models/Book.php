<?php
    class Book {
        private string $NXB;
        private int $namxb;
        private int $idTL;
        private float $giabia;

        public function __construct() {
            $this->NXB = '';
            $this->namxb = 0;
            $this->idTL = 0;
            $this->giabia = 0.0;
        }

        public function nhap(string $NXB, int $namxb, int $idTL, float $giabia) {
            $this->NXB = $NXB;
            $this->namxb = $namxb;
            $this->idTL = $idTL;
            $this->giabia = $giabia;
        }

        public function getNXB(): string {
            return $this->NXB;
        }
        public function setNXB(string $NXB): void {
            $this->NXB = $NXB;
        }

        public function getNamxb(): int {
            return $this->namxb;
        }
        public function setNamxb(int $namxb): void {
            $this->namxb = $namxb;
        }

        public function getIdTL(): int {
            return $this->idTL;
        }
        public function setIdTL(int $idTL): void {
            $this->idTL = $idTL;
        }

        public function getGiabia(): float {
            return $this->giabia;
        }
        public function setGiabia(float $giabia): void {
            $this->giabia = $giabia;
        }
    }

?>