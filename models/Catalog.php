<?php
class Catalog{
    private int $idTL;
    private string $tenTL;
    private int $trangthai;

    function __construct(string $tenTL="",int $trangthai=1, int $idTL=0){
        $this->idTL= $idTL;
        $this->tenTL = $tenTL;
        $this->trangthai = $trangthai;
    }
    function toArray() {
        return [
        'idTL'=> $this->idTL,
        'tenTL'=> $this->tenTL,
        'trangthai'=> $this->trangthai
        ];
    }
    static function getAll(){
        $list = [];
        $sql = 'SELECT * FROM theloai';
        $con = new Database();
        $req = $con->getAll($sql);

        foreach($req as $item){
            $catalog= new Catalog($item['tenTL'], $item['trangthai'],$item['idTL']);
            $list[] = $catalog;
        }
        return $list;
    }
    static function isExist($idTL, $tenTL) {
        $sql = 'SELECT idTL FROM theloai WHERE tenTL = "' . $tenTL . '"';
        if ($idTL != null) {
            $sql .= ' AND idTL != ' . $idTL;
        }
        $con = new Database();
        return ($con->getOne($sql)) != null;
    }

    function add() {
        if (!self::isExist($this->idTL, $this->tenTL)) {
            $sql = 'INSERT INTO theloai (tenTL, trangthai) VALUES ("'
                . $this->tenTL . '", '
                . $this->trangthai . ')';
            $con = new Database();
            $con->execute($sql);
            return true;
        }
        return false;
    }
    static function findByID($idTL){
        $sql = 'SELECT * FROM theloai WHERE idTL='.$idTL;
        $con = new Database();
        $req = $con->getOne($sql);
        if($req!=null){
            $catalog = new Catalog($req['tenTL'], $req['trangthai'],$req['idTL']);
            return $catalog;
        }
        return null;
    }

     // Sửa
     public function update() {
        // Kiểm tra trùng dữ liệu (loại trừ bản ghi hiện tại)
        if (Catalog::isExist($this->idTL, $this->tenTL)) {
            // Nếu có dữ liệu trùng, không cho cập nhật
            return false;
        }
    
        $con = new Database();
        $link = $con->getLink();
    
        $sql = "UPDATE theloai SET tenTL=?, trangthai = ? WHERE idTL = ?";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL: d = double, s = string, i = integer
        $stmt->bind_param("sii", $this->tenTL, $this->trangthai, $this->idTL);
    
        $result = $stmt->execute();
    
        $stmt->close();
    
        return $result;
    }
    public function getIdTL(): int {
        return $this->idTL;
    }
    public function setIdTL(int $idTL): void {
        $this->idTL = $idTL;
    }

    public function getTenTL(): string {
        return $this->tenTL;
    }
    public function setTenTL(string $tenTL): void {
        $this->tenTL = $tenTL;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}
?>