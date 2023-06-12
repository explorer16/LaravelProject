<link type = "text/css" rel = "stylesheet" href = "{{ asset('css/header.css') }}">
<div class="nav-bar">
    <img src="{{ asset('static/images/F-logo.png') }}" class="logo" onclick="window.location.href = 'main_page'; " alt="{{ asset('static/files/default.docx') }}">
    <div class="nav-form">
        <form class="search-form" action="{{ route('book.list') }}" method="POST">
            <input type="hidden" name="method" value="searchLike">
            <input type="search" name="name" class="search_bar" placeholder="Search...">
            <input type="submit" value="Search" class="search-button">
        </form>
        <div class="reg_log-buttons">
            <button class="reg-button" onclick="window.location.href='{{ route('registration') }}';">Регистрация</button>
            <button class="log-button" onclick="window.location.href='{{ route('login') }}';">Вход</button>
        </div>
    </div>
</div>
