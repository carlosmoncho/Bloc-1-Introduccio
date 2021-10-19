<?php
use App\Connection;
use App\QueryBuilder;
$connexio = Connection::make('test');
return new QueryBuilder($connexio);