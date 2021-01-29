@extends('layouts.start2')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" onclick="location.href='mypage'"></button></td>
   <meta charset="UTF-8">
  </head>
  <body>
  <div class="result">
    <h2>RESULT<h2>
    <p class="km">走行距離</p>
    <p class="km2">{{ $item['km'] }}Km</p>
    <div class="data">
      <p>走行時間<br>
         {{ $item['time'] }}:00.000</p>
      <p>平均ペース<br>
         06:00.000</p>
      <p>消費カロリー<br>
         {{ $item['kcal'] }}Kcal</p>
    </div>
    <div class=data2>
    <p>1Kmごとのペース</p>
    <p><span>1Km</span>05:54.244</p>
    <p><span>2Km</span>06:05.928</p>
    <p><span>3Km</span>05:57.488</p>
    <p><span>4Km</span>06:02.165</p>
    <p><span>5Km</span>06:00.392</p>
    </div>
    <main>
      <a href="./start" class="btn btn-radius-solid btn--shadow">終了<i class="fas fa-angle-right fa-position-right"></i></a>
    </main>
  </div>
  </body>
</html>
</div>
@endsection