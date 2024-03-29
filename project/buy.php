<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buy-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.input-box-advance').on('input', function() {
                var soTienNhan = $(this).val(); // Lấy giá trị từ ô số tiền nhận
                // Gửi yêu cầu AJAX đến máy chủ
                $.ajax({
                    url: 'compare-value.php', // Đường dẫn tới file xử lý AJAX trên máy chủ
                    method: 'POST',
                    data: {
                        soTienNhan: soTienNhan
                    }, // Dữ liệu gửi đi (giá trị số tiền nhận)
                    success: function(data) {
                        // Cập nhật giá trị của ô đơn giá với kết quả trả về từ máy chủ
                        $('.input-box-advance[placeholder="Đơn giá"]').val(data);
                    }
                });
            });
        });
    </script>
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
            <section class="hero_container hero-container-0">
                <p>Bán Tổng</p>
            </section>
            <section class="hero_container hero-container-1">
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
                        <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595m7.173 3.876a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199m-8.999-.65a.5.5 0 1 1-.276-.96A7.6 7.6 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.6 6.6 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0" />
                    </svg>
                </div>
                <ul>
                    <li><b>Bán -
                            <?php
                            require_once "database.php";
                            $sql = "SELECT SUM(money) AS total FROM game";
                            $result = $conn->query($sql);
                            if ($result) {
                                $row = $result->fetch_assoc();
                                $total = $row['total'];
                                echo $total;
                            } else {
                                echo "Error: " . $conn->error;
                            }
                            ?>
                        </b></li>
                    <li><b>Tiền Nhận</b></li>
                    <li><b>Coin chuyển</b></li>
                    <li><b>Tiền nhận / Coin chuyển C1</b></li>
                    <li><b>Lợi Nhuận</b></li>
                </ul>
                <div class="text">
                    <p>Game Coin:</p>
                </div>
            </section>
            <section class="hero_container hero-container-2">
                <style>
                    .hero-container-2 {
                        height: 100%;
                    }
                </style>
                <ul>
                    <li><b>Banks:
                            <?php
                            require_once "database.php";
                            $sql = "SELECT SUM(money) AS total FROM bank";
                            $result = $conn->query($sql);
                            if ($result) {
                                $row = $result->fetch_assoc();
                                $total = $row['total'];
                                echo $total;
                            } else {
                                echo "Error: " . $conn->error;
                            }
                            ?>
                        </b></li>
                    <li>
                        <p><b>Danh sách chi tiết</b></p>
                        <?php
                        require_once "database.php";
                        $sql_tabel = "SELECT * FROM bank";
                        $result_tabel = mysqli_query($conn, $sql_tabel);
                        if (!$result_tabel) {
                            die("Query failed: " . mysqli_error($conn));
                        }
                        ?>
                        <style>
                            .tabel-container {
                                max-height: 400px;
                                overflow-x: auto;
                                width: 100%;
                            }

                            table {
                                width: 100%;
                                border-collapse: collapse;
                            }

                            th,
                            td {
                                padding: 10px;
                                text-align: center;
                            }

                            th {
                                background-color: white;
                            }

                            .delete-button {
                                color: red;
                                cursor: pointer;
                                text-decoration: none;
                            }
                        </style>
                        <div class="tabel-container">
                            <?php
                            echo "<table border='1'>";
                            echo "<tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Tiền</th>
                        </tr>";
                            while ($row = mysqli_fetch_assoc($result_tabel)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nameCall'] . "</td>";
                                echo "<td>" . $row['money'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            // mysqli_close($conn);
                            ?>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="hero_container hero-container-3">
                <div class="hero3-title">
                    <p><b>Thêm giao dịch</b></p>
                </div>
                <?php
                if (isset($_POST["add-tranfer"])) {
                    $userName = $_POST["userName"];
                    $bankName = $_POST["bankName"];
                    $coin = $_POST["coin"];
                    $donGia = $_POST["donGia"];
                    $coinTranfer = $_POST["coinTranfer"];
                    $noiDung = $_POST["noiDung"];
                    $errors = array();
                    if (empty($userName) or empty($bankName) or empty($coin) or empty($donGia) or empty($coinTranfer) or empty($noiDung)) {
                        array_push($errors, "All fields empty");
                    }
                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        require_once "database.php";
                        $sql = "INSERT INTO buy_tranfer (userName, bankName, coin, donGia, coinTranfer, noiDung) VALUES (?, ?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                        if ($prepareStmt) {
                            mysqli_stmt_bind_param($stmt, "ssiids", $userName, $bankName, $coin, $donGia, $coinTranfer, $noiDung);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Successfully</div>";
                            // header("Location: manager-bank.php");
                            // exit();
                        } else {
                            die("Something went wrong");
                        }
                    }
                }
                ?>
                <form action="buy.php" method="post">
                    <ul>
                        <li><input class="input-box" type="text" name="userName" placeholder="Username"></li>
                        <li>
                            <select name="bankName" id="dropdown">
                                <!-- <option value="option1">Mb Bank</option>
                                <option value="option1">VIB Bank</option>
                                <option value="option1">VP Bank</option> -->
                                <?php
                                require_once "database.php";
                                $sql = "SELECT nameCall FROM bank";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['nameCall'] . '">' . $row['nameCall'] . '</option>';
                                    }
                                } else {
                                    echo "Error fetching data from the database";
                                }
                                ?>
                            </select>
                        </li>
                        <li><input style="width:200px; height:35px" name="coin" class="input-box-advance" type="number" placeholder="Số coin"></li>
                        <li><input style="width:100; height: 35px;" name="donGia" class="input-box-advance" id="don_gia" type="text" placeholder="Đơn giá" readonly></li>
                        <li><input style="width: 100px; height:35px;" name="coinTranfer" class="input-box-radio" type="text" placeholder="Số coin chuyển" readonly></li>
                        <li style="margin-top: 8px;">Giao dịch với đại lý</li>
                        <li style="margin-top: 10px;">
                            <input class="check-box" type="checkbox" id="checkbox_don_gia" value="83" name="checkbox-tranfer" placeholder="Giao dịch với đại lý">
                        </li>
                    </ul>
                    <ul>
                        <li><input style="margin-top: 10px; width: 705px" name="noiDung" class="input-box" type="text" placeholder="Nội dung"></li>
                        <li style="margin-top: 10px;"><b>Phí GD</b></li>
                        <li style="margin-top: 10px;">
                            <label for="radio1">0%</label>
                            <input class="checkbox" type="radio" id="checkbox1" name="checkbox" value="0.00">
                            <label for="radio2">1%</label>
                            <input class="checkbox" type="radio" id="checkbox2" name="checkbox" value="0.01010101235">
                            <label for="radio3">2%</label>
                            <input class="checkbox" type="radio" id="checkbox3" name="checkbox" value="0.02040816049">
                        </li>
                        <li style="margin-top:10px"><button name="add-tranfer" type="submit">Thêm</button></li>
                    </ul>
                    <!-- đoạn script dưới đây là để làm việc tích vào các ô phí giao dịch nè -->
                    <script>
                        var radios = document.querySelectorAll('input[type=radio][name="checkbox"]');

                        radios.forEach(function(radio) {
                            radio.addEventListener('click', function() {
                                if (this.checked && this.waschecked) {
                                    this.checked = false;
                                }
                                this.waschecked = this.checked;
                            });
                        });
                    </script>
                    <!-- đoạn script dưới đây là để lấy giá trị trong radio button ra nhân với số tiền nhập vào -->
                    <script>
                        $(document).ready(function() {
                            var input = $('.input-box-advance[name="coin"]');
                            var radios = $('input[type=radio][name="checkbox"]');
                            var output = $('.input-box-radio');

                            function calculate() {
                                var soTienNhan = parseFloat(input.val());
                                var percentage = 0;

                                radios.each(function() {
                                    if (this.checked) {
                                        percentage = parseFloat(this.value);
                                    }
                                });

                                var result;
                                if (soTienNhan >= 1 && soTienNhan <= 9899999) {
                                    result = soTienNhan * (80 / 100);
                                } else if (soTienNhan >= 9900000 && soTienNhan <= 2000000000) {
                                    result = soTienNhan * (81 / 100);
                                }
                                result = result + (percentage * result);
                                // result += percentage;
                                output.val(result);
                            }

                            input.on('input', calculate);
                            radios.on('click', calculate);
                        });
                    </script>
                    <script>
                        document.getElementById('checkbox_don_gia').addEventListener('change', function() {
                            if (this.checked) {
                                document.getElementById('don_gia').value = this.value;
                            } else {
                                document.getElementById('don_gia').value = '';
                            }
                        });
                    </script>
                </form>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
            </section>
            <section class="hero_container hero-container-4">
                <style>
                    .hero-container-4 {
                        height: 400px;
                    }
                </style>
                <div class="hero4-title">
                    <p><b>Lịch sử giao dịch</b></p>
                </div>
                <form action="buy.php" method="get">
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
                <?php
                require_once "database.php";
                $sql_tabel = "SELECT * FROM buy_tranfer";
                $result_tabel = mysqli_query($conn, $sql_tabel);
                if (!$result_tabel) {
                    die("Query failed: " . mysqli_error($conn));
                }
                ?>
                <style>
                    .tabel-container {
                        max-height: 400px;
                        overflow-x: auto;
                        width: 100%;
                    }

                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    th,
                    td {
                        padding: 10px;
                        text-align: center;
                    }

                    th {
                        background-color: white;
                    }

                    .delete-button {
                        color: red;
                        cursor: pointer;
                        text-decoration: none;
                    }
                </style>
                <div class="tabel-container">
                    <?php
                    echo "<table border='1'>";
                    echo "<tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Tên ngân hàng</th>
                        <th>Số coin</th>
                        <th>Đơn giá</th>
                        <th>Số coin chuyển</th>
                        <th>Nội dung</th>
                        <th>Action</th>
                        </tr>";
                    while ($row = mysqli_fetch_assoc($result_tabel)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['userName'] . "</td>";
                        echo "<td>" . $row['bankName'] . "</td>";
                        echo "<td>" . $row['coin'] . "</td>";
                        echo "<td>" . $row['donGia'] . "</td>";
                        echo "<td>" . $row['coinTranfer'] . "</td>";
                        echo "<td>" . $row['noiDung'] . "</td>";
                        echo "<td>
                            <button class='delete-button' onclick='deleteTranfer(" . $row['id'] . ")'>Delete</button>
                            </td>";
                        echo "</tr>";
                    }
                    echo "</tabel>";
                    // mysqli_close($conn);
                    ?>
                </div>
                <script>
                    function deleteTranfer(tranferId) {
                        var confirmation = confirm("Are you sure ? ");
                        if (confirmation) {
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    location.reload();
                                }
                            };
                            xhr.open("GET", "delete-tranfer.php?id=" + tranferId, true);
                            xhr.send();
                        }
                    }
                </script>
            </section>
        </main>
    </div>
</body>

</html>