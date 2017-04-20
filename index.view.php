<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <ul>
        <?php foreach ($tasks as $task) :?>

          <li><?= $task->description; ?></li>

        <?php endforeach; ?>
    </ul>
  </body>
</html>
