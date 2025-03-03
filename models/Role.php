<?php
class Role{
    private int $idCN;
    private string $tenCN;
    
    function __construct()
    {
        $this -> idCN = 0;
        $this -> tenCN = '';
    }
    function nhap(int $idCN, string $tenCN){
        $this->idCN = $idCN;
        $this->tenCN = $tenCN;
    }
    function toArray() {
        return [
        'idCN'=>$this->idCN,
        'tenCN'=>$this->tenCN
        ];
    }
    public function getIdCN(): int {
        return $this->idCN;
    }
    public function setIdCN(int $idCN): void {
        $this->idCN = $idCN;
    }

    public function getTenCN(): string {
        return $this->tenCN;
    }
    public function setTenCN(string $tenCN): void {
        $this->tenCN = $tenCN;
    }

}
?>