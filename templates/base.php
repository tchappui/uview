<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'inc/scripts_head.php'; ?>
    <?php include 'inc/styles.php'; ?>
  </head>
  <body>

    <div class="container">
      <div class="row mr-auto">
      <div class="col-xs ml-auto mr-auto">
        <?php $block('content'); ?>
        Welcome in our base template !
        <?php $endblock(); ?>
      </div>
    </div>

    <?php include 'inc/scripts_bottom.php'; ?>
  </body>
</html>
