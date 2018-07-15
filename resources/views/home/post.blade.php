<!doctype html>
<html>
<head>
<meta charset="gbk">
<title>首页_杨青个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/base.css" rel="stylesheet">
<link href="/css/index.css" rel="stylesheet">
<link href="/css/info.css" rel="stylesheet">
<link href="/css/m.css" rel="stylesheet">
<script src="/js/jquery.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="logo"><a href="/"><img src="/images/logo.png"></a></div>
  @include('home.layout.nav')
  <script>
window.onload = function ()
{
var obj=null;
var As=document.getElementById('nav').getElementsByTagName('a');
obj = As[0];
for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
obj=As[i];}
obj.id='selected'
}

</script> 
  <script type="text/javascript">

$(document).ready(function(e) {     
  t = $('.guanzhu').offset().top;

  mh = $('.infosbox').height();
  fh = $('.guanzhu').height();

  $(window).scroll(function(e){
    s = $(document).scrollTop();  
    if(s > t - 10){
      $('.guanzhu').css('position','fixed');
           $('.guanzhu').css('background','fff');
      if(s + fh > mh){
        $('.guanzhu').css('top',mh-s-fh+'px');  
      }       
    }else{
      $('.guanzhu').css('position','');
    }
    
  })
});

</script> 
</header>
<div class="mnav">
    <ul>
      <li><a href="index.html">首页</a></li>
      <li><a href="share.html">相册</a></li>
      <li><a href="list.html">日记</a></li>
      <li><a href="about.html">关于</a></li>
      <li><a href="gbook.html">留言</a></li>
      <li><a href="info.html">内容页</a></li>
      <li><a href="infopic.html">内容页</a></li>
    </ul>
  </div>
<article>
  @include('home.layout.lbox')
  <div class="infosbox">
    <div class="newsview">
      <h3 class="news_title">{{ $post->title }}</h3>
      <div class="bloginfo">
        <ul>
          <li class="author">作者：<a href="/">杨青</a></li>
          <li class="lmname"><a href="/">学无止境</a></li>
          <li class="timer">时间：{{ $post->created_at }}</li>
          <li class="view">4567人已阅读</li>
        </ul>
      </div>
      <div class="tags"><a href="/" target="_blank">个人博客</a> &nbsp; <a href="/" target="_blank">小世界</a></div>
      <div class="news_con">{{ $post->contents }}</div>
    </div>
    <div class="share">
      <p class="diggit"><a href="JavaScript:makeRequest('/e/public/digg/?classid=3&amp;id=19&amp;dotop=1&amp;doajax=1&amp;ajaxarea=diggnum','EchoReturnedText','GET','');"> 很赞哦！ </a>(<b id="diggnum"><script type="text/javascript" src="/e/public/ViewClick/?classid=2&id=20&down=5"></script>13</b>)</p>
    </div>
    <div class="nextinfo">
      <p>上一篇：<a href="/news/life/2018-03-13/804.html">作为一个设计师,如果遭到质疑你是否能恪守自己的原则?</a></p>
      <p>下一篇：<a href="/news/life/">返回列表</a></p>
    </div>
    <div class="news_pl">
      <h2>文章评论</h2>
      <ul>
        <div class="gbko"> </div>
      </ul>
    </div>
  </div>
</article>
<footer>
  @include('home.layout.footer')   
</footer>
</body>
</html>
