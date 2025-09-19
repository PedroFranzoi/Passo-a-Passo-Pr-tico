<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Trocar perfil</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p> <a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Alterar perfil</a>
            <a href="logout.php"> <button class="btn">Sair</button> </a>
        </div>

    </div>
    <div class="container">
        <div class="box form-box">
            <header>Trocar perfil</header>
            <form action="">
                <div class="filed input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="filed input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="filed input">
                    <label for="idade">Idade</label>
                    <input type="number" name="idade" id="idade" autocomplete="off" required>
                </div>

                <div class="filed">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>