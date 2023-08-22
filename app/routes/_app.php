<?php

app()->get('/', 'ContactosController@index');

app()->get('/home', 'TestsController@index');

app()->get('/test', 'TestsController@test');
