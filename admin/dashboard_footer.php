  
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
<!-- ========= data table Link ======= -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
});

</script>
  
  <script type="text/javascript">
    $(document).ready(function(){
   $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
       if($('.sidebar').hasClass("fliph")){
       		$('#page-wrapper').css('width','calc(100% - 42px)');
       }
       else{
       		$('#page-wrapper').css('width','calc(100% - 220px)');
       }
       	
   });
     
});
  </script>