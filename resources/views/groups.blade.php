<table width="50%" align="center" border="1">
    @foreach($groups as $i=>$group)
    @if (($i % 4) == 0)
        @if ($i == 0)
            <tr>
        @else
            </tr><tr>
        @endif
    @endif
        <td align="center">
            <a href="/groups/{{$group->id}}">
                <div><img src="{{$group->image}}" width="64" height="64"></img></div>
                <span style="text-align: center">{{$group->name}}</span>
            </a>
        </td>
        @if ($i + 1 == count($groups))
    </tr>
    @endif
    @endforeach
</table>
