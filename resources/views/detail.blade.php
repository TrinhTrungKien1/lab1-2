<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <h5 class="card-header bg-danger"> Chi tiết</h5>
            <div class="card-body">
                <div class="mb-3">
                    <p class="card-header">Mã sách: {{ $detail->id }}</p>
                    <p class="card-header">Tiêu đề sách: {{ $detail->title }}</p>
                    <p class="card-header">Hình ảnh: </p>
                    <img src="{{ $detail->thumbnail }}" alt="" width="100px" height="100px">
                    <p class="card-header">Tác giả: {{ $detail->author }}</p>
                    <p class="card-header">Nhà xuất bản: {{ $detail->publisher }}</p>
                    <p class="card-header">Ngày xuất bản: {{ $detail->Publication }}</p>
                    <p class="card-header">Giá bán: {{ $detail->Price }}</p>
                    <p class="card-header">Số lượng: {{ $detail->Quantity }}</p>
                    <p class="card-header">Mã loại: {{ $detail->categoty_name }}</p>
                </div>
            </div>
            <div class="mb-3">
                <a class="btn btn-warning" href="{{ url('/') }}">Quay về</a>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
