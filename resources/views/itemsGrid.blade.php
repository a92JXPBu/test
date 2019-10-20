<table width="50%" align="center">
    @foreach($items as $i=>$item)
        @if (($i % 4) == 0)
            @if ($i == 0)
                <tr align="center">
                    @else
                </tr><tr align="center">
                    @endif
                    @endif
                    <td style="border-style: dashed; border-color: green; border-radius: 10px;" width="100px" height="180px">
                            <table border="0" height="100%">
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
                                        <a href="/cart/add/{{$item->group}}:{{$item->id}}" style="color:white; font-size: small; text-decoration: none;font-family: 'Comic Sans MS' ">В КОРЗИНУ</a>
                                    </td>
                                </tr>
                            </table>
                        <!--
                            <div ">
                            </div>
                           -->

                    </td>
                    @if ($i + 1 == count($items))
                </tr>
            @endif
            @endforeach
</table>
