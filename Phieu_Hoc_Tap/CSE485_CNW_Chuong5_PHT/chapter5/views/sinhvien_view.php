<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHT Chương 5 - Mô hình MVC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            width: fit-content;
        }

        input {
            padding: 8px;
            margin: 5px 0;
        }

        button {
            padding: 8px 15px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <h2>Thêm Sinh Viên Mới (Kiến trúc MVC)</h2>
    <!-- Form gửi dữ liệu về index.php (Controller) -->
    <form action="index.php" method="POST">
        <label>Tên sinh viên:</label><br>
        <input type="text" name="ten_sinh_vien" required placeholder="Nhập tên..."><br>

        <label>Email:</label><br>
        <input type="email" name="email" required placeholder="Nhập email..."><br>

        <button type="submit">Thêm</button>
    </form>

    <h2>Danh Sách Sinh Viên (Kiến trúc MVC)</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên Sinh Viên</th>
            <th>Email</th>
            <th>Ngày Tạo</th>
        </tr>
        <?php
        // Biến $danh_sach_sv được truyền từ Controller sang
        // Chúng ta dùng foreach để duyệt mảng
        if (isset($danh_sach_sv) && is_array($danh_sach_sv)) {
            foreach ($danh_sach_sv as $sv) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($sv['id']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['ten_sinh_vien']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['email']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['ngay_tao']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Không có dữ liệu</td></tr>";
        }
        ?>
    </table>

</body>

</html>