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
    </script>
  </body>
</html>
