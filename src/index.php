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
        <form action="./php/case.php" method="POST" class="case__form">
          <input type="text" name="world" placeholder="Введите слово">
          <input type="number" name="number" placeholder="Введите число">
          <input type="reset" value="Очистить">
          <input type="submit" value="Узнать падеж">
        </form>
      </div>
    </section>
  </main>
</body>

</html>