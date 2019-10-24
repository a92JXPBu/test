<!DOCTYPE html>
<html>
<head>
    <title>add group</title>
</head>
<body>
@if (isset($result))
    result={{$result}}
    @else
<form name="add_group" method="post">

    <input type="text" name="name">
    <input type="text" name="image">
    <input type="submit" value="Добавить">
</form>
@endif
</body>
</html>
