<div class="groupsContainer">
    @foreach($groups as $group)
        <a href="{{route('items', $group->id)}}">
            <table class="groupBox">
                <tr>
                    <td class="groupBoxImageContainer">
                        <img class="groupBoxImage" src="{{$group->image}}"></img>
                    </td>
                </tr>
                <tr>
                    <td class="groupBoxName">{{$group->name}}</td>
                </tr>
            </table>
        </a>
    @endforeach
</div>
