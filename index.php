<?php include 'Kp2_Assets/header.php'; ?>

<div>
  <img src="Kp2_Assets/img/KupidosBanner-Corel.jpg" width="100%">
</div>


    <!-- Portfolio Start -->
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="container">
                  <div class="card">
                    <?php include_once('Kp2_Assets/categoriapanel.php'); ?>
                  </div>
                </div>
              </div>

              <div class="col-md-9">
                <div class="block">
                  <div class="portfolio-contant">

                    <ul id="portfolio-contant-active">                  
                    <!--Alert temporal-->
                      <small style="text-align:left">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Importante!</strong> <br>
                            1.- Puedes ver más productos pulsando en la categoria correspondiente a tu busqueda. <br>
                            2.- Realiza tu pedido con anticipación y consigue ofertas... ;)
                          </div>
                      </small>
                        <?php include 'Kp2_Assets/selectProducto.php'; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

<!-- Modals -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">New message</h4>
        </div>
        <div class="modal-body">
          <!--Formulario envio de parametro de busqueda en producto-->
          <form action="producto?" method="POST">
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
          <!--END Formulario envio de parametro de busqueda en producto-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
<!-- END Modals -->
    </body>
</html>

<?php include 'Kp2_Assets/footer.php'; ?>
<script>
  //script for modal
  $("#pop").on("click", function() {
     $("#imagepreview").attr("src", $("#imageresource").attr("src")); 
     $("#imagemodal").modal("show"); 
  });
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<!--Script from Disqus -->
<!--script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/60133/script.js');
</script-->