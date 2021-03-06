<?php
namespace app\manage\model;
use think\Model;
use think\Db;

class UserModel extends Model{
    protected $table = 'user';// 对应数据库中的user表

    //判断是否为管理员
    public function isManager($user_id){
      $query=['id'=>$user_id];
      $result = $this->get($query);
      if($result->getAttr('permission')==1){
          return true;
      }else{
          return false;
      }
    }

}
