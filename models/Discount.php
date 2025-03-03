<?php
class Discount{
    private int $idMGG;
    private float $phantram;
    private string $ngaybatdau;
    private string $ngayketthuc;
    private int $trangthai;

    function __construct(){
        $this->idMGG= 0;
        $this->phantram = 0;
        $this->ngaybatdau = '';
        $this->ngayketthuc = '';
        $this->trangthai = 0;
    }

    function nhap(int $idMGG, float $phantram, string $ngaybatdau,string $ngayketthuc,int $trangthai){
        $this->idMGG= $idMGG;
        $this->phantram = $phantram;
        $this->ngaybatdau = $ngaybatdau;
        $this->ngayketthuc = $ngayketthuc;
        $this->trangthai = $trangthai;
    }
    
    function toArray() {
        return [
        'idMGG' => $this->idMGG,
        'phantram' => $this->phantram,
        'ngaybatdau' => $this->ngaybatdau,
        'ngayketthuc' => $this->ngayketthuc,
        'trangthai' => $this->trangthai
        ];
    }
    
    public function getIdMGG(): int {
        return $this->idMGG;
    }
    public function setIdMGG(int $idMGG): void {
        $this->idMGG = $idMGG;
    }

    public function getPhantram(): float {
        return $this->phantram;
    }
    public function setPhantram(float $phantram): void {
        $this->phantram = $phantram;
    }

    public function getNgaybatdau(): string {
        return $this->ngaybatdau;
    }
    public function setNgaybatdau(string $ngaybatdau): void {
        $this->ngaybatdau = $ngaybatdau;
    }

    public function getNgayketthuc(): string {
        return $this->ngayketthuc;
    }
    public function setNgayketthuc(string $ngayketthuc): void {
        $this->ngayketthuc = $ngayketthuc;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}
?>