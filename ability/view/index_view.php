<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>能力一覧</title>
  </head>
  
  <body>
    <div>
      <h1>能力一覧</h1>
    </div>
    
    <form action="index.php" method="POST">
      <div>
        能力コード
        <input type="text" name="ability_cd" value="<?= !empty($H['search']['ability_cd']) ? $H['search']['ability_cd'] : ''; ?>">
        能力名
        <input type="text"name="ability_name" value="<?= !empty($H['search']['ability_name']) ? $H['search']['ability_name'] : ''; ?>">
      </div>
      
      <div>
        <input type="submit" value="検索" name="btn_search">
        <input type="button" value="リセット" name="btn_reset" onclick="location.href = 'index.php'">
        <input type="button" value="追加" name="btn_insert" onclick="location.href = 'edit.php'">
      </div>
    </form>
    
    <?php if (!empty($H['data'])) { ?>
      <?= $H['count'] ?>件中<?= $H['small_num'] ?>～<?= $H['max_num'] ?>
      
      <div>
        <table border="1">
          <tr>
            <th>能力コード</th>
            <th>能力名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          
          <?php foreach($H['data'] as $key => $value) { ?>
            <tr>
              <th><?= $H['data'][$key]['ability_cd'] ?></th>
              <th><?= $H['data'][$key]['ability_name'] ?></th>
              <th><a href="edit.php?c=<?= $H['data'][$key]['ability_cd'] ?>">更新</a></th>
              <th><a href="conf.php?c=<?= $H['data'][$key]['ability_cd'] ?>">削除</a></th>
            </tr>
          <?php } ?>
        </table>
      </div>
      
      <?= $page_menu ?><br>

    <?php } else { ?>
      「データが存在しません」
    <?php } ?>

    <input type="button" value="ログアウト" name="btn_logout" onclick="location.href = '../login/index.php'">
    <input type="button" value="メニュー" name="btn_menu" onclick="location.href = '../menu/index.php'">
  </body>
</html>