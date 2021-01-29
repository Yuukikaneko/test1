<?php

namespace App\Http\Controllers;
use App\infomation;
use App\Grades;
use App\Event;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  public function index(Request $request)
  {
    $items = Infomation::orderBy('info_id', 'desc')->get();
    return view('homepage.homepage',['items' => $items]);
  }
  
  public function event(Request $request)
  {
    $data = Event::all();
    $items = DB::table('grades')->get();
    $sorts = DB::table('grades')->orderBy("run", 'desc')->paginate(5);
    $param = [
      'data' => $data,
      'items' => $items,
      'sorts' => $sorts,
    ];
    return view('event.Event', $param);
  }

  public function info(Request $request)
  {
    $info = Infomation::where('info_id',$request->id)->first();
    return view('infomation.info', ['info' => $info]);
  }

  function connect_db()
{
    $dsn = 'mysql:host=localhost;dbname=sample;charset=utf8';
    $username = 'root';
    $password = 'password';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    return new PDO($dsn, $username, $password, $options);
}

/**
 * insert
 * @param string $sql
 * @param array $arr
 * @return int lastInsertId
 */
function insert($sql, $arr = [])
{
    $pdo = connect_db();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arr);
    return $pdo->lastInsertId();
}

/**
 * select
 * @param string $sql
 * @param array $arr
 * @return array $rows
 */
function select($sql, $arr = [])
{
    $pdo = connect_db();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arr);
    return $stmt->fetchAll();
}

/**
 * htmlspecialchars
 * @param string $string
 * @return $string
 */
function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}
}