<?php require('./modules/use-import/main.m.php');
import('dotenv')->config();
import('use-route');
import('use-view');

require('./Models/database.php');
require './Controllers/Controller.php';
require('./routes/web.php');

