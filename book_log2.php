<? php

function validate($reviews) 
{
  $errors = [];
  
  //書籍名
  if (!strlen($reviews['title'])) {
    $errors['title'] = '書籍名を入力してください';
  } elseif (strlen($reviews['title'])) > 255) {
    $errors['title'] = '書籍名は255文字以内で入力してください';
  }
  
  return $errors;
}

  //評価
  if ($reviews['score'] < 1 || $reviews['score'] > 5) {
      $errors['score'] = '評価は1~5の整数を入力してください';
  }

function createReview($link)
{
    $reviews = [];
    
    echo '読書ログを登録してください' . PHP_EOL;
    echo '書籍名 : ';
    $reviews['title'] = trim(fgets(STDIN));
    
    echo '著者名 : ';
    $reviews['author'] = trim(fgets(STDIN));
    
    echo '読書状況(未読,読んでる,読了) : ';
    $reviews['status'] = trim(fgets(STDIN));
    
    echo '評価(5点満点の整数) : ';
    $reviews['score'] = (int) trim(fgets(STDIN));
    
    echo '感想 : ';
    $reviews['summary'] = trim(fgets(STDIN));
    
    $validated = validate($reviews);
    if (count($validated) > 0) {
        foreach ($validated as $error) {
          echo $error . PHP_EOL;
        }
        return;
    }
    
    
    $sql = <<<EOT
INSERT INTO reviews (
    title,
    author,
    status,
    score,
    summary
)  VALUES (
    "{$reviews['title']}",
    "{$reviews['author']}",
    "{$reviews['status']}",
    "{$reviews['score']}",
    "{$reviews['summary']}",
) 
EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
      echo '登録が完了しました' . PHP_EOL . PHP_EOL;
    } else {
      echo 'Error: データの追加に失敗しました' .PHP_EOL;
      echo 'Debugging Error: ' . mysqli_error($link) . PHP_EOL .PHP_EOL;
    }
}

function listReviews($reviews) 
{
    echo '登録されている読書ログを表示します' . PHP_EOL;
      
    foreach($reviews as $review) {
        echo '書籍名 : ' . $review['title'] . PHP_EOL;
        echo '著者名 : ' . $review['author'] . PHP_EOL;
        echo '読書状況 : ' . $review['status'] . PHP_EOL;
        echo '評価 : ' . $review['score'] . PHP_EOL;
        echo '感想 : '  .$review['summary'] . PHP_EOL;
        echo '____________' . PHP_EOL;
    }
}

$reviews = [];

While (true) {
    echo '1.読書ログを登録' . PHP_EOL;
    echo '2.読書ログを表示' . PHP_EOL;
    echo '3.アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください(1,2,9) : ';
    $num = trim(fgets(STDIN));
    
    if ($num === '1') {
      createReview($link);
    } elseif ($num === '2') {
      listReviews($reviews);
    } elseif ($num === '9') {
      mysql_close($link);
      break;
    }
}