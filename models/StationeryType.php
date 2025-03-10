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
        static function findByID($idLoai){
            $sql = 'SELECT * FROM loai_vpp WHERE idLoai='.$idLoai;
            $con = new Database();
            $req = $con->getOne($sql);
            if($req!=null){
                $stationeryType = new StationeryType($req['tenLoai'], $req['trangthai'], $req['idLoai']);
                return $stationeryType;
            }
            return null;
        }
        static function isExist($idLoai, $tenLoai) {
            $sql = 'SELECT idLoai FROM loai_vpp WHERE tenLoai = "'.$tenLoai.'"';
            if ($idLoai != null) $sql.=' AND idLoai !='.$idLoai;
            $con = new Database();
            return ($con->getOne($sql))!=null;
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
        function update(){
            // Check nếu đã tồn tại tên thể loại trùng khớp 
            if(!(StationeryType::isExist($this->idLoai, $this->tenLoai))){
                $sql = 'UPDATE loai_vpp
                    SET tenLoai = "'.$this->tenLoai.'", 
                    trangthai = '.$this->trangthai.'
                    WHERE idLoai = '.$this->idLoai;
                $con = new Database();
                $con->execute($sql);
                return true;
            }
            return false;
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