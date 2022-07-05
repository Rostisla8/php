<?php
	use \Core\Route;
	
	return [
		new Route('/' ,'start','start'),
		new Route('/login' ,'login','loginPage'),
		new Route('/login/process' ,'login','loginProcess'),
		new Route('/registration' ,'registration','registrationPage'),
		new Route('/registration/process' ,'registration','processPage'),
		new Route('/profile' ,'profile','showProfile'),
		new Route('/profile/edit' ,'profile','editProfile'),
		new Route('/profile/:id' ,'profile','showProfile'),
		new Route('/exit' ,'profile','exit'),
		new Route('/articles' ,'article','showArticles'),
		new Route('/articles/:id' ,'article','showArticle'),
		new Route('/create' ,'article','createArticle'),
		new Route('/articles/delete/:id' ,'article','deleteArticle'),
		new Route('/contacts' ,'contacts','contacts'),
		new Route('/users' ,'users','showUsers'),
		
	];
	
