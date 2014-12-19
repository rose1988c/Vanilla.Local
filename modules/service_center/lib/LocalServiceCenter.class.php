<?php
class LocalServiceCenter
{
    /**
     * service 
     */
    private $service = '';
    
    /**
     * 错误 
     */
    private $error = array ();
    
    /**
     * 参数
     */
    private $_args = '';
    
    /**
     * 数据 
     */
    private $_data = NULL;
    
    /**
     * 请求
     */
    private $_is_post = false;
    
    /**
     * 配置
     */
    protected $config = array (
        'appid' => 1,
        'secret_key' => '25f9e794323b453885f5181f1b624d0b',
        'version' => 'C.1.0',
        //'hps' => 'http://interface.qpdiy.com:8090'
        'hps'   => 'http://8.interface.qpdiy.com:80'
    );
    
    /**
     * 调用者 （需修改）
     */
    protected $caller = 'threePart';
    
    /**
     * 实例化一个service
     * 
     * @param 名称 $service 如：Rank.Charm.Get
     * @return ServiceCenter
     */
    static public function instance($service)
    {
        $object = new self($this->config);
        $object->service($service);
        return $object;
    }

    /**
     * service 请求
     * 
     * @param 参数 $args
     * @param 注明调用身份 $caller
     * @return ServiceCenter
     */
    public function post($args = array(), $caller = '')
    {
        $this->args($args);
        $this->config ['hps'] or self::excep('没有设置HPS');
        $this->service or self::excep('未设置调用服务');
        $this->config ['appid'] or self::excep('没有设置APPID');
        $this->config ['secret_key'] or self::excep('没有设置secret_key');
        
        $this->_args ['caller'] = $caller ? $caller : $this->caller;//注明调用身份
        $this->_args ['appid'] = $this->config ['appid'];
        $this->_args ['service'] = $this->service;
        $this->_args ['version'] = $this->config ['version'];
        $this->_args ['args'] = $this->encode($this->_args ['args'], $this->config ['secret_key']);
        $this->_args = self::urlencode($this->_args);
        $this->generate_token(); // 先生成TOKEN，在生成签名
        $this->generate_signature($this->_args);
        $this->_is_post = true;
        
        $this->_data = (array) json_decode($this->_http_curl($this->config ['hps'], $this->_args));
        
        if (! $this->_data) {
            self::excep('SERVICE_CENTER.JSON.PARSE_FAIL[' . $this->config ['hps'] . '-->' . $this->_args ['service'] . ']:' . $this->_data, 1001, 'service_center');
        }
        
        return $this;
    }
    
    /**
     * http_curl
     * 
     * @param 链接 $url
     * @param unknown $post_string
     * @return mixed
     */
    private function _http_curl($url, $post_string)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_string));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
    }
    
    /**
     * 参数设置
     *
     * @param string $key
     * @param string $value
     * @return ServiceCenter
     */
    public function args($key = '', $value = '')
    {
        if ($key && is_array($key)) {
            foreach ( $key as $k => $v ) {
                $this->_args ['args'] [$k] = $v;
            }
        } else if ($key) {
            $this->_args ['args'] [$key] = $value;
        }
        return $this;
    }
    
    /**
     * service 名称
     *
     * @param unknown $name
     * @return ServiceCenter
     */
    public function service($name)
    {
        $this->service = $name;
        return $this;
    }
    
    
    /**
     * 签名加密
     * 
     * @param $input
     * @return boolean
     */
    private function generate_signature($input)
    {
        unset($input ['signature']); // 注消Signature参数
        ksort($input); // 对POST的Key 数据进行sort排序
        $str = '';
        foreach ( $input as $key => $val ) {
            $str .= $key . '=' . $val . '|'; // 等号连接每个值
        }
        $str .= $this->config ['secret_key'];
        $this->_args ['signature'] = md5($str);
        return true;
    }
    
    /**
     * 获取数据
     */
    public function get_data()
    {
        $this->_is_post or $this->post();
        if ($this->get_code() !== 0) {
            self::excep($this->get_message(), $this->get_code(), 'service_center');
        }
        return (object) $this->_data ['data'];
    }
    
    /**
     * get_code
     * @return number
     */
    public function get_code()
    {
        $this->_is_post or $this->post();
        return (int) $this->_data ['code'];
    }
    
    /**
     * get_message
     * @return message
     */
    public function get_message()
    {
        $this->_is_post or $this->post();
        return (string) $this->_data ['message'];
    }
    
    /**
     * get_response
     * @return _data
     */
    public function get_response()
    {
        $this->_is_post or $this->post();
        return (object) $this->_data;
    }
    
    /**
     * token
     * 
     * @return boolean
     */
    private function generate_token()
    {
        $_days = ceil(time() / 86400);
        $_day_str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $_day_str = str_split($_day_str);
        
        $_a = floor($_days / (36 * 36));
        
        $_days = $_days % (36 * 36);
        $_b = floor($_days / 36);
        
        $_days = $_days % 36;
        $_c = $_days;
        
        $str = $_day_str[$_a] . $_day_str[$_b] . $_day_str[$_c];
        $this->_args ['token'] = substr($str . md5(uniqid('service_center', true)), 0, 32);
        $this->_args ['token'] = strtoupper($this->_args ['token']);
        
        return true;
    }
    
    /**
     * 加密 encode
     * 
     * @param unknown $data
     * @param unknown $key
     * @return string
     */
    private function encode($data, $key)
    {
        $data = json_encode($data);
        $x = 0;
        $len = strlen($data);
        $l = strlen($key);
        $char = '';
        $str = '';
        for($i = 0; $i < $len; ++ $i) {
            if ($x == $l)
                $x = 0;
            $char .= substr($key, $x, 1);
            ++ $x;
        }
        for($i = 0; $i < $len; ++ $i) {
            $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1))) % 256);
        }
        return base64_encode($str);
    }
    
    private function excep($message = null, $code = null)
    {
        throw new Exception($message, $code);
    }
    
    static public function urlencode($data) {
        if (is_string($data)) {
            $data = urlencode($data);
        } else if (is_array($data)) {
            foreach ($data as &$val) {
                $val = self::urlencode($val);
            }
        }
        return $data;
    }
}
