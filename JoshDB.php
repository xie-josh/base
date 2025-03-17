<?php
namespace app\services\josh;
use think\facade\Db;

class JoshDB
{

    public function __construct()
    {
    }

    public static function dbBatchUpdate(string $table_name,array $data,string $field)
    {
        // 生成SQL
        $sql = 'UPDATE '.$table_name." SET ";
        $fields = $casesSql = [];
        foreach ($data as $key => $value) {
            // 指定更新字段不存在
            if (!isset($value[$field])){
                continue;
            }
            // 记录更新字段
            $temp = $value[$field];
            if(!in_array($temp,$fields)){
                $fields[]='"'.$temp.'"';
            }
            // 拼接更新字段条件
            foreach ($value as $k => $v) {
                // 更新条件字段不更新
                if ($k == $field){
                    continue;
                }
                $temp = $value[$field];
                // 拼接CASE，默认CASE头
                $caseWhen = isset($casesSql[$k]) ? $casesSql[$k] : "`{$k}` = (CASE `{$field}` ";
                // 拼接WHEN
                $caseSql = sprintf(
                    "%s WHEN '%s' THEN '%s' ",
                    $caseWhen,$temp,$v
                );
                $casesSql[$k] = $caseSql;
            }
        }
        if (!$casesSql){
            return false;
        }
        $endSql = [];
        // 拼接结束END
        foreach ($casesSql as $key=>$val){
            $endSql[] = $val." END)";
        }
        $sql .= implode(',',$endSql);
        unset($data,$casesSql,$endSql);
        // 拼接WHERE
        $str = implode(',',  $fields );
        $sql .=" WHERE `{$field}` IN ({$str})";
        dd($sql,'111');
        // 创建并执行完整SQL
        $res = Db::execute($sql);
        return $res;
    }

}