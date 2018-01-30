<?php

$routes["ControllerDeTest"] = array(
	"test" => "metodaPentruTestFaraArgumente",
	"test/*/*" => "metodaPentruTestCuDouaArgumente",
	"" => "metodaPentruRoot",
);

$routes["NotFound"] = array(
	"" => "index"
);
