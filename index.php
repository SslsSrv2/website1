
<?php

require_once "db.php";

$stmt = $pdo->query("select * from works");
$works = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мой сайт</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/lg-transitions.min.css">
  </head>
<body>
  <section class="first-screen section-bg">
      <div class="container">
      
        <div>
          <h1>Веб-разработчик <br> к вашим услугам</h1>
        </div>
        <div>
          <a class="btn btn-bg" href="#">Узнать больше</a>
          <a class="btn btn-outline" href="#">Нанять меня</a>
        </div>
        <a class="chevron" href="#">
          <img src="assets/img/chevron.svg" alt="scroll">
        </a>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 id="about">Обо мне</h2>
        <p> 
          C другой стороны повышение уровня гражданского сознания обеспечивает широкому кругу
          специалистов участие в формировании существующих финансовых и административных условий!
        </p>
        <p>
          Соображения высшего повадка. а та»же постовнное информационно-техническое обеспечение нашей деятельности в значительной
          степени обуславливает создание системен масштабноео азменения рчаз параметров.
        </p>
      </div>
    </section>
    <section>
      <h2 id="portfolio">Портфолио</h2>
    <div class="container">
      <h2>Галерея</h2>

      <div id="lightgallery" class="gallery">
        <?php foreach($works as $work): ?>
        <a class="img-wrapper" data-sub-html="<?= $work['name'] ?>" href="<?= $work['file_path'] ?>">
        <img src="<?= $work['file_path'] ?>" />
        </a>
        <?php endforeach; ?>
      </div>

    </div>
    </section>
    <section class="section-bg">
      <div class="container">
        <div class="d-flex">
          <div class="w-60 pr-4">
            <h2>Давайте работать вместе</h2>
            <p>
             Практический опыт показывает, что новая модель организационной деятельности способствует повышению актуальности системы масштабного изменения ряда параметров!
            </p>
          </div>
          <div class="w-40">
            <form>
              
              <input type="name" placeholder="Как к вам обращаться">
              <input type="email" placeholder="Ваш email">
              <textarea rows="4" placeholder="Сообщение"></textarea>
              <input class="btn btn-bg" type="submit" value="Отправить">
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
  </body>
  <footer>
    <div class="container">
        Copyright &copy; 2020. Все права защищены.
    </div>
  </footer>
</html>