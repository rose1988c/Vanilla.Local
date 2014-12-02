<?php
include ('../../lib/LocalServiceCenter.class.php');

$source = isset($_GET['source']) ? $_GET['source'] : false ;
$type = isset($_GET['types']) ? $_GET['types'] : 'get_data' ;

if ($source) {
    unset($_GET['source']);
    unset($_GET['_']);
    unset($_GET['key']);
    unset($_GET['types']);
    
    foreach ((array)$_GET as $k => $value) {
        if ($value == 'false') {
            $_GET[$k] = false;
        }
        if ($value == 'true') {
            $_GET[$k] = true;
        }
    }
    
    $data = LocalServiceCenter::instance($source)
        ->args($_GET)
        ->$type();
    
} else {
    
    echo '接口名称有误！';
    
}

?>

<div>
    <pre><?php print_r($data);?></pre>
</div>
<div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal" aria-hidden="true">关闭</a>
</div>
<script>
void function(j){
    j(".closeBtn").click(function(){
        gDialog.fClose();
    });
}(jQuery);
</script>