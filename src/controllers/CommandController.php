<?php
class CommandController extends BaseController{
	public function standard(){
		return View::make('soapservice::standard')
		->with('title','Câu lệnh Online | Việt-WoW Server');
	}
	public function ajax_command(){
		$command = Input::get('command');
		$session = Input::get('session');
		if(!Session::has($session)){
			
		}
		if($command)
		Commandlog::create(array('command'=>$command,'result'=>'testing result','session'=>$session));
		$logs = Commandlog::orderBy('created_at','DESC')->wheresession()->take(4)->get();
		$string = "";
		foreach($logs as $log){
			$string = "<p style='font-weight:bold;'>TC:\ ".$log->command."</p>"."<p style='color:green;'>- ".$log->result."</p>".$string;
		}
		return $string;
	}
}