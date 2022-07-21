<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>MOTIVATER</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="ms-3 me-3">MOTIVATER</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">ホーム</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="center">
        <h1 class="mt-5 mb-2">MOTIVATER</h1>
        <p class="mt-4 mb-1">Mission</p>
        <h3 class="m-auto select-mission col-md-4 mb-3 py-1">ガタイをよくする！</h3>

        <div class="row col-md-9 m-auto mt-3">
            <div class="Target col-md-4">
                <p class="mb-1">Target</p>
                <a href="" class="btn btn-sm btn-primary">追加</a>
                    <ol class="mission text-start px-1">
                        <a href=""><li>ダンベル200回</li></a>
                        <a href=""><li>腹筋100回</li></a>
                        <a href=""><li>背筋50回</li></a>
                        <a href=""><li>ストレッチ（足）</li></a>
                        <a href=""><li>プロテインを飲む</li></a>
                    </ol>
            </div>
            <div class="Graph col-md-8">
                <p class="mb-1">Graph</p>
            </div>
        </div>
    </div>
</body>
</html>
