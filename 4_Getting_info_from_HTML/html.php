<?php include 'index.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign-In Area</title>
</head>
<body>
    <main>
        <form method="post" id="form">
            <fieldset>
                <legend> Form Data </legend>
                <div>
                    <label for="name">
                    Name:
                    <input type="text" id="name" name="name" placeholder="John Php">
                    </label>
                    <label for="age">
                        Age: 
                        <input type="text" id="age" name="age" placeholder="20">
                    </label>
                    <label for="email">
                        E-mail: 
                        <input type="text" id="email" name="email" placeholder="example@example.com">
                    </label>
                    <label for="password">
                        Password:
                        <input type="password" id="password" name="password" placeholder="**********">
                    </label>
                    <button type="submit" name="form" id="form"> Submit </button>
                </div>
            </fieldset>
        </form>
        <hr>
        <fieldset>
            <legend> Response </legend>
            <?php 
                echo "Nome: $name <br>";
                echo "Idade: $age <br>";
                echo "E-mail: $email <br>";
                echo "Senha: $password <br>";
            ?>
        </fieldset>
    </main>
</body>
</html>