<?php
class Catalog{
    private int $idTL;
    private string $tenTL;
    private int $trangthai;

    function __construct(){
        $this->idTL= 0;
        $this->tenTL = '';
        $this->trangthai = 0;
    }
    function nhap(int $idTL,string $tenTL,int $trangthai){
        $this->idTL= $idTL;
        $this->tenTL = $tenTL;
        $this->trangthai = $trangthai;
    }
    function toArray() {
        return [
        'idTL'=> $this->idTL,
        'tenTL'=> $this->tenTL,
        'trangthai'=> $this->trangthai
        ];
    }
    public function getIdTL(): int {
        return $this->idTL;
    }
    public function setIdTL(int $idTL): void {
        $this->idTL = $idTL;
    }

    public function getTenTL(): string {
        return $this->tenTL;
    }
    public function setTenTL(string $tenTL): void {
        $this->tenTL = $tenTL;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}
?>