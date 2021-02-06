</div>
    <!-- END MAIN CONTAINER -->

    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer" style="background-color: #000;">

        <div class="footer-section-1  sidebar-theme"> 
            
        </div>

        <div class="footer-section-2 container-fluid" style="background-color: #000;">
            <div class="row" style="background-color: #000;">
               <!-- <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    
                </div> -->
                <div class="col-xl-12 col-md-6 col-sm-6 col-12" style="background-color: #000; text-align: center;">
                    <p class="copyright"> © 2019 Nikken. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/NikkenChallengeP/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });

        function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
    </script>
    <script src="{{ asset('assets/NikkenChallengeP/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/maps/vector/ammaps/ammap_amcharts_extension.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/maps/vector/ammaps/worldLow.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/amcharts/serial.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/amcharts/pie.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/assets/js/classic-dashboard/classic-custom.js') }}"></script>
    <!--  END CUSTOM SCRIPT FILES  -->

<!-- GRAFICAS CIRCULARES ECOMERCE ORDERS -->
     <!--  BEGIN CUSTOM SCRIPT FILES  -->
 <!--   <script src="plugins/table/datatable/datatables.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="assets/js/ecommerce/order.js"></script> -->
    <!--  END CUSTOM SCRIPT FILES  -->

<!-- DATATABLE ZERO CONFIGURATION  -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
     <script src="{{ asset('assets/NikkenChallengeP/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#zero-config').DataTable({
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });
    </script> 
    <!-- END PAGE LEVEL SCRIPTS -->

<!-- TABLE_DT_HTML5   EXPORTAR A EXCEL Y OTROS-->
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="assets/NikkenChallengeP/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assets/NikkenChallengeP/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="assets/NikkenChallengeP/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="assets/NikkenChallengeP/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <!-- TABLE_SCROLL-->
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <!-- <script src="plugins/table/datatable/datatables.js"></script>-->
    <script>
        $(document).ready(function() {
            $('#vertical-scroll').DataTable( {
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false,
                "language": {
                    "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
            $('#horizontal-scroll').DataTable( {
                "scrollX": true,
                "language": {
                    "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
            $('#vertical-horizontal-scroll').DataTable( {
                "scrollY": "460",
                "scrollX": true,
                "lengthMenu": [ 25, 50, 75, 100 ],
                "language": {
                    "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
        } );
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

<!--TABLE_DT_RANGE_SEARCH   Buscar por rango -->
 <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <!--  <script src="plugins/table/datatable/datatables.js"></script>
    <script>
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#min').val(), 10 );
                var max = parseInt( $('#max').val(), 10 );
                var age = parseFloat( data[3] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && age <= max ) ||
                     ( min <= age   && isNaN( max ) ) ||
                     ( min <= age   && age <= max ) )
                {
                    return true;
                }
                return false;
            }
        );         
        $(document).ready(function() {
            var table = $('#range-search').DataTable({
                "language": {
                    "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });             
            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').keyup( function() { table.draw(); } );
        } );
    </script> -->
    <!-- END PAGE LEVEL SCRIPTS -->



</body>
</html>
        