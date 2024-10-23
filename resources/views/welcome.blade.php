@extends('layouts.landing')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Student Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">Trang cá nhân</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                        @endauth
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Đăng ký</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center" style="min-height: 80vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Nâng cao trải nghiệm học tập của bạn với Student Portal</h1>
                    <p>Student Portal là nền tảng trực tuyến toàn diện được thiết kế để đơn giản hóa và nâng cao trải nghiệm học tập của bạn. Truy cập dễ dàng vào điểm số, lịch học, bài tập, thông báo và nhiều hơn nữa - tất cả ở một nơi.</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Bắt đầu ngay hôm nay</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d577e494b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Sinh viên đang học tập" class="img-fluid"> 
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Tính năng nổi bật</h2> 
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-box text-center h-100 d-flex flex-column align-items-center justify-content-center p-4">
                        <i class="fas fa-graduation-cap fa-3x mb-3 text-primary"></i>
                        <h3>Quản lý học tập</h3>
                        <p>Theo dõi điểm số, lịch học, bài tập và tiến độ học tập của bạn một cách dễ dàng và thuận tiện.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box text-center h-100 d-flex flex-column align-items-center justify-content-center p-4">
                        <i class="fas fa-calendar-alt fa-3x mb-3 text-primary"></i>
                        <h3>Lên kế hoạch hiệu quả</h3>
                        <p>Xem lịch học, deadline bài tập, các sự kiện quan trọng và thông báo từ giảng viên để quản lý thời gian học tập hiệu quả.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box text-center h-100 d-flex flex-column align-items-center justify-content-center p-4">
                        <i class="fas fa-comments fa-3x mb-3 text-primary"></i>
                        <h3>Kết nối & Hợp tác</h3>
                        <p>Kết nối với giảng viên, bạn bè và tham gia các diễn đàn thảo luận để trao đổi học thuật, đặt câu hỏi và chia sẻ tài liệu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta py-5">
        <div class="container text-center">
            <h2>Bạn đã sẵn sàng để bắt đầu?</h2>
            <p>Tham gia Student Portal ngay hôm nay và trải nghiệm một cách học tập hiệu quả hơn.</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Đăng ký miễn phí</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 Student Portal. All rights reserved.</span>
        </div>
    </footer>
@endsection