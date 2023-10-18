<?php
      session_start();
      session_unset();
      session_destroy();
      echo("<h1> Thank you for using our personal expense tracker system</h1>");
?>