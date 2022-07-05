<?php
	namespace Project\Controllers;
	use \Core\Controller;
    use \Project\Models\Users;
	
	class UsersController extends Controller
	{
		public function showUsers() {
            $data = (new Users) -> getUsers();
			return $this->render('users/users' , $data);
		}
	}
