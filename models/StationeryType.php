<?php
class StationeryType {
    private int $idLoai;
    private string $tenLoai;
    private int $trangthai;

    // Constructor
    public function __construct(string $tenLoai = "", int $trangthai = 1,int $idLoai = 0) {
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

        // Lấy tất cả loại vpp
        static function getAll(){
            $list = [];
            $sql = 'SELECT * FROM loai_vpp';
            $con = new Database();
            $req = $con->getAll($sql);
    
            foreach($req as $item){
                $stationeryType= new StationeryType($item['tenLoai'], $item['trangthai'],$item['idLoai']);
                $list[] = $stationeryType;
            }
            return $list;
        }

        static function isExist($idLoai, $tenLoai) {
            $sql = 'SELECT idLoai FROM loai_vpp WHERE tenLoai = ?';
            if ($idLoai != null) {
                $sql .= ' AND idLoai != ?';
            }
        
            $con = new Database();
            $link = $con->getLink();
            $stmt = $link->prepare($sql);
        
            if ($idLoai != null) {
                $stmt->bind_param("si", $tenLoai, $idLoai);
            } else {
                $stmt->bind_param("s", $tenLoai);
            }
        
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->num_rows > 0;
        }
        
        public function add() {
            $con = new Database();
            $link = $con->getLink();
        
            // Kiểm tra tên loại đã tồn tại chưa
            if (self::isExist(null, $this->tenLoai)) {
                return false; // Ngăn không cho thêm nếu tên đã tồn tại
            }
        
            $sql = "INSERT INTO loai_vpp (tenLoai, trangthai) VALUES (?, ?)";
            $stmt = $link->prepare($sql);
        
            if ($stmt === false) {
                die("Lỗi SQL: " . $link->error);
            }
        
            $stmt->bind_param("si", $this->tenLoai, $this->trangthai);
            $result = $stmt->execute();
        
            if ($result) {
                $this->idLoai = $con->getLastInsertId();
            }
        
            $stmt->close();
            return $result;
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