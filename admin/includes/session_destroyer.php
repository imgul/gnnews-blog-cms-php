<?php
session_start();
session_unset();
session_destroy();

echo '<h2>All Sessions Destroyed successfully.</h2>';
