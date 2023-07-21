<form method="post" action="/Practice/Laravel/laravelapp/public/hello/rest/remove">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>message: </th><td>{{$form->message}}</td></tr>
        <tr><th>url: </th><td>{{$form->url}}</td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
