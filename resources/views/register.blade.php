
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
</head>
<style>

    html, body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#008cba;
        height:100%;
    }
    .container{
       height:100%;
       display:flex;
       align-items:center;
       justify-content:center;
    }
    .content{
        background-color:white;
        width:500px;
        height:500px;
    }
    img{
        width: 100%;
        height: 25%;
    }
    .form-title{
        padding:10px 40px 0px;
    }
    form{
        padding:0px 40px;
    }
    input[type=text], [type=email]{
        border: none;
        border-bottom: 1px solid black;
        outline:none;
        width:100%;
        margin: 8px 0;
        padding:10px 0;
    }
    input[type=number]{
        border: none;
        border-bottom: 1px solid black;
        outline:none;
        margin: 8px 0;
        padding:5px 0;
    }
    input :hover {
        background-color: red;
    }
    select{
        border: none;
        border-bottom: 1px solid black;
        outline:none;
        margin: 8px 0;
        padding:5px 0;
        width:50%;
    }
    .beside{
        display:flex;
        justify-content: space-between;
    }
    button{
        color:#ffffff;
        background-color: #4caf50;
        height:40px;
        width:25%;
        margin-top:15px;
        cursor: pointer;
        border:none;
        border-radius:2%;
        outline:none;
        text-align:center;
        font-size:16px;
        text-decoration:none;
        -webkit-transition-duration:0.4s;
        transition-duration:0.4s;
    }
    button:hover{
        background-color:#333333;
    }
    </style>

<body>
    <div class="container">
        <div class="content">
           <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
                <h1 class="form-title">Register Here</h1>
                <form  enctype="multipart/form-data" action="{{ route("register") }}" method="POST">
                    @csrf
                   <input name="name" type="text" placeholder="NAME">

                    <input name="email" type="email" placeholder="EMAIL ADDRESS">
                    {{-- <input type="password" placeholder="PASSWORD "> --}}
                    <input name="password" type="text" placeholder="PASSWORD"><br>
                    <button type="button"><input style="background-color: transparent; border: 0; color:white; font-weight:bolder" type="submit" name="submit" placeholder="Login" ></button>
                    <a href="/login"><button style="font-weight:bolder" name="submit" type="button">Login</button></a>

                </form>
            </div>
     </div>
</body>
</html>
