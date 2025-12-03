<?php
// === FILE MODEL: CHỈ CHỨA CÁC HÀM TƯƠNG TÁC CSDL ===

// TODO 1: Viết 1 hàm tên là getAllSinhVien()
// Hàm này nhận tham số $pdo, thực thi SELECT, trả về mảng kết quả
function getAllSinhVien($pdo)
{
    // Sắp xếp ID giảm dần để thấy sinh viên mới nhất
    $sql = "SELECT * FROM sinhvien ORDER BY id DESC";
    $stmt = $pdo->query($sql);

    // Trả về tất cả các dòng dữ liệu dưới dạng mảng liên hợp
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// TODO 2: Viết 1 hàm tên là addSinhVien()
// Hàm này nhận 3 tham số: $pdo, $ten, $email
function addSinhVien($pdo, $ten, $email)
{
    // Viết câu lệnh SQL INSERT với Prepared Statement
    $sql = "INSERT INTO sinhvien (ten_sinh_vien, email) VALUES (?, ?)";

    // Chuẩn bị và thực thi
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$ten, $email]);
}
