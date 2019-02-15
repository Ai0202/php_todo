<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <input type="text" id="task" placeholder="タスクを入力してください">
    <i id="add" class="fas fa-plus-circle fa-2x"></i>
  </header>

  <main class="container">
    <!-- 未完了のタスク -->
    <h2 class="title">Not yet</h2>
    <ul class="list" id="not-yet"></ul>

    <!-- 完了済みのタスク  -->
    <h2 class="title">done</h2>
    <ul class="list" id="done"></ul>
  </main>
</body>
</html>