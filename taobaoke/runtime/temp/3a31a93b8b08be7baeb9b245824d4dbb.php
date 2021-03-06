<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./application/admin\view\config_index.html";i:1548299566;s:42:"./application/admin\view\index_header.html";i:1493194503;s:42:"./application/admin\view\index_footer.html";i:1529044280;}*/ ?>
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
    <form class="layui-form">
      <div class="layui-tab">
        <ul class="layui-tab-title">
          <li class="layui-this">基本设置</li>
          <li>常用设置</li>
          <li>采集设置</li>
          <li>其它设置</li>
        </ul>
        <div class="layui-tab-content" style="padding: 20px 0 0 0;">
          <div class="layui-tab-item layui-show">
            <div class="layui-form-item">
              <label class="layui-form-label">标题</label>
              <div class="layui-input-block">
          	    <input type="text" name="WEB_TIT" value="<?php echo config('web.WEB_TIT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">网址</label>
              <div class="layui-input-block">
          	    <input type="text" name="WEB_COM" value="<?php echo config('web.WEB_COM'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">作者</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_AUT" value="<?php echo config('web.WEB_AUT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">QQ</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_QQ" value="<?php echo config('web.WEB_QQ'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">备案</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_ICP" value="<?php echo config('web.WEB_ICP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label" style="white-space: nowrap;">二维码</label>
              <div class="layui-input-block">
                <input type="file" name="file" class="layui-upload-file" id="qr-code" style="float: left;">
                <input type="text" name="WEB_QRCODE" value="<?php echo config('web.WEB_QRCODE'); ?>" class="layui-input" style="position: absolute;left: 111px;top: 0px;width: 500px">
              </div>
            </div>            
            <div class="layui-form-item">
              <label class="layui-form-label">会员注册</label>
              <div class="layui-input-block">
                <input type="radio" name="WEB_REG" value="1" title="开启" <?php if(config('web.WEB_REG') == 1): ?>checked<?php endif; ?>>
                <input type="radio" name="WEB_REG" value="0" title="关闭" <?php if(config('web.WEB_REG') == 0): ?>checked<?php endif; ?>>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">发帖审核</label>
              <div class="layui-input-block">
                <input type="radio" name="WEB_OPE" value="0" title="开启" <?php if(config('web.WEB_OPE') == 0): ?>checked<?php endif; ?>>
          	    <input type="radio" name="WEB_OPE" value="1" title="关闭" <?php if(config('web.WEB_OPE') == 1): ?>checked<?php endif; ?>>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">PC站LOGO</label>
              <div class="layui-input-block">
                <input type="file" name="file" class="layui-upload-file" id="logo" style="float: left;">
                <input type="text" name="WEB_LOGO" value="<?php echo config('web.WEB_LOGO'); ?>" class="layui-input" style="position: absolute;left: 111px;top: 0px;width: 500px">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">社区LOGO</label>
              <div class="layui-input-block">
                <input type="file" name="file" class="layui-upload-file" id="forum-logo" style="float: left;">
                <input type="text" name="WEB_FORUMLOGO" value="<?php echo config('web.WEB_FORUMLOGO'); ?>" class="layui-input" style="position: absolute;left: 111px;top: 0px;width: 500px">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label" style="white-space: nowrap;">WAP站LOGO</label>
              <div class="layui-input-block">
                <input type="file" name="file" class="layui-upload-file" id="wap-logo" style="float: left;">
                <input type="text" name="WEB_WAPLOGO" value="<?php echo config('web.WEB_WAPLOGO'); ?>" class="layui-input" style="position: absolute;left: 111px;top: 0px;width: 500px">
              </div>
            </div>         
            <div class="layui-form-item">
              <label class="layui-form-label">关键词</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_KEY" value="<?php echo config('web.WEB_KEY'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">描述</label>
              <div class="layui-input-block">
          	    <textarea name="WEB_DES" placeholder="请输入内容" class="layui-textarea"><?php echo config('web.WEB_DES'); ?></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">统计代码</label>
              <div class="layui-input-block">
                <textarea name="WEB_TJCODE" placeholder="请输入内容" class="layui-textarea"><?php echo config('web.WEB_TJCODE'); ?></textarea>
              </div>
            </div>            
        	</div>
          <div class="layui-tab-item">
            <div class="layui-form-item">
              <label class="layui-form-label">PC模板</label>
              <div class="layui-input-block">
          	    <input type="text" name="WEB_TPT" value="<?php echo config('web.WEB_TPT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">WAP模板</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_WTPT" value="<?php echo config('web.WEB_WTPT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item" style="width: 300px;">
              <label class="layui-form-label">排序方式</label>
              <div class="layui-input-block">
                  <select name="WEB_SORT">
                    <option <?php if(config('web.WEB_SORT') == ''): ?>selected="selected"<?php endif; ?> value=" ">综合排序</option>
                    <option <?php if(config('web.WEB_SORT') == 'new'): ?>selected="selected"<?php endif; ?> value="new">发布时间从晚到早</option>
                    <option <?php if(config('web.WEB_SORT') == 'price'): ?>selected="selected"<?php endif; ?> value="price">价格从高到低</option>
                    <option <?php if(config('web.WEB_SORT') == 'hot'): ?>selected="selected"<?php endif; ?> value="hot">销量从高到低</option>
                    <option <?php if(config('web.WEB_SORT') == 'rate'): ?>selected="selected"<?php endif; ?> value="rate">折扣从高到低</option>
                    <option <?php if(config('web.WEB_SORT') == 'quan'): ?>selected="selected"<?php endif; ?> value="quan">券额从高到低</option>
                  </select>
              </div>
            </div>                        
            <div class="layui-form-item">
              <label class="layui-form-label">伪静态</label>
              <div class="layui-input-block">
          	    <input type="radio" name="WEB_URL" value="1" title="开启" <?php if(config('web.WEB_URL') == 1): ?>checked<?php endif; ?>>
                <input type="radio" name="WEB_URL" value="0" title="关闭" <?php if(config('web.WEB_URL') == 0): ?>checked<?php endif; ?>>
              </div>
            </div>
            <div class="tpt_item">
            	<input type="hidden" name="WEB_TAG" value="<?php echo config('web.WEB_TAG'); ?>">
            	<div id="tpt-sel" class="tpt-sels" style="margin-top: 20px;">
            		<span style="margin-bottom: 5px;float: left;margin-left: 110px;">
            		<?php if(config('web.WEB_TAG') != ''): $arr=explode(',', config('web.WEB_TAG'));foreach ($arr as $k=>$v){echo "<a href='javascript:;'>$v<em></em></a>";}endif; ?>
            		</span>
            		<div class="layui-form-item" style="margin-bottom: 20px;">
            			<label class="layui-form-label">标签</label>
            			<div class="layui-input-block">
            				<input id="tpt-input" type="text" value="" autocomplete="off" class="layui-input" style="width: 400px;float: left;margin-right: 20px;">
            				<button class="layui-btn" id="tpt_btn" type="button" style="background: #FF5722;">添加标签</button>
            			</div>
            		</div>
            	</div>
            </div>
      	  </div>              
          <div class="layui-tab-item">
            <div class="layui-form-item">
              <label class="layui-form-label">商品有效期</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_EXPTIME" value="<?php echo config('web.WEB_EXPTIME'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">建议72小时，仅对采集到的无过期时间商品有效。</div>
              </div>
            </div> 
            <div class="layui-form-item">
              <label class="layui-form-label">全自动采集</label>
              <div class="layui-input-block">
          	    <input type="radio" name="WEB_ADC" value="1" title="开启" <?php if(config('web.WEB_ADC') == 1): ?>checked<?php endif; ?>>
                <input type="radio" name="WEB_ADC" value="0" title="关闭" <?php if(config('web.WEB_ADC') == 0): ?>checked<?php endif; ?>>
              </div>
            </div>            
            <div class="layui-form-item">
              <label class="layui-form-label">淘点金</label>
              <div class="layui-input-block">
                <textarea name="WEB_TDJ" placeholder="请输入内容" class="layui-textarea"><?php echo config('web.WEB_TDJ'); ?></textarea>
                <div class="layui-form-mid layui-word-aux">淘点金代码，转化无优惠券商品，若不采集无优惠券商品可不设置。<a href="http://yingzit.cn/trd/3.html" target="_blank">查看教程</a></div>
              </div>
            </div>            
            <div class="layui-form-item">
              <label class="layui-form-label">旺旺ID</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_TBUID" value="<?php echo config('web.WEB_TBUID'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">旺旺ID是你登陆阿里妈妈的账号的数字ID。<a href="http://yingzit.cn/forum.html" target="_blank">查看教程</a></div>
              </div>
            </div> 
            <div class="layui-form-item">
              <label class="layui-form-label">鹊桥PID</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_QQPID" value="<?php echo config('web.WEB_QQPID'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">请填写从鹊桥活动中获取到的PID，否则将不能获得鹊桥高佣金。<a href="http://yingzit.cn/forum.html" target="_blank">查看教程</a></div>
              </div>
            </div> 
            <div class="layui-form-item">
              <label class="layui-form-label">高佣金PID</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_YHQPID" value="<?php echo config('web.WEB_YHQPID'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">高佣金PID必须要设置，否则部分商品采集不到优惠券和无法优惠券链接转化。<a href="http://yingzit.cn/forum.html" target="_blank">查看教程</a></div>
              </div>
            </div> 
            <div class="layui-form-item">
              <label class="layui-form-label">大淘客KEY</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_DTKKEY" value="<?php echo config('web.WEB_DTKKEY'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">大淘客Appkey，如果你不使用大淘客采集可以不设置。<a href="http://yingzit.cn/trd/4.html" target="_blank">查看教程</a></div>
              </div>
            </div> 
            <div class="layui-form-item">
              <label class="layui-form-label">阿里妈妈COOKIE</label>
              <div class="layui-input-block">
                <textarea name="WEB_MMCOOKIE" placeholder="请输入内容" class="layui-textarea"><?php echo config('web.WEB_MMCOOKIE'); ?></textarea>
                <div class="layui-form-mid layui-word-aux">阿里妈妈cookie，如果你需要采集优惠券和申请定向计划就需要设置。<a href="http://yingzit.cn/trd/6.html" target="_blank">查看教程</a></div>                
              </div>
            </div>  
            <div class="layui-form-item">
              <div class="layui-inline">
                <label class="layui-form-label">淘宝KEY</label>
                <div class="layui-input-inline" style="width: 200px;">
                  <input type="text" name="WEB_TBKEY" value="<?php echo config('web.WEB_TBKEY'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">淘宝SECREC</div>
                <div class="layui-input-inline" style="width: 200px;">
                  <input type="text" name="WEB_TBSECREC" value="<?php echo config('web.WEB_TBSECREC'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                </div>  
                <div class="layui-form-mid layui-word-aux">淘宝联盟接口，采集优惠券和淘口令时使用。<a href="http://yingzit.cn/forum.html" target="_blank">查看教程</a></div>    
              </div>
            </div>
          </div>
          <div class="layui-tab-item">
            <div class="layui-form-item">
              <label class="layui-form-label">微信公众号Token</label>
              <div class="layui-input-block">
                <input type="text" name="WEB_WXTOKEN" value="<?php echo config('web.WEB_WXTOKEN'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">Token为自定义内容，但必须为英文或数字，长度为3-32字符，和微信公众号平台填写Token一致。<a href="http://yingzit.cn/trd/5.html" target="_blank">查看教程</a></div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">微信公众号问候语</label>
              <div class="layui-input-block">
                <textarea name="WEB_WXINFO" placeholder="请输入内容" class="layui-textarea"><?php echo config('web.WEB_WXINFO'); ?></textarea>
                <div class="layui-form-mid layui-word-aux">首次关注微信公众号问候语。</div>                 
              </div>
            </div>            
          </div>  
        </div>
      </div>
      <div class="layui-form-item">
        <div class="layui-input-block">
        <button class="layui-btn" lay-submit="" lay-filter="config_add">立即提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">
  <p><a style="position: absolute;color: #FFF;display: none;" href="#">三二一网络（321KEJI.CN）</a></p>
</div>
<script type="text/javascript">
$(function() {
	$('#tpt-input').keydown(function(e) {
		if (e.which === 13) {
			$("#tpt_btn").click();
			e.preventDefault();
			return false;
		}
	});
	$("#tpt-sel").on('click', 'a>em', function() {
		var name = "WEB_TAG";
		var tag = $(this).parent().text();
		$(this).parent().remove();
		var tags = new Array();
		$("#tpt-sel").find('a').each(function() {
			tags.push($(this).text());
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$("#tpt_pre a:contains('" + tag + "')").removeClass("selected");
	});
	$("#tpt_btn").click(function() {
		var name = "WEB_TAG";
		var tags = $.trim($("input[name=" + name + "]").val());
		if (tags !== "") {
			tags = tags.split(",");
		} else {
			tags = new Array();
		}
		var tag = $.trim($("#tpt-input").val());
		if (tag !== '' && $.inArray(tag, tags) === -1) {
			tags.push(tag);
			$("#tpt_pre a:contains('" + tag + "')").addClass("selected");
		}
		$("#tpt-sel").children('span').empty();
		$.each(tags, function(k, v) {
			$("#tpt-sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$("#tpt-input").val('');
	});
	$("#tpt_pre").on('click', 'a:not(.selected)', function() {
		var name = "WEB_TAG";
		var tags = $.trim($("input[name=" + name + "]").val());
		if (tags !== "") {
			tags = tags.split(",");
		} else {
			tags = new Array();
		}
		var tag = $.trim($(this).text());
		if (tag !== '' && $.inArray(tag, tags) === -1) {
			tags.push(tag);
		}
		$("#tpt-sel").children('span').empty();
		$.each(tags, function(k, v) {
			$("#tpt-sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$(this).addClass('selected');
	});
});
</script>
<script type="text/javascript">
layui.use(['form','element', 'upload'],function(){
  var form = layui.form()
  ,element = layui.element()
  ,jq = layui.jquery;

  layui.upload({
    url: '<?php echo url("upload/upimage"); ?>'
    ,elem:'#qr-code'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=WEB_QRCODE]').val(res.path);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  });
  
  layui.upload({
    url: '<?php echo url("upload/upimage"); ?>'
    ,elem:'#logo'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=WEB_LOGO]').val(res.path);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  });

    layui.upload({
    url: '<?php echo url("upload/upimage"); ?>'
    ,elem:'#forum-logo'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=WEB_FORUMLOGO]').val(res.path);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  });

  layui.upload({
    url: '<?php echo url("upload/upimage"); ?>'
    ,elem:'#wap-logo'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=WEB_WAPLOGO]').val(res.path);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  });    

  form.on('submit(config_add)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    console.log(param);
    return false;
    jq.post('<?php echo url("config/add"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("config/index"); ?>';
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