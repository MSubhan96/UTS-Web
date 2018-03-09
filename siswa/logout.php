<?php
session_start();
session_destroy();
header('location:/TGweb/index.php');