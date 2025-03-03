<?php
    class Account{
        private int $idTK;
        private string $tenTK;
        private string $dienthoai;
        private string $email;
        private string $matkhau;
        private int $trangthai;
        private int $idNQ;

        function __construct(){
            $this->idTK=0;
            $this->tenTK = '';
            $this->dienthoai = '';
            $this->email = '';
            $this->matkhau = '';
            $this->trangthai = 0;
            $this->idNQ = 0;
        }

        function nhap(string $tenTK, string $dienthoai, string $email, string $matkhau = NULL, int $trangthai, $idNQ, int $idTK = 0){
            $this->idTK = $idTK;
            $this->tenTK = $tenTK;
            $this->dienthoai = $dienthoai;
            $this->email = $email;
            $this->matkhau = $matkhau;
            $this->trangthai = $trangthai;
            $this->idNQ = $idNQ;
        }

        static function getAll(){
            
        }

        static function isExist(int $idTK, string $email){
            
        }

        static function findByID(int $idTK){
            
        }

        static function search(string $kyw, int $idNQ, int $trangthai){
            
        }

        function add(){
            
        }

        function update(){
           
        }
        
        function toArray() {
            return [
                'idTK' => $this->idTK,
                'tenTK' => $this->tenTK,
                'matkhau' => $this->matkhau,
                'dienthoai' => $this->dienthoai,
                'email' => $this->email,
                'trangthai' => $this->trangthai,
                'idNQ' => $this->idNQ
            ];
        }

        // Của Híuuu - Hàm cập nhật thông tin và hàm cập nhật mật khẩu cho CustomerInfoController.php
        function updateAccountInfo() {
            if(!(self::isExist($this->idTK, $this->email))){
                $fields = [];

                if ($this->tenTK != '') {
                    $fields[] = "tenTK = '" .$this->tenTK. "'";
                }

                if ($this->email != '') {
                    $fields[] = "email = '" .$this->email. "'";
                }

                if ($this->dienthoai != '') {
                    $fields[] = "dienthoai = '" .$this->dienthoai ."'";
                }

                if (empty($fields)) {
                    return true; // Không có gì để cập nhật
                } else {
                    $sql = "UPDATE taikhoan SET " . implode(",", $fields) . " WHERE idTK = ". $this->idTK;
                    $con = new Database();
                        $con->execute($sql);
                        return true;
                }
            }
            return false;
        }

    function updateAccountPassword() {

    }

    // Hết phần của Híuuu rồi nè
    
        function setIdTK(int $idTK){
            $this->idTK = $idTK;
        }

        function setTenTK(string $tenTK){
            $this->tenTK = $tenTK;
        }

        function setDienthoai(string $dienthoai){
            $this->dienthoai = $dienthoai;
        }

        function setEmail(string $email){
            $this->email = $email;
        }

        function setMatkhau(string $matkhau){
            $this->matkhau = $matkhau;
        }

        function setTrangthai(int $trangthai){
            $this->trangthai = $trangthai;
        }

        function setIdNQ(int $idNQ){
            $this->idNQ = $idNQ;
        }

        function getIdTK(){
            return $this->idTK;
        }

        function getTenTK(){
            return $this->tenTK;
        }

        function getDienthoai(){
            return $this->dienthoai;
        }

        function getEmail(){
            return $this->email;
        }

        function getTrangthai(){
            return $this->trangthai;
        }

        function getMatkhau(){
            return $this->matkhau;
        }

        function getIdNQ(){
            return $this->idNQ;
        }
    }
?>