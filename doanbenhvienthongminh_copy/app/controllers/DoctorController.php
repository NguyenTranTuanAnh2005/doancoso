<?php

/**
 * Controller xử lý các chức năng liên quan đến Bác sĩ
 */
class DoctorController
{
    /**
     * Action mặc định: Hiển thị danh sách bác sĩ
     */
    public function index()
    {
        $doctorModel = new DoctorModel();
        $doctors = $doctorModel->all();

        $viewFile = APP_DIR . '/views/doctors/index.php';
        
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Lỗi: Không tìm thấy file view {$viewFile}";
        }
    }

    /**
     * Action xem chi tiết sơ yếu lý lịch bác sĩ
     * @param int $id ID của bác sĩ cần xem
     */
    public function detail($id)
    {
        // 1. Khởi tạo Model
        $doctorModel = new DoctorModel();

        // 2. Lấy dữ liệu chi tiết của 1 bác sĩ
        // Hàm find() trong Model nên được viết để JOIN với bảng chuyên khoa
        $doctor = $doctorModel->find($id);

        // 3. Kiểm tra xem bác sĩ có tồn tại không
        if (!$doctor) {
            // Nếu không tìm thấy, điều hướng về trang danh sách hoặc báo lỗi
            header("Location: " . BASE_URL . "/doctor/index");
            exit();
        }

        // 4. Thiết lập tiêu đề trang (tùy chọn)
        $pageTitle = "Sơ yếu lý lịch: BS. " . $doctor['ho_ten'];

        // 5. Load file View hiển thị chi tiết (profile)
        $viewFile = APP_DIR . '/views/doctors/detail.php';
        
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Lỗi: Không tìm thấy file view {$viewFile}";
        }
    }
}