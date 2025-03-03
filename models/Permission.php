<?php
class Permission{
    private int $idNQ;
    private string $tenNQ;
    private string $trangthai;

    function __construct()
    {
        $this ->idNQ  = 0;
        $this ->tenNQ  = '';
        $this ->trangthai = '';
    }
    function nhap(int $idNQ, string $tenNQ, string $trangthai){
        $this ->idNQ  = $idNQ;
        $this ->tenNQ  = $tenNQ;
        $this ->trangthai = $trangthai;
    }
    function toArray() {
        return [
        'idNQ'=>$this ->idNQ,
        'tenNQ'=>$this ->tenNQ,
        'trangthai'=>$this ->trangthai
        ];
    }
    public function getIdNQ(): int {
        return $this->idNQ;
    }
    public function setIdNQ(int $idNQ): void {
        $this->idNQ = $idNQ;
    }

    public function getTenNQ(): string {
        return $this->tenNQ;
    }
    public function setTenNQ(string $tenNQ): void {
        $this->tenNQ = $tenNQ;
    }

    public function getTrangthai(): string {
        return $this->trangthai;
    }
    public function setTrangthai(string $trangthai): void {
        $this->trangthai = $trangthai;
    }

}
?>