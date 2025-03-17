<?php
namespace app\api\interfaces;

//卡台接口
interface CardInterface
{
    /**
     * 卡列表
     * @param mixed $params
     * @return void
     */
    public function cardList($params):array;
    /**
     * 卡详情
     * @param mixed $params
     * @return void
     */
    public function cardInfo($params):array;
    /**
     * 更新卡
     * @param mixed $params
     * @return void
     */
    public function updateCard($params):array;
    /**
     * 冻结卡
     * @param mixed $params
     * @return void
     */
    public function cardFreeze($params):array;
    /**
     * 解冻卡
     * @param mixed $params
     * @return void
     */
    public function cardUnfreeze($params):array;
    /**
     * 交易详情
     * @param mixed $params
     * @return void
     */
    public function transactionDetail($params):array;
    /**
     * 获取卡限额
     * @param mixed $params
     * @return void
     */
    public function cardGetLimits($params):array;
    /**
     * 创建卡
     * @param mixed $params
     * @return void
     */
    public function cardCreate($params):array;
    /**
     * 测试
     * @param mixed $params
     * @return void
     */
    public function test($params):array;
    
    
}
