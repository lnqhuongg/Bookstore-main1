<?php
class OrderStatus{
    private int $idTT;
    private string $tenTT;

    function __construct()
    {
        $this -> idTT = 0;
        $this -> tenTT = '';
    }
    function nhap(int $idTT, string $tenTT){
        $this->idTT = $idTT;
        $this->tenTT = $tenTT;
    }
    function toArray() {
        return [
        'idTT'=>$this->idTT,
        'tenTT'=>$this->tenTT
        ];
    }
    public function getIdTT(): int {
        return $this->idTT;
    }
    public function setIdTT(int $idTT): void {
        $this->idTT = $idTT;
    }

    public function getTenTT(): string {
        return $this->tenTT;
    }
    public function setTenTT(string $tenTT): void {
        $this->tenTT = $tenTT;
    }
}
?>