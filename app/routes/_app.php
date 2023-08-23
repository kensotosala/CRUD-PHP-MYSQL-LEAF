<?php

app()->get('/', 'ContactosController@index');

app()->get('/contactos/crear', 'ContactosController@crear');

app()->get('/home', 'TestsController@index');

app()->get('/test', 'TestsController@test');
