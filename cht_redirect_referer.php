<?
/*
    Plugin Name: WP-CHT Redirect 
    Plugin URI: http://cursosbiblicos.advertenciafinal.com.br
    Description: Redireciona para HTTP_REFERER apos login
    Author: Candido Tominaga
    Version: 1.2013031801
    Author URI: http://cursosbiblicos.advertenciafinal.com.br
*/


function cht_login_form()
{
	echo '<script>jQuery(document).ready(function(){
  	jQuery("[name=redirect_to]").val("'.$_SERVER['HTTP_REFERER'].'");
  })
</script>';
}

// Add Referer
add_action( 'login_form', 'cht_login_form', 1 );
?>
