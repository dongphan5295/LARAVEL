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
        <label>Key Word (Eng/Viet) </label>
            <input type="text" name="dicteng" placeholder="Enter word to search ">
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
            <button type="submit">Translate</button>
        </div>
    </form>
</div>
</body>
</html>
