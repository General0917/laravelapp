<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Restdata;
use App\Models\Person;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body { font-size:16pt; color:#999; }
// h1 { font-size: 100pt; text-align:right; color:#eee; margin: -40px; 0px; -50px; 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt) {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller {
    // public function index() {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Index') . $style . $body
    //             . tag('h1', 'Index') . tag('p', 'this is Index page')
    //             . '<a href="/hello/other">go to Other page</a>'
    //             . $end;

    //     return $html;
    // }

    // public function other() {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Other') . $style . $body
    //             . tag('h1', 'Other') . tag('p', 'this is Other page')
    //             . $end;

    //     return $html;
    // }

    // public function __invoke() {
    //     return <<<EOF
    //     <html>
    //     <head>
    //     <title>Hello</title>
    //     <style>
    //     body { font-size:16pt; color:#999; }
    //     h1 { font-size: 30pt; text-align:right; color:#eee; margin: -15px; 0px; 0px; 0px; }
    //     </style>
    //     </head>
    //     <body>
    //         <h1>Single Action</h1>
    //         <p>これは、シングルアクションコントローラのアクションです。</p>
    //     </body>
    //     </html>
    //     EOF;
    // }

    /*
    public function index(Request $request, Response $response) {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
            body { font-size:16pt; color:#999; }
            h1 { font-size: 120pt; text-align:right; color:#fafafa; margin: -50px; 0px; -120px; 0px; }
        </style>
        </head>
            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
        </html>
        EOF;

            $response->setContent($html); // HTTPコンテンツを引数の値に変更するメソッド

            // print $request->url(); // アクセスしたURLを返すメソッド
            // print $request->fullUrl(); // アクセスしたURLを完全な形で返すメソッド
            // print $request->path(); // アクセスしたURLのドメイン下のパス部分だけを返すメソッド

            // print $response->status(); // HTTPレスポンスstatus codeを返すメソッド
            // print $response->content(); // HTTPコンテンツを取得するメソッド

            return $response;
    }
    */

    // public function index() {
    //     return view('hello.index');
    // }

    // public function index() {
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。'
    //     ];
    //     return view('hello.index',$data);
    // }

    // public function index($id='zero') {

    //     $nick = null;
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。',
    //         'id' => $id,
    //         'nick' => $this->gat_nick($id)
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function gat_nick(int $id) : string {
    //     $arch_types = [
    //         [ 'model_num' => 102, 'nick' => "DUEL" ],
    //         [ 'model_num' => 103, 'nick' => "BUSTER" ],
    //         [ 'model_num' => 105, 'nick' => "STRIKE" ],
    //         [ 'model_num' => 207, 'nick' => "BLITZ" ],
    //         [ 'model_num' => 303, 'nick' => "AEGIS" ]
    //     ];

    //     $search_gat = null;

    //     foreach ($arch_types as $gat_series) {
    //         if ($gat_series['model_num'] == $id) {
    //             $search_gat = $gat_series;
    //             break;
    //         }
    //     }

    //     if ($search_gat) {
    //         $nick = $search_gat['nick'];
    //     } else {
    //         $nick = 'Not a GAT series';
    //     }

    //     return $nick;
    // }

    // public function index(Request $request) {
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。',
    //         'id' => $request->id,
    //         'nick' => $this->gat_nick($request->id)
    //     ];

    //     return view('hello.index', $data);
    // }

    /*
    public function gat_nick($id) : string {
        $arch_type = [
            [ 'model_num' => 102, 'nick' => 'DUEL', 'pilot' => 'Yzak Jule' ],
            [ 'model_num' => 103, 'nick' => 'BUSTER', 'pilot' => 'Dearka Elthman' ],
            [ 'model_num' => 105, 'nick' => 'STRIKE', 'pilot' => 'Kira Yamato' ],
            [ 'model_num' => 207, 'nick' => 'BLITZ', 'pilot' => 'Nicol Amarfi'],
            [ 'model_num' => 303, 'nick' => 'AEGIS', 'pilot' => 'Athrun Zala' ]
        ];

        $serch_gat_result = null;

        foreach ($arch_type as $gat_series) {
            if ($gat_series['model_num'] == $id) {
                $serch_gat_result = $gat_series;
                break;
            }
        }

        if ($serch_gat_result) {
            $nick = $serch_gat_result['nick'];
        } else {
            $nick = 'Non NickName';
        }

        return $nick;
    }

    public function get_pilot($id) : string {
        $arch_type = [
            [ 'model_num' => 102, 'nick' => 'DUEL', 'pilot' => 'Yzak Jule' ],
            [ 'model_num' => 103, 'nick' => 'BUSTER', 'pilot' => 'Dearka Elthman' ],
            [ 'model_num' => 105, 'nick' => 'STRIKE', 'pilot' => 'Kira Yamato' ],
            [ 'model_num' => 207, 'nick' => 'BLITZ', 'pilot' => 'Nicol Amarfi'],
            [ 'model_num' => 303, 'nick' => 'AEGIS', 'pilot' => 'Athrun Zala' ]
        ];

        $serch_gat_result = null;

        foreach ($arch_type as $gat_series) {
            if ($gat_series['model_num'] == $id) {
                $serch_gat_result = $gat_series;
                break;
            }
        }

        if ($serch_gat_result) {
            $pilot = $serch_gat_result['pilot'];
        } else {
            $pilot = 'Non Pilot';
        }

        return $pilot;
    }

    public function get_model_num($id) : string {
        $arch_type = [
            [ 'model_num' => 102, 'nick' => 'DUEL', 'pilot' => 'Yzak Jule' ],
            [ 'model_num' => 103, 'nick' => 'BUSTER', 'pilot' => 'Dearka Elthman' ],
            [ 'model_num' => 105, 'nick' => 'STRIKE', 'pilot' => 'Kira Yamato' ],
            [ 'model_num' => 207, 'nick' => 'BLITZ', 'pilot' => 'Nicol Amarfi'],
            [ 'model_num' => 303, 'nick' => 'AEGIS', 'pilot' => 'Athrun Zala' ]
        ];

        $search_gat_result = null;

        foreach ($arch_type as $gat_series) {
            if ($gat_series['model_num'] == $id) {
                $search_gat_result = $gat_series;
                break;
            }
        }

        if ($search_gat_result) {
            $model_num = $search_gat_result['model_num'];
        } else {
            $model_num = 'Non model num';
        }

        return $model_num;
    }
    */

    // public function index() {
    //     $data = [
    //         'msg' => 'これはBladeを利用したサンプルです。'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function index() {
    //     $data = [
    //         'msg' => 'お名前を入力してください。'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $msg = $request->msg;

    //     $data = [
    //         'msg' => 'こんにちは、' . $msg . 'さん！！'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function index(Request $request) {
    //     $data = [
    //         'pilot' => $this->get_pilot($request->id),
    //         'id' => $this->get_model_num($request->id),
    //         'nick' => $this->gat_nick($request->id)
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $data = [
    //         'pilot' => $this->get_pilot($request->id),
    //         'id' => $this->get_model_num($request->id),
    //         'nick' => $this->gat_nick($request->id)
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index() {
    //     return view('hello.index');
    // }

    // public function post(Request $request) {
    //     $data = [
    //         'msg' => $request -> msg
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index() {
    //     $data = [
    //         'one',
    //         'two',
    //         'three',
    //         'four',
    //         'five'
    //     ];

    //     return view('hello.index', ['data' => $data]);
    // }

    // public function index() {
    //     $data = [
    //         [ 'model_num' => 102, 'nick' => 'DUEL', 'pilot' => 'Yzak Jule' ],
    //         [ 'model_num' => 103, 'nick' => 'BUSTER', 'pilot' => 'Dearka Elthman' ],
    //         [ 'model_num' => 105, 'nick' => 'STRIKE', 'pilot' => 'Kira Yamato' ],
    //         [ 'model_num' => 207, 'nick' => 'BLITZ', 'pilot' => 'Nicol Amarfi'],
    //         [ 'model_num' => 303, 'nick' => 'AEGIS', 'pilot' => 'Athrun Zala' ]
    //     ];

    //     return view('hello.index', ['data' => $data]);
    // }

    // public function index() {
    //     return view('hello.index', ['message' => 'Hello!!']);
    // }

    // public function index(Request $request) {
    //     return view('hello.index', ['data'=>$request->data]);
    // }

    // public function index(Request $request) {
    //     return view('hello.index');
    // }

    // public function index(Request $request) {
    //     $data = [
    //         'msg' => 'フォームを入力：'
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $validate_rule = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0, 150',
    //     ];
    //     $data = [
    //         'msg' => '正しく入力されました！！'
    //     ];
    //     $this->validate($request, $validate_rule);
    //     return view('hello.index', $data);
    // }

    // public function post(HelloRequest $request) {
    //     $data = [
    //         'msg' => '正しく入力されました。'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function index(Request $request) {
    //     $validate_rule = [
    //         'id' => 'required',
    //         'pass' => 'required',
    //     ];

    //     $query_data = [
    //         'id' => '207',
    //         'pass' => 'BLITZ'
    //     ];

    //     $validator = Validator::make($request->query(), $validate_rule);
    //     // $validator = Validator::make($request->query(), $query_data);

    //     if ($validator->fails()) {
    //         $msg = 'クエリに問題があります。';
    //     } else {
    //         $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
    //     }

    //     $data = [
    //         'msg' => $msg
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $validate_rule = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0, 150',
    //     ];

    //     $data = [
    //         'msg' => '正しく入力されました！！'
    //     ];

    //     $validator = Validator::make($request->all(), $validate_rule);

    //     if ($validator->fails()) {
    //         return redirect('/hello')->withErrors($validator)->withInput();
    //     }

    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $validate_rule = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0, 150',
    //     ];

    //     $messages = [
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で入力してください。',
    //         'age.between' => '年齢は0~150の間で入力してください。'
    //     ];

    //     $data = [
    //         'msg' => '正しく入力されました！！'
    //     ];

    //     $validator = Validator::make($request->all(), $validate_rule, $messages);

    //     if ($validator->fails()) {
    //         return redirect('/hello')->withErrors($validator)->withInput();
    //     }

    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $validate_rule = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric',
    //     ];

    //     $messages = [
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で入力してください。',
    //         'age.min' => '年齢は0歳以上で入力してください。',
    //         'age.max' => '年齢は200歳以下で入力してください。'
    //     ];

    //     $data = [
    //         'msg' => '正しく入力されました！！'
    //     ];

    //     $validator = Validator::make($request->all(), $validate_rule, $messages);

    //     $validator->sometimes('age', 'min:0', function($input) {
    //         return !is_int($input->age);
    //     });

    //     $validator->sometimes('age', 'max:200', function($input) {
    //         return !is_int($input->age);
    //     });

    //     if ($validator->fails()) {
    //         return redirect('/hello')->withErrors($validator)->withInput();
    //     }

    //     return view('hello.index', $data);
    // }

    // public function index(Request $request) {
    //     $data = [
    //         'msg' => 'フォームを入力してください。'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function post(HelloRequest $request) {
    //     $data = [
    //         'msg' => '正しく入力されました！！'
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function index(Request $request) {
    //     if ($request->hasCookie('msg')) {
    //         $msg = 'Cookie: ' . $request->cookie('msg');
    //     } else {
    //         $msg = '※クッキーはありません。';
    //     }

    //     return view('hello.index', ['msg' => $msg]);
    // }

    // public function post(Request $request) {
    //     $validate_rule = [
    //         'msg' => 'required',
    //     ];

    //     $this->validate($request, $validate_rule);

    //     $msg = $request->msg;

    //     $response = response()->view('hello.index',['msg' => '「' . $msg . '」をクッキーに保存しました。']);

    //     $response->cookie('msg', $msg, 100);

    //     return $response;
    // }

    // public function index(Request $request) {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     if (isset($request->id)) {
    //         $param = ['id' => $request->id];
    //         $items = DB::select('select * from people where id = :id', $param);
    //     } else {
    //         $items = DB::select('select * from people');
    //     }

    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     $items = DB::table('people')->get();

    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     $items = DB::table('people')->orderBy('age', 'asc')->get();

    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     $items = DB::table('people')->simplePaginate(5);
    //     return view('hello.index', ['items' => $items]);
    // }

    // public function index(Request $request) {
    //     $sort = $request->sort;

    //     // 以下はDBクラスを利用した場合の記載方法（DBのテーブル情報を取得する。）
    //     // $items = DB::table('people')->orderBy($sort, 'asc')->simplePaginate(5);

    //     // 以下はModelsを利用した場合の記載方法（DBのテーブル情報を取得する。）
    //     $items = Person::orderBy($sort, 'asc')->simplePaginate(5);

    //     $param = [
    //         'items' => $items,
    //         'sort'  => $sort,
    //     ];

    //     return view('hello.index', $param);
    // }

    public function index(Request $request) {
        $sort = $request->sort;

        $items = Person::orderBy($sort, 'asc')->paginate(5);

        $param = [
            'items' => $items,
            'sort' => $sort
        ];

        return view('hello.index', $param);
    }

    public function post(Request $request) {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request) {
        return view('hello.add');
    }

    // public function create(Request $request) {
    //     $param = [
    //         'name' => $request->name,
    //         'mail' => $request->mail,
    //         'age' => $request->age,
    //     ];

    //     DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);

    //     return redirect('/hello');
    // }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($param);

        return redirect('/hello');
    }

    // public function edit(Request $request) {
    //     $param = [
    //         'id' => $request->id,
    //     ];

    //     $item = DB::select('select * from people where id = :id', $param);

    //     return view('hello.edit', ['form' => $item[0]]);
    // }

    // public function update(Request $request) {
    //     $param = [
    //         'id' => $request->id,
    //         'name' => $request->name,
    //         'mail' => $request->mail,
    //         'age' => $request->age
    //     ];

    //     DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);

    //     return redirect('/hello');
    // }

    public function edit(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();

        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')
             ->where('id', $request->id)
             ->update($param);

        return redirect('/hello');
    }

    // public function del(Request $request) {
    //     $param = [
    //         'id' => $request->id,
    //     ];

    //     $item = DB::select('select * from people where id = :id', $param);

    //     return view('hello.del', ['form' => $item[0]]);
    // }

    // public function remove(Request $request) {
    //     $param = [
    //         'id' => $request->id,
    //     ];

    //     DB::delete('delete from people where id = :id', $param);

    //     return redirect('/hello');
    // }

    public function del(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();

        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request) {
        DB::table('people')
             ->where('id', $request->id)->delete();

        return redirect('/hello');
    }

    // public function show(Request $request) {
    //     $id = $request->id;

    //     $item = DB::table('people')->where('id', $id)->first();

    //     // print_r($item);

    //     return view('hello.show', ['item' => $item]);
    // }

    // public function show(Request $request) {
    //     $id = $request->id;

    //     $items = DB::table('people')->where('id', '<=', $id)->get();

    //     // print_r($items);

    //     return view('hello.show', ['items' => $items]);
    // }

    // public function show(Request $request) {
    //     $name = $request->name;

    //     $items = DB::table('people')
    //          ->where('name', 'like', '%' . $name . '%')
    //          ->orWhere('mail', 'like', '%' . $name . '%')
    //          ->get();

    //     // print_r($items);

    //     return view('hello.show', ['items' => $items]);
    // }

    // public function show(Request $request) {
    //     $min = $request->min;
    //     $max = $request->max;

    //     $items = DB::table('people')->whereRaw('age >= ? and age <= ?', [$min, $max])->get();

    //     print_r($items);

    //     return view('hello.show', ['items' => $items]);
    // }

    public function show(Request $request) {
        $page = $request->page;
        $items = DB::table('people')
             ->offset($page * 3)
             ->limit(3)
             ->get();

        print_r($items);

        return view('hello.show', ['items' => $items]);
    }

    public function rest(Request $request) {
        return view('hello.rest');
    }

    public function edit_rest(Request $request) {
        // $item = DB::table('restdata')->where('id', $request->id)->first();
        $restdata = Restdata::find($request->id);

        if ($request->id != null) {
            // edit?id=primary keyの状態でURLのクエリ指定がされている場合は、編集用フォームに遷移する。
            return view('hello.edit_rest', ['form' => $restdata]);
        } else {
            // editのみの場合は、登録フォームに遷移する。
            return view('hello.rest');
        }

        // return view('hello.edit_rest', ['form' => $item]);
    }

    public function update_rest(Request $request) {
        // トークンを削除する前に必要なデータを取得する
        $restdata = Restdata::find($request->id);
        $form = $request->all();

        // トークンを削除
        unset($form['_token']);

        // 更新処理を行う
        $restdata->fill($form)->save();

        return redirect('/rest');
    }

    public function delete_rest(Request $request) {
        // $item = DB::table('restdata')->where('id', $request->id)->first();
        $restdata = Restdata::find($request->id);

        if ($request->id != null) {
            // edit?id=primary keyの状態でURLのクエリ指定がされている場合は、削除用フォームに遷移する。
            return view('hello.delete_rest', ['form' => $restdata]);
        } else {
            // deleteのみの場合は、登録フォームに遷移する。
            return view('hello.rest');
        }
    }

    public function remove_rest(Request $request) {
        Restdata::find($request->id)->delete();

        return redirect('/rest');
    }

    public function ses_get(Request $request) {
        $sesdata = $request->session()->get('msg');

        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request) {
        $msg = $request->input;
        $request->session()->put('msg', $msg);

        return redirect('hello/session');
    }

}
