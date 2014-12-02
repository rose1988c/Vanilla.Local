<?php
class ServiceCenter
{
    public $units = array (
        'Config.Get.Lobbysvr' => '',
        'Config.Room.Edit' => '',
        'Currency.Base.Consume' => '扣除',
        'Game.AwardServiceData.Get' => '',
        'Game.Get.Result' => '获取游戏数据 ',
        'Game.Match.SignUp.New' => '',
        'Game.Result.Get' => ' 获取游戏积分房战绩',
        'Game.Result.Update' => '',
        'Money.BankPwd.Validate' => '',
        'Money.Info.Get' => '',
        'Money.Log.Transfer' => '获取转帐记录',
        'Money.Sr.Transfer' => '',
        'Prop.Base.Gift' => '发放基础道具',
        'Res.Get.Info' => '',
        'Res.Pack.Add' => '',
        'Res.Pack.Consume' => '',
        'Server.Game.Restart' => '',
        'User.Attr.Get' => '用户属性获取',
        'User.Base.Register' => '用户注册接口',
        'User.Info.Get' => '获取用户信息接口（按numid）',
        'User.Info.GetByUserid' => '获取用户信息接口根据（按userid）',
        'User.Info.Modify' => '用户资料修改',
        'User.Nickname.Exists' => '昵称是否存在接口',
        'User.Password.Modify' => '修改密码接口',
        'User.Password.Reset' => '重置密码接口',
        'User.Password.Validate' => '密码验证',
        'User.Userid.Exists' => '用户是否存在'
    );
    public function traverseDate($path)
    {
        $datas = $this->traverse($path);
        return array_values($datas);
    }
    public function multi_array_sort($multi_array, $sort_key, $sort = SORT_ASC)
    {
        if (is_array($multi_array)) {
            foreach ( $multi_array as $row_array ) {
                if (is_array($row_array)) {
                    $key_array [] = $row_array [$sort_key];
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        array_multisort($key_array, $sort, $multi_array);
        return $multi_array;
    }

    /**
     * 分析文件目录
     *
     * @param string $path
     */
    private function traverse($path = '.')
    {
        $datas = array ();
        // opendir()返回一个目录句柄,失败返回false
        $current_dir = @opendir($path) or exit('文件目录不正确');
        // readdir()返回打开目录句柄中的一个条目
        while ( ($file = readdir($current_dir)) !== false ) {
            // 构建子目录路径
            $sub_dir = $path . DIRECTORY_SEPARATOR . $file;
            if ($file == '.' || $file == '..') {
                continue;
            } else if (is_dir($sub_dir)) {
                // 如果是目录,进行递归
                // echo 'Directory ' . $file . ':<br>';
                // traverse($sub_dir);
            } else {
                // 如果是文件,直接输出
                // echo 'File in Directory ' . $path . ': ' . $file . '<br>';
                $datas [] = $this->analysis($sub_dir, true);
            }
        }
        return array_filter($datas);
    }

    /**
     * 分析
     *
     * @param
     *            $sub_dir
     */
    private function analysis($sub_dir, $recode = false)
    {
        $return = false;

        $rfile = require $sub_dir;

        if (! empty($rfile ['data_source'])) {
            foreach ( (array) $rfile ['data_source'] as $file => $arrs ) {

                foreach ( (array) $arrs ['args'] as $argk => $argv ) {
                    $search = substr($argv, 5);
                    $ismust = $rfile ['input_filter'] [$search] ['must_give'] ? '$' . $search . '#1' : '$' . $search . '#0';
                    $arrs ['args'] [$argk] = '(' . $rfile ['input_filter'] [$search] ['type'] . ')' . $ismust;
                }
                $return = $arrs;
            }
        }
        return $return;
    }
    private function array_flatten($array, $readkey = false)
    {
        $flat = array ();

        foreach ( $array as $key => $value ) {
            if (is_array($value)) {
                $flat = array_merge($flat, $this->array_flatten($value));
            } else {
                if ($readkey)
                    $flat [] = $key;
                else
                    $flat [] = $value;
            }
        }
        return $flat;
    }
}
