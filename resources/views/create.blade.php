<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>create</title>
</head>
<body>
<form action="store" method="post">
    <label for="name">name</label>
    <input type="text" name="name" value=""></br>

    <label for="email">email</label>
    <input type="text" name="email" value=""></br>

    <label for="avrage">avrage</label>
    <input type="text" name="avrage" value=""></br>
  
    <label for="number">number</label>
    <input type="text" name="number" value=""></br>

    <label for="gender">gender</label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</br>

    <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

    <label for=""></label>
    <input type="submit" name="submit" value="submit">

</form>
</body>
</html>