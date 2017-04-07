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
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if(isset($post))
 <div class="form-group">
        <label for="name">Nombre</label>
        <ol><input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $post->name }}">
        </ol>
    </div>
    

    <div class="form-group">
        <label for="name">titulo</label>
        <ol><input type="text" name="title" class="form-control" placeholder="titulo" value="{{ $post->title }}">
   </ol> </div>
    <div class="form-group">
        <label for="name">Comentarios</label>
      
        <ol><textarea class="form-control" name="body" rows="4" cols="50" value="{{ $post->body }}"><?php echo $post->body ?></textarea></ol>
       

    </div>

@else
<div class="form-group">
        <label for="name">nombre</label>
        <ol><input type="text" name="name" class="form-control" placeholder="Nombre">
    </ol></div>


    <div class="form-group">
        <label for="name">Titulo</label>
        <ol><input type="text" name="title" class="form-control" placeholder="Titulo">
    </ol>
    </div>
    <div class="form-group">
    <label for="name">Comentarios</label>
     <ol><textarea class="form-control" name="body" rows="4" cols="50"></textarea></ol>

      <div>
          <form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
               
              </div>
        
</div>
    

@endif
</body>
</center>