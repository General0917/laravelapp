<form method="post" action="/Practice/Laravel/laravelapp/public/hello/rest/update">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>message: </th><td><input type="text" name="message" value="{{$form->message}}"></td></tr>
        <tr><th>url: </th><td><input type="text" name="url" value="{{$form->url}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
