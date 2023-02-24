
<?php
session_start();

if ($_SESSION['auth'] === true) {
   header('Location: /index.php');
   exit;
}

include './functions.php';

echo <<<loginForm
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Аутентификация на сайте</title>
   <style>
      :root {
         font-size: 2em;
      }

      .form__input {
         font-size: .8em;
      }

      .form__submit-button {
         font-size: .8em;
      }
   </style>
</head>

<body>
   <fieldset class="authentication">
      <legend class="authentication__legend">Войти на сайт</legend>
      <form class="authentication__form form" action="users.php" method="post">
         <input class="authentication__login form__input" name="login" type="text" placeholder="Логин">
         <input class="authentication__password form__input" name="password" type="password" placeholder="Пароль">
         <input class="authentication__submit-button form__submit-button" name="submit" type="submit" value="Войти">
      </form>
   </fieldset>
</body>

</html>
loginForm;
?>