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
h3{
    color:black;

}


        </style>
        
<body>

<div class="container">
    <h1>Temas</h1>
    <h4><a href="{{ route('posts.create') }}">Crear Post</a></h4>
    <hr>
<img src="asset{{ 'vital.png' }}">
    <div class="table-responsive">
        @if($data)
          
                @foreach($data as $row)
                    <tr>
                         <h3>Nombre</h3>
                        <label>{{ $row->name }}</label>
                        <h3>Titulo</h3>
                        <label>{{ $row->title }}</label>
                        <h3>contenido</h3>
                        <label>{{ $row->body }}</label>
                        <p>creado</p>
                        <label>{{ $row->created_at }}</label>
                        <td>
                            <a href="{{ route('posts.edit', $row->id) }}" class="btn btn-info">Editar</a>

                            <form action="{{ route('posts.destroy', $row->id) }}" method="post">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @endif
    </div>
</div>


</body>

</html>