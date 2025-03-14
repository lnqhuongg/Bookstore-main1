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
        function add(){
            // Check nếu đã tồn tại tác giả trùng khớp email tác giả 
            if(!(StationeryType::isExist($this->idLoai, $this->tenLoai))){
                $sql = 'INSERT INTO loai_vpp (tenLoai, trangthai) VALUES ("'.$this->tenLoai.'",'.$this->trangthai.')';
                $con = new Database();
                // Thực hiện câu lệnh sql trên - Hàm excecute được viết sẵn (trong class Database ở folder lib)
                $con->execute($sql);
                return true;
            }
            return false;
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
        public static function search($keyword) {
            $list = [];
            $sql = "SELECT * FROM loai_vpp WHERE tenLoai LIKE ? OR idLoai = ?";
            
            $con = new Database();
            $link = $con->getLink();
            $stmt = $link->prepare($sql);
            
            if ($stmt === false) {
                die("Lỗi SQL: " . $link->error);
            }
            
            $param = "%" . $keyword . "%"; // Tìm kiếm gần đúng theo tên
            $idParam = is_numeric($keyword) ? intval($keyword) : 0; // Nếu keyword là số, tìm theo ID
            
            $stmt->bind_param("si", $param, $idParam);
            $stmt->execute();
            
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $stationeryType = new StationeryType($row['tenLoai'], $row['trangthai'], $row['idLoai']);
                $list[] = $stationeryType;
            }
            
            $stmt->close();
            return $list;
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