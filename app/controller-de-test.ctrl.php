<?php

class ControllerDeTestController extends Controller
{
	function metodaPentruTestCuDouaArgumente($culoare, $cifra)
	{
		$view  = new View("raspuns");

		$view->mesaj = "Argumente recepţionate: culoare [[$culoare]] şi cifra [[$cifra]]";

		$view->css_class = "metodaPentruTestCuDouaArgumente";
		$view->bgcolor = $culoare;
		$view->border = "{$cifra}px solid dark{$culoare}";

		$view->display();
	}

	function metodaPentruTestFaraArgumente()
	{
		$view  = new View("raspuns");

		$view->mesaj = "Aceasta metodă funcţionează fără argumente.";

		$view->css_class = "metodaPentruTestFaraArgumente";
		$view->bgcolor = "darkgrey";
		$view->border = "2px dashed black";

		$view->display();
	}

	function metodaPentruRoot()
	{
		// containerul principal
		$view_layout = new View("layout");

		// primul view
		$view_layout->view1 = new View("view");
		$view_layout->view1->title = "VIEW 1";
		$view_layout->view1->param1 = "blabla";
		$view_layout->view1->param2 = "blublu";
		$view_layout->view1->border = "2px solid red";

		// subview in view1
		$view_layout->view1->subview = new View("subview1");
		$view_layout->view1->subview->culori = array("red" => "Rosu", "orange" => "Portocaliu", "blue" => "Albastru", "green" => "Verde");

		// al doilea view
		$view_layout->view2 = new View("view");
		$view_layout->view2->title = "VIEW 2";
		$view_layout->view2->param1 = "nanana";
		$view_layout->view2->param2 = "nununu";
		$view_layout->view2->border = "2px solid blue";

		// subview in view2
		$view_layout->view2->subview = new View("subview2");
		$view_layout->view2->subview->cifre = array("1" => "unu", "2" => "doi", "3" => "trei", "4" => "patru");

		// randeaza si "scuipa" html-ul pe ecran
		$view_layout->display();
	}
}
