@extends('home.layout.main')
    @section('content')
    <div class="r_box">
      @foreach($posts as $post)
        <li><i><a href="{{ $post->id }}/post"><img src="images/1.jpg"></a></i>
          <h3><a href="{{ $post->id }}/post">{{ $post->title }}</a></h3>
          <p>{{ $post->contents }}</p>
        </li>
      @endforeach
        <div class="pagelist"><a class="allpage"><b>99</b></a>&nbsp;&nbsp;<a href="#" class="curPage">1</a>&nbsp;&nbsp;<a href="#" onclick="page(2)">2</a>&nbsp;&nbsp;<a href="#" onclick="page(3)">3</a>&nbsp;&nbsp;<a href="#" onclick="page(4)">4</a>&nbsp;&nbsp;<a href="#" onclick="page(5)">5</a>&nbsp;&nbsp;<a href="#" onclick="page(6)">6</a>&nbsp;&nbsp;<a href="#" onclick="page(7)">7</a>&nbsp;&nbsp;<a href="#" onclick="page(8)">8</a>&nbsp;&nbsp;<a href="#" onclick="page(9)">9</a>&nbsp;&nbsp;<a href="#" onclick="page(2)">下一页</a></div>
    </div>
@endsection