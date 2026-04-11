<?php require_once APP_DIR . '/views/layouts/header.php'; ?>

<!-- BANNER HERO CHÍNH -->
<section class="hero-section d-flex align-items-center pt-5 pb-5 p-lg-0">
    <div class="hero-bg-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
    </div>
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center justify-content-center">
            
            <!-- Nội dung văn bản trung tâm -->
            <div class="col-lg-10 col-xl-9 text-center py-5">
                <span class="badge hero-badge rounded-pill px-3 py-2 mb-4 fw-bold shadow-sm d-inline-flex align-items-center gap-2 animate-fade-in-up">
                    <i class="bi bi-stars"></i> Top #1 Dịch Vụ Y Tế Trực Tuyến
                </span>
                
                <h1 class="hero-title text-hospital-blue fw-black mb-4 lh-base animate-fade-in-up" style="animation-delay: 0.1s;">
                    Chăm sóc Sức khỏe Toàn Diện & Tận Tâm
                </h1>
                
                <p class="hero-desc text-hospital-blue-light mb-0 fw-normal animate-fade-in-up lh-lg mx-auto" style="animation-delay: 0.2s; max-width: 800px;">
                    Trải nghiệm hệ sinh thái dịch vụ y tế kỹ thuật số đỉnh cao. Đội ngũ chuyên gia y tế nước ngoài và trong nước luôn sẵn sàng đồng hành cùng bạn trên mọi hành trình.
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
