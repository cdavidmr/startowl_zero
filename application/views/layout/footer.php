
<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                     <!-- <p>Copyright &copy; 2018 StartOwl. All rights reserved | This site is developed with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://DevOneA.com" target="_blank">developerOneAsociations</a></p> -->
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
<!-- Head menu search form ends -->  
          </div>   
      </div>      
  </div>

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="/resources/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="../resources/js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script type="text/javascript" src='/resources/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="/resources/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="/resources/js/caroufredsel.js"></script> 
<script type="text/javascript" src="/resources/js/plugins.js"></script>

<script type="text/javascript" src="/resources/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/resources/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="/resources/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/resources/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/resources/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/resources/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="/resources/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="/resources/js/theme.js"></script>
<script type="text/javascript" src="/resources/custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="/resources/plugins/isotope/isotope.pkgd.min.js"></script>


<!-- Specific Page Agregar Idea Scripts Put Here -->
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>
<script type="text/javascript" src='/resources/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'></script>
<script type="text/javascript" src='/resources/plugins/daterangepicker/moment.min.js'></script>
<script type="text/javascript" src='/resources/plugins/daterangepicker/daterangepicker.js'></script>
<script type="text/javascript" src='/resources/plugins/colorpicker/colorpicker.js'></script>
<script type="text/javascript" src='/resources/plugins/ckeditor/ckeditor.js'></script>
<script type="text/javascript" src='/resources/plugins/ckeditor/adapters/jquery.js'></script>
<script type="text/javascript" src="/resources/plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
<script type="text/javascript" src="/resources/plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>


<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/resources/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>


<!-- Vector Map -->
<script type="text/javascript" src="/resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="/resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script type="text/javascript">
$(window).load(function() 
    {
"use strict";

var cityAreaData = [
        500.70,
        410.16,
        210.69,
        120.17,
        64.31,
        150.35,
        130.22,
        120.71,
        100.32,
        480.50,
        320.20
      ];

 
 var map = new jvm.WorldMap({
    map: 'world_mill_en',
    container: $('#map1'),
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    zoomOnScroll:true, 

    hoverColor: false,
    regionStyle:{
          initial: {
            fill: '#abe7c8',
            "fill-opacity": 1,
            stroke: '#abe7c8',
            "stroke-width": 0,
            "stroke-opacity": 0
          },
          hover: {
            "fill-opacity": 0.8
          },
          selected: {
            fill: 'yellow'
          },
          selectedHover: {
          }
        },
    markerStyle: {
          initial: {
            fill: '#F85D2C',
            stroke: '#F85D2C',
            "fill-opacity": 0.9,
            "stroke-width": 10,
            "stroke-opacity": 0.5,
            r: 3
          },
          hover: {
            stroke: '#F85D2C',
            "stroke-width": 14
          },
          selected: {
            fill: 'blue'
          },
          selectedHover: {
          }
        },  
    backgroundColor: '#ffffff',
     markers :[
        {latLng: [50, 0], name: 'Francia - 43145 vistas'},     
        {latLng: [0, 120], name: 'Indonesia - 145 vistas'},
        {latLng: [-25, 130], name: 'Australia - 486 vistas'},    
        {latLng: [0, 20], name: 'Africa - 12 vistas'},   
        {latLng: [35, 100], name: 'China - 7890 vistas'},    
        {latLng: [46, 105], name: 'Mongolia - 2123 vistas'}, 
        {latLng: [40, 70], name: 'Kyrgiztan - 87456 vistas'},    
        {latLng: [58, 50], name: 'Russia - 4905 vistas'},
        {latLng: [35, 135], name: 'Japón - 87456 vistas'},
        {latLng: [5, -74], name: 'Colombia - 87456 vistas'},
        {latLng: [35, -84], name: 'Estados Unidos - 50235 vistas'}                                                                        
      ],
    series: {
      markers: [{
        attribute: 'r',
        scale: [3, 7],
        values: cityAreaData
      }]
    },      
  }); 
 


$('#filters a').click(function(){
    var filter = $(this).data('filter');
    $('#map1').vectorMap('set', 'focus', filter);
    map.setScale(4);

});

      
      

});
</script>


<script type="text/javascript">
$(window).load(function() 
{
    "use strict";



    //CKEDITOR.replace( $('[data-rel^="ckeditor"]') );
    $( '[data-rel^="ckeditor"]' ).ckeditor();


    $( '#imageTable tbody' ).sortable({
        placeholder: "warning",
        helper: function(e, ui) {
            ui.children().each(function() {
                $(this).width($(this).width());
                $(this).css('background','rgba(255,255,255,.6)');
            });
            return ui;
        },              
        stop: function(e, ui) {
            $( '#imageTable tbody' ).children().each(function() {
                var object=$(this);
                object.children('.pointer').html(object.index()+1);
            });

        }
        }).disableSelection();
        

    
    $('.save-btn').click(function(e) {
        var object= $(this);
        object.addClass('disabled');
        object.prepend('<i id="save-spinner" class="fa fa-spinner fa-spin append-icon"></i>');  
        object.children('.fa-save').remove();
        setTimeout(function(){
            object.children('.fa-spinner').remove();
            object.removeClass('disabled');
            object.prepend('<i class="fa fa-save append-icon"></i>');
            notification('topright', 'success', 'fa fa-check-circle vd_green', 'Muy Bien!', 'Tus datos han sido guardados exitosamente.')           
            },1000)  
        ; 
    });
    
    $('#add-price-btn').click(function(e) {
        var option_value = $("#addPriceModal #option-combination").val();
        var price_value = $("#addPriceModal #price-combination").val();     
        var check_value = $('#addPriceModal #enable-combination').bootstrapSwitch('state') ? '<i class="fa fa-check vd_green"></i>' : '<i class="fa fa-times vd_grey"></i>';    
        var menu_value = $('#addPriceModal #enable-combination').bootstrapSwitch('state') ?     '<a data-original-title="Disabled" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_green"> <i class="fa fa-power-off"></i> </a>' : '<a data-original-title="Enabled" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_grey"> <i class="fa fa-power-off"></i> </a>'
        $('#specific_price_table tbody').append('<tr>' + '<td>' + option_value +'</td>\
                                <td>$' + price_value + '</td>\
                                <td class="text-center">' + check_value + '</td>\
                                <td class="menu-action">' + menu_value + ' <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_yellow"> <i class="fa fa-pencil"></i> </a> <a data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_red"> <i class="fa fa-times"></i> </a></td>\
                              </tr>' + '</tr>');
        $('[data-toggle^="tooltip"]').tooltip();                              
                              
        $('#addPriceModal').modal('hide');                            
        
    });
    
    // count down on meta keyword/description text size
    
    function countDown($source, $target) {
        var max = $source.attr("data-maxchar");
        $target.html(max-$source.val().length);
    
        $source.keyup(function(){
            $target.html(max-$source.val().length);
        });
    }
    

    
        countDown($("#meta_title_1"), $("#meta_title_1_counter"));
        countDown($("#meta_description_1"), $("#meta_description_1_counter"));

})
</script>

<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */

$(function () {
    'use strict';

    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'plugins/jquery-file-upload/server/php/',
        uploadButton = $('<button/>')
            .addClass('btn vd_btn vd_bg-blue')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            }); 
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index, file) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
        

});
</script>





<script type="text/javascript">
$(document).ready(function() {
    "use strict";
        
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $container.isotope('layout');
    });

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
    $('#filters li').removeClass('active');
    $(this).parent().addClass('active');    
    $container.isotope({ filter: filterValue });
  });

    
});
</script>

<script>

$(function () {
    "use strict";
    $('#checkbox-0').click(function() {
    if($(this).is(':checked'))
        $('.checkbox-group').prop('checked', true).closest("tr").addClass('row-warning');
    else
        $('.checkbox-group').prop('checked', false).closest("tr").removeClass('row-warning');
    });
    
    $('.checkbox-group').click(function() {
    if($(this).is(':checked'))
        $(this).closest("tr").addClass('row-warning');
    else
        $(this).closest("tr").removeClass('row-warning')        
    }); 
});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43329142-3']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>
</html>