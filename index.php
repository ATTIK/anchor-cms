<?php

/*
               /   \
              |  o  |
               \   /
        ________) (________
       |                   |
       '------.     .------'
               |   |
               |   |
               |   |
               |   |
    /\         |   |         /\
   /_ \        /   \        / _\
     \ '.    .'     '.    .' /
      \  '--'         '--'  /
       '.                 .'
         '._           _.'
            `'-.   .-'`
                \ /
*/

define('DS', '/');
define('ENV', getenv('APP_ENV'));
define('VERSION', '0.8');

define('PATH', dirname(__FILE__) . DS);
define('APP', PATH . 'anchor' . DS);
define('SYS', PATH . 'system' . DS);
define('EXT', '.php');

require SYS . 'bootstrap' . EXT;