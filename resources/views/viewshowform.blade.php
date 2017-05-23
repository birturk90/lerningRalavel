<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>create</title>
</head>
<body>
<form action="update" >
    <label for="name">name</label>
    <input type="text" name="name" value='{{$post["name"]}}'></br><br/>

    <label for="email">email</label>
    <input type="text" name="email" value='{{$post["email"]}}'></br><br/>

    <label for="avrage">avrage</label>
    <input type="text" name="avrage" value='{{$post["avrage"]}}'></br><br/>
  
    <label for="number">number</label>
    <input type="text" name="number" value='{{$post["number"]}}'></br><br/>

    <label for="gender">gender</label>
    <input type="text" name="gender" value='{{$post["gender"]}}'>


    <input type="hidden" name="id" value='{{$post["id"]}}'>

 </br><br/>
 
 

    

 </br><br/>
    <label for=""></label>
    <input type="submit" name="submit" value="ersal"><br/>
    


</form>

</body>
</html>