<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="in-and-out.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>
    <script>
        // Khởi tạo Flatpickr
        flatpickr("#myDatepicker", {
            dateFormat: "Y-m-d", // Định dạng ngày tháng
            // Các tùy chọn khác nếu cần
        });
    </script>
    <div class="container">
        <nav class="nav-bar">
            <ul>
                <li><button><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                        </svg><a href="overview.php">Tổng quan</a></button></li>
                <li><button><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                        </svg><a href="buy.php">Mua</a></button></li>
                <li><button><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                        </svg><a href="sell.php">Bán</a></button></li>
                <li><button><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                            <path d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                        </svg><a href="in-and-out.php">Thu chi</a></button></li>
            </ul>
            <div>
                <button class="nav-btn">
                    <a href="">Admin</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                    <ul class="dropdown">
                        <li><a href="manager-bank.php">Quản lý ngân hàng</a></li>
                        <li><a href="manager-employee.php">Quản lý nhân viên</a></li>
                        <li><a href="manager-game.php">Quản lý game</a></li>
                        <li><a href="manager-permission.php">Quản lý quyền</a></li>
                        <li><a href="setting_price.php">Cài đặt</a></li>
                    </ul>
                </button>
            </div>
        </nav>
        <main>
            <section class="hero_container hero-container-2">
                <ul>
                    <li><b>Banks</b></li>
                    <li>Tổng:</li>
                </ul>
            </section>
            <section class="hero_container hero-container-4">
                <div class="hero4-title">
                    <p><b>Lịch sử thu chi</b></p>
                    <div class="title-btn">
                        <button id="title-btn-1"><a href="">Thêm giao dịch</a></button>
                        <button id="title-btn-2"><a href="">Chuyển tiền</a></button>
                    </div>
                </div>
                <form action="sell.php" method="get">
                    <ul>
                        <li>
                            <span class="input-group-text">
                                <p>Từ</p>
                            </span>
                            <input class="input-box-2" type="text" id="myDatepicker" placeholder="Chọn ngày tháng">
                        </li>
                        <li>
                            <span class="input-group-text">
                                <p>Đến</p>
                            </span>
                            <input class="input-box-2" type="text" id="myDatepicker" placeholder="Chọn ngày tháng">
                        </li>
                        <li>
                            <span class="input-group-text">
                                <p>Nhân Viên</p>
                            </span>
                            <select class="check-box-2" name="select-nv" id="select-nv">
                                <option value="option0">Tất cả</option>
                                <option value="option1">Quản lý</option>
                                <option value="option2">Sale</option>
                            </select>
                        </li>
                        <li>
                            <span class="input-group-text">
                                <p>Hiện giao dịch đã xoá</p>
                            </span>
                            <select class="check-box-2" name="select-display" id="select-display">
                                <option value="option0">Không</option>
                                <option value="option1">Có</option>
                            </select>
                        </li>
                        <li style="margin-top:10px"><button><a style="text-decoration:none" href="">Tìm</a></button></li>
                    </ul>
                </form>
            </section>
        </main>
    </div>
</body>

</html>