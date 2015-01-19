<?php
    //=================================
    /**
     *函数库
     *自定义函数
     *author 毛忠田
     *date:2015年1月19日
     */
    //=================================




    /**
     *批量导入数据
     *@param $modelname string model类的名字
     *@param $arr array 需要导入的数组,键为数据库字段
     *@return  $return  执行的结果
     *author 毛忠田
     */


    public static function multiSave($modelname,$arr){
        //实例化模型类
        $model=$modelname::model();
        //获得表名
        $table=$model->tableName();
        //获得数据库连接
        $connection=$model->getDbConnection();
        $values='';
        //处理要插入的值
        foreach ($arr as $key => $value) {
            $values.='(\''.implode('\',\'',$value).'\'),';
        }
        $values=rtrim($values,',');
        //处理要插入的键
        $keys=implode(',',array_keys($value));
        //拼接sql语句
        $sql='insert into '.$table.' ('.$keys.') values '.$values;
        //执行sql语句
        $command=$connection->createCommand($sql);
        $result=$command->execute();
        return $result;     
    }