<header class="masthead >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="header_class"> 
              <h1>Bienvenido <?= $usuario ?></h1> <br>
              <span>deseas escribir un nuevo articulo</span>
              <button class="btn btn-primary" style="
                margin-left: 150px;
                background: #f8bd0f;
                border-color: white;" id="btn-redactar">
                escribir
              </button>
              <div id="form-redactar">
                <form action="<?php base_url()?>article/guardar_articulo" method="post"style="  margin-top: 50px" class="d-flex flex-column">
                  <div class="form-group">
                    <label for="titulo">titulo del post</label>
                    <input type="text" class="form-control" id="titulo" name="post">  
                  </div>
                
                  <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                  </div>
                
                  <div class="form-group">
                    <label for="contenido">contenido</label>
                    <textarea class="form-control" id="contenido cols="30" rows="10" name="contenido"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary justify-content-end my-3">subir articulo</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
