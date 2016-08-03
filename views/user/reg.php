<?php

echo <<<END

<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">

<meta charset="utf-8">
<script type="text/javascript"> 
    
    window._points=[+new Date()];

    
    function wx_main(mod){
        window._points&&(window._points[3]=+new Date());
    };

    window.wx={
    	uin:""||"0"
    };
</script>
 
          <script onerror="wx_loaderror(this)" type="text/javascript" src="../../js/jserr2e6474.js"></script>
<title>微信公众平台</title> 
<link href="https://res.wx.qq.com/mpres/htmledition/images/favicon218877.ico" rel="Shortcut Icon">
          <link onerror="wx_loaderror(this)" rel="stylesheet" type="text/css" href="../../css/layout_head2880f5.css">
          <link onerror="wx_loaderror(this)" rel="stylesheet" type="text/css" href="../../css/base2edfc1.css">
          <link onerror="wx_loaderror(this)" rel="stylesheet" type="text/css" href="../../css/lib2f613f.css">



		
          <link onerror="wx_loaderror(this)" rel="stylesheet" href="../../css/page_register2edfc1.css">
          <link rel="stylesheet" type="text/css" href="../../css/processor_bar218878.css">

          <link charset="utf-8" rel="stylesheet" href="../../css/dropdown2f12f7.css"><style></style></head>
    <body class="zh_CN" mycollectionplug="bind">
    	<div class="head" id="header">
			<script type="text/javascript">
    
    window._points&&(window._points[1]=+new Date());
</script>
<div class="head_box">
    <div class="inner wrp">
        <h1 class="logo"><a href="https://mp.weixin.qq.com/" title="微信公众平台"></a></h1>
                                <div class="account">
                                            </div>
                    </div>
</div>

		</div>
        <div id="body" class="body page_simple ">
            <div class="container_box">
                
<div class="col_main">
    <div class="main_bd">
        <div id="stepItems">
            <ul class="processor_bar grid_line">

                <li class="step grid_item size1of4 pprev">
                    <h4>1 基本信息</h4>
                </li>

                <li class="step grid_item size1of4 pprev">
                    <h4>2 邮箱激活</h4>
                </li>

                <li class="step grid_item size1of4 prev">
                    <h4>3 信息登记</h4>
                </li>

                <li class="no_extra step grid_item size1of4 current">
                    <h4>4 注册完成</h4>
                </li>

            </ul>
        </div>
        <div id="register"><div class="info_box">
		<div class="form_wrp">
			<form action="return:false" class="form" id="js_registerStep1" novalidate="novalidate">
				<fieldset class="frm_fieldset">
					<div class="frm_title mini_tips"><i class="icon_msg_mini info"></i>每个邮箱仅能申请一种帐号：公众号或企业号</div>
                    
					<div class="frm_control_group">
						<label for="" class="frm_label">邮箱</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="email" id="js_email" type="text" placeholder="" class="frm_input">
							</span>
							<p class="frm_tips">作为登录帐号，请填写未被微信公众平台注册，未被微信开放平台注册，未被个人微信号绑定的邮箱</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">密码</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="pw1" id="pw1" type="password" placeholder="" autocomplete="off" class="frm_input" onpaste="return false">
							</span>
							<p class="frm_tips">字母、数字或者英文符号，最短8位，区分大小写</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">确认密码</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="pw2" id="pw2" type="password" placeholder="" autocomplete="off" class="frm_input" onpaste="return false">
							</span>
							<p class="frm_tips">请再次输入密码</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">验证码</label>
						<div class="frm_controls" id="js_verifycodeImgArea"><div class="verifycode">
	<span class="frm_input_box"><input id="imgcode" name="imgcode" type="text" value="" class="frm_input"></span>
    <div class="verifyimg_wrp">
        <img src="./registered1_files/verifycode">
        <a href="javascript:;" class="changeVerifyCode">换一张</a>
    </div>
</div></div>
					</div>
				</fieldset>
				<div class="tool_area">
					<label for="js_agree" class="frm_control_checkbox frm_checkbox_label">
						<i class="icon_checkbox"></i>
						<input class="frm_checkbox" id="js_agree" name="agree" type="checkbox" value="">
						我同意并遵守<a href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=home/agreement_tmpl&type=info&lang=zh_CN" target="_blank">《倾说企业内部管理平台相关规定》</a>
					</label>
				</div>
				
				<div class="tool_bar border with_form">
                    <span class="btn btn_disabled btn_primary btn_input" id="js_nextBtn"><button type="submit" class="" disabled="">注册</button></span>
				</div>
			</form>
		</div>
		<div class="tips_show">
			<p>已有微信公众帐号？<a href="https://mp.weixin.qq.com/">立即登录</a></p>
		
		</div>
	</div></div>
    </div>
</div>

            </div>
        </div>
        <div class="foot" id="footer">
	<ul class="links ft">
					<li class="links_item no_extra"><a href="http://www.tencent.com/zh-cn/index.shtml" target="_blank">关于腾讯</a></li>
			<li class="links_item"><a href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=home/agreement_tmpl&type=info&lang=zh_CN&token=" target="_blank">服务协议</a></li>
			<li class="links_item"><a href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=business/faq_operation_tmpl&type=info&lang=zh_CN&token=" target="_blank">运营规范</a></li>
			<li class="links_item"><a href="https://mp.weixin.qq.com/cgi-bin/opshowpage?action=dispelinfo&lang=zh_CN&begin=1&count=9" target="_blank">辟谣中心</a></li>
			<li class="links_item"><a href="http://kf.qq.com/faq/120911VrYVrA1509086vyumm.html" target="_blank">客服中心</a></li>
                        			<li class="links_item"><a href="mailto:weixinmp@qq.com" target="_blank">联系邮箱</a></li>
            			<li class="links_item"><a href="https://mp.weixin.qq.com/acct/infringementlogin?action=getkey&lang=zh_CN" target="_blank">侵权投诉</a></li>
            				<li class="links_item"><p class="copyright">Copyright © 2012-2016 Tencent. All Rights Reserved.</p> </li>
	</ul>
    
	
</div>
<script type="text/javascript">
    //上报测速 --dom加载完成点
    window._points&&(window._points[2]=+new Date());
</script>


        、
        <script onerror="wx_loaderror(this)" type="text/javascript" src="./js/sea27d2ff.js"></script>  
        <script onerror="wx_loaderror(this)" type="text/javascript" src="./js/lib27616c.js"></script> 
        <script onerror="wx_loaderror(this)" type="text/javascript" src="./js/index29f4d5.js"></script> 
        


<script id="tpl_step1" type="text/html">
	<div class="info_box">
		<div class="form_wrp">
			<form action="return:false" class="form" id="js_registerStep1">
				<fieldset class="frm_fieldset">
					<div class="frm_title mini_tips"><i class="icon_msg_mini info"></i>每个邮箱仅能申请一种帐号：公众号或企业号</div>
                    
					<div class="frm_control_group">
						<label for="" class="frm_label">邮箱</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="email" id="js_email" type="text" placeholder="" class="frm_input">
							</span>
							<p class="frm_tips">作为登录帐号，请填写未被微信公众平台注册，未被微信开放平台注册，未被个人微信号绑定的邮箱</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">密码</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="pw1" id="pw1" type="password" placeholder="" autocomplete="off" class="frm_input" onpaste="return false">
							</span>
							<p class="frm_tips">字母、数字或者英文符号，最短8位，区分大小写</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">确认密码</label>
						<div class="frm_controls">
							<span class="frm_input_box">
								<input name="pw2" id="pw2" type="password" placeholder="" autocomplete="off" class="frm_input" onpaste="return false" >
							</span>
							<p class="frm_tips">请再次输入密码</p>
						</div>
					</div>
					
					<div class="frm_control_group">
						<label for="" class="frm_label">验证码</label>
						<div class="frm_controls" id="js_verifycodeImgArea"></div>
					</div>
				</fieldset>
				<div class="tool_area">
					<label for="js_agree" class="frm_control_checkbox">
						<i class="icon_checkbox"></i>
						<input class="frm_checkbox" id="js_agree" name="agree" type="checkbox" value="">
						我同意并遵守<a href="/cgi-bin/readtemplate?t=home/agreement_tmpl&type=info&lang=zh_CN" target="_blank">《微信公众平台服务协议》</a>
					</label>
				</div>
				
				<div class="tool_bar border with_form">
                    <span class="btn btn_disabled btn_primary btn_input" id="js_nextBtn"><button type="submit" class="" disabled>注册</button></span>
				</div>
			</form>
		</div>
		<div class="tips_show">
			<p>已有微信公众帐号？<a href="/">立即登录</a></p>
		
		</div>
	</div>
</script>

<script id="tpl_step2" type="text/html">
    <div class="mail_box">
        <div class="page_msg simple default">
            <div class="inner group">
                <div class="msg_icon_wrapper"><i class="icon_msg mail"></i></div>
                <div class="msg_content">
                    <h4>激活公众平台帐号</h4>
                    <p>
                    感谢注册！确认邮件已发送至你的注册邮箱 : <span id="js_confirmEmail"></span>。请进入邮箱查看邮件，并激活公众平台帐号。                    </p>
                    <p class="spacing">
                    <a href="javascript:;" id="js_loginEmail" class="btn btn_primary">登录邮箱</a>
                    </p>
                    <dl class="qa_list">
                        <dt>没有收到邮件？</dt>
                        <dd>1、请检查邮箱地址是否正确，你可以返回<a id="js_returnEmail" href="javascript:;">重新填写</a>。</dd>
                        <dd>2、检查你的邮件垃圾箱</dd>
                        <dd>3、若仍未收到确认，请尝试<a id="js_reSendEmail" href="javascript:;">重新发送</a></dd>
                    </dl>
                </div>
            </div>
        </div> 
    </div> 
</script>
END;

?>



        






	



<div class="faqscene" id="js_faqscene_p">

</div></body><style type="text/css" id="43606640519"></style></html>