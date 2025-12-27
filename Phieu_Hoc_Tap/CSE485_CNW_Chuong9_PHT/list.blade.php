<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên - CSE485</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="text-primary">Quản lý Sinh Viên (Laravel Security)</h2>
            <p>Thực hành Chương 9: Chống CSRF và XSS</p>
        </div>

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Thêm Sinh Viên Mới</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.store') }}" method="POST">

                    {{-- TODO 3: Thêm directive @csrf ngay bên dưới thẻ form để bảo vệ chống CSRF --}}
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="ten" class="form-label">Tên sinh viên:</label>
                            <input type="text" name="ten_sinh_vien" class="form-control" id="ten" required placeholder="Nhập tên sinh viên...">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Nhập email...">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm Sinh Viên</button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Danh sách hiện có</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tên sinh viên</th>
                            <th>Email</th>
                            <th>Ngày tạo</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Duyệt qua danh sách sinh viên được truyền từ Controller --}}
                        @foreach($danhSachSV as $sv)
                        <tr>
                            <td>{{ $sv->id }}</td>

                            {{-- TODO 4: Dùng {{ }} để in tên sinh viên.
                            Laravel sẽ tự động chuyển các ký tự đặc biệt thành thực thể HTML (Escape),
                            giúp ngăn chặn mã độc Javascript (XSS) chạy. --}}
                            <td>{{ $sv->ten_sinh_vien }}</td>

                            <td>{{ $sv->email }}</td>
                            <td>{{ $sv->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-4 mb-5">
            <small class="text-muted">© 2025 Khoa CNTT - Trường Đại học Thủy Lợi</small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>