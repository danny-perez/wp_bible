<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biblii.rus
 */

?>
<!--===================================================================->
<!------------------------------->
<!------></div><!---------------->
<!--===================================================================->
      </div>
	  <!----------------------------------------------------------->
	  <!----------------------------------------------------------->
    </div>
    <!-- Javascripts-->
    <script src="<?php bloginfo("template_directory");?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/plugins/pace.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/main.js"></script>

	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });

      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });

      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });

      $('#demoSelect').select2();
      $('#demoSelect2').select2();
      //=======================================================================
      //===========================users code==================================
      //=======================================================================
    $("#select_testament").on("change",function(e){
        var res_testament = $(this).val();
        var data = {
		    		'action': 'my_action',
			    	'testament': res_testament,
			    	'book': null,
			    	'chapter': null,
			    	'ekzeget':null,
			    	'translate':null
			        };
		var ajax_url = '/wp-admin/admin-ajax.php';
		jQuery.post(ajax_url, data, function(response)
			{
				res = response;
				var out_data = JSON.parse(res);
				// console.log(out_data);
				$("#select_book").empty();
				$("#select_book").append( $('<option disabled selected>Выберите книгу</option>') );
				$.each(out_data, function(key, value) {   
                                                         $('#select_book')
                                                             .append($("<option></option>")
                                                             .attr("value",value['kn'])
                                                             .text(value['name'])); 
                                                           });
			})
        })
    $("#select_book").on("change",function(e){
        var res_book = $(this).val();
        var data = {
		    		'action': 'my_action1',
			    	'testament': null,
			    	'book': res_book,
			    	'chapter': null,
			    	'ekzeget':null,
			    	'translate':null
			        };
		var ajax_url = '/wp-admin/admin-ajax.php';
		jQuery.post(ajax_url, data, function(response)
			{
				res = response;
				var out_data = JSON.parse(res);
				//console.log(out_data);
				$("#select_chapter").empty();
				$("#select_chapter").append( $('<option disabled selected>Выберите главу</option>') );
				$.each(out_data, function(key, value) {   
                                                         $('#select_chapter')
                                                             .append($("<option></option>")
                                                             .attr("value",key)
                                                             .text(value)); 
                                                           });
			})
    })
    $("#select_chapter").on("change",function(e){
        var chapter = $(this).val();
        var res_book = $('#select_book').val();
        var translate = $('#select_translate').val();
        var data = {
		    		'action': 'my_action2',
			    	'testament': null,
			    	'book': res_book,
			    	'chapter': chapter,
			    	'ekzeget':null,
			    	'translate':translate
			        };
		var ajax_url = '/wp-admin/admin-ajax.php';
		jQuery.post(ajax_url, data, function(response)
			{
				res = response;
				var out_data = JSON.parse(res);
				$('#out_text_result').empty();
				$.each(out_data, function(key, value) {   
                                                         var text_for_out = value[translate];
                                                         var key_for_out = value['st_no'];
                                                         $('#out_text_result')
                                                             .append($("<sup></sup>")
                                                             .text(key_for_out)); 
                                                         $('#out_text_result')
                                                             .append($("<span class='one_br'></span>")
                                                             .html(text_for_out));
                                                             
                                                           });

			})
    })
    $("#select_ekzeget").on("change",function(e){
          console.log("Select ekzeget");
    })
    $("#select_translate").on("change",function(e){
            var translate = $(this).val();
        var res_book = $('#select_book').val();
        var chapter = $('#select_chapter').val();
        var data = {
		    		'action': 'my_action2',
			    	'testament': null,
			    	'book': res_book,
			    	'chapter': chapter,
			    	'ekzeget':null,
			    	'translate':translate
			        };
		var ajax_url = '/wp-admin/admin-ajax.php';
		jQuery.post(ajax_url, data, function(response)
			{
				res = response;
				var out_data = JSON.parse(res);
				$('#out_text_result').empty();
				$.each(out_data, function(key, value) {   
                                                         var text_for_out = value[translate];
                                                         var key_for_out = value['st_no'];
                                                         $('#out_text_result')
                                                             .append($("<sup></sup>")
                                                             .text(key_for_out)); 
                                                         $('#out_text_result')
                                                             .append($("<span class='one_br'></span>")
                                                             .html(text_for_out));
                                                             
                                                           });

			})
    })
    $("#audio1").on("click",function(e){
      console.log("Button audio1");
    })
    $("#audio2").on("click",function(e){
      console.log("Button audio2");
    })
    $("#prev").on("click",function(e){
      console.log("Button preview");
    })
    $("#next").on("click",function(e){
      console.log("Button next");
    })
    $("#parallel").on("click",function(e){
      console.log("Button parallel");
    })
    </script>
  </body>
</html>
