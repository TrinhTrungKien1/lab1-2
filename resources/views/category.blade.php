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
        <a class="btn btn-warning" href="{{ url('/') }}">Trang Chủ</a>
        <a href="{{ route('category.show', ['id' => 1]) }}" class="btn btn-primary">Truyện ngắn</a>
        <a href="{{ route('category.show', ['id' => 2]) }}" class="btn btn-danger">Truyện dài</a>
        <a href="{{ route('category.show', ['id' => 3]) }}" class="btn btn-warning">Trinh thám</a>
        <a href="{{ route('category.show', ['id' => 4]) }}" class="btn btn-secondary">Cổ tích</a>
        <a href="{{ route('category.show', ['id' => 5]) }}" class="btn btn-success">Văn học</a>

        <div class="card">
            <h5 class="card-header bg-success"> Thể loại: {{ $category->name }}</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>title</th>
                            <th>thumbnail</th>
                            <th>author</th>
                            <th>publisher</th>
                            <th>Publication</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category_id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $index => $bk)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $bk->title }}</td>
                                <td><img src="{{ $bk->thumbnail }}" alt="" width="50px" height="50px"></td>
                                <td>{{ $bk->author }}</td>
                                <td>{{ $bk->publisher }}</td>
                                <td>{{ $bk->Publication }}</td>
                                <td>{{ $bk->Price }}</td>
                                <td>{{ $bk->Quantity }}</td>
                                <td>{{ $bk->categoty_name }}</td>
                                <td><a href="{{ route('book.show', ['id' => $bk->id]) }}" class="btn btn-success">Quay
                                        về
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
