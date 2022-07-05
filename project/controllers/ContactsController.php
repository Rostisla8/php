<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class ContactsController extends Controller
	{
		public function contacts() {
			return $this->render('contacts/contacts');
		}
	}
