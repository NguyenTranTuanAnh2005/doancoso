<?php
require_once APP_DIR . '/models/NoticeModel.php';

class NoticeController {
    private $noticeModel;

    public function __construct($db) {
        // Khởi tạo Model với kết nối database PDO
        $this->noticeModel = new NoticeModel($db);
    }

    /**
     * Hiển thị danh sách tất cả thông báo (Trang Index)
     */
    public function index() {
        // Lấy tất cả thông báo từ Model
        $notices = $this->noticeModel->getAllNotices();
        
        // Tiêu đề trang
        $pageTitle = "Danh sách thông báo";

        // Truyền dữ liệu sang View
        // Đường dẫn này tùy thuộc vào cấu trúc thư mục của bạn
        require_once APP_DIR . '/views/notice/index.php';
    }

    /**
     * Xử lý đánh dấu thông báo đã đọc qua AJAX hoặc Redirect
     */
    public function read($id) {
        if ($this->noticeModel->markAsRead($id)) {
            // Sau khi đánh dấu xong, quay lại trang danh sách
            header("Location: " . BASE_URL . "/notice");
            exit();
        }
    }

    /**
     * Hiển thị form tạo thông báo (Dành cho Admin)
     */
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $type = $_POST['type'] ?? 'system';
            $recipient_id = $_POST['recipient_id'] ?? null;

            if ($this->noticeModel->create($title, $content, $type, $recipient_id)) {
                header("Location: " . BASE_URL . "/notice");
                exit();
            }
        }
        
        // Hiển thị view tạo mới (nếu có)
        require_once APP_DIR . '/views/notice/create.php';
    }

    /**
     * Xóa một thông báo
     */
    public function delete($id) {
        if ($this->noticeModel->delete($id)) {
            header("Location: " . BASE_URL . "/notice");
            exit();
        }
    }

    /**
     * API hoặc phương thức trả về số lượng thông báo chưa đọc (Dùng cho Header)
     */
    public function getUnreadCount() {
        $unreadNotices = $this->noticeModel->getUnreadNotices();
        return count($unreadNotices);
    }
}