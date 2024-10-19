@props(['message'])
<tr @if($message['complaint']==1) style="background: #f46969" @endif>
    <td>{{$message['id']}}</td>
    <td>{{$message['message']}}</td>
    <td>{{$message['created_at']}}</td>
    <td>
        <form action="/complaint" method="post">
            @csrf
            <input type="text" name="id" value="{{$message['id']}}" hidden>
            <button>Пожаловаться</button>
        </form>
    </td>
</tr>
