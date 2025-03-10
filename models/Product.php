<?php
    class Product{
        protected string $idSP; 
        protected string $tenSP;
        protected string $mota;
        protected int $tonkho;
        protected int $luotban;
        protected float $giaban;
        protected int $trangthai;
        protected string $hinhanh;
        protected float $trongluong;
        protected ?int $idMGG;
        protected int $idNCC;

        public function __construct(string $idSP = "", string $tenSP = "", string $mota= "", int $tonkho= 0, int $luotban = 0, float $giaban = 0.0, 
        int $trangthai= 0, string $hinhanh= "", float $trongluong = 0.0, ?int $idMGG = NULL, int $idNCC= 0 ) {
            $this->idSP = $idSP;
            $this->tenSP = $tenSP;
            $this->mota = $mota;
            $this->tonkho = $tonkho;
            $this->luotban = $luotban;
            $this->giaban = $giaban;
            $this->trangthai = $trangthai;
            $this->hinhanh = $hinhanh;
            $this->trongluong = $trongluong;
            $this->idMGG = $idMGG;
            $this->idNCC = $idNCC;
        }

        static function newProducts() {
            
        }

        public function getIdSP(): string {
            return $this->idSP;
        }
        public function setIdSP(string $idSP): void {
            $this->idSP = $idSP;
        }

        public function getTenSP(): string {
            return $this->tenSP;
        }
        public function setTenSP(string $tenSP): void {
            $this->tenSP = $tenSP;
        }

        public function getMota(): string {
            return $this->mota;
        }
        public function setMota(string $mota): void {
            $this->mota = $mota;
        }

        public function getTonkho(): int {
            return $this->tonkho;
        }
        public function setTonkho(int $tonkho): void {
            $this->tonkho = $tonkho;
        }

        public function getLuotban(): int {
            return $this->luotban;
        }
        public function setLuotban(int $luotban): void {
            $this->luotban = $luotban;
        }

        public function getGiaban(): float {
            return $this->giaban;
        }
        public function setGiaban(float $giaban): void {
            $this->giaban = $giaban;
        }

        public function getTrangthai(): int {
            return $this->trangthai;
        }
        public function setTrangthai(int $trangthai): void {
            $this->trangthai = $trangthai;
        }

        public function getHinhanh(): string {
            return $this->hinhanh;
        }
        public function setHinhanh(string $hinhanh): void {
            $this->hinhanh = $hinhanh;
        }

        public function getTrongluong(): float {
            return $this->trongluong;
        }
        public function setTrongluong(float $trongluong): void {
            $this->trongluong = $trongluong;
        }

        public function getIdMGG(): int {
            return $this->idMGG;
        }
        public function setIdMGG(int $idMGG): void {
            $this->idMGG = $idMGG;
        }

        public function getIdNCC(): int {
            return $this->idNCC;
        }
        public function setIdNCC(int $idNCC): void {
            $this->idNCC = $idNCC;
        }
    }
?>