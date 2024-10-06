<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<h1>Usuários</h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li><?php echo htmlspecialchars($user->name); ?></li>
    <?php endforeach; ?>
</ul>

<a href="home">Ir para Home</a>
</body>
</html>
