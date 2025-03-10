<?php
class Banner{
    private int $idBN;
    private string $mota;
    private string $hinhanh;
    private int $trangthai;

    function __construct( string $mota ="", string $hinhanh="", int $trangthai=0, int $idBN = 0){
        $this->idBN= $idBN;
        $this->mota = $mota;
        $this->hinhanh = $hinhanh;
        $this->trangthai = $trangthai;
    }

    function toArray() {
        return [
        'idBN'=> $this->idBN,
        'mota'=> $this->mota,
        'hinhanh'=> $this->hinhanh,
        'trangthai'=> $this->trangthai
        ];
    }

    // Lấy tất cả banner
    static function getAll(){
        $list = [];
        $sql = 'SELECT * FROM banner';
        $con = new Database();
        $req = $con->getAll($sql);

        foreach($req as $item){
            $banner= new Banner( $item['mota'], $item['hinhanh'], $item['trangthai'],$item['idBN']);
            $list[] = $banner;
        }
        return $list;
    }

       // Thêm
       public function add(){
            $con = new Database();
            $link = $con->getLink();
        
            // Câu lệnh SQL dùng Prepared Statement
            $sql = "INSERT INTO banner ( mota, hinhanh,trangthai,idBN) VALUES (?, ?, ?,?)";
        
            $stmt = $link->prepare($sql);
            if ($stmt === false) {
                die("Lỗi câu lệnh SQL: " . $link->error);
            }
        
            // Gán giá trị vào SQL (d = double, s = string, i = integer)
            $stmt->bind_param("ssii",   $this->mota, $this->hinhanh,$this->trangthai, $this->idBN);
        
            // Thực thi câu lệnh
            $result = $stmt->execute();
        
            // Kiểm tra thành công
            if ($result) {
                $this->idBN = $con->getLastInsertId();
            }
        
            // Đóng câu lệnh
            $stmt->close();
        
            return $result;
        }
    
    // Tìm theo ID
    // Tìm discount theo idMGG 
    static function findByID($idBN){
        $sql = 'SELECT * FROM banner WHERE idBN='.$idBN;
        $con = new Database();
        $req = $con->getOne($sql);
        if($req!=null){
            $banner = new Banner($req['mota'],$req['hinhanh'], $req['trangthai'],$req['idBN']);
            return $banner;
        }
        return null;
    }
    // Chỉnh sửa
    public function update() {
        $con = new Database();
        $link = $con->getLink();
    
        // Câu lệnh SQL chỉ cập nhật mô tả và trạng thái
        $sql = "UPDATE banner SET mota = ?, trangthai = ? WHERE idBN = ?";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL (s = string, i = integer)
        $stmt->bind_param("sii", $this->mota, $this->trangthai, $this->idBN);
    
        // Thực thi câu lệnh
        $result = $stmt->execute();
    
        // Đóng câu lệnh
        $stmt->close();
    
        return $result;
    }
    


    public function getIdBN(): int {
        return $this->idBN;
    }
    public function setIdBN(int $idBN) {
        $this->idBN = $idBN;
    }

    public function getMota(){
        return $this->mota;
    }
    public function setMota(string $mota){
        $this->mota = $mota;
    }

    public function getHinhanh(): string {
        return $this->hinhanh;
    }
    public function setHinhanh(string $hinhanh): void {
        $this->hinhanh = $hinhanh;
    }
    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}
?>