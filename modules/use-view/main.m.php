<?php 
/*  * Copyright (c) 2022 ณวสันต์ วิศิษฏ์ศิงขร
    *
    * This source code is licensed under the MIT license found in the
    * LICENSE file in the root directory of this source tree.
*/
function view($view, $props = []) {
    if(file_exists('./views/' . $view . '.php')) {
        require('./views/' . $view . '.php');
        return '';
    }
}
