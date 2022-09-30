    <!-- jQuery -->
    <script src="{{asset('assets-back/js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('body').on('click', '#listProduit', function(){

                var listOrders = $(this).data('url');
                var total = $(this).data('total');
                $.get(listOrders, function (data) {
                    $('#listProduitModal').modal('show');
                    $('#showDetailsOrder').html(data);
                    $('#list-order').DataTable({searching: false});
                    $('#totalOrder').text(total);
                })
            })
            $('body').on('click', '#livrer',function(){
                var state = $(this).data('url');
                $.get(state, function(data){
                    $('#livrerModal').modal('show');
                    $('#changeState').html(data);
                })
            })

        })
        /*$(document).ready(function(){
            $('body').on('click','#deleteProduit', function(){
                var favDelete = $(this).data('url');
                console.log(favDelete);
                $.get(favDelete,function(data){
                    $('#deleteProduitModal').modal('show');
                    $('#deleteFav').html(data);
                })
            })
        })*/
    </script>
    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets-back/js/popper.min.js')}}"></script>
    <script src="{{asset('assets-back/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{asset('assets-back/js/jquery.slimscroll.min.js')}}"></script>

    <!-- Select2 JS -->
    <script src="{{asset('assets-back/js/select2.min.js')}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{asset('assets-back/js/moment.min.js')}}"></script>
    <script src="{{asset('assets-back/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Datatable JS -->
    <script src="{{asset('assets-back/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets-back/js/dataTables.bootstrap4.min.js')}}"></script>


    <!-- Chart JS -->
    <script src="{{asset('assets-back/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('assets-back/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets-back/js/chart.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets-back/js/app.js')}}"></script>


</body>
</html>
