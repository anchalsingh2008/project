<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1>Welcome, <?= session()->get('username'); ?>!</h1>
    <a href="<?= base_url('logout'); ?>">Logout</a>

</body>
</html>
