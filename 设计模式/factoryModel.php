<?php
interface db
{
    public function  connect();
    public function  insert();
    public function  edit();
    public function  delete();
    public function  findOne();
    public function  findList();
}


class mysql implements db
{
    public function  connect(){}
    public function  insert(){}
    public function  edit(){}
    public function  delete(){}
    public function  findOne(){}
    public function  findList(){}
}

class oracle implements db
{
    public function  connect(){}
    public function  insert(){}
    public function  edit(){}
    public function  delete(){}
    public function  findOne(){}
    public function  findList(){}
}

/**
 * 工厂模式: 通过工厂或者类创建对象
 * */

class factory{

    public static  $db=  null ;

    public static function createFactory($mysqlType)
    {
        switch ($mysqlType)
        {
            case 'mysql':
                self::$db  =  new mysql();
                break;
            case 'oracle':
                self::$db  =  new oracle();
                break;
            default :
               throw new \Exception("not match database type");
        }

        return self::$db;
    }

}




try{
    factory::createFactory('haha');
}catch (\Exception $e){
   echo $e->getMessage();
}








