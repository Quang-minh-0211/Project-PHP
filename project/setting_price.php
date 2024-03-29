<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="setting_price.css">
</head>

<body>
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
    </div>
    <main>
        <div class="content">
            <div class="hero__container_1">
                <div class="hero__title">
                    <p><b style="color: aqua;">Mua</b></p>
                </div>
                <?php
                // đổi tên biến và tên biến submit
                if (isset($_POST["add-value"])) {
                    $value_1 = $_POST["value_1"];
                    $value_2 = $_POST["value_2"];
                    $value_3 = $_POST["value_3"];
                    $errors = array();
                    // đổi tên biến trong hàm empty
                    if (empty($value_1) or empty($value_2) or empty($value_3)) {
                        array_push($errors, "All fields empty");
                    }
                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        // đổi tên database và tên các biến truyền vào và thay đổi số lượng
                        require_once "database.php";
                        $sql = "INSERT INTO buy_price (value_1, value_2, value_3) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                        if ($prepareStmt) {
                            mysqli_stmt_bind_param($stmt, "iii", $value_1, $value_2, $value_3);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Successfully</div>";
                            // thay đổi đường dẫn trong header
                            // header("Location: setting_price.php");
                            // exit();
                        } else {
                            die("Something went wrong");
                        }
                    }
                }
                ?>
                <!-- phương thức luôn là post và đổi action -->
                <form action="setting_price.php" method="post">
                    <ul>
                        <li>
                            <span>
                                <p>Từ</p>
                            </span>
                            <input type="text" name="value_1" id="value_1">
                        </li>
                        <li>
                            <span>
                                <p>Đến</p>
                                <input type="text" name="value_2" id="value_2">
                            </span>
                        </li>
                        <li>
                            <span>
                                <p>Giá trị</p>
                            </span>
                            <input type="text" name="value_3" id="value_3">
                        </li>
                        <li>
                            <div class="add-btn">
                                <button type="submit" name="add-value" class="add-button">Thêm</button>
                            </div>
                        </li>
                    </ul>
                </form>
                <!-- đoạn code script này là để chống resubmit after refresh page -->
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                <?php
                require_once "database.php";
                $sql_tabel = "SELECT * FROM buy_price";
                $result_tabel = mysqli_query($conn, $sql_tabel);
                if (!$result_tabel) {
                    die("Query failed: " . mysqli_error($conn));
                }
                ?>
                <style>
                    .delete-button {
                        height: 30px;
                        width: 60px;
                        border: none;
                        border-radius: 5px;
                        background-color: red;
                    }
                </style>
                <div class="display-data">
                    <?php
                    while ($row = mysqli_fetch_assoc($result_tabel)) {
                        echo "<ul>";
                        echo "<li><input type='text' placeholder='.' value='" . $row['value_1'] . "'></li>";
                        echo "<li><input type='text' placeholder='.' value='" . $row['value_2'] . "'></li>";
                        echo "<li><input type='text' placeholder='.' value='" . $row['value_3'] . "'></li>";
                        echo "<td><button class='delete-button' onclick='deleteBuy_Value(" . $row['id'] . ")'>Xoá</button></td>";
                        echo "</ul>";
                    }
                    ?>
                </div>
                <script>
                    //đổi tên hàm và tên biến truyền vào
                    function deleteBuy_Value(buy_value_Id) {
                        var confirmation = confirm("Are you sure ? ");
                        if (confirmation) {
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    location.reload();
                                }
                            };
                            // đổi tên đường dẫn khi thực hiện thành công 
                            // đổi tên biến id
                            xhr.open("GET", "delete-buy-value.php?id=" + buy_value_Id, true);
                            xhr.send();
                        }
                    }
                </script>
            </div>
            <div class="hero__container_2">
                <div class="hero2-title">
                    <p><b style="color: red;">Bán</b></p>
                </div>
                <?php
                // đổi tên biến và tên biến submit
                if (isset($_POST["add-value-2"])) {
                    $value_sell_1 = $_POST["value_sell_1"];
                    $value_sell_2 = $_POST["value_sell_2"];
                    $value_sell_3 = $_POST["value_sell_3"];
                    $errors = array();
                    // đổi tên biến trong hàm empty
                    if (empty($value_sell_1) or empty($value_sell_2) or empty($value_sell_3)) {
                        array_push($errors, "All fields empty");
                    }
                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        // đổi tên database và tên các biến truyền vào và thay đổi số lượng
                        require_once "database.php";
                        $sql = "INSERT INTO sell_price (value_sell_1, value_sell_2, value_sell_3) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                        if ($prepareStmt) {
                            mysqli_stmt_bind_param($stmt, "iii", $value_sell_1, $value_sell_2, $value_sell_3);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Successfully</div>";
                            // thay đổi đường dẫn trong header

                        } else {
                            die("Something went wrong");
                        }
                    }
                }
                ?>
                <!-- phương thức luôn là post và đổi action -->
                <form action="setting_price.php" method="post">
                    <ul>
                        <li>
                            <span>
                                <p>Từ</p>
                            </span>
                            <input type="text" name="value_sell_1" id="value_1">
                        </li>
                        <li>
                            <span>
                                <p>Đến</p>
                                <input type="text" name="value_sell_2" id="value_2">
                            </span>
                        </li>
                        <li>
                            <span>
                                <p>Giá trị</p>
                            </span>
                            <input type="text" name="value_sell_3" id="value_3">
                        </li>
                        <li>
                            <div class="add-btn">
                                <button type="submit" name="add-value-2" class="add-button">Thêm</button>
                            </div>
                        </li>
                    </ul>
                </form>
                <!-- cái đoạn script này để chống resubmit form after refesh page -->
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                <?php
                require_once "database.php";
                $sql_tabel_2 = "SELECT * FROM sell_price";
                $result_tabel_2 = mysqli_query($conn, $sql_tabel_2);
                if (!$result_tabel_2) {
                    die("Query failed: " . mysqli_error($conn));
                }
                ?>
                <style>
                    .delete-button {
                        height: 30px;
                        width: 60px;
                        border: none;
                        border-radius: 5px;
                        background-color: red;
                    }
                </style>
                <div class="display-data">
                    <?php
                    while ($row_2 = mysqli_fetch_assoc($result_tabel_2)) {
                        echo "<ul>";
                        echo "<li><input type='text' placeholder='.' value='" . $row_2['value_sell_1'] . "'></li>";
                        echo "<li><input type='text' placeholder='.' value='" . $row_2['value_sell_2'] . "'></li>";
                        echo "<li><input type='text' placeholder='.' value='" . $row_2['value_sell_3'] . "'></li>";
                        echo "<td><button class='delete-button' onclick='deleteSell_Value(" . $row_2['id'] . ")'>Xoá</button></td>";
                        echo "</ul>";
                    }
                    ?>
                </div>
                <script>
                    //đổi tên hàm và tên biến truyền vào
                    function deleteSell_Value(sell_value_Id) {
                        var confirmation = confirm("Are you sure ? ");
                        if (confirmation) {
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    location.reload();
                                }
                            };
                            // đổi tên đường dẫn khi thực hiện thành công 
                            // đổi tên biến id
                            xhr.open("GET", "delete-sell-value.php?id=" + sell_value_Id, true);
                            xhr.send();
                        }
                    }
                </script>
            </div>
        </div>
    </main>
</body>

</html>