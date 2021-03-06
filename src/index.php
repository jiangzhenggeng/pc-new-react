<!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml lang="zh-CN">
<head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <title><?php if(Yii::app()->controller->id=='index'){ echo '极果-全球好物消费推荐平台';}else{ echo CHtml::encode($this->pageTitle).'-极果';}?></title>
    <meta name="description" content="<?php echo $this->description;?>"  />
    <meta name="keywords" content="<?php echo $this->keywords;?>"  />
    <meta name="mobile-agent" content="format=html5;url=http://m.jiguo.com/" />
    <link rel="dns-prefetch" href="//www.jiguo.com">
    <link rel="dns-prefetch" href="//cdn.jiguo.com">
    <link rel="dns-prefetch" href="//s1.jiguo.com">
    <link rel="dns-prefetch" href="//pic.jiguo.com">
    <link rel="stylesheet" href="http://cdn.jiguo.com/static/Pc/develope/style/css/base.css">
    <link rel="stylesheet" href="<?php echo CDN_PC_ROOT;?>/style/css/base.css">
</head>
<body>

<!--主体-->
<div id="app"></div>

<script>
  var _hmt = _hmt || [];
  (function() {
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?79716ddfe2f8942d32e445516e53e672";
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(hm, s);
  })();

  (function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https') {
	  bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else {
	  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
  })();
      <?php
      $array_data = array_merge(json_decode(CJSON::encode($blog), true), array(
          'content' => $blogfild->message,
          'img' => json_decode($blogfild->img, true) ? json_decode($blogfild->img, true) : array()
      ));
      if ($array_data['addtime']) {
          $array_data['addtime'] = date('m-d H:i:s', $array_data['addtime']);
      }
      $array_data = json_encode($array_data);
      ?>
		window.__ORDER_META__ = <?php echo json_encode($order_meta);?>;
		window.__ORDER_META__ = window.__ORDER_META__ ? window.__ORDER_META__ : {};
		window.__BLOG_DATA__ = <?php echo $array_data;?>;
		window.__BLOG_DATA__ = window.__BLOG_DATA__ ? window.__BLOG_DATA__ : {};
		window.__ORDER_DATA__ = <?php echo json_encode($order);?>;
		window.__BLOG_ID__ = window.__BLOG_DATA__ && window.__BLOG_DATA__.blogid;

 //
 // window.__ORDER_META__ = null;
 // window.__ORDER_META__ = window.__ORDER_META__?window.__ORDER_META__:{};
 // window.__BLOG_DATA__ = {"blogid":"25826","pid":null,"status":"0","title":"哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈","cover":"","banner":null,"tag":null,"addtime":"09-21 16:47:52","updatetime":"0","pidnum":"0","displayorder":"-2","praise":"0","reply":"0","stow":"0","author":"\u55ef\u54ea","uid":"1367028","productinfo":null,"type":"7","issync":"","feature":null,"ischecked":"0","describe":null,"isgift":"0","orderid":null,"merit":[],"defect":[],"jinghua":"0","button":null,"button_link":null,"listorder":"0","video":"0","first_check_status":"0","first_check_remark":"","is_original":"1","groupid":"2","is_featured":"0","cid1":"0","cid2":"0","cid3":"0","read_num":"0","score":"0.0","score_num":"0","score_meta":null,"is_article_jingxuan":"0","is_edit":"0","content":"<ul class=\" list-paddingleft-2\" style=\"list-style-type: disc;\"><li><p>121212<\/p><\/li><\/ul><ol class=\" list-paddingleft-2\" style=\"list-style-type: decimal;\"><li><p>2121323<\/p><\/li><li><p>\u5b9a\u65f6\u8fbe\u5927\u591a<\/p><\/li><li><p><br\/><\/p><\/li><\/ol>","img":[]};
 // window.__BLOG_DATA__ = window.__BLOG_DATA__?window.__BLOG_DATA__:{};
 // window.__ORDER_DATA__ = [{"orderid":"201705062229514702","uid":"1367028","groupid":"2","eventid":"1066","mid":"5885","username":"\u5218\u5148\u751f","tel":"15001294148","province":"\u5317\u4eac\u5e02","city":"\u6d77\u6dc0\u533a","county":"","address":"\u6e05\u534e\u540c\u65b9\u79d1\u6280\u5e7f\u573aD\u5ea7\u4e1c\u697c\u5929\u53f0","postalcode":"100089","addtime":"1494244327","updatetime":"1494080991","endtime":"1494253791","isblog":null,"meta":"","status":"3","is_send":"1","type":"0","payment":"wx","paytime":"0","remarks":"","isjiguo":"1","ecompany":"EMS","eorderid":"\u8fd9\u91cc\u5e94\u8be5\u662f\u6570\u5b57\u5427","price":"0.00","deposit":"0.00","update":"0","product_remarks":"","model":"","send_time":"1494471249","refund_type":"0","refund_status":"0","refund_check_message":"","refund_message":"0","refund_id":"0","refund_amount":"0.00","spec_id":"516","spec_name":"\u65e0\u89c4\u683c","storage_id":"1328","receive_text":"","receive_pic":"","jiguo_address":"","jiguo_receiver_name":"","jiguo_tel":"","return_message":"","send_blog_time":"0","is_send_blog":"0","is_blog_write":"0","old_status":null,"send_price":"0.00","title":"\u68ee\u6d77\u585e\u5c14 IE800\u4e0d\u8981\u94b1\u624b\u6162\u65e0----\u514d\u8d39\u8bd5\u7528","url":"http:\/\/www.jiguo.com\/user\/post.html?type=2&orderid=201705062229514702","displayorder":"-2","event_title":"\u68ee\u6d77\u585e\u5c14 IE800\u4e0d\u8981\u94b1\u624b\u6162\u65e0","cover":"55e6b9f2-91e7-456f-b26e-a5efca0a47bb","buying_name":"\u514d\u8d39\u8bd5\u7528","draft_num":"2"},{"orderid":"201708222036397453","uid":"1367028","groupid":"2","eventid":"1323","mid":"6760","username":"\u5218\u5148\u751f","tel":"15001294148","province":"\u6cb3\u5317","city":"\u5510\u5c71\u5e02","county":"\u8def\u5357\u533a","address":"\u6e05\u534e\u540c\u65b9\u79d1\u6280\u5e7f\u573aD\u5ea7\u4e1c\u697c\u697c\u9876","postalcode":"044000","addtime":"1503405399","updatetime":"1505112508","endtime":"1503406299","isblog":"0","meta":"{\"price\":\"0.07\",\"deposit\":\"0.01\"}","status":"3","is_send":"1","type":"1","payment":"wxcode_app","paytime":"1503405445","remarks":" ","isjiguo":"1","ecompany":"111","eorderid":"1234567654321","price":"0.07","deposit":"0.01","update":"0","product_remarks":"","model":null,"send_time":"1505112508","refund_type":"0","refund_status":"0","refund_check_message":"","refund_message":"","refund_id":"0","refund_amount":"0.00","spec_id":"0","spec_name":"","storage_id":"4312","receive_text":"","receive_pic":"","jiguo_address":"","jiguo_receiver_name":"","jiguo_tel":"","return_message":"","send_blog_time":"1506235708","is_send_blog":"0","is_blog_write":"0","old_status":null,"send_price":"12.00","title":"0822\u6d4b\u5c0f\u7a0b\u5e8f\u8f6c\u53d1-\u591a\u4e2a\u6298\u6263\u73a9\u6cd5----6\u6298\u62a2\u5148\u7528","url":"http:\/\/www.jiguo.com\/user\/post.html?type=2&orderid=201708222036397453","displayorder":"-2","event_title":"0822\u6d4b\u5c0f\u7a0b\u5e8f\u8f6c\u53d1-\u591a\u4e2a\u6298\u6263\u73a9\u6cd5","cover":"3e676a91-9b92-430b-a266-40196694dfd3","buying_name":"6\u6298\u62a2\u5148\u7528","draft_num":"3"}];
 // window.__BLOG_ID__ = window.__BLOG_DATA__ && window.__BLOG_DATA__.blogid;

</script>
</body>
</html>