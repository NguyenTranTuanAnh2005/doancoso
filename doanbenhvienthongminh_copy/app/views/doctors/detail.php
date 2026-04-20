<?php require_once APP_DIR . '/views/layouts/header.php'; ?>

<div class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="<?= BASE_URL ?>/doctor" class="text-decoration-none text-muted transition-all hover-primary">
                    <i class="bi bi-arrow-left me-2"></i> Quay lại danh sách bác sĩ
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden card-cv">
                <div class="row g-0">
                    <div class="col-md-4 text-white p-5 text-center sidebar-cv">
                        <div class="position-relative d-inline-block mb-4">
                            <img src="<?= htmlspecialchars($doctor['hinh_anh'] ?: 'https://cdn-icons-png.flaticon.com/512/3774/3774299.png') ?>" 
                                 class="rounded-circle img-thumbnail shadow-sm" 
                                 style="width: 180px; height: 180px; object-fit: cover; border: 4px solid rgba(255,255,255,0.2);">
                        </div>
                        
                        <h2 class="fw-bold mb-1 fs-3"><?= htmlspecialchars($doctor['ho_ten']) ?></h2>
                        <p class="badge bg-light text-primary fs-6 px-3 py-2 rounded-pill mb-4 shadow-sm">
                            Chuyên khoa <?= htmlspecialchars($doctor['chuyen_khoa']) ?>
                        </p>
                        
                        <div class="text-start mt-4 small opacity-75 info-list">
                            <p class="mb-2"><i class="bi bi-card-heading me-2"></i> Mã BS: LH-<?= str_pad($doctor['id'], 4, '0', STR_PAD_LEFT) ?></p>
                            <p class="mb-2"><i class="bi bi-building me-2"></i> Bệnh Viện Liên Hoa</p>
                            <p class="mb-0"><i class="bi bi-geo-alt me-2"></i> TP. Hồ Chí Minh, VN</p>
                        </div>
                    </div>

                    <div class="col-md-8 p-5 bg-white position-relative card-body-cv">
                        <div class="position-absolute top-0 end-0 p-4 opacity-10 d-none d-sm-block" 
     style="transform: translateX(-50px);"> 
     <div class="text-end">
        <i class="bi bi-flower1 fs-1 text-primary"></i>
    </div>
</div>

                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h3 class="fw-bold text-uppercase m-0 header-title" style="color: #0d3b4b; letter-spacing: 1px;">Sơ yếu lý lịch chuyên gia</h3>
                        </div>

                        <hr class="mb-5 opacity-50">

                        <div class="content-section mb-5">
                            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-person-badge me-2"></i> TÓM TẮT TIỂU SỬ</h5>
                            <p class="text-muted lh-lg" style="text-align: justify; font-size: 1.05rem;">
                                <?= nl2br(htmlspecialchars($doctor['tieu_su'] ?: 'Thông tin tiểu sử đang được cập nhật...')) ?>
                            </p>
                        </div>

                        <div class="content-section mb-5">
                            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-activity me-2"></i> LĨNH VỰC CHUYÊN SÂU</h5>
                            <div class="p-4 rounded-3 bg-light border-start border-4 border-primary shadow-sm">
                                <p class="mb-1 fw-bold text-dark fs-5"><?= htmlspecialchars($doctor['chuyen_khoa']) ?></p>
                                <p class="mb-0 text-muted"><?= htmlspecialchars($doctor['mo_ta_khoa'] ?: 'Chẩn đoán và điều trị các bệnh lý chuyên khoa kỹ thuật cao tại hệ thống Liên Hoa.') ?></p>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 pt-4 border-top">
                            <a href="<?= BASE_URL ?>/booking?doctor_id=<?= $doctor['id'] ?>" class="btn btn-primary btn-lg rounded-pill px-5 shadow btn-booking-cv">
                                <i class="bi bi-calendar-check me-2"></i> ĐẶT LỊCH HẸN NGAY
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="text-center text-muted mt-4 small italic">
                <i>* Thông tin trên được xác nhận và đảm bảo bởi Hội đồng chuyên môn Bệnh viện Liên Hoa.</i>
            </p>
        </div>
    </div>
</div>

<?php require_once APP_DIR . '/views/layouts/footer.php'; ?>

<style>
    /* Tổng thể Card CV */
    .card-cv {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    /* Sidebar màu xanh đặc trưng */
    .sidebar-cv {
        background: linear-gradient(180deg, #0d5c75 0%, #0d3b4b 100%);
    }

    /* Tiêu đề mục có dấu gạch đứng bên trái */
    h5 {
        border-left: 4px solid #0d5c75;
        padding-left: 15px;
        margin-left: -19px;
        transition: color 0.3s ease;
    }

    /* Nút quay lại */
    .hover-primary:hover {
        color: #0d5c75 !important;
        transform: translateX(-5px);
    }

    /* Hiệu ứng nút đặt lịch */
    .btn-booking-cv {
        background-color: #0d5c75;
        border: none;
        transition: all 0.3s ease;
    }
    .btn-booking-cv:hover {
        background-color: #0a4a5e;
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(13, 92, 117, 0.3) !important;
    }

    /* Tương thích Mobile */
    @media (max-width: 768px) {
        h5 {
            margin-left: 0;
        }
    }
</style>