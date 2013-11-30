<?php
	class SoapService{
		public static function RunCommand($cmd){
            
            $client = new SoapClient(NULL, Config::get('soapservice::soap.client'))
            );

            try{
                $result = $client->executeCommand(new SoapParam($cmd, "command"));
                // $time=time();
                $log=array(
                    'command' =>$cmd,
                    'result'  =>$result,
                    'time'    =>$time           
                );
                // $this->insert_log($log);
                return $result;
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }
        // function insert_log($data){
        //     $this->vw_db->insert('command_logs',$data);
        // }
        // function get_logs(){
        //     $this->vw_db->select()->from('command_logs');
        //     $this->vw_db->order_by('time',"desc");
        //     $query= $this->vw_db->get();
        //     return $query->result_array();
        // }
	}