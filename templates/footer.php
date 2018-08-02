    <footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
            <p class="text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, necessitatibus omnis? Cum voluptatem consequatur aliquam quae ea ut facere autem et, iste deleniti! Odit, rerum. Commodi soluta perferendis labore itaque?
            </p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">Horario</h3>
            <p>Lun - Vie: 9 AM - 7 PM</p>
            <p>Sábado: 10 AM - 2 PM</p>
            <p>Dominego: Cerrado</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">Contacto</h3>
            <p>66 East Sunnyslope Avenue</p>
            <p>Lansdowne, PA 19050</p>
            <nav class="sociales text-center">
              <ul>
                <li>
                  <a href="www.facebook.com"><span class="sr-only"> facebook </span></a>
                </li>
                <li>
                  <a href="www.twitter.com"><span class="sr-only"> Twitter </span></a>
                </li>
                <li>
                  <a href="www.instagram.com"><span class="sr-only"> Instagram </span></a>
                </li>
                <li>
                  <a href="www.pinterest.com"><span class="sr-only"> Pinterest </span></a>
                </li>
                <li>
                  <a href="www.youtube.com"><span class="sr-only"> YouTube </span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <hr class="w-100">
        <p class="text-center copyright w-100">Carolina Spa & Salón 2018. Todos los derechos reservados.</p>

      </div>
    </footer>

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php
  // Guarda todo el contenido a un archivo
  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);
  // Envíar al navegador
  ob_end_flush();
?>