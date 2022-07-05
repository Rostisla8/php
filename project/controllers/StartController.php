<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class StartController extends Controller
	{
		public function start() {
			return $this->render('start/start');
		}
	}
