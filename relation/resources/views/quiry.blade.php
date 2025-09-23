 <table border="2px">
    <tr>
        <th>Name</th>
        <th>dept</th>
        <th>roll</th>
        <th>view</th>
    </tr>
    @foreach($stu as $s)
    <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->dept}}</td>
        <td>{{$s->roll}}</td>
        <td> <a href="{{route('user',$s->id)}}"> view </a></td>
    </tr>
    @endforeach

 </table>


