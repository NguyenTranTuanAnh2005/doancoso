<?php require_once APP_DIR . '/views/layouts/header.php'; ?>

<div class="container my-4">
    <h1 class="text-center text-primary fw-bold mb-4">Thông Báo & Tin Tức</h1>
    <p class="text-center text-muted mb-5">Cập nhật thông tin quan trọng và các thông báo cá nhân của bạn.</p>
    
    <div class="row g-4">
        <?php if (!empty($notices)): ?>
            <?php foreach ($notices as $notice): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden p-3 position-relative <?= $notice['is_read'] ? 'opacity-75' : 'border-start border-primary border-4' ?>" style="transition: all 0.3s ease; background: <?= $notice['is_read'] ? '#f8f9fa' : '#ffffff' ?>;">
                        
                        <?php if (!$notice['is_read']): ?>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">Chưa đọc</span>
                            </span>
                        <?php endif; ?>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <?php
                                    // Phân loại Badge dựa trên biến $type trong Model của bạn
                                    $badgeClass = 'bg-primary';
                                    $typeName = 'Hệ thống';
                                    switch($notice['type']) {
                                        case 'promotion': $badgeClass = 'bg-danger'; $typeName = 'Khuyến mãi'; break;
                                        case 'appointment': $badgeClass = 'bg-warning text-dark'; $typeName = 'Lịch hẹn'; break;
                                        case 'news': $badgeClass = 'bg-success'; $typeName = 'Tin tức'; break;
                                    }
                                ?>
                                <span class="badge <?= $badgeClass ?> rounded-pill px-3 py-2" style="font-size: 0.75rem;">
                                    <?= $typeName ?>
                                </span>
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i> 
                                    <?= date('d/m/Y', strtotime($notice['created_at'])) ?>
                                </small>
                            </div>

                            <h4 class="fw-bold mb-3 <?= $notice['is_read'] ? 'text-secondary' : 'text-dark' ?>" style="line-height: 1.4; font-size: 1.25rem;">
                                <?= htmlspecialchars($notice['title']) ?>
                            </h4>
                            
                            <p class="text-muted mb-4" style="font-size: 0.9rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                <?= htmlspecialchars($notice['content']) ?>
                            </p>
                            
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <a href="<?= BASE_URL ?>/notice/read/<?= $notice['id'] ?>" class="btn <?= $notice['is_read'] ? 'btn-outline-secondary' : 'btn-outline-primary' ?> btn-sm rounded-pill px-3">
                                    <?= $notice['is_read'] ? 'Xem lại' : 'Đọc ngay' ?>
                                </a>
                                
                                <?php if ($notice['is_read']): ?>
                                    <span class="text-success small"><i class="bi bi-check2-all"></i> Đã xem</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center text-muted p-5 bg-white shadow-sm rounded-4">
                <i class="bi bi-bell-slash fs-1 d-block mb-3 opacity-25"></i>
                <h4 class="fw-normal">Bạn chưa có thông báo nào.</h4>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    /* Đảm bảo các card có chiều cao bằng nhau */
    .row { display: flex; flex-wrap: wrap; }
    .col-md-6 { display: flex; flex-direction: column; }
</style>

<?php require_once APP_DIR . '/views/layouts/footer.php'; ?>