<!DOCTYPE html>

<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script  src="/front/ckeditor/ckeditor.js"></script>
    {{-- <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> --}}


    <style>
        .Choicefile {
            display: block;
            background: #14142B;
            border: 1px solid #fff;
            color: #fff;
            width: 150px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            padding: 5px 0px;
            border-radius: 5px;
            font-weight: 500;
            align-items: center;
            justify-content: center;
        }

        .Choicefile:hover {
            text-decoration: none;
            color: white;
        }

        #uploadfile,
        .removeimg {
            display: none;
        }

        #thumbbox {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .removeimg {
            height: 25px;
            position: absolute;
            background-repeat: no-repeat;
            top: 5px;
            left: 5px;
            background-size: 25px;
            width: 25px;
            /* border: 3px solid red; */
            border-radius: 50%;

        }

        .removeimg::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            content: '';
            border: 1px solid red;
            background: red;
            text-align: center;
            display: block;
            margin-top: 11px;
            transform: rotate(45deg);
        }

        .removeimg::after {
            /* color: #FFF; */
            /* background-color: #DC403B; */
            content: '';
            background: red;
            border: 1px solid red;
            text-align: center;
            display: block;
            transform: rotate(-45deg);
            margin-top: -2px;
        }
    </style>


    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="stylesheet" href="/front/DoAn2/css/style_mainQT.css">
    <link rel="stylesheet" href="/front/DoAn2/fontawesome-free-6.1.1-web/webfonts">
    <script src="https://kit.fontawesome.com/e06076012c.js" crossorigin="anonymous"></script>
    <script src="/front/DoAn2/js/jquery-3.6.0.min.js"></script>
    <script src="\front\DoAn2\js\click.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>

    <title></title>
</head>

<body>
    <section style="width:100%" class="header">
        <a href="../Untitled-1.html"><img style="height: 85%; margin-left: 10px;"
                src="\front\DoAn2\image\logo-mobile.png" alt=""></a>
        <div class="box-login" id="box-t">
            Xin chào, <span id="ten_nv">Admin</span> <i class="fas fa-sort-down"></i>
            <div class="box-login-bottom" id="box-b">
                <button onclick="TTTaiKhoan()"><i class="fas fa-user-alt"></i> Tài khoản</button>
                <button onclick="LogOut();"><i class="fas fa-sign-out-alt"></i> Đăng xuất</button>
            </div>
        </div>

    </section>

    <section style="width:102%; margin-top:-50px" class="mains">
        <div style="width:100%" class="row">
            <div class=" category">
                <ul style="margin-top:-2px">
                    <li><a href="{{ route('danhmuc.danhmuc') }}"> Danh mục sách</a></li>
                    <li><a href="{{ route('loaisp.hienthi') }}"> Thể loại sách</a></li>
                    <li><a href="{{ route('sanpham.hienthi') }}"> Tác phẩm</a></li>
                    <li><a href="{{ route('nhasx.hienthi') }}"> Nhà xuất bản</a></li>
                    <li><a href="{{ route('tacgia.hienthi') }}"> Tác giả</a></li>
                    <li><a href="{{ route('ThongKe.list') }}"> Thống kê</a></li>
                    <li><a href=""> Nhân viên</a></li>
                    <li><a href="{{route('hoadonnhap.hienthi')}}"> Hóa đơn nhập</a></li>
                    <li><a href="{{ route('hoadonban.hienthi') }}"> Hóa đơn bán</a></li>
                    <li><a href="{{ route('kho.hienthi') }}">Kho</a></li>
                    <li><a href="{{ route('donhang.hienthi') }}">Đơn hàng</a></li>
                </ul>


            </div>
            @yield('layoutAdmin')
        </div>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.nice-select.min.js"></script>
        <script src="../js/jquery-ui.min.js"></script>
        <script src="../js/jquery.slicknav.js"></script>
        <script src="../js/mixitup.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <div id='mainDiv'></div>
        <script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                var oTable1 =
                    $('#dynamic-table')
                    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                    .dataTable({
                        bAutoWidth: false,
                        "aoColumns": [{
                                "bSortable": false
                            },
                            null, null, null, null, null,
                            {
                                "bSortable": false
                            }
                        ],
                        "aaSorting": [],

                        //,
                        //"sScrollY": "200px",
                        //"bPaginate": false,

                        //"sScrollX": "100%",
                        //"sScrollXInner": "120%",
                        //"bScrollCollapse": true,
                        //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                        //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                        //"iDisplayLength": 50
                    });
                //oTable1.fnAdjustColumnSizing();


                //TableTools settings
                TableTools.classes.container = "btn-group btn-overlap";
                TableTools.classes.print = {
                    "body": "DTTT_Print",
                    "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
                    "message": "tableTools-print-navbar"
                }

                //initiate TableTools extension
                var tableTools_obj = new $.fn.dataTable.TableTools(oTable1, {
                    "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",

                    "sRowSelector": "td:not(:last-child)",
                    "sRowSelect": "multi",
                    "fnRowSelected": function(row) {
                        //check checkbox when row is selected
                        try {
                            $(row).find('input[type=checkbox]').get(0).checked = true
                        } catch (e) {}
                    },
                    "fnRowDeselected": function(row) {
                        //uncheck checkbox
                        try {
                            $(row).find('input[type=checkbox]').get(0).checked = false
                        } catch (e) {}
                    },

                    "sSelectedClass": "success",
                    "aButtons": [{
                            "sExtends": "copy",
                            "sToolTip": "Copy to clipboard",
                            "sButtonClass": "btn btn-white btn-primary btn-bold",
                            "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
                            "fnComplete": function() {
                                this.fnInfo('<h3 class="no-margin-top smaller">Table copied</h3>\
                                                        <p>Copied ' + (oTable1.fnSettings().fnRecordsTotal()) +
                                    ' row(s) to the clipboard.</p>',
                                    1500
                                );
                            }
                        },

                        {
                            "sExtends": "csv",
                            "sToolTip": "Export to CSV",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
                        },

                        {
                            "sExtends": "pdf",
                            "sToolTip": "Export to PDF",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
                        },

                        {
                            "sExtends": "print",
                            "sToolTip": "Print view",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

                            "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

                            "sInfo": "<h3 class='no-margin-top'>Print view</h3>\
                                                          <p>Please use your browser's print function to\
                                                          print this table.\
                                                          <br />Press <b>escape</b> when finished.</p>",
                        }
                    ]
                });
                //we put a container before our table and append TableTools element to it
                $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));

                //also add tooltips to table tools buttons
                //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
                //so we add tooltips to the "DIV" child after it becomes inserted
                //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
                setTimeout(function() {
                    $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
                        var div = $(this).find('> div');
                        if (div.length > 0) div.tooltip({
                            container: 'body'
                        });
                        else $(this).tooltip({
                            container: 'body'
                        });
                    });
                }, 200);



                //ColVis extension
                var colvis = new $.fn.dataTable.ColVis(oTable1, {
                    "buttonText": "<i class='fa fa-search'></i>",
                    "aiExclude": [0, 6],
                    "bShowAll": true,
                    //"bRestore": true,
                    "sAlign": "right",
                    "fnLabel": function(i, title, th) {
                        return $(th).text(); //remove icons, etc
                    }

                });

                //style it
                $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')

                //and append it to our table tools btn-group, also add tooltip
                $(colvis.button())
                    .prependTo('.tableTools-container .btn-group')
                    .attr('title', 'Show/hide columns').tooltip({
                        container: 'body'
                    });

                //and make the list, buttons and checkboxed Ace-like
                $(colvis.dom.collection)
                    .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
                    .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
                    .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');



                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function() {
                        var row = this;
                        if (th_checked) tableTools_obj.fnSelect(row);
                        else tableTools_obj.fnDeselect(row);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
                    var row = $(this).closest('tr').get(0);
                    if (!this.checked) tableTools_obj.fnSelect(row);
                    else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
                });




                $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });


                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function() {
                        var row = this;
                        if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0)
                            .prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop(
                            'checked', false);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function() {
                    var $row = $(this).closest('tr');
                    if (this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });



                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({
                    placement: tooltip_placement
                });

                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                    return 'left';
                }

            })
        </script>
        
        <script src="../angular/dirPagination.js"></script>
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
        <script src="front/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="front/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="front/js/demo/datatables-demo.js"></script>
        <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />

        
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    </section>
    
</body>

</html>
