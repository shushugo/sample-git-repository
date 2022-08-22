<?php
require_once "../../controller/controller.php";
require_once "../../controller/ability/conf_controller.php";
$controller = new conf_controller;
$H = $controller->Load();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>能力<?= (isset($H['c'])) ? '削除' : '登録'; ?>確認</title>
</head>

<body>
  <div>
    <h1>能力<?= (isset($H['c'])) ? '削除' : '登録'; ?>確認</h1>
  </div>

  <div>
    能力コード
    <?= $H['register']['ability_cd'] ?><br>

    能力名
    <?= $H['register']['ability_name'] ?><br>

    能力名カナ
    <?= $H['register']['ability_name_kana'] ?><br>
  </div>

    <a href= <?= (isset($H['c'])) ? 'index.php' : 'edit.php'; ?>>戻る</a>

    <a href='comp.php'><?= (isset($H['c'])) ? '削除' : '登録'; ?></a>
</body>