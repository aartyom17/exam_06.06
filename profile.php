<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha-384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="cat.jpg" alt="logo" class="me-2">
                <span class="text-light">History</span>
            </a>
            <?php if(isset($_COOKIE['User'])): ?>
                <form action="/logout.php" method="POST" class="d-flex">
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            <?php endif; ?>
        </div>
    </nav>
    
    <div class="container mt-5 text-center">
        <h1>Привет, <?php echo htmlspecialchars($_COOKIE['User'] ?? 'Гость'); ?></h1>
        <p class="mt-3">Добро пожаловать в ваш профиль!</p>
    </div>

</body>

</html>

<?php
    if(!isset($_COOKIE['User'])) {
        header('Location: /login.php');
        exit();
    }
?>
