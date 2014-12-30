<?php

class UserController extends BaseController {

	public function indexAction()
	{
		return View::make('user/index');
	}

}
