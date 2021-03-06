<?php
namespace app\problem_manage\model;
use think\Model;
use think\Db;
use app\problem_manage\tool\LogTool;
class ParticipantHaveAnswerdModel {
	var $refer_participant_id;
	var $refer_problem_id;
	var $refer_team_id;
	var $answer_date;
	var $user_answer;
	var $true_or_false;

	public function setPro($refer_participant_id, $refer_team_id, $refer_problem_id, $user_answer){
		//LogTool::record($user_answer);
		$this -> refer_participant_id = $refer_participant_id;
		$this -> refer_problem_id = $refer_problem_id;
		$this -> refer_team_id = $refer_team_id;
		$this -> answer_date=date('Y-m-d', time());

		switch (gettype($user_answer)) {
			case 'string':
				$this -> user_answer = $user_answer;
				break;
			case 'array':
				$this -> user_answer = implode('', $user_answer);
				break;
		}
	}
	public function setTrueOrFalse($true_or_false) {
		$this -> true_or_false = $true_or_false;
	}

	public static function savePartHaveAnswerds($pantHaveAnswerArr) {
		for($i=0; $i<count($pantHaveAnswerArr); $i++) {
			$data=array();
			$pantHaveAnswer=$pantHaveAnswerArr[$i];
			$data['refer_participant_id']=$pantHaveAnswer->refer_participant_id;
			$data['refer_problem_id']=$pantHaveAnswer->refer_problem_id;
			$data['refer_team_id']=$pantHaveAnswer->refer_team_id;
			$data['answer_date']=$pantHaveAnswer->answer_date;
			$data['user_answer']=$pantHaveAnswer->user_answer;
			$data['true_or_false']=$pantHaveAnswer->true_or_false;
			Db :: table('participant_haved_answer') -> insert($data);
		}
	}
	public static function getPardDayAnswer($pant_id){
		Return Db::table('participant_haved_answer')->field('answer_date')
		->where('refer_participant_id',$pant_id)
		->where('answer_date',date('Y-m-d', time()))
		->select();

	}


}
