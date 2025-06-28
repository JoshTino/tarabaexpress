<?php

$loc = $_GET['loc'];
setcookie('targetLocation', $loc, strtotime("+ 7 days"), '/');