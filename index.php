<?php
session_start();

if (!$_SESSION) {
   header('Location: php/login.php');
   exit;
}

echo <<<page
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <title>БыстроНовости</title>
   <link rel="stylesheet" href="styles/style.css">
</head>

<body>
   <header>
      <h1>Добро пожаловать, $_SESSION[login]!</h1>
      <a href="php/exit.php" role="button">Выход</a>
   </header>

   <section class="news">
      <!-- Первая новость -->
      <article>
         <a href="#">
            <h2>Массаж горчими камнями!</h2>
         </a>
         <picture>
            <img src="images/1.jpg" alt="Массаж горячими камнями" width="768" height="300">
            <figcaption>Вариант массажа
            </figcaption>
         </picture>
         <p>Этот вид массажа является одним из самых древних и эффективных способов воздействия на человеческий организм.
         Он был известен еще в Древнем Египте, а в наше время пользуется большой популярностью, ведь процедура помогает снять стресс, усталость, напряжение, избавиться от болей в мышцах, улучшить работу внутренних органов и многое другое.
         Принцип действия
         Горячие камни воздействуют на организм человека с помощью тепла, которое они выделяют.</p>
      </article>

      <!-- Вторая новость -->
      <article>
         <a href="#">
            <h2>Грязывые ванны</h2>
         </a>
         <picture>
            <img src="images/2.jpg" alt="Женщина принимает грязевую ванну" width="768" height="300">
            <figcaption>Вариант грязевых ванн</a>
            </figcaption>
         </picture>
         <p>Грязевые ванны - это один из самых эффективных и доступных способов борьбы с целлюлитом.
         Грязь не только питает кожу, но и выводит токсины, укрепляет иммунитет.
         В состав грязи входят микроэлементы, которые положительно влияют на кровообращение и обмен веществ.
         Процедуры помогут вам избавиться от лишнего веса, выровнять кожный рельеф, улучшить внешний вид кожи.
         Для проведения процедуры вам понадобится грязевая ванна.
         Приобрести ее вы можете в магазинах товаров для здоровья, они реализуют и натуральные глины.</p>
      </article>

      <!-- Третья новость -->
      <article>
         <a href="#">
            <h2>Кедровая бочка</h2>
         </a>
         <picture>
            <img src="images/3.jpg" alt="Женщина принимает кедровую бочку" width="768"
               height="300">
            <figcaption>Вариант кедровой бочки</a>
            </figcaption>
         </picture>
         <p>Кедровая бочка – это не просто расслабляющая и оздоровительная процедура, но и отличный способ для борьбы с лишним весом.
         За счет регулярного использования кедровой бочки происходит активация всех процессов в организме.
         В частности, ускоряется обмен веществ, стимулируется кровообращение, повышается тонус кожных покровов, улучшается состояние кожи.
         Регулярное посещение кедровой фитобочки также способствует снижению веса, благодаря избавлению от шлаков и токсинов.
         Процедура длится 45 минут.</p>
      </article>

   <footer>
      <nav class="links">
         <ul>
            <li><a href="#">Вакансии</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Реклама</a></li>
         </ul>
      </nav>
      <p class="copyright"><small>&copy;&nbsp; 2022 Балийский спа-салон Sunrita</small></p>
   </footer>
</body>

</html>
page;
