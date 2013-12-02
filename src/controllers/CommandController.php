<?php
class CommandController extends BaseController{
	public function standard(){
		return View::make('soapservice::standard')
		->with('title','Câu lệnh Online | Việt-WoW Server');
	}
	public function ajax_command(){
		$command = Input::get('command');
		$session = Input::get('session');
		if($command)
		$result = SoapService::RunCommand($command);
		Commandlog::create(array('command'=>$command,'result'=>$result,'session'=>$session));
		$logs = Commandlog::orderBy('created_at','DESC')->wheresession($session)->take(4)->get();
		$string = "";
		foreach($logs as $log){
			$string = "<span style='font-weight:bold;'>".$log->command."</span><br/>"."<span style='color:green;'>- ".$log->result."</span><br/>".$string;
		}
		return $string;
	}
	public function command_logs(){
		return View::make('soapservice::logs')
		->with('title','Câu lệnh Online | Việt-WoW Server');
	}
	public function index(){
		return View::make('soapservice::dashbroad')
		->with('title','Câu lệnh Online | Việt-WoW Server');
	}
}