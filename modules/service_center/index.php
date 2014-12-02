<?php
    include ('getDate.php');
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title>Service Center</title>
<!-- <link rel="stylesheet" type="text/css" href="statics/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="statics/css/bootstrap-modal.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="statics/css/common.css"> -->

<!-- <script type="text/javascript" src="statics/js/jquery-1.7.2.min.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/bootbox.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/form.validate.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/bootstrap-modal.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/bootstrap-modalmana.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/modal.manager.plugi.js"></script> -->
<!-- <script type="text/javascript" src="statics/js/jshow.utils.js"></script> -->
<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/bootstrap-modal.css">
<link id="bootstrap_221" rel="stylesheet" type="text/css" class="library" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.1/css/bootstrap.min.css">

<script id="jquery_172" type="text/javascript" class="library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js"></script>
<script id="bootstrap_221" type="text/javascript" class="library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/bootbox.js"></script>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/form.validate.js"></script>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/bootstrap-modal.js"></script>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/bootstrap-modalmana.js"></script>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/modal.manager.plugi.js"></script>	
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/316/df6enwiz/jshow.utils.js"></script>
<style type="text/css">
tt {
	padding: 2px 4px;
	font-size: 90%;
	color: green;
	white-space: nowrap;
	background-color: #f9f2f4;
	border-radius: 4px;
	font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
}

.auto-height-body {
	max-height: 460px;
	_height: 460px;
	overflow-y: auto;
}

.message_remind_form {
	color: #999;
	margin: 7px 0 0 5px;
}

.message_remind_form.current {
	color: #333;
}

</style>
</head>
<body>
	<form style="padding: 30px;" role="form"
		action="<?php echo $_SERVER['REQUEST_URI'];?>" method="get">
		<div class="form-group">
			<label for="url" style="left">配置文件目录</label> <input class="form-control"
				style="width: 200px" type="text" id="url" name="url"
				value="<?php if ($_SERVER['HTTP_HOST'] != 'local.seeker.com') { echo 'config';} else {echo 'D:\workspace\bianfeng\apps\common\ServiceCenter\config';}?>" />
    		<button class="btn btn-success" type="submit">submit</button>
		</div>
		<div class="form-group"></div>
	</form>
	<table class="table table-striped">
		<thead>
			<tr>
				<td width="15%">接口</td>
				<td width="7%">接口测试</td>
				<td width="12%">接口描述</td>
				<td>接口参数<code>必须参数</code> <tt>可选</tt></td>
				<td>接口返回</td>
			</tr>
		</thead>
		<tbody>
                <?php
                foreach ( (array) $datas as $key => $data ) {
                    ?>
                <tr>
				<td width="15%"><code><?php
                    echo $data ['source'];
                    ?></code>
                </td>
				<td width="7%"><a href="#nogo" rev="<?php echo $key;?>" rel="<?php echo $data ['source'];?>"
					class="openDialog btn  btn-info">测试</a>
				</td>
				<td width="12%"><?php
                    if (isset($data ['source']) && isset($units [$data ['source']])){
                        echo $units [$data ['source']];
                    }
                    ?>
                </td>
				<td>
                        <?php foreach ((array)$data['args'] as $v) { ?>
                            <?php
                        list ($arg, $need) = explode('#', $v);
                        if ($need) {
                            echo '<code>';
                            echo $arg;
                            echo '</code>';
                        } else {
                            echo '<tt>';
                            echo $arg;
                            echo '</tt>';
                        }
                        ?>
                        <?php }?>
                </td>
				<td width="10%"><code><?php
                    if (isset($data ['code_map'])){
                        $maps = array_keys($data ['code_map']);
                        echo implode(',', $maps);
                    }
                    ?></code></td>
			</tr>        
                <?php }?>
            </tbody>
	</table>
	<script>
        void function(j){
        	j("#bootbox-alert").click(function(){
        		bootbox.alert('你点击了alert按钮',function(){
        		   message_box.show('这是bootbox alert方法后的回调函数，也可以不要！');
        		});
        		
        	});
        	j("#bootbox-confirm").click(function(){
        		bootbox.confirm('你确定执行这个操作么？',function(rs){
        			if(rs){
        				message_box.show('你点击了确定按钮！','success');
        			}else{
        			 message_box.show('你取消了本次操作！');
        			}
        		});
        		
        	});
        	
        	j(".openDialog").click(function(){
        		gDialog.fCreate({
            		title:'API:' + $(this).attr('rel'), 
            		url:'statics/files/testAPI.php?key=' + $(this).attr('rev')
                } ).show();
        	});
        	
        	j("#openManyDialog").click(function(){
        	  		gDialog.fCreate({title:'这是多层弹窗窗口',url:'/uploads/rs/316/df6enwiz/manywindow.json'}).show();
        	});
        	j("#formDialog").click(function(){
        	  gDialog.fCreate({title:'表单验证窗口',url:'/uploads/rs/316/df6enwiz/formValidate.json'}).show();
        	
        	});
        }(jQuery);
    </script>
</body>
</html>