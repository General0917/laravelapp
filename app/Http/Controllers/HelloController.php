<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function index() {
        return view('hello.index', ['message' => 'Hello!!']);
    }
}
