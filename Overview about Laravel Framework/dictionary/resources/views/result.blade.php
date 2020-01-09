<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
    <link rel="stylesheet" href="layouts/style.css">
</head>
<body>
    <div id="content">
    <h1>Dictionary Eng - Vie</h1>
    <form method="POST">
        <div id="data">
        @csrf
            <label>Key Word</label>
            <p> {{ $dict }} </p>
        <label> Result is : </label>
        <p> {{$result}} </p>
    </div>
    </form>
</div>
    <hr>

</body>
</html>
