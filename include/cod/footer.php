                </div>
            </section>      
        </aside>    
<!-- Fin Cuerpo -->
<!-- JS -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   

   
   

    <script type="text/javascript">
      $(document).ready(function(){ 
        $('#show').mousedown(function(){
            $('#pass').removeAttr('type');
            $('#show').addClass('fa-eye-slash').removeClass('fa-eye');
        });
        $('#show').mouseup(function(){
            $('#pass').attr('type','password');
            $('#show').addClass('fa-eye').removeClass('fa-eye-slash');
        });
      });
    </script>
  <!-- END JS -->
</body>
</html>