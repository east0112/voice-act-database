@extends("layouts.parentMobile")
@section("content")
<div class="col s10 push-s1">
  <div class="card">
    <div class="card-image">
      <img src="images/home001.png">
      <span class="card-title" style ="font-size:30px"></span>
    </div>
    <div class="card-content">
      <p style ="font-size:25px">「inaminfo」は、声優・舞台女優として活躍する伊波杏樹さんのイベントやラジオ、雑誌等の出演情報をまとめた非公式ファンサイトです。</p>
    </div>
    <div class="card-action">
      <a href="about" style="font-size:25px">当サイトについて</a>
    </div>
  </div>
</div>
<div class="col s10 push-s1">
    <div class="card">
        <div class="card-content">
        <span class="card-title" style="font-size:30px">今月の予定</span>

        <table class="striped" style="font-size:25px">
            <thead>
                <tr>
                    <th class="dateCol">日時</th>
                    <th class="typeCol">種類</th>
                    <th class="nameCol">タイトル</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>2019-07-15</td>
                <td>ラジオ</td>
                <td><a href="/library/event/5">アッパレ伊波！1名様やってまーす 7月15日放送分</a></td>
              </tr>
              <tr>
                <td>2019-07-13</td>
                <td>番組出演</td>
                <td><a href="/library/event/4">音楽の日2019</a></td>
              </tr>
        </table
        </div>
      <div class="card-action">
        <a href="about"  style="font-size:25px">詳細を見る</a>
      </div>
    </div>
</div>
<div class="col s10 push-s1">
    <div class="card">
        <div class="card-content"  style="font-size:25px">
        <span class="card-title" style="font-size:30px">更新履歴</span>
        <p>履歴１</p>
        <p>履歴２</p>
        <p>履歴３</p>
        </div>
    </div>
</div>
@endsection