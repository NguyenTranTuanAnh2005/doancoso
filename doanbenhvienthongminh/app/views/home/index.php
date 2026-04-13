<?php require_once APP_DIR . '/views/layouts/header.php'; ?>

<!-- BANNER HERO CHÍNH -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 col-xl-9 animate-fade-in-up">
                <div class="hero-badge px-3 py-1 rounded-pill d-inline-block mb-3">
                    <span class="fs-6 fw-bold">🌟 Top #1 Dịch Vụ Y Tế Trực Tuyến</span>
                </div>
                
                <h1 class="hero-title mb-4">
                    Chăm sóc Sức khỏe <br>
                    <span class="text-primary">Toàn Diện & Tận Tâm</span>
                </h1>
                
                <p class="hero-desc mb-0">
                    Được thành lập vào năm 2008, <strong>Liên Hoa Medical</strong> tự hào là một trong những hệ thống y tế tư nhân hiện đại hàng đầu. 
                    Với quy mô hơn 300 giường bệnh tại trung tâm thành phố, chúng tôi phục vụ hàng ngàn lượt bệnh nhân mỗi ngày bằng sự tận tâm 
                    và công nghệ kỹ thuật số tiên tiến nhất. Chúng tôi cam kết mang đến dịch vụ chăm sóc sức khỏe chất lượng cao, chi phí hợp lý 
                    và an toàn tuyệt đối cho mọi gia đình.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- KHU VỰC THẺ TÍNH NĂNG (DỊCH VỤ CHÍNH) -->
<section class="container pb-5 position-relative" style="margin-top: -60px; z-index: 10;">
    <div class="row g-4 px-3 px-lg-0">
        
        <!-- Chuyên Khoa Đa Dạng -->
        <div class="col-md-4">
            <div class="feature-card px-4 py-5 text-center d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="icon-box icon-bg-primary mx-auto shadow-sm">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h4 class="fw-bolder mb-3 text-dark">Chuyên Khoa Đa Dạng</h4>
                    <p class="text-muted mb-4 px-2 lh-lg">Hệ thống khám chữa bệnh nội & khoa liên viện với hơn 50 chuyên khoa sâu, trang thiết bị tối tân chuẩn xác.</p>
                </div>
                <a href="/doanbenhvienthongminh/doctor" class="text-primary fw-bold text-decoration-none hover-link d-inline-block mx-auto position-relative">
                    Xem Chuyên Khoa & Bác Sĩ <i class="bi bi-arrow-right-short fs-5 vertical-align-middle border border-primary rounded-circle ms-1 p-1"></i>
                </a>
            </div>
        </div>

        <!-- Tầm Soát Sức Khoẻ -->
        <div class="col-md-4">
            <div class="feature-card px-4 py-5 text-center position-relative d-flex flex-column justify-content-between h-100 border-top border-4 border-info">
                <span class="position-absolute badge rounded-pill bg-danger shadow px-3 py-2 fw-bold" style="top: -15px; left: 50%; transform: translateX(-50%); letter-spacing: 0.5px;"><i class="bi bi-fire me-1"></i> HOT NHẤT</span>
                <div>
                    <div class="icon-box icon-bg-info mx-auto shadow-sm">
                        <i class="bi bi-prescription2"></i>
                    </div>
                    <h4 class="fw-bolder mb-3 text-dark">Tầm Soát Bệnh Lý</h4>
                    <p class="text-muted mb-4 px-2 lh-lg">Tương lai của y học dự phòng là bắt đầu từ hôm nay. Gói hệ đa dạng cho Nam, Nữ, Gia Đình và Doanh nghiệp.</p>
                </div>
                <a href="/doanbenhvienthongminh/package" class="text-info fw-bold text-decoration-none mt-auto hover-link mx-auto position-relative">
                    Tra Cứu Các Gói Khám <i class="bi bi-arrow-right-short fs-5 vertical-align-middle border border-info rounded-circle ms-1 p-1"></i>
                </a>
            </div>
        </div>

        <!-- Hỗ Trợ Trực Tuyến -->
        <div class="col-md-4">
            <div class="feature-card px-4 py-5 text-center d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="icon-box icon-bg-success mx-auto shadow-sm">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4 class="fw-bolder mb-3 text-dark">Cấp Cứu 24/7</h4>
                    <p class="text-muted mb-4 px-2 lh-lg">Dịch vụ xe cứu thương miễn phí nội thành. Hotline tư vấn triệu chứng và xử lý ngoại viện khẩn cấp hoạt động liên tục.</p>
                </div>
                <a href="/doanbenhvienthongminh/booking" class="text-success fw-bold text-decoration-none mt-auto hover-link mx-auto position-relative">
                    Liên Hệ Ngay Bây Giờ <i class="bi bi-arrow-right-short fs-5 vertical-align-middle border border-success rounded-circle ms-1 p-1"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- NHÚNG CSS MỚI CHO GIAO DIỆN DỊCH VỤ -->
<link rel="stylesheet" href="/doanbenhvienthongminh/assets/css/services.css">

<!-- DỊCH VỤ CỦA CHÚNG TÔI -->
<section class="container py-5 mt-4">
    <div class="text-center mb-5">
        <h2 class="fw-bolder text-dark">Dịch Vụ Của Chúng Tôi</h2>
        <p class="text-muted">Mang đến trải nghiệm chăm sóc sức khỏe toàn diện và tiện ích nhất.</p>
    </div>
    
    <div class="medical-service-grid">
        <!-- 1 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-blue-pastel">
                <i class="bi bi-clock-history"></i>
            </div>
            <h3 class="medical-service-title">Lịch sử đặt khám</h3>
        </a>
        
        <!-- 2 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-orange-pastel">
                <i class="bi bi-credit-card"></i>
            </div>
            <h3 class="medical-service-title">Thanh toán viện phí</h3>
        </a>
        
        <!-- 3 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-orange-pastel">
                <i class="bi bi-receipt"></i>
            </div>
            <h3 class="medical-service-title">Hóa đơn điện tử</h3>
        </a>
        
        <!-- 4 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-teal-pastel">
                <i class="bi bi-file-earmark-medical"></i>
            </div>
            <h3 class="medical-service-title">Hồ sơ sức khỏe</h3>
        </a>
        
        <!-- 5 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-teal-pastel">
                <i class="bi bi-clipboard2-pulse"></i>
            </div>
            <h3 class="medical-service-title">Kết quả cận lâm sàng</h3>
        </a>
        
        <!-- 6 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-pink-pastel">
                <i class="bi bi-hospital"></i>
            </div>
            <h3 class="medical-service-title">Đăng ký nhập viện</h3>
        </a>
        
        <!-- 7 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-green-pastel">
                <i class="bi bi-chat-dots"></i>
            </div>
            <h3 class="medical-service-title">Lắng nghe khách hàng</h3>
        </a>
        
        <!-- 8 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-green-pastel">
                <i class="bi bi-headset"></i>
            </div>
            <h3 class="medical-service-title">Hỗ trợ trực tuyến</h3>
        </a>
        
        <!-- 9 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-red-pastel">
                <i class="bi bi-house-heart"></i>
            </div>
            <h3 class="medical-service-title">Theo dõi sức khỏe<br>tại nhà</h3>
        </a>
        
        <!-- 10 -->
        <a href="#" class="medical-service-card">
            <div class="medical-icon-circle icon-teal-dark-pastel">
                <i class="bi bi-shield-check"></i>
            </div>
            <h3 class="medical-service-title">Tiêm chủng</h3>
        </a>
    </div>
</section>

<?php require_once APP_DIR . '/views/layouts/footer.php'; ?>
