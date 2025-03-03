<?php
class Stationery
{
     private string $idVPP;
     private string $tenVPP;
     private int $idNCC;
     private int $idLoai;
     private float $gianhap;
     private float $giaban;
     private int $tonkho;
     private string $hinhanh;
     private string $mota;
     private float $trongluong;
     private int $trangthai;
     private int $luotban;
     private int $idMGG;

     function __construct()
     {
         $this -> idVPP = '';
         $this -> tenVPP = '';
         $this -> idNCC = 0;
         $this -> idLoai = 0;
         $this -> gianhap = 0;
         $this -> giaban = 0;
         $this -> tonkho = 0;
         $this -> hinhanh = '';
         $this -> mota = '';
         $this -> trongluong = 0;
         $this -> trangthai = 0;
         $this -> luotban = 0;
         $this -> idMGG = 0;
     }
     function nhap(string $idVPP, string $tenVPP, int $idNCC, int $idLoai, float $gianhap, float $giaban, int $tonkho, string $hinhanh, string $mota, float $trongluong, int $trangthai, int $luotban,int $idMGG){
        $this -> idVPP = $idVPP;
        $this -> tenVPP = $tenVPP;
        $this -> idNCC = $idNCC;
        $this -> idLoai = $idLoai;
        $this -> gianhap = $gianhap;
        $this -> giaban = $giaban;
        $this -> tonkho = $tonkho;
        $this -> hinhanh = $hinhanh;
        $this -> mota = $mota;
        $this -> trongluong = $trongluong;
        $this -> trangthai = $trangthai;
        $this -> luotban = $luotban;
        $this -> idMGG = $idMGG;
     }
     function toArray() {
         return [
        'idVPP'=> $this -> idVPP, 
        'tenVPP'=> $this -> tenVPP,
        'idNCC'=> $this -> idNCC,
        'idLoai'=> $this -> idLoai,
        'gianhap'=> $this -> gianhap,
        'giaban'=> $this -> giaban,
        'tonkho'=> $this -> tonkho,
        'hinhanh'=> $this -> hinhanh,
        'mota'=> $this -> mota,
        'trongluong'=> $this -> trongluong,
        'trangthai'=> $this -> trangthai,
        'luotban'=> $this -> luotban,
        'idMGG'=> $this -> idMGG
         ];
     }
     public function getIdVPP(): string {
        return $this->idVPP;
    }
    public function setIdVPP(string $idVPP): void {
        $this->idVPP = $idVPP;
    }

    public function getTenVPP(): string {
        return $this->tenVPP;
    }
    public function setTenVPP(string $tenVPP): void {
        $this->tenVPP = $tenVPP;
    }

    public function getIdNCC(): int {
        return $this->idNCC;
    }
    public function setIdNCC(int $idNCC): void {
        $this->idNCC = $idNCC;
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

    public function getGiaban(): float {
        return $this->giaban;
    }
    public function setGiaban(float $giaban): void {
        $this->giaban = $giaban;
    }

    public function getTonkho(): int {
        return $this->tonkho;
    }
    public function setTonkho(int $tonkho): void {
        $this->tonkho = $tonkho;
    }

    public function getHinhanh(): string {
        return $this->hinhanh;
    }
    public function setHinhanh(string $hinhanh): void {
        $this->hinhanh = $hinhanh;
    }

    public function getMota(): string {
        return $this->mota;
    }
    public function setMota(string $mota): void {
        $this->mota = $mota;
    }

    public function getTrongluong(): float {
        return $this->trongluong;
    }
    public function setTrongluong(float $trongluong): void {
        $this->trongluong = $trongluong;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }

    public function getLuotban(): int {
        return $this->luotban;
    }
    public function setLuotban(int $luotban): void {
        $this->luotban = $luotban;
    }

    public function getIdMGG(): int {
        return $this->idMGG;
    }
    public function setIdMGG(int $idMGG): void {
        $this->idMGG = $idMGG;
    }
}
?>