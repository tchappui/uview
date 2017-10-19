<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title><?php echo $title; ?></title>
  </head>
  <body>
    <?php $block('content'); ?>
      <p>Welcome in our base template!</p>
    <?php $endblock(); ?>
  </body>
</html>
