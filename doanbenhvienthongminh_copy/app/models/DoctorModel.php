<?php

class DoctorModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    /**
     * Lấy danh sách tất cả bác sĩ (hiển thị ở trang danh sách)
     */
    public function all()
    {
        $query = "SELECT 
                    bac_si.id, 
                    bac_si.ho_ten, 
                    chuyen_khoa.ten_khoa as chuyen_khoa, 
                    bac_si.hinh_anh 
                  FROM bac_si 
                  LEFT JOIN chuyen_khoa ON bac_si.id_chuyen_khoa = chuyen_khoa.id";
                  
        $stmt = $this->conn->prepare($query);
        
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    /**
     * Lấy thông tin chi tiết của 1 bác sĩ theo ID (Sơ yếu lý lịch)
     */
    public function find($id)
    {
        // Lấy thêm trường tieu_su để làm sơ yếu lý lịch
        $query = "SELECT 
                    bac_si.*, 
                    chuyen_khoa.ten_khoa as chuyen_khoa,
                    chuyen_khoa.mo_ta as mo_ta_khoa
                  FROM bac_si 
                  LEFT JOIN chuyen_khoa ON bac_si.id_chuyen_khoa = chuyen_khoa.id 
                  WHERE bac_si.id = :id 
                  LIMIT 1";
                  
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về 1 dòng dữ liệu duy nhất
        } catch (PDOException $e) {
            return null;
        }
    }
}