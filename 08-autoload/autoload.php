<?php

spl_autoload_register(function($clase) {
  $source = str_replace('\\', '/', $clase).'.php';
  require_once($source);
});