<?php
/*
echo $cart;
echo "<br>";
echo $items;
*/
?>
<table width="50%" align="center" border="2" style="margin-top: 10px">
    <th>Название</th>
    <th>Изображение</th>
    <th>Количество</th>
    <th>Удалить</th>
    @foreach ($cart as $order)

        <tr>
            <td width="50%">{{$order->items->name}}</td>
            <td><img src="{{$order->items->image}}" alt="" height="100"></td>
            <td align="=center">{{$order->count}}</td>
            <td align="center"><a href="/cart/delete/{{$order->id}}">
                    <img src="https://cdn0.iconfinder.com/data/icons/galaxy-open-line-color-iii/200/trash-512.png" alt="" width="32">
                </a>
            </td>
        </tr>
        @endforeach
</table>
