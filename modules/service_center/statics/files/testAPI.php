<?php
include ('../../getDate.php');
    
$key = isset($_GET['key']) ? intval($_GET['key']) : false;

if ($key !== false) {
    $testapi = $datas[$key];
} else {
    echo 'error';
    die();
}

?>
<div class="modal-body">
	<form style="padding: 30px;" role="form" id="testform"
		action="<?php echo $_SERVER['REQUEST_URI'];?>" method="get">
		<div class="form-group">
		    <table>
		    <?php 
		        foreach ((array)$testapi['args'] as $value) {
                    list ($arg, $need) = explode('#', $value);
		    ?>
	        <tr>
                <td>
			<?php 
                if ($need) {
                    echo '<code>';
                    echo $arg;
                    echo '</code>';
                } else {
                    echo '<tt>';
                    echo $arg;
                    echo '</tt>';
                }
                
                $arg = preg_replace("/^\(.+\)/is", "", $arg);
                $arg = substr($arg, 1);
			?>
                </td>
	            <td>
			        <input class="form-control" style="width: 200px" placeholder="<?php echo $arg;?>" type="text"  name="<?php echo $arg;?>" value="" />
	            </td>
	        </tr>
			<?php 
			}
			?>
			
			<tr>
			    <td>测试方式</td>
			    <td>
                    <select name="types">
                        <option selected="selected" value="get_data">get_data</option>
                        <option value="get_response">get_response</option>
                        <option value="get_code">get_code</option>
                        <option value="get_message">get_message</option>
                    </select>
			    </td>
			</tr>
			
		    </table>
		</div>
		
        <div class="modal-footer">
            <a href="#" class="btn"  data-dismiss="modal" aria-hidden="true">关闭</a>
    		<a class="btn btn-success" id="openDialog2">提交测试</a>
    		<input type="hidden" value="<?php echo $key;?>" name="key" />
    		<input type="hidden" value="<?php echo $testapi['source'];?>" name="source" />
        </div>
	</form>   
</div>


<script>
void function(j){
	j("#openDialog2").click(function(){
		gDialog.fCreate({
		    title:"测试结果",
		    url:'statics/files/testAPIResult.php',
		    param : $("#testform").serialize()
		}).show();
	});
    j(".closeBtn").click(function(){
        gDialog.fClose();
    });
}(jQuery);
</script>