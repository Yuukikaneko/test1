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

   





<!--ハンバーガーメニューのプログラム-->

<!--ハンバーガーメニューのプログラムここまで-->


<!--遷移のボタンプログラム-->
<div class="currents"><a href="acti">トロフィー</a></div>
<div class="current"><a href="/activity/rev">レビュー</a></div>
  
<!--遷移のボタンプログラムここまで-->
<hr>

<!--トロフィー、一覧プログラム-->




<div class="h1"><h1>トロフィー</h1></div>
<hr>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/script.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="omutuprice.css">

</head>

<body>
        <form>
                <div class="search-box brand">
                        <ul>
                                <li><input type="radio" name="brand" value="チワワ" id="chihuahua"><label for="chihuahua"
                                                class="label">すべて</label></li>
                                <li><input type="radio" name="brand" value="柴犬" id="shibainu"><label for="shibainu"
                                                class="label">連続記録</label></li>
                                                
                                <li><input type="radio" name="brand" value="ブルドック" id="bulldog"><label for="bulldog"
                                                class="label">走行距離</label></li>
                                <li><input type="radio" name="brand" value="ポメラニアン" id="pomeranian"><label
                                                for="pomeranian" class="label">個人記録</label></li>
                        </ul>
                </div>


                <div class="search-box size">
                        <ul>
                                <li><input type="radio" name="size" value="白色" id="white"><label for="white"
                                                class="label">今週</label>
                                </li>
                                <li><input type="radio" name="size" value="茶色" id="brown"><label for="brown"
                                                class="label">今月</label>
                                </li>
                                <li><input type="radio" name="size" value="黒色" id="black"><label for="black"
                                                class="label">今年</label>
                                </li>
                        </ul>
                </div>
                <div class="reset">
                        <input type="reset" name="reset" value="リセット" class="reset-button">
                </div>
        </form>
        <ul class="list">
        <li class="list_item list_toggle" data-brand="チワワ" data-size="白色"><img src="../images/image17.jpg" ><p>1週連続ラン達成</p></li>

                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色" ><img src="../images/image17.jpg"><p>2週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色" ><img src="../images/image17.jpg"><p>3週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色" ><img src="../images/image17.jpg"><p>4週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色" ><img src="../images/image17.jpg"><p>5週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色"><img src="../images/image9.jpg"><p>20Km達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="茶色" data-type="大人"><img src="../images/image9.jpg" ><p>1Km達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="黒色" data-type="赤ちゃん"><img src="../images/image9.jpg"　 ><p>3Km達成</p></li>
                <li class="list_item list_toggle" data-brand="チワワ" data-size="黒色" data-type="大人"><img src="../images/image9.jpg"><p>5Km達成</p></li>
                <li class="list_item list_toggle" data-brand="柴犬" data-size="白色" data-type="赤ちゃん"><div class="item"><img src="../images/image17.jpg" ><p>1週連続ラン達成</p>
                <li class="list_item list_toggle" data-brand="柴犬" data-size="茶色" data-type="赤ちゃん"><img src="../images/image17.jpg"　 ><p>2週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="柴犬" data-size="茶色" data-type="大人"><img src="../images/image17.jpg"><p>3週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="柴犬" data-size="黒色" data-type="大人"><img src="../images/image17.jpg" ><p>4週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="柴犬" data-size="黒色" ><img src="../images/image17.jpg" ><p>5週連続ラン達成</p></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="白色" data-type="赤ちゃん"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="白色" data-type="大人"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="茶色" data-type="赤ちゃん"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="茶色" data-type="大人"><img
                               ></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="黒色" data-type="赤ちゃん"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ブルドック" data-size="黒色" data-type="大人"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ポメラニアン" data-size="白色" data-type="赤ちゃん"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ポメラニアン" data-size="白色" data-type="大人"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ポメラニアン" data-size="茶色" data-type="赤ちゃん"><img
                                ></li>
                <li class="list_item list_toggle" data-brand="ポメラニアン" data-size="茶色" data-type="大人"><img
                                ></li>
                <li class="list_item list_toggle no_list"></li>

        </ul>
        <ul class="list no_list">
                <li class="list_item list_toggle nothing"><img
                                src="https://drive.google.com/uc?export=view&id=1GOJC2n-DpEaev-29lNoGfTzvnV6VbnOt"
                                alt=""></li>
        </ul>
</body>







<script>
$(function() {
  $('input[type="radio"]').change(function() {
    if (
      $('input[value="柴犬"]').prop("checked") == true &&
      $('input[value="白色"]').prop("checked") == true &&
      $('input[value="大人"]').prop("checked") == true
    ) {
      $(".no_list li").css("display", "block");
    } else if (
      $('input[value="柴犬"]').prop("checked") == true &&
      $('input[value="黒色"]').prop("checked") == true &&
      $('input[value="赤ちゃん"]').prop("checked") == true
    ) {
      $(".no_list li").css("display", "block");
    } else if (
      $('input[value="ポメラニアン"]').prop("checked") == true &&
      $('input[value="黒色"]').prop("checked") == true &&
      $('input[value="赤ちゃん"]').prop("checked") == true
    ) {
      $(".no_list li").css("display", "block");
    } else if (
      $('input[value="ポメラニアン"]').prop("checked") == true &&
      $('input[value="黒色"]').prop("checked") == true &&
      $('input[value="大人"]').prop("checked") == true
    ) {
      $(".no_list li").css("display", "block");
    } else {
      $(".no_list li").css("display", "none");
    }
    $(".reset .reset-button").click(function() {
      $(listItem).removeClass(hideClass);
    });
  });
});

/**
 * チェックボックスがクリックされた瞬間を拾うコード
 **/
$(function() {
  $(".label").click(function() {
    $(".list li").removeClass("list_toggle");
  });
  if ($(".list li").hasClass("list_toggle")) {
    $(".reset .reset-button").click(function() {
      $(".list li").addClass("list_toggle");
    });
  }
});

/**
 * 絞り込み機能
 **/
var searchBox = ".search-box"; // 絞り込む項目を選択するエリア
var listItem = ".list_item"; // 絞り込み対象のアイテム
var hideClass = "is-hide"; // 絞り込み対象外の場合に付与されるclass名

$(function() {
  // 絞り込み項目を変更した時
  $(document).on("change", searchBox + " input", function() {
    search_filter();
  });
});

/**
 * リストの絞り込みを行う
 */
function search_filter() {
  // 非表示状態を解除
  $(listItem).removeClass(hideClass);
  for (var i = 0; i < $(searchBox).length; i++) {
    var name = $(searchBox)
      .eq(i)
      .find("input")
      .attr("name");
    // 選択されている項目を取得
    var searchData = get_selected_input_items(name);
    // 選択されている項目がない、またはALLを選択している場合は飛ばす
    if (searchData.length === 0 || searchData[0] === "") {
      continue;
    }
    // リスト内の各アイテムをチェック
    for (var j = 0; j < $(listItem).length; j++) {
      // アイテムに設定している項目を取得
      var itemData = $(listItem)
        .eq(j)
        .data(name);
      // 絞り込み対象かどうかを調べる
      if (searchData.indexOf(itemData) === -1) {
        $(listItem)
          .eq(j)
          .addClass(hideClass);
      }
    }
  }
}

/**
 * inputで選択されている値の一覧を取得する
 * @param  {String} name 対象にするinputのname属性の値
 * @return {Array}       選択されているinputのvalue属性の値
 */
function get_selected_input_items(name) {
  var searchData = [];
  $("[name=" + name + "]:checked").each(function() {
    searchData.push($(this).val());
  });
  return searchData;
}
</script>


  
<!--トロフィー、一覧プログラムここまで-->
  

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
@endsection





