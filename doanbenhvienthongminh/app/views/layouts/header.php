<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hoa Medical - Tinh Hoa Y Tế</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Custom CSS Cao Cấp -->
    <link rel="stylesheet" href="/doanbenhvienthongminh/assets/css/style.css">
</head>
<body class="bg-light">
    
    <!-- Thanh điều hướng Navbar (Hiệu ứng kính mờ Glassmorphism) -->
    <nav class="navbar navbar-expand-lg navbar-glass sticky-top py-3">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand text-primary fw-bolder d-flex align-items-center gap-2" href="/doanbenhvienthongminh/">
                <i class="bi bi-flower1 fs-2" style="color: var(--primary-color)"></i> 
                <span class="fs-4">LIÊN HOA<span class="text-info"> MEDICAL</span></span>
            </a>
            
            <!-- Nút Toggle Mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <i class="bi bi-list fs-1 text-primary"></i>
            </button>
            
            <!-- Menu liên kết -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-semibold fs-6">
                    <li class="nav-item">
                        <a class="nav-link px-3 active text-primary" href="/doanbenhvienthongminh/">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Thông báo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/doanbenhvienthongminh/package">Gói Khám Thể Chất</a>
                    </li>
                </ul>
                
                <!-- Nút Call to action -->
                <div class="d-flex">
                    <a href="/doanbenhvienthongminh/booking" class="btn btn-booking-nav text-white shadow-sm rounded-pill px-4 py-2 d-flex align-items-center gap-2 text-decoration-none">
                        <i class="bi bi-calendar2-check-fill"></i> ĐẶT LỊCH NGAY
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Mở thẻ Layout chính -->
    <main class="main-layout flex-grow-1">
