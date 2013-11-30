<?php
class CommandController extends BaseController{
	public function standard(){
		return View::make('commands.standard')
		->with('title','Câu lệnh Online | Việt-WoW Server');
	}
}