<?php

/**
 * analysisTemplate.php
 * 
 * @author: Cyw
 * @email: chenyunwen01@bianfeng.com
 * @created: 2014-12-24 下午3:15:06
 * @logs: 
 * 
 *       demo:
 *       1. 匹配 analysisTemplate::diff($custom, $default);
 *       2. 解析 analysisTemplate::analysis($custom);
 *       
 */
class analysisTemplate
{
    public static function diff($custom, $default)
    {
        $custom = substr($custom, 18, strpos($custom, 'ret=0;') - 18);
        $default = substr($default, 18, strpos($default, 'ret=0;') - 18);
        
        // First compare =
        $countEquDefault = preg_match_all('/=/', $default);
        $countEquCustom = preg_match_all('/=/', $custom);
        
        // 初步匹配
        if ($countEquDefault == $countEquCustom) {
            $arrC = self::analysis($custom);
            $arrT = self::analysis($default);
            
            $diff = array_diff_key($arrC, $arrT);
            
            // 没有差异 返回具体解析后数据
            if (empty($diff)) {
                return $arrC;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function analysis($str)
    {
        if (strpos($str, 'ret=0;')) {
            $str = substr($str, 18, strpos($str, 'ret=0;') - 18);
        }
        $data = array();
        $temp = explode(';', $str);
        $temp = array_filter($temp);
        
        foreach ((array) $temp as $arr) {
            list ($key, $value) = explode('=', $arr);
            $data[$key] = $value;
        }
        return $data;
    }
}