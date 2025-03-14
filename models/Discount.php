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

    // Kiểm tra trùng
    static function isExist($idMGG, $phantram, $ngaybatdau, $ngayketthuc) {
        $sql = 'SELECT idMGG FROM magiamgia WHERE phantram = ' . $phantram . ' AND ngaybatdau = "' . $ngaybatdau . '" AND ngayketthuc = "' . $ngayketthuc . '"';
        if ($idMGG != null) {
            $sql .= ' AND idMGG != ' . $idMGG;
        }
        $con = new Database();
        return ($con->getOne($sql)) != null;
    }
    
    
    // Thêm
    function add(){
        // Kiểm tra nếu đã tồn tại chương trình khuyến mãi trùng khớp phần trăm, ngày bắt đầu và ngày kết thúc
        if(!Discount::isExist($this->idMGG, $this->phantram, $this->ngaybatdau, $this->ngayketthuc)){
            $sql = 'INSERT INTO magiamgia (phantram, ngaybatdau, ngayketthuc, trangthai) VALUES ("' 
                   . $this->phantram . '", "' 
                   . $this->ngaybatdau . '", "' 
                   . $this->ngayketthuc . '", ' 
                   . $this->trangthai . ')';
            $con = new Database();
            // Thực hiện câu lệnh SQL - hàm execute được định nghĩa sẵn trong class Database
            $con->execute($sql);
            return true;
        }
        return false;
    }
    
    
    

    // Sửa
    public function update() {
        // Kiểm tra trùng dữ liệu (loại trừ bản ghi hiện tại)
        if (Discount::isExist($this->idMGG, $this->phantram, $this->ngaybatdau, $this->ngayketthuc)) {
            // Nếu có dữ liệu trùng, không cho cập nhật
            return false;
        }
    
        $con = new Database();
        $link = $con->getLink();
    
        $sql = "UPDATE magiamgia SET phantram = ?, ngaybatdau = ?, ngayketthuc = ?, trangthai = ? WHERE idMGG = ?";
    
        $stmt = $link->prepare($sql);
        if ($stmt === false) {
            die("Lỗi câu lệnh SQL: " . $link->error);
        }
    
        // Gán giá trị vào SQL: d = double, s = string, i = integer
        $stmt->bind_param("dssii", $this->phantram, $this->ngaybatdau, $this->ngayketthuc, $this->trangthai, $this->idMGG);
    
        $result = $stmt->execute();
    
        $stmt->close();
    
        return $result;
    }
    // Tìm kiếm theo mã giảm giá hoặc %
    public static function search($keyword) {
        $list = [];
        $sql = "SELECT * FROM magiamgia WHERE phantram LIKE ? OR idMGG = ?";
    
        $con = new Database();
        $link = $con->getLink();
        $stmt = $link->prepare($sql);
    
        if ($stmt === false) {
            die("Lỗi SQL: " . $link->error);
        }
    
        if (is_numeric($keyword)) {
            $param = "%" . intval($keyword) . "%";  // Chuyển thành số nguyên và tạo chuỗi tìm kiếm LIKE
            $idParam = intval($keyword);  // Chuyển thành số nguyên để tìm theo ID
            
            $stmt->bind_param("si", $param, $idParam); // "s" cho LIKE, "i" cho ID
        } else {
            // Nếu không phải số, không thực hiện truy vấn
            return [];
        }
        
        $stmt->execute();
    
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $Discount = new Discount($row['phantram'],$row['ngaybatdau'],$row['ngayketthuc'], $row['trangthai'], $row['idMGG']);
            $list[] = $Discount;
        }
    
        $stmt->close();
        return $list;
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