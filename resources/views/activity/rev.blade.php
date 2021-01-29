@extends('layouts.activityAteam')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" href=""></button></td>
   <meta charset="UTF-8">
  </head>
<!--折れ線グラフのプログラム-->
  <body>
  <h1>消費カロリー・走行距離</h1>
  <canvas id="myLineChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>


<div class="container" style="width:100%">
    <canvas id="canvas"></canvas>
</div>



<script>
window.onload = function() {
    ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: complexChartOption
    });
};
</script>



<script>
// とある4週間分のデータログ
var barChartData = {
    labels: ['8/26','8/27','8/28','8/29','8/30','8/31','9/1'],
    datasets: [
    {
        type: 'line',
        label: '消費カロリー(kcal)',
          data: [260,150,245,154,112,112,84],
          borderColor: "rgba(255,0,0,1)",
                pointBackgroundColor    : "rgba(254,97,132,0.8)",
                fill: false,
        yAxisID: "y-axis-1",// 追加
    },
    {
        type: 'bar',
        label: '走行距離(Km)',
          data: [10.4,2.8,4.7,2.9,2.1,2.1,1.6,],
          borderColor: "rgba(0,0,255,1)",
        backgroundColor : "rgba(54,164,235,0.5)",
        yAxisID: "y-axis-2",
    },
    ],
};
</script>



<script>
var complexChartOption = {
    responsive: true,
    scales: {
        yAxes: [{
            id: "y-axis-1",
            type: "linear", 
            position: "left",
            ticks: {
                max: 300,
                min: 0,
                stepSize: 20
            },
        }, {
            id: "y-axis-2",
            type: "linear", 
            position: "right",
            ticks: {
                max: 20,
                min: 0,
                stepSize: 2
            },
            gridLines: {
                drawOnChartArea: false, 
            },
        }],
    }
};
</script>

<!--折れ線グラフのプログラムここまで-->




  




<hr>

<div class="current"><a href="/acti">トロフィー</a></div>
<div class="currents"><a href="./rev">レビュー</a></div>
  

<hr>
<!--コメント表示させている-->
<table class="news">
    <tr>
        <th>先週</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->trophyname }}</td>
    </tr>
    @endforeach
</table>

<table class="news">
    <tr>
        <th>先月</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->trophyname }}</td>
    </tr>
    @endforeach
</table>
  
<table class="news">
    <tr>
        <th>去年</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->trophyname }}</td>
    </tr>
    @endforeach
</table>
<!--コメント表示させているここまで-->


<body>
      <main>
      <div class="box">
         <li><button class="home" href=""></button></li>
         <li><button class="activity" href=""></button></li>
         <li><button class="start" href=""></button></li>
         <li><button class="store" href=""></button></li>
      </div>
      </main>
  </body>
  
</html>
</div>
@endsection
