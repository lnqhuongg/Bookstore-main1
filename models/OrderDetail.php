<?php
class OrderDetail{
    private int $idDH;
    private string $idSP;
    private int $soluong;
    private float $gialucdat;
    function __construct(){
        $this->idDH= 0;
        $this->idSP= '';
        $this->soluong = 0;
        $this->gialucdat = 0;
    }
    function nhap(int $idDH, string $idSP, int $soluong, float $gialucdat){
        $this->idDH= $idDH;
        $this->idSP=$idSP;
        $this->soluong = $soluong;
        $this->gialucdat = $gialucdat;
    }
    function toArray() {
        return [
        'idDH'=>$this->idDH,
        'idSP'=>$this->idSP,
        'soluong'=>$this->soluong,
        'gialucdat'=>$this->gialucdat
        ];
    }
    public function getIdDH(): int {
        return $this->idDH;
    }
    public function setIdDH(int $idDH): void {
        $this->idDH = $idDH;
    }

    public function getIdSP(): string {
        return $this->idSP;
    }
    public function setIdSP(string $idSP): void {
        $this->idSP = $idSP;
    }

    public function getSoluong(): int {
        return $this->soluong;
    }
    public function setSoluong(int $soluong): void {
        $this->soluong = $soluong;
    }

    public function getGialucdat(): float {
        return $this->gialucdat;
    }
    public function setGialucdat(float $gialucdat): void {
        $this->gialucdat = $gialucdat;
    }

}
?>