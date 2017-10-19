<?php

require 'uview.php';

echo uview('child', [
    'title' => 'First test with uview',
    'header' => 'Login form:'
]);
