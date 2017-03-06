				</div>
			</section>		
	    </aside> 	
<!-- Fin Cuerpo -->

<!-- JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jquery libs -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        
         <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="../../plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
        The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="../../plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../../js/filter.js"></script>
        <script type="text/javascript" src="../../plugins/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="../../plugins/counterup/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="../../plugins/FlexSlider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="../../js/magnific-popup.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.selectBox.js"></script>
        <script type="text/javascript" src="../../js/custom.js"></script>

<script>
            CKEDITOR.replace( 'nota_nts' );
        </script>
		<script >
                  //Es DATE PICKER
                  jQuery.extend( jQuery.fn.pickadate.defaults, {
                    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
                    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
                    weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
                    weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
                    weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
                    today: 'Hoy',
                    clear: 'Borrar',
                    close: 'Cerrar',
                    firstDay: 1
    
});

                   $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 5, // Creates a dropdown of 15 years to control year
                    labelMonthNext: 'Mes próximo',
                    labelMonthPrev: 'Mes anterior',
                    labelMonthSelect: 'Selecciona un mes',
                    labelYearSelect: 'Selecciona un año',                  
                    disable: [    6, 7  ],
                    format: 'yyyy/mm/dd',
                    formatSubmit: 'yyyy/mm/dd'
                  });
                   
                   //MOSTRAR U OCULTAR
                    $(document).ready(function(){ 
                        $('#MosOcu').on('click',function(){
                        $('#uno').toggle();
                         $('select').material_select('destroy');
                        $('select').material_select();
                       });
                    });
                    function mostrar(){
                        document.getElementById('uno').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('uno').style.display='none';
                    }
                   </script>
                   

                   <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large red" href="paneladm.php?p=inicio">
                      <i class="material-icons">home</i>
                    </a>
                    <ul>
                      <?php 
                                if ($_SESSION['fk_tipousuario']!= 2 && $_SESSION['fk_tipousuario'] != 3 && $_SESSION['fk_tipousuario'] != 4 && $_SESSION['fk_tipousuario'] != 6){ 
                            ?>
                      <li><a class="btn-floating red"  onclick="window.location='?p=transparencia'"> <i class="material-icons">find_in_page</i></a></li>
                      <?php 
                                } 
                                if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {                                
                            ?>
                      <li><a class="btn-floating yellow darken-1"  onclick="window.location='?p=difusion'"><i class="material-icons">announcement</i></a></li>
                      <?php }
                                  if ($_SESSION['fk_tipousuario'] != 2 & $_SESSION['fk_tipousuario']!= 3 & $_SESSION['fk_tipousuario'] != 6) {                                   
                            ?>
                      <li><a class="btn-floating green" onclick="window.location='?p=capacitacion'"><i class="material-icons">question_answer</i></a></li>
                      <?php }
                                if ($_SESSION['fk_tipousuario'] != 4) {
                            ?>
                      <li><a class="btn-floating blue" onclick="window.location='?p=pleno'"><i class="material-icons">gavel</i></a></li>
                      <?php  }
                                if ($_SESSION['fk_tipousuario']!= 2  & $_SESSION['fk_tipousuario']!= 3 & $_SESSION['fk_tipousuario']!= 4 & $_SESSION['fk_tipousuario'] != 6) {
                             ?>
                      <li><a class="btn-floating gray" onclick="window.location='?p=evaluacion'"> <i class="material-icons">trending_up</i></a></li>
                       <?php }
                                  if ($_SESSION['fk_tipousuario'] != 2  & $_SESSION['fk_tipousuario']!= 3 & $_SESSION['fk_tipousuario']!= 4 & $_SESSION['fk_tipousuario']!= 6) {
                            ?> 
                      <li><a class="btn-floating pink" onclick="window.location='?p=usuarios'"> <i class="material-icons">account_box</i></a></li>
                      <?php 
                              } 
                             ?>  
                    </ul>
                  </div>

</body>
</html>