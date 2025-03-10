<?php
class Banner{
    private int $idBN;
    private string $mota;
    private string $hinhanh;

    function __construct(int $idBN = 0, string $mota = "", string $hinhanh = ""){
        $this->idBN = $idBN;
        $this->mota = $mota;
        $this->hinhanh = $hinhanh;
    }

    function toArray() {
        return [
        'idBN'=> $this->idBN,
        'mota'=> $this->mota,
        'hinhanh'=> $this->hinhanh
        ];
    }

    static function getAll(){
        $list = [];
        $sql = 'SELECT * FROM banner';
        $con = new Database();
        $req = $con->getAll($sql);

        foreach($req as $item){
            $banners = new self($item['idBN'], $item['mota'], $item['hinhanh']);
            $list[] = $banners;
        }
        return $list;
    }

    static function getAllActive(){
        $list = [];
        $sql = 'SELECT * FROM banner
                WHERE trangthai = 1';
        $con = new Database();
        $req = $con->getAll($sql);

        foreach($req as $item){
            $banners = new self($item['idBN'], $item['mota'], $item['hinhanh']);
            $list[] = $banners;
        }
        return $list;
    }


    public function getIdBN(){
        return $this->idBN;
    }
    public function setIdBN(int $idBN) {
        $this->idBN = $idBN;
    }

    public function getMota(){
        return $this->mota;
    }
    public function setMota(string $mota){
        $this->mota = $mota;
    }

    public function getHinhanh() {
        return $this->hinhanh;
    }
    public function setHinhanh(int $hinhanh) {
        $this->hinhanh = $hinhanh;
    }
}
?>