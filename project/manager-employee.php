<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="manager-employee-style.css">
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
                    <p><b>Thêm nhân viên</b></p>
                </div>
                <?php
                // đổi tên biến và tên biến submit
                if (isset($_POST["add-employee"])) {
                    $fullName = $_POST["fullName"];
                    $login_name = $_POST["login_name"];
                    $passWord = $_POST["passWord"];
                    $position = $_POST["position"];
                    $errors = array();
                    // đổi tên biến trong hàm empty
                    if (empty($fullName) or empty($login_name) or empty($passWord) or empty($position)) {
                        array_push($errors, "All fields empty");
                    }
                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        // đổi tên database và tên các biến truyền vào và thay đổi số lượng
                        require_once "database.php";
                        $sql = "INSERT INTO employee (fullName, login_name, passWord, position) VALUES (?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                        if ($prepareStmt) {
                            //thay đổi tham số truyền vào ở dòng dưới
                            mysqli_stmt_bind_param($stmt, "ssss", $fullName, $login_name, $passWord, $position);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Successfully</div>";
                            // thay đổi đường dẫn trong header
                            // header("Location: manager-employee.php");
                            // exit();
                        } else {
                            die("Something went wrong");
                        }
                    }
                }
                ?>
                <form action="manager-employee.php" method="post">
                    <ul>
                        <li>
                            <label class="limit-width" id="label-1" for="fullName">Họ tên</label>
                            <input type="text" name="fullName" id="nameCall">
                        </li>
                        <li>
                            <label class="limit-width" id="label-2" for="login_name">Tên đăng nhập</label>
                            <input type="text" name="login_name" id="login-acc">
                        </li>
                        <li>
                            <label class="limit-width" id="label-3" for="passWord">Mật khẩu</label>
                            <input type="text" name="passWord" id="passWord">
                        </li>
                        <li>
                            <label class="limit-width" id="label-4" for="position">Chức vụ</label>
                            <input type="text" name="position" id="login-acc">
                        </li>
                    </ul>
                    <div class="add-btn">
                        <!-- chỉ nhận phương thức post cho button tag không thể chứa a tag -->
                        <button type="submit" name="add-employee" class="add-button">Thêm</button>
                    </div>
                </form>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
            </div>
            <div class="hero__container_2">
                <div class="hero2-title">
                    <p><b>Danh sách nhân viên</b></p>
                </div>
                <?php
                require_once "database.php";
                $sql_tabel = "SELECT * FROM employee";
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
                        <th>Tên đăng nhập</th>
                        <th>Chức vụ</th>
                        <th>Action</th>
                        </tr>";
                    while ($row = mysqli_fetch_assoc($result_tabel)) {
                        // thay đổi tên biến truyền vào bảng
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['fullName'] . "</td>";
                        echo "<td>" . $row['login_name'] . "</td>";
                        echo "<td>" . $row['position'] . "</td>";
                        //đổi tên biến của chức xoá
                        echo "<td><button class='delete-button' onclick='deleteEmployee(" . $row['id'] . ")'>Delete</button></td>";
                        echo "</tr>";
                    }
                    echo "</tabel>";
                    // mysqli_close($conn);
                    ?>
                </div>
                <script>
                    //đổi tên hàm và tên biến truyền vào
                    function deleteEmployee(employeeId) {
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
                            xhr.open("GET", "delete-employee.php?id=" + employeeId, true);
                            xhr.send();
                        }
                    }
                </script>
            </div>
        </div>
    </main>
</body>

</html>