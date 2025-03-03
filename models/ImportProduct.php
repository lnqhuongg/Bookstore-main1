<?php
class ImportProdcut{
    private int $idPN;
    private float $tongtien;
    private int $tongsoluong;
    private string $ngaytao;
    private int $trangthai;
    private string $ngaycapnhat;
    private int $idNV;
    private float $chietkhau;


    function __construct(){
        $this->idPN= 0;
        $this->tongtien = 0;
        $this->tongsoluong = 0;
        $this->ngaytao = '';
        $this->trangthai = 0;
        $this->ngaycapnhat = '';
        $this->idNV = 0;
        $this->chietkhau = 0;
    }

    function nhap(int $idPN, float $tongtien, int $tongsoluong, int $trangthai, string $ngaytao, string $ngaycapnhat, int $idNV, float $chietkhau){
        $this->idPN= $idPN;
        $this->tongtien = $tongtien;
        $this->tongsoluong = $tongsoluong;
        $this->ngaytao = $ngaytao;
        $this->trangthai = $trangthai;
        $this->ngaycapnhat = $ngaycapnhat;
        $this->idNV = $idNV;
        $this->chietkhau = $chietkhau;
    }
    
    function toArray() {
        return [
        'idPN' => $this->idPN,
        'tongtien' => $this->tongtien,
        'tongsoluong' => $this->tongsoluong,
        'ngaytao' => $this->ngaytao,
        'trangthai' => $this->trangthai,
        'ngaycapnhat' => $this->ngaycapnhat,
        'idNV' => $this->idNV,
        'chietkhau' => $this->chietkhau
        ];
    }
    
    public function getIdPN(): int {
        return $this->idPN;
    }
    public function setIdPN(int $idPN): void {
        $this->idPN = $idPN;
    }
    
    public function getTongtien(): float {
        return $this->tongtien;
    }
    public function setTongtien(float $tongtien): void {
        $this->tongtien = $tongtien;
    }
    
    public function getTongsoluong(): int {
        return $this->tongsoluong;
    }
    public function setTongsoluong(int $tongsoluong): void {
        $this->tongsoluong = $tongsoluong;
    }
    
    public function getNgaytao(): string {
        return $this->ngaytao;
    }
    public function setNgaytao(string $ngaytao): void {
        $this->ngaytao = $ngaytao;
    }
    
    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
    
    public function getNgaycapnhat(): string {
        return $this->ngaycapnhat;
    }
    public function setNgaycapnhat(string $ngaycapnhat): void {
        $this->ngaycapnhat = $ngaycapnhat;
    }
    
    public function getIdNV(): int {
        return $this->idNV;
    }
    public function setIdNV(int $idNV): void {
        $this->idNV = $idNV;
    }
    
    public function getChietkhau(): float {
        return $this->chietkhau;
    }
    public function setChietkhau(float $chietkhau): void {
        $this->chietkhau = $chietkhau;
    }
    
}
?>