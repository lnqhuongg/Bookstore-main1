<?php
    class Author{
        private int $idTG;
        private string $tenTG;
        private string $email;
        private int $trangthai;

        function __construct(string $tenTG = "", string $email = "", int $trangthai = 0, $idTG = 0){
            $this->idTG = $idTG;
            $this->tenTG = $tenTG;
            $this->email = $email;
            $this->trangthai = $trangthai; 
        }

        static function getAll(){
            $list = [];
            $sql = 'SELECT * FROM tacgia';
            $con = new Database();
            $req = $con->getAll($sql);

            foreach($req as $item){
                $author = new self($item['tenTG'], $item['email'], $item['trangthai'], $item['idTG']);
                $list[] = $author;
            }
            return $list;
        }

        static function getAllActive(){
            $list = [];
            $sql = 'SELECT * FROM tacgia WHERE trangthai = 1';
            $con = new Database();
            $req = $con->getAll($sql);

            foreach($req as $item){
                $author = new self($item['tenTG'], $item['email'], $item['trangthai'], $item['idTG']);
                $list[] = $author;
            }
            return $list;
        }

        // hàm sử dụng cho việc kiểm tra trùng khớp 
        static function isExist($idTG, $email){
            $sql = 'SELECT idTG FROM tacgia WHERE email= "'.$email.'"';
            if($idTG!=null) $sql.=' AND idTG!='.$idTG;
            $con = new Database();
            return ($con->getOne($sql))!=null;
        }

        // hàm tìm tác giả theo idTG 
        static function findByID($idTG){
            $sql = 'SELECT * FROM tacgia WHERE idTG='.$idTG;
            $con = new Database();
            $req = $con->getOne($sql);
            if($req!=null){
                $author = new self($req['tenTG'], $req['email'], $req['trangthai'], $req['idTG']);
                return $author;
            }
            return null;
        }

        // thêm dữ liệu vào database
        function add(){
            // Check nếu đã tồn tại tác giả trùng khớp email tác giả 
            if(!(Author::isExist($this->idTG, $this->email))){
                $sql = 'INSERT INTO tacgia (tenTG, email, trangthai) VALUES ("'.$this->tenTG.'", "'.$this->email.'", '.$this->trangthai.')';
                $con = new Database();
                // Thực hiện câu lệnh sql trên - Hàm excecute được viết sẵn (trong class Database ở folder lib)
                $con->execute($sql);
                return true;
            }
            return false;
        }

        // lưu các dữ liệu thay đổi 
        function update(){
            // Check nếu đã tồn tại tác giả trùng khớp email tác giả 
            if(!(Author::isExist($this->idTG, $this->email))){
                $sql = 'UPDATE tacgia
                    SET tenTG = "'.$this->tenTG.'", 
                    email = "'.$this->email.'",
                    trangthai = '.$this->trangthai.'
                    WHERE idTG = '.$this->idTG;
                $con = new Database();
                $con->execute($sql);
                return true;
            }
            return false;
        }

        static function search($kyw){
            $sql = 'SELECT DISTINCT idTG, tenTG, email, trangthai
            FROM tacgia
            WHERE 1';
            if($kyw != NULL) $sql .= ' AND (idTG LIKE "%'.$kyw.'%" OR tenTG LIKE "%'.$kyw.'%" ORgm email LIKE "%'.$kyw.'%")';
            $list = [];
            $con = new Database();
            $req = $con->getAll($sql);
            foreach($req as $item){
                $author = new self($item['tenTG'], $item['email'], $item['trangthai'], $item['idTG']);
                $list[] = $author;
            }
            return $list;
        }
        
        function toArray() {
            return [
                'idTG' => $this->idTG,
                'tenTG' => $this->tenTG,
                'email' => $this->email,
                'trangthai' => $this->trangthai
            ];
        }

        function setIdTG($idTG){
            $this->idTG = $idTG;
        }

        function setTenTG($tenTG){
            $this->tenTG = $tenTG;
        }

        function setTrangthai($trangthai){
            $this->trangthai = $trangthai;
        }

        function getIdTG(){
            return $this->idTG;
        }

        function getTenTG(){
            return $this->tenTG;
        }

        function getTrangthai(){
            return $this->trangthai;
        }

        function getEmail(){
            return $this->email;
        }

    }
?>