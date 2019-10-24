<div class="itemsContainer">
    @foreach($items as $item)
        <table border="1" height="100%">
            <tr>
                <td height="180">
                    <img src="{{$item->image}}"></img>
                </td>
            </tr>
            <tr>
                <td >
                    <div style="text-overflow: ellipsis; width: 180px;overflow: hidden; font-family: Arimo;font-size: smaller">{{$item->name}}</div>
                </td>
            </tr>
            <tr>
                <td height="10%" style="background-color: #413d29; border-radius: 15px 50px; padding: 10px 0; text-align: center;">
                    <a href="{{route('cart.add', ['group_id' => $item->group_id, 'item_id' => $item->id])}}" style="color:white; font-size: small; text-decoration: none;font-family: 'Comic Sans MS' ">В КОРЗИНУ</a>
                </td>
            </tr>
        </table>
    @endforeach
</div>
