<?php
function index() {
    $appName = 'Paravel';
    return view('index', props: ['appName'=>$appName]);
}
