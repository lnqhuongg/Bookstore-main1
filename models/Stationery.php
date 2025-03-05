<?php
    class Stationery {
        private int $idLoai;
        private float $gianhap;

        public function __construct() {
            $this->idLoai = 0;
            $this->gianhap = 0.0;
        }

        public function nhap(int $idLoai, float $gianhap) {
            $this->idLoai = $idLoai;
            $this->gianhap = $gianhap;
        }

        public function getIdLoai(): int {
            return $this->idLoai;
        }
        public function setIdLoai(int $idLoai): void {
            $this->idLoai = $idLoai;
        }

        public function getGianhap(): float {
            return $this->gianhap;
        }
        public function setGianhap(float $gianhap): void {
            $this->gianhap = $gianhap;
        }
    }

?>
