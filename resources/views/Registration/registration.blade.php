<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="asset/CSS/Lib/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Thông tin đăng ký</h1>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" id="txtName" name="name" placeholder="Họ và tên...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="txtPassword" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="password2">Xác nhận</label>
                            <input type="password" class="form-control" id="txtPassword2" name="confirm_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="Category">Loại tài khoản</label>
                            <select class="form-control" name="category" id="txtCategory">Loại tài khoản
								<option name="category"  value="3">Sinh viên</option>
								<option name="category"  value="2">Nhà trường</option>
								<option name="category"  value="1">Công ty</option>
							</select>
                        </div>
                        <div>
                            <button class="btn btn-info">Gửi</button>
                            <button class="btn btn-danger">Canle</button>
                        </div>
                        @csrf
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; Đại Học Công Nghệ - Đại Học Quốc Gia Hà Nội.</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
