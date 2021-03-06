<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./application/admin\view\generate_index.html";i:1548300616;s:42:"./application/admin\view\index_header.html";i:1493194503;s:42:"./application/admin\view\index_footer.html";i:1529044280;}*/ ?>
<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">
<title>后台管理</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="renderer" content="webkit">
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="__ADMIN__/layui/css/layui.css">
<link rel="stylesheet" href="__ADMIN__/css/admin.css">
<script type="text/javascript" src="__ADMIN__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__ADMIN__/layui/layui.js"></script>
</head>
<body>
<div class="fly-panel fly-panel-user">
  <div class="tpt-admin">
    <fieldset class="layui-elem-field layui-field-title">
      <legend>生成购物卡</legend>
    </fieldset>
    <form class="layui-form">
      <div class="layui-form-item">
        <label class="layui-form-label">购物卡张数</label>
        <div class="layui-input-block">
          <input type="text" name="zhangshu" placeholder="请输入内容" required lay-verify="required" autocomplete="off" class="layui-input">
        </div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">购物卡金额</label>
        <div class="layui-input-block">
    	    <input type="text" name="money" placeholder="请输入内容" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-form-item">
        <div class="layui-input-block">
    	  <button class="layui-btn" lay-submit="" lay-filter="generate_add">立即生成</button>
          <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">
  <p><a style="position: absolute;color: #FFF;display: none;" href="#">三二一网络（321KEJI.CN）</a></p>
</div>
<script type="text/javascript">
layui.use(['form'],function(){
  var form = layui.form()
  ,jq = layui.jquery;
  
  //提交
  form.on('submit(generate_add)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("generate/add"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("generate/index"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });
})
</script>
</body>
</html>