	        </div>
	    </section>      
	</aside>    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(":file").filestyle();
		function showContent() {
        elementview = document.getElementById("viewfile");
        elementadd = document.getElementById("addfile");
        check = document.getElementById("blankCheckbox");
        if (check.checked) {
            elementadd.style.display='block';
            elementview.style.display='none';
        }
        else {
            elementadd.style.display='none';
            elementview.style.display='block';
        }

       
    }
		
	</script>
    
	
</body>
</html>