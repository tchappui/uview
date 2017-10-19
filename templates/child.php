<?php $extends('base'); ?>

<?php $block('content'); ?>
  <h1><?php echo $header; ?></h1>

  <form method="post" action="#">
    <div class="form-group">
      <label for="email">Email: </label>
      <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
    </div>

    <div class="form-group">
      <label for="password">Password: </label>
      <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password">
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
<?php $endblock(); ?>




