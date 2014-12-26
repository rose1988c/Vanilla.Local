<?php
header("Content-type: text/html; charset=utf-8");
set_time_limit(0);
echo date("H:i:s");
echo "<br />";

function readBigFile($filename, $count = 20, $tag = "\r\n")
{
    
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '', array( PDO::ATTR_PERSISTENT => false));
    $dbh->query("SET NAMES 'utf8';");
    
    $content = ""; // 最终内容
    $current = ""; // 当前读取内容寄存
    $step = 1; // 每次走多少字符
    $tagLen = strlen($tag);
    $start = 0; // 起始位置
    $i = 0; // 计数器
    $handle = fopen($filename, 'r+'); // 读写模式打开文件，指针指向文件起始位置
    $temp = '';
    
    $insertStr = 'INSERT INTO `12306_3` values ';
    
    while ($i < $count && ! feof($handle)) {
        fseek($handle, $start, SEEK_SET); // 指针设置在文件开头
        $current = fread($handle, $step); // 读取文件
        $content .= $current; // 组合字符串
        $start += $step; // 依据步长向前移动
                         // 依据分隔符的长度截取字符串最后免得几个字符
        $substrTag = substr($content, - $tagLen);
        
        $temp .= $current;
        
        if ($substrTag == $tag) { // 判断是否为判断是否是换行或其他分隔符
            $i ++;
            
            $data = explode('----', $temp);
            $data[2] = mb_convert_encoding($data[2],'UTF-8','GBK');
            
            $temp = '';
            
            $sql = sprintf('(null, "%s","%s","%s","%s","%s","%s", "%s")', $data[0],$data[1],$data[2],$data[3],$data[4], $data[5], date('Y-m-d H:i:s'));
            
            $insertStr .= $sql . ",";
            
            $content .= "<br />";
        }
    }
    // 关闭文件
    fclose($handle);
    
    $insertStr = rtrim($insertStr, ',');
    
    $exc = $dbh->query($insertStr);

    echo date("H:i:s");
    // 返回结果
    return $content;
}
$filename = "12306.txt"; // 需要读取的文件
$tag = "\n"; // 行分隔符 注意这里必须用双引号
$count = 132000; // 读取行数
$data = readBigFile($filename, $count, $tag);

