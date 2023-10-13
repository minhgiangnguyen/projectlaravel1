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
                        <a class="nav-link " href="{{route('add')}}">Thêm mới</a>
                        <a class="nav-link active" href="{{route('list')}}">Danh sách</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="p-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tỉnh/Thành phố</th>
                    <th scope="col">Ảnh địa diện</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($peoples as $people)
                <tr>
                    <th scope="row">{{$people->id}}</th>
                    <td>{{$people->name}}</td>
                    <td>{{$people->provinces->name}}</td>
                    <td><img src="{{asset($people->avatar)}}" alt="" height="200"></td>
                    <td>{{$people->birthday}}</td>
                    <td>{{($people->gender == 1)?"Nam":"Nữ"}}</td>
                    <td><a href="{{route('edit',$people->id)}}">Sửa</a>
                        <a href="{{route('del',$people->id)}}"
                            onclick="return confirm('Bạn có muốn xoá không?')">Xoá</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $peoples->links() }}
    </main>



    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>

</html>