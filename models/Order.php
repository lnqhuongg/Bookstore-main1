<?php
class Order{
    private int $idDH;
    private float $tongtien;
    private int $idTT;
    private float $phiship;
    private string $ngaytao;
    private string $ngaycapnhat;
    private int $idTK;
    private int $idNV;
    private string $phuongthucTT;
    private string $diachi;

    function __construct(){
        $this->idDH = 0 ;
        $this->tongtien = 0;
        $this->idTT = 0;
        $this->phiship = 0;
        $this->ngaytao = '';
        $this->ngaycapnhat = '';
        $this->idTK = 0 ;
        $this->idNV = 0 ;
        $this->phuongthucTT = '';
        $this->diachi = '';
       
    }
    function nhap(int $idDH, float $tongtien, int $idTT, float $phiship, string $ngaytao, string $ngaycapnhat, int $idTK, int $idNV ,string $phuongthucTT,string $diachi){
        $this->idDH = $idDH ;
        $this->tongtien = $tongtien;
        $this->idTT = $idTT;
        $this->phiship = $phiship;
        $this->ngaytao = $ngaytao;
        $this->ngaycapnhat = $ngaycapnhat;
        $this->idTK = $idTK ;
        $this->idNV = $idNV ;
        $this->phuongthucTT = $phuongthucTT;
        $this->diachi = $diachi;
    }
    function toArray() {
        return [
        'idDH' => $this->idDH,
        'tongtien' => $this->tongtien,
        'idTT' => $this->idTT,
        'phiship' => $this->phiship,
        'ngaytao' => $this->ngaytao,
        'ngaycapnhat' => $this->ngaycapnhat,
        'idTK' => $this->idTK,
        'idNV' => $this->idNV,
        'phuongthucTT' => $this->phuongthucTT,
        'diachi' => $this->diachi
        ];
    }
    public function getIdDH(): int {
        return $this->idDH;
    }
    public function setIdDH(int $idDH): void {
        $this->idDH = $idDH;
    }

    public function getTongtien(): float {
        return $this->tongtien;
    }
    public function setTongtien(float $tongtien): void {
        $this->tongtien = $tongtien;
    }

    public function getIdTT(): int {
        return $this->idTT;
    }
    public function setIdTT(int $idTT): void {
        $this->idTT = $idTT;
    }

    public function getPhiship(): float {
        return $this->phiship;
    }
    public function setPhiship(float $phiship): void {
        $this->phiship = $phiship;
    }

    public function getNgaytao(): string {
        return $this->ngaytao;
    }
    public function setNgaytao(string $ngaytao): void {
        $this->ngaytao = $ngaytao;
    }

    public function getNgaycapnhat(): string {
        return $this->ngaycapnhat;
    }
    public function setNgaycapnhat(string $ngaycapnhat): void {
        $this->ngaycapnhat = $ngaycapnhat;
    }

    public function getIdTK(): int {
        return $this->idTK;
    }
    public function setIdTK(int $idTK): void {
        $this->idTK = $idTK;
    }

    public function getIdNV(): int {
        return $this->idNV;
    }
    public function setIdNV(int $idNV): void {
        $this->idNV = $idNV;
    }

    public function getPhuongthucTT(): string {
        return $this->phuongthucTT;
    }
    public function setPhuongthucTT(string $phuongthucTT): void {
        $this->phuongthucTT = $phuongthucTT;
    }

    public function getDiachi(): string {
        return $this->diachi;
    }
    public function setDiachi(string $diachi): void {
        $this->diachi = $diachi;
    }
}
?>