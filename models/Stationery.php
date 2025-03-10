<?php
    class Stationery extends Product {
        private int $idLoai;
        private float $gianhap;

        public function __construct(string $idSP = "", string $tenSP = "", string $mota= "", int $tonkho= 0, 
        int $luotban = 0, float $giaban = 0.0, int $trangthai= 0, string $hinhanh= "", float $trongluong = 0.0, 
        ?int $idMGG = null, int $idNCC= 0, int $idLoai = 0, float $gianhap = 0.0) {
            parent::__construct($idSP, $tenSP, $mota, $tonkho, $luotban, $giaban, $trangthai, $hinhanh, $trongluong, $idMGG, $idNCC);
            $this->idLoai = 0;
            $this->gianhap = 0.0;
        }

        static function getBestSellers() {
            $sql = 'SELECT DISTINCT *
                FROM vpp
                WHERE tonkho > 0
                AND luotban > 0
                AND trangthai = 1
                ORDER BY luotban DESC
                LIMIT 5';
            $list = [];
            $con = new Database();
            $req = $con->getAll($sql);
    
            foreach($req as $item){
                $stationery = new self(
                    $item['idVPP'],
                    $item['tenVPP'], 
                    $item['mota'], 
                    $item['tonkho'], 
                    $item['luotban'], 
                    $item['giaban'], 
                    $item['trangthai'], 
                    $item['hinhanh'], 
                    $item['trongluong'], 
                    $item['idMGG'], 
                    $item['idNCC'], 
                    $item['idLoai'], 
                    $item['gianhap'], 
                );
                $list[] = $stationery;
            }
            return $list;
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
