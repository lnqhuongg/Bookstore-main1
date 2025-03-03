<?php
class Banner{
    private int $idBN;
    private string $mota;
    private string $hinhanh;

    function __construct(){
        $this->idBN= 0;
        $this->mota = '';
        $this->hinhanh = 0;
    }
    function nhap(int $idBN,string $mota, string $hinhanh){
        $this->idBN= $idBN;
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
    public function getIdBN(): int {
        return $this->idBN;
    }
    public function setIdBN(int $idBN): void {
        $this->idBN = $idBN;
    }

    public function getMota(): string {
        return $this->mota;
    }
    public function setMota(string $mota): void {
        $this->mota = $mota;
    }

    public function getHinhanh(): int {
        return $this->hinhanh;
    }
    public function setHinhanh(int $hinhanh): void {
        $this->hinhanh = $hinhanh;
    }
}
?>