<?php
class Supplier{
    private int $idNCC;
    private string $tenNCC;
    private string $diachi;
    private string $email;
    private string $dienthoai;
    private int $trangthai;
    private int $loaiNCC;

    function __construct()
    {
        $this -> idNCC = 0;
        $this -> tenNCC = '';
        $this -> diachi = '';
        $this -> email = '';
        $this -> dienthoai = '';
        $this -> trangthai  = 0;
        $this -> loaiNCC = 0;
    }
    function nhap(int $idNCC,string $tenNCC, string $diachi, string $email,string $dienthoai, int $trangthai, int $loaiNCC){
        $this -> idNCC = $idNCC;
        $this -> tenNCC = $tenNCC;
        $this -> diachi = $diachi;
        $this -> email = $email;
        $this -> dienthoai = $dienthoai;
        $this -> trangthai = $trangthai;
        $this -> loaiNCC = $loaiNCC;
    }
    function toArray() {
        return [
        'idNCC'=>$this -> idNCC,
        'tenNCC'=>$this -> tenNCC,
        'diachi'=>$this -> diachi,
        'email'=>$this -> email,
        'dienthoai'=>$this -> dienthoai,
        'trangthai'=>$this -> trangthai,
        'loaiNCC'=>$this -> loaiNCC
        ];
    }
    public function getIdNCC(): int {
        return $this->idNCC;
    }
    public function setIdNCC(int $idNCC): void {
        $this->idNCC = $idNCC;
    }

    public function getTenNCC(): string {
        return $this->tenNCC;
    }
    public function setTenNCC(string $tenNCC): void {
        $this->tenNCC = $tenNCC;
    }

    public function getDiachi(): string {
        return $this->diachi;
    }
    public function setDiachi(string $diachi): void {
        $this->diachi = $diachi;
    }

    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getDienthoai(): string {
        return $this->dienthoai;
    }
    public function setDienthoai(string $dienthoai): void {
        $this->dienthoai = $dienthoai;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }

    public function getLoaiNCC(): int {
        return $this->loaiNCC;
    }
    public function setLoaiNCC(int $loaiNCC): void {
        $this->loaiNCC = $loaiNCC;
    }
}
?>