<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('add')}}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="{{route('add')}}">Thêm mới</a>
                        <a class="nav-link" href="{{route('list')}}">Danh sách</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="p-5">
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="hidden" class="form-control" name="id" value="{{$people->id??''}}">
                <input type="text" class="form-control" name="name" value="{{$people->name??''}}">
            </div>
            <div class="mb-3">
                <select class="form-select" name="province">
                    <option selected>Chọn tỉnh/thành phố</option>
                    @foreach($provinces as $province)
                    <option value="{{$province->id}}" {{(($people->province_id??'')==$province->id)?'selected':''}}>
                        {{$province->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input class="form-control" type="file" name="avatar">
            </div>
            <div class="mb-3">
                <label for="birthday">Ngày sinh </label>
                <input type="date" name="birthday" value="{{($people->birthday)??''}}">
            </div>
            <div class="mb-3">
                <label for="gender">Giới tính</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="1"
                        {{(($people->gender??'')=='1')?'checked':''}}>
                    <label class="form-check-label">
                        Nam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="0"
                        {{(($people->gender??'')=='0')?'checked':''}}>
                    <label class="form-check-label">
                        Nữ
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
        </form>
    </main>



    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>

</html>