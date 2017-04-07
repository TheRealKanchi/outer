 <style>

           body {
                 background-color: white;
                
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <center>
<body>

<div class="container">
    <h1>Registro de Usuarios</h1>
    <h4><a href="{{ route('posts.index') }}">Lista de comentarios</a></h4>
    <hr>

    <form method="post" action="/posts/{{ $post->id }}">
        <input name="_method" type="hidden" value="PUT">
        @include('post.form')
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>


</body>
</center>
</html>
