<!-- Page Header Start -->
@extends('client.layouts.app')
@section('title', 'Trang cá nhân')

<link rel="stylesheet" type="text/css" href="css/profile.css">
<!-- ... your existing HTML ... -->

@section('content')
    <div style="display: flex">
        @php
            $user = \App\Models\User::where('username', session('username'))->first();
        @endphp
        <nav class="nav">
            <!-- ... your existing code ... -->
            <div class="separator"></div>
            <a href="{{ url('/profile') }}" id="profile-link">Hồ Sơ</a>
            <a href="{{ url('/password') }}" id="password-link">Đổi Mật Khẩu</a>
            <a href="{{ url('/view') }}" id="view-link">Đơn mua</a>
            <a href="{{ url('/settings') }}" id="settings-link">Cài Đặt Thông Báo</a>
        </nav>

        <section>
            @yield('content1')
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all links in the nav
            var navLinks = document.querySelectorAll('.nav a');
    
            // Function to set the active link and save it to localStorage
            function setActiveLink(linkId) {
                navLinks.forEach(function(link) {
                    link.classList.remove('active');
                });
                var activeLink = document.getElementById(linkId);
                activeLink.classList.add('active');
                localStorage.setItem('activeLink', linkId);
            }
    
            // Add click event listener to each link
            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    setActiveLink(this.id);
                });
            });
    
            // On page load, check if there's a saved active link in localStorage
            var savedActiveLink = localStorage.getItem('activeLink');
            if (savedActiveLink) {
                setActiveLink(savedActiveLink);
            }
        });
    </script>
    
@endsection


