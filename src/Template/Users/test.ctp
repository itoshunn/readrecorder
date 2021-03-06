<!-- コードテスト用 ctp -->
<?php
    echo $this->Form->label($id);
?>

<!-- 配列を出力する場合は ネストして子要素にする必要がある -->
<?= $this->Form->create($user) ?>
<div>
    <?php
        echo $this->Form->input('user_name');
    ?>
</div>

<!-- 以下２つの記述は基本的に同じもの -->
<!-- h >> PHP の htmlspecialchars の省略形 -->
<?= h($user->user_name) ?>

<!-- 配列で取得した値はforeachなどで -->
<?php foreach ($user->books as $books): ?>
 <tr>
     <td><?= h($books->id) ?></td>
     <td><?= h($books->title) ?></td>
     <td><?= h($books->author) ?></td>
     <td><?= h($books->user_id) ?></td>
     <td><?= h($books->created) ?></td>
     <td><?= h($books->modified) ?></td>
     
     <!-- action クラス -->
     <td class="actions">
         <?= $this->Html->link(__('View'), ['controller' => 'Books', 'action' => 'view', $books->id]) ?>
         <?= $this->Html->link(__('Edit'), ['controller' => 'Books', 'action' => 'edit', $books->id]) ?>
         <?= $this->Form->postLink(__('Delete'), ['controller' => 'Books', 'action' => 'delete', $books->id], ['confirm' => __('Are you sure you want to delete # {0}?', $books->id)]) ?>
     </td>
 </tr>
 <?php endforeach; ?>

 <?php
 $check1 = TRUE;
 $check2 = FALSE;
 if ($check1 > $check2) {
     echo "check1 is" . $check1;    // ture = 1
     echo "check2 is" . $check2;    // false は値なし
 }
 ?>
 
 <?php
    echo 'echo test ' . $id;
 
    function test1($id){
        echo 'function test' . $id;
    }
    
    if ($id == '2') {
        test1($id);
    }
 ?>
 
 <?php
    function checkflg($flg, $id) {
        $checked = '';
        if ($flg == $id) {
            $checked = ' checked="checked" ';
            return $checked;
        } 
        else {
        return $checked;
        }
    }
    
    $flg = 1; 
    $check = checkflg($flg, $id);

    echo '<input type="checkbox" name="check', $id , 'value="' , $flg , '"' , $check , ' />';
    
    if ($check == '') {
        echo 'flug =',  $flg;
        echo $this->Form->input($id);
    }
    if ($flg == 1) {
        echo 'flug =',  $flg;
        echo $this->Form->input($id);
    }
    if ($flg != 1) {
        echo 'flug !=',  $flg;
        echo $this->Form->input($id);
    }

 ?>
 

 
<!--
・チェックボックスと連動した入力を作るには
    ・関数内で function を記述してみる
        ・リアルタイムでやる場合
            ・JavaScriptで制御する
            ・JS は Webroot フォルダに記述
            ・JS などの指定は Layout フォルダにレイアウトテンプレートを作成する
・ok:他テーブルの項目を呼び出す
・日付を自動的に挿入するには
・【最優先】モックアップを作成する
    ・どこから作れば？？
    ・画面から
    ・ロジックはあとからでもOK

その他
・Github 経由で Mac環境と共存するには
・Mac上での環境設定
-->