<?php
class ImportProductDetail {
    private int $idPN;
    private string $idSP;
    private int $soluong;

    // Constructor
    public function __construct() {
        $this->idPN = 0;
        $this->idSP = '';
        $this->soluong = 0;
    }

    // Phương thức nhập dữ liệu
    public function nhap(int $idPN, string $idSP, int $soluong) {
        $this->idPN = $idPN;
        $this->idSP = $idSP;
        $this->soluong = $soluong;
    }

    // Phương thức chuyển đổi đối tượng thành mảng
    public function toArray(): array {
        return [
            'idPN' => $this->idPN,
            'idSP' => $this->idSP,
            'soluong' => $this->soluong,
        ];
    }

    // Getter và Setter cho idPN
    public function getIdPN(): int {
        return $this->idPN;
    }
    public function setIdPN(int $idPN): void {
        $this->idPN = $idPN;
    }

    // Getter và Setter cho idSP
    public function getIdSP(): string {
        return $this->idSP;
    }
    public function setIdSP(string $idSP): void {
        $this->idSP = $idSP;
    }

    // Getter và Setter cho soluong
    public function getSoluong(): int {
        return $this->soluong;
    }
    public function setSoluong(int $soluong): void {
        $this->soluong = $soluong;
    }
}

?>