<?php
class Discount{
    private int $idMGG;
    private float $phantram;
    private string $ngaybatdau;
    private string $ngayketthuc;
    private int $trangthai;

    // Hàm khởi tạo
    function __construct(float $phantram = 0, string $ngaybatdau ="",string $ngayketthuc ="", int $trangthai = 0, int $idMGG = 0){
        $this->idMGG= $idMGG;
        $this->phantram = $phantram;
        $this->ngaybatdau = $ngaybatdau;
        $this->ngayketthuc = $ngayketthuc;
        $this->trangthai = $trangthai;
    }
    
    // Chuyển thành mảng
    function toArray() {
        return [
        'idMGG' => $this->idMGG,
        'phantram' => $this->phantram,
        'ngaybatdau' => $this->ngaybatdau,
        'ngayketthuc' => $this->ngayketthuc,
        'trangthai' => $this->trangthai
        ];
    }
    // Lấy tất cả mã giảm giá
    static function getAll(){
        $list = [];
        $sql = 'SELECT * FROM magiamgia';
        $con = new Database();
        $req = $con->getAll($sql);

        foreach($req as $item){
            $discount= new Discount($item['phantram'], $item['ngaybatdau'], $item['ngayketthuc'], $item['trangthai'],$item['idMGG']);
            $list[] = $discount;
        }
        return $list;
    }

    // Tìm discount theo idMGG 
    static function findByID($idMGG){
        $sql = 'SELECT * FROM magiamgia WHERE idMGG='.$idMGG;
        $con = new Database();
        $req = $con->getOne($sql);
        if($req!=null){
            $discount = new Discount($req['phantram'],$req['ngaybatdau'], $req['ngayketthuc'], $req['trangthai'],$req['idMGG']);
            return $discount;
        }
        return null;
    }

    // Tìm discount theo phantram
    // static function findByPercent($phantram){
    //     $sql = 'SELECT * FROM magiamgia WHERE phantram='.$phantram;
    //     $con = new Database();
    //     $req = $con->getOne($sql);
    //     if($req!=null){
    //         $discount = new Discount();
    //         $discount->nhap($req['idMGG'],$req['ngaybatdau'], $req['ngayketthuc'], $req['trangthai'], $req['phantram']);
    //         return $discount;
    //     }
    //     return null;
    // }

    // Thêm
    public function add(){
        $con = new Database();
        $link = $con->getLink();
    
        // Câu lệnh SQL dùng Prepared Statement
        $sql = "INSERT INTO magiamgia (phantram, ngaybatdau, ngayketthuc, trangthai) VALUES (?, ?, ?, ?)";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL (d = double, s = string, i = integer)
        $stmt->bind_param("dssi", $this->phantram, $this->ngaybatdau, $this->ngayketthuc, $this->trangthai);
    
        // Thực thi câu lệnh
        $result = $stmt->execute();
    
        // Kiểm tra thành công
        if ($result) {
            $this->idMGG = $con->getLastInsertId();
        }
    
        // Đóng câu lệnh
        $stmt->close();
    
        return $result;
    }
    
    

    // Sửa
    public function update() {
        $con = new Database();
        $link = $con->getLink();
    
        // Câu lệnh SQL dùng Prepared Statement
        $sql = "UPDATE magiamgia SET phantram = ?, ngaybatdau = ?, ngayketthuc = ?, trangthai = ? WHERE idMGG = ?";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL (d = double, s = string, i = integer)
        $stmt->bind_param("dssii", $this->phantram, $this->ngaybatdau, $this->ngayketthuc, $this->trangthai, $this->idMGG);
    
        // Thực thi câu lệnh
        $result = $stmt->execute();
    
        // Đóng câu lệnh
        $stmt->close();
    
        return $result;
    }

    
    
    // Xóa



    public function getIdMGG(): int {
        return $this->idMGG;
    }
    public function setIdMGG(int $idMGG): void {
        $this->idMGG = $idMGG;
    }

    public function getPhantram(): float {
        return $this->phantram;
    }
    public function setPhantram(float $phantram): void {
        $this->phantram = $phantram;
    }

    public function getNgaybatdau(): string {
        return $this->ngaybatdau;
    }
    public function setNgaybatdau(string $ngaybatdau): void {
        $this->ngaybatdau = $ngaybatdau;
    }

    public function getNgayketthuc(): string {
        return $this->ngayketthuc;
    }
    public function setNgayketthuc(string $ngayketthuc): void {
        $this->ngayketthuc = $ngayketthuc;
    }

    public function getTrangthai(): int {
        return $this->trangthai;
    }
    public function setTrangthai(int $trangthai): void {
        $this->trangthai = $trangthai;
    }
}
?>