<?php
class Book{
    private string $idSach; 
    private string $tensach;
    private string $mota;
    private int $tonkho;
    private int $luotban;
    private string $NXB;
    private float $giabia;
    private float $giaban;
    private int $trangthai;
    private string $hinhanh;
    private float $trongluong;
    private int $idMGG;
    private int $idNCC;
    private int $idTL;

    function __construct(){
        $this->idSach= '';
        $this->tensach = '';
        $this->mota = '';
        $this->tonkho = 0;
        $this->luotban = 0;
        $this->NXB = '';
        $this->giabia = 0;
        $this->giaban = 0;
        $this->trangthai = 0;
        $this->hinhanh = '';
        $this->trongluong = 0;
        $this->idMGG = 0;
        $this->idNCC = 0;
        $this->idTL = 0;
    }
    function nhap(string $idSach, string $tensach, string $mota, int $tonkho,int $luotban,string $NXB,float $giabia,float $giaban,int $trangthai, string $hinhanh, float $trongluong,int $idMGG, int $idNCC, int $idTL ){
        $this->idSach = $idSach;
        $this->tensach = $tensach;
        $this->mota = $mota;
        $this->tonkho = $tonkho;
        $this->luotban = $luotban;
        $this->NXB = $NXB;
        $this->giabia = $giabia;
        $this->giaban = $giaban;
        $this->trangthai = $trangthai;
        $this->hinhanh = $hinhanh;
        $this->idMGG = $idMGG;
        $this->idNCC = $idNCC;
        $this->idTL = $idTL;
    }
    function toArray() {
        return [
        'idSach'=> $this->idSach,
        'tensach'=> $this->tensach,
        'mota'=> $this->mota,
        'tonkho'=> $this->tonkho,
        'luotban'=> $this->luotban,
        'NXB'=> $this->NXB,
        'giabia'=> $this->giabia,
        'giaban'=> $this->giaban,
        'trangthai'=> $this->trangthai,
        'hinhanh'=> $this->hinhanh,
        'idMGG'=> $this->idMGG,
        'idNCC'=> $this->idNCC,
        'idTL'=> $this->idTL
        ];
    }
    public function getIdSach(): string {
        return $this->idSach;
    }
    public function setIdSach(string $idSach): void {
        $this->idSach = $idSach;
    }

    public function getTensach(): string {
        return $this->tensach;
    }
    public function setTensach(string $tensach): void {
        $this->tensach = $tensach;
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

    public function getNXB(): string {
        return $this->NXB;
    }
    public function setNXB(string $NXB): void {
        $this->NXB = $NXB;
    }

    public function getGiabia(): float {
        return $this->giabia;
    }
    public function setGiabia(float $giabia): void {
        $this->giabia = $giabia;
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

    public function getIdTL(): int {
        return $this->idTL;
    }
    public function setIdTL(int $idTL): void {
        $this->idTL = $idTL;
    }

}
?>