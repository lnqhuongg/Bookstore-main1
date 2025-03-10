<?php
class Catalog{
    private int $idTL;
    private string $tenTL;
    private int $trangthai;

    function __construct(string $tenTL ="", int $trangthai =0, int $idTL= 0){
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

    //static function isExist($idTL) {
    //}

    static function findByID($idTL) {
        $sql = 'SELECT * FROM theloai WHERE idTL=' .$idTL;
        $con = new Database();
        $req = $con->getOne($sql);
        if ($req!=null) {
            $catalog = new Catalog($req['tenTL'], $req['trangthai'], $req['idTL']);
            return $catalog;
        }
        return null;
    }

    public function add() {
        $con = new Database();
        $link = $con->getLink();
    
        // Câu lệnh SQL dùng Prepared Statement
        $sql = "INSERT INTO theloai (tenTL, trangthai, idTL) VALUES (?, ?, ?)";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL (d = double, s = string, i = integer)
        $stmt->bind_param("sii", $this->tenTL, $this->trangthai, $this->idTL);
    
        // Thực thi câu lệnh
        $result = $stmt->execute();
    
        // Kiểm tra thành công
        if ($result) {
            $this->idTL = $con->getLastInsertId();
        }
    
        // Đóng câu lệnh
        $stmt->close();
        return $result;
    }

    public function update() {
        $con = new Database();
        $link = $con->getLink();
    
        // Câu lệnh SQL dùng Prepared Statement
        $sql = "UPDATE theloai SET tenTL = ?, trangthai = ? WHERE idTL = ?";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL (d = double, s = string, i = integer)
        $stmt->bind_param("sii", $this->tenTL, $this->trangthai, $this->idTL);
    
        // Thực thi câu lệnh
        $result = $stmt->execute();
    
        // Đóng câu lệnh
        $stmt->close();
    
        return $result;
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
}
?>
