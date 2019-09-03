<?php
/**
 * Created by PhpStorm.
 * User: xxs
 * Date: 2019/9/3
 * Time: 14:30
 */


Route::get('/apidoc', 'Admin\ApiDocController@showDoc');  //注意后面是反斜杠\,否则会报错