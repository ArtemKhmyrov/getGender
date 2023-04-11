<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Определение пола</title>
  <link rel='stylesheet' href='./css/style.css'>
</head>

<body>
  <main class="main">
    <section class="gender">
      <div class="gender__wrap">
      <span class="title">Определить пол человека по его ФИО онлайн</span>
        <form action="./php/gender.php" method="POST" class="gender__form">
          <input type="text" name="name" placeholder="Имя" required>
          <input type="text" name="sername" placeholder="Фамилия" required>
          <input type="text" name="lastname" placeholder="Отчество">
          <input type="reset" value="Очистить">
          <input type="submit" value="Узнать пол">
        </form>
      </div>
    </section>
    

    <section class="case">
      <div class="case__wrap">
      <span class="title">Определить падеж слова онлайн</span>
        <form action="./php/case.php" method="POST" class="case__form">
          <input type="number" name="number" placeholder="Введите число" required>
          <input type="reset" value="Очистить">
          <input type="submit" value="Узнать падеж">
        </form>
      </div>
    </section>
   

    <section class="dear-fio">
      <div class="dear-fio__wrap">
        <span class="title">Просклонять ФИО онлайн</span>
        <form action="./php/dear.php" method="POST" class="dear-fio__form">
        <input type="text" name="name_dear" placeholder="Имя" required>
          <input type="text" name="sername_dear" placeholder="Фамилия" required>
          <input type="text" name="lastname_dear" placeholder="Отчество">
          <input type="reset" value="Очистить">
          <input type="submit" value="Просклонить">
        </form>
      </div>
    </section>
  </main>
</body>

</html>