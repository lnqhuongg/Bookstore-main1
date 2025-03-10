<?php
    include dirname(__FILE__).'/Product.php';
    
    class Book extends Product{
        private string $NXB;
        private int $namxb;
        private int $idTL;
        private float $giabia;
        private array $idTG;

        public function __construct(
            string $idSP = "", string $tenSP = "", string $mota= "", int $tonkho= 0, int $luotban = 0, float $giaban = 0.0, 
            int $trangthai= 0, string $hinhanh= "", float $trongluong = 0.0, ?int $idMGG = null, int $idNCC= 0 
            ,string $NXB = "",int $namxb = 0,int $idTL = 0,float $giabia = 0.0,array $idTG = [] ) {
            
            parent::__construct($idSP, $tenSP, $mota, $tonkho, $luotban, $giaban, $trangthai, $hinhanh, $trongluong, $idMGG, $idNCC);
            $this->NXB = $NXB;
            $this->namxb = $namxb;
            $this->idTL = $idTL;
            $this->giabia = $giabia;
            $this->idTG = $idTG;
        }

        static function getAll(){
            $list = [];
            $sql = 'SELECT * FROM sach';
            $con = new Database();
            $req = $con->getAll($sql);

            foreach($req as $item){
                $sql = 'SELECT idTG FROM sach_tacgia WHERE idSach= "' . $item['idSach'] .'"';
                $req_TG = $con->getAll($sql);
                $idTG = [];
                foreach($req_TG as $item_TG)
                {
                    $idTG [] = $item_TG ['idTG'];
                }
                $book = new self(
                    $item['idSach'],
                    $item['tensach'], 
                    $item['mota'], 
                    $item['tonkho'], 
                    $item['luotban'], 
                    $item['giaban'], 
                    $item['trangthai'], 
                    $item['hinhanh'], 
                    $item['trongluong'], 
                    $item['idMGG'], 
                    $item['idNCC'], 
                    $item['NXB'], 
                    $item['namxb'], 
                    $item['idTL'], 
                    $item['giabia'],
                    $idTG
                    );
                $list[] = $book;
            }
            return $list;
        }

        static function getBestSellers() {
            $sql='SELECT DISTINCT *
                FROM sach INNER JOIN sach_tacgia ON sach.idSach = sach_tacgia.idSach
                INNER JOIN tacgia ON sach_tacgia.idTG = tacgia.idTG
                WHERE tonkho > 0
                AND luotban > 0
                AND sach.trangthai = 1
                ORDER BY luotban DESC
                LIMIT 5';
            $list = [];
            $con = new Database();
            $req = $con->getAll($sql);
    
            // sach.idSach, hinhanh, tensach, luotban, giaban, giabia, NXB, idNCC, idTL, namXB, mota, trongluong, sach.trangthai, tonkho
    
            foreach($req as $item){
                $sql = 'SELECT idTG FROM sach_tacgia WHERE idSach= "' . $item['idSach'] .'"';
                $req_TG = $con->getAll($sql);
                $idTG = [];
                foreach($req_TG as $item_TG)
                {
                    $idTG [] = $item_TG ['idTG'];
                }
                $book = new self(
                    $item['idSach'],
                    $item['tensach'], 
                    $item['mota'], 
                    $item['tonkho'], 
                    $item['luotban'], 
                    $item['giaban'], 
                    $item['trangthai'], 
                    $item['hinhanh'], 
                    $item['trongluong'], 
                    $item['idMGG'], 
                    $item['idNCC'], 
                    $item['NXB'], 
                    $item['namxb'], 
                    $item['idTL'], 
                    $item['giabia'],
                    $idTG
                    );
                $list[] = $book;
            }
            return $list;
        }

        static function findByID($idSach){
            $sql = 'SELECT * FROM sach WHERE idSach='.$idSach;
            $con = new Database();
            $req = $con->getOne($sql);
    
    
                // Lấy danh sách tác giả
                $sql = 'SELECT idTG FROM sach_tacgia WHERE idSach=' . $req['idSach'];
                $reqTG = $con->getAll($sql);
                $idTG = [];
                foreach ($reqTG as $itemTG) {
                    $idTG[] = $itemTG['idTG'];
                }
               
               
                // !!! ĐỂ TẠM GIÁ BÁN = GIÁ BÌA
                $book = new self(
                    $req['idSach'],
                    $req['tensach'], 
                    $req['mota'], 
                    $req['tonkho'], 
                    $req['luotban'], 
                    $req['giaban'], 
                    $req['trangthai'], 
                    $req['hinhanh'], 
                    $req['trongluong'], 
                    $req['idMGG'], 
                    $req['idNCC'], 
                    $req['NXB'], 
                    $req['namxb'], 
                    $req['idTL'], 
                    $req['giabia'],
                    $idTG
                    );
            return $book;
        }

        public function toArray() {
            return [
                'idSach' => $this->idSP,
                'tenSach' => $this->tenSP,
                'mota' => $this->mota,
                'tonkho' => $this->tonkho,
                'luotban' => $this->luotban,
                'giaban' => $this->giaban,
                'trangthai' => $this->trangthai,
                'hinhanh' => $this->hinhanh,
                'trongluong' => $this->trongluong,
                'idMGG' => $this->idMGG,
                'idNCC' => $this->idNCC,
                'NXB' => $this->NXB,
                'namxb' => $this->namxb,
                'idTL' => $this->idTL,
                'giabia' => $this->giabia
            ];
        }

        public function getNXB() {
            return $this->NXB;
        }
        public function setNXB(string $NXB) {
            $this->NXB = $NXB;
        }

        public function getNamxb() {
            return $this->namxb;
        }
        public function setNamxb(int $namxb) {
            $this->namxb = $namxb;
        }

        public function getIdTL() {
            return $this->idTL;
        }
        public function setIdTL(int $idTL) {
            $this->idTL = $idTL;
        }

        public function getGiabia() {
            return $this->giabia;
        }
        public function setGiabia(float $giabia) {
            $this->giabia = $giabia;
        }
    }

?>