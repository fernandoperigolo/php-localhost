<!doctype html public="♥">
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="my-localhost/assets/css/normalize.css" />
  <link rel="stylesheet" href="my-localhost/assets/css/style.css" />
  <title>My Localhost</title>
</head>
<body>
  <div class="wrap">
    <?php
    $dirs = array_filter(glob('*'), 'is_dir');
    $folders = '';
    foreach ($dirs as $key => $value) {
       $folders .= '<li><a href="' . $value . '">' . $value . '</a></li>';
    }
    ?>
    <h1>My Localhost</h1>

    <div class="box">
      <h2>Localhost folders</h2>
      <ul>
        <?= $folders; ?>
      </ul>
    </div>

    <div class="box">
      <h2>Others projects URL</h2>
      <ul id="custom-urls">

      </ul>
      <form id="form-new-url" action="" method="post">
        <input type="url" name="url" id="url" />
        <input type="submit" id="btn-insert-url" value="Insert/Delete URL" />
      </form>
    </div>
  </div>
  <script src="my-localhost/assets/js/jquery-2.1.0.min.js"></script>
  <script src="my-localhost/assets/js/app.js"></script>
</body>