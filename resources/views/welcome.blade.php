<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }
        #home{
            height: 100vh;
            background-color: rgb(244, 234, 234);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        .buttoncontainer{
            display: flex;
            gap: 2rem;
        }
        button{
            padding: .7rem 1.5rem;
            border-radius: .3rem;
            background-color: blue;
            color: white;
            border: 0;
        }
        h1{
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div id="home">
        <h1>Jquery and Bootstrap Practise</h1>
        <div class="buttoncontainer">
            <a href="{{route('Bhome')}}"><button>Bootstrap</button></a>
            <a href="{{route('Jhome')}}"><button>JQuery</button></a>
            <a href="{{route('vikas.create')}}"><button>Vikas Gates</button></a>
        </div>
    </div>
</body>
</html>