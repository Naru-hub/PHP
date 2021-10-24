 <?php
 
 echo 'メモのタイトルを入れてください。' . PHP_EOL;
 echo 'タイトル : ';
 $title = trim(fgets(STDIN)) .PHP_EOL;
 
 echo 'メモの内容を入れてください。' . PHP_EOL;
 echo '内容 : ';
 $contents = fgets(STDIN) . PHP_EOL;
 
 echo '登録が完了しました。' . PHP_EOL;
 
 echo 'タイトル :' . $title;
 echo '内容 :' . $contents;