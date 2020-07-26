<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link href="asset/CSS/Lib/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div class="row col-md-6 col-md-offset-3 d-flex align-self-center">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Thông tin đăng nhập</h1>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Tên đăng ký">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            <small id="password" class="form-text text-muted">Không bao giờ được cung cấp mật khẩu cho bất kì ai.</small>
                        </div>
                        <input type="submit" class="btn btn-primary center-block" />
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
