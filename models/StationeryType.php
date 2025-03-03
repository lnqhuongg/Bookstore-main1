<?php
class StationeryType {
    private int $idLoai;
    private string $tenLoai;
    private int $trangthai;

    // Constructor
    public function __construct() {
        $this->idLoai = 0;
        $this->tenLoai = '';
        $this->trangthai = 0;
    }

    // Phương thức nhập dữ liệu
    public function nhap(int $idLoai, string $tenLoai, int $trangthai) {
        $this->idLoai = $idLoai;
        $this->tenLoai = $tenLoai;
        $this->trangthai = $trangthai;
    }

    // Phương thức chuyển đổi đối tượng thành mảng
    public function toArray(): array {
        return [
            'idLoai' => $this->idLoai,
            'tenLoai' => $this->tenLoai,
            'trangthai' => $this->trangthai,
        ];
    }

    // Getter và Setter cho idLoai
    public function getIdLoai(): int {
        return $this->idLoai;
    }
    public function setIdLoai(int $idLoai): void {
        $this->idLoai = $idLoai;
    }

    // Getter và Setter cho tenLoai
    public function getTenLoai(): string {
        return $this->tenLoai;
    }
    public function setTenLoai(string $tenLoai): void {
        $this->tenLoai = $tenLoai;
    }

    // Getter và Setter cho trangthai
    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}

?>