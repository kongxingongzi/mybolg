<!doctype html>
<html>
<head>
<meta charset="gbk">
<title>首页_杨青个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/m.css" rel="stylesheet">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
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
  @include('home.layout.leftsider')   
  @yield('content')
</article>
  @include('home.layout.footer')   


</body>
</html>
