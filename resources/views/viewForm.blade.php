<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>create</title>
</head>
<body>
<form action="store" method="post">
    <label for="name">name</label>
    <input type="text" name="name" value='{{$a["name"]}}'> <label for="name">"{{$errors->first("name")}}"</label></br><br/>
    
    <label for="email">email</label>
    <input type="text" name="email" value='{{$a["email"]}}'> <label for="name">"{{$errors->first("email")}}"</label></br><br/>

    <label for="avrage">avrage</label>
    <input type="text" name="avrage" value='{{$a["avrage"]}}'> <label for="name">"{{$errors->first("avrage")}}"</label></br><br/>
  
    <label for="number">number</label>
    <input type="text" name="number" value='{{$a["number"]}}'> <label for="name">"{{$errors->first("number")}}"</label></br><br/>

    <label for="gender">gender</label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</br><br/>


    <label for=""></label>
    <input type="submit" name="submit" value="submit"><br/><br/>
 
</form>
</body>
</html>