<?
/*
Plugin Name: WP Vanity Email
Plugin URI: http://www.wpvanityemail.com
Description: WP Vanity Email
Version: 2.7
Author: Garden Media Ltd
Author URI: http://www.gardenmedia.ca
Stable tag: 2.7
*/

function ri_activate() {
$config = get_option('mw_options');
$post_content = '
<p>Email Usage Terms and Conditions</p>
<p>Please look over our email usage terms and conditions below for details concerning our Vanity Email Service.</p>

<p>For further questions or comments regarding Vanity Email Service email accounts and usage, please contact our Customer Service Center at %developer_email%</p>

<p>1. Acceptance of Terms of Use</p>
<p>Vanity Email is provided free of charge to registered users (each, a "User") under these Terms of Use. BY COMPLETING THE REGISTRATION PROCESS AND CLICKING THE "I ACCEPT" BUTTON, YOU ARE INDICATING YOUR AGREEMENT TO BE BOUND BY THESE TERMS OF USE.</p>

<p>2. Registration Information</p>
<p>%company% makes significant efforts to protect the privacy of its users. Our Privacy Policy discloses our policies with regard to the protection and disclosure of user information. We may disclose an individual User\'s name, address, email address or telephone number without such User\'s prior consent and without any liability to User or any third party, to the extent necessary to or appropriate to i) comply with applicable laws or in legal proceedings where such information is relevant; ii) protect and defend the rights or property of us or enforce or further the application or intent of the terms of this Agreement; or iii) act to protect the personal safety of Users or the public iv) for other reasons that we may disclose to Users from time to time.</p>
<p>We reserve the right to terminate any User\'s account if we learn that such User has provided us false or misleading registration information.</p>

<p>3. Modifications of these Terms of Use</p>
<p>%company%
 may modify these Terms of Use from time to time in their sole discretion. Continued use of Simple Email will be conditioned upon each User\'s affirmative acceptance of any such changes.</p>

<p>4. Modifications of Simple Email</p>
<p>%company%
 may modify or discontinue User\'s account with or without notice to any User, without liability to any User or any third party.</p>

<p>5. Contents of Messages</p>
<p>%company%
 does not monitor, censor or edit the contents of individual Users\' email messages and attachments. Users alone are responsible for the contents of their messages and attachments, and the consequences of any such messages and attachments. User agrees that it will not use Vanity Email for chain letters, junk mail, "spamming", solicitations (commercial or non-commercial) or any use of distribution lists to any person who has not given specific permission to be included in such a process.</p>
<p>User further agrees not to use Vanity Email to send any messages or material that are unlawful, harassing, libelous, abusive, threatening, harmful, vulgar, obscene or otherwise objectionable material of any kind or nature or that encourages conduct that could constitute a criminal offense, give rise to civil liability or otherwise violate any applicable local, state, national or international law or regulation, or contain viruses, trojan horses, worms, time bombs, cancelbots, or any harmful or deleterious programming rountine.
%company%
 will not be liable for any damage that may occur to a User or to User\'s equipment as a result of any of the aforementioned being received by User. Additionally, User is solely liable for sending the aforementioned.
%company%
 reserves the right to terminate any User\'s account if either of them becomes aware and determines, in their sole discretion, that such User is violating any of the foregoing guidelines. It is %company%  policy to respect the privacy of its Users.</p>

<p>6. User Name and Password</p>
<p>User is responsible for maintaining the confidentiality of its User Name and Password. User shall be responsible for all uses of its User Name, whether or not authorized by User. User agrees to immediately notify Icon Interactive, LTD. of any unauthorized use of its User Name.</p>

<p>7. Disclaimer of Warranties</p>
<p>USER EXPRESSLY AGREES THAT USE OF Vanity Email IS AT USER\'S SOLE RISK. Simple Email IS PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS.</p>
<p>%company%, Garden Media Inc and WP Vanity Email EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT.</p>
<p>%company%, Garden Media Inc and WP Vanity Email  DOES NOT MAKE ANY WARRANTY THAT Simple Email WILL MEET USER\'S REQUIREMENTS, OR THAT Simple Email WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR FREE; NOR DOES Dial-up Services, Inc. MAKE ANY WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF Simple Email OR AS TO THE ACCURACY OR RELIABILITY OF ANY INFORMATION OBTA INED THROUGH Vanity Email.</p>
<p>USER UNDERSTANDS AND AGREES THAT ANY MATERIAL AND/OR DATA DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF Vanity Email IS AT USER\'S OWN DISCRETION AND RISK AND THAT USER WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO USER\'S COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF SUCH MATERIAL AND/OR DATA.
%company%, Garden Media Inc and WP Vanity Email  DOES NOT MAKE ANY WARRANTY REGARDING ANY GOODS OR SERVICES PURCHASED OR OBTAINED THROUGH Vanity Email OR ANY TRANSACTIONS ENTERED INTO THROUGH Simple Email.
NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY USER THROUGH Vanity Email SHALL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN.</p>

<p>8. Limitation of Liability</p>
<p>%company%, Garden Media Inc and WP Vanity Email  SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES, RESULTING FROM THE USE OR THE INABILITY TO USE Vanity Email OR FOR THE COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES OR RESULTING FROM ANY GOODS OR SERVICES PURCHASED OR OBTAINED OR MESSAGES RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH Vanity Email OR RESULTING FROM UNAUTHORIZED ACCESS TO OR ALTERATION OF USER\'S TRANSMISSIONS OR DATA, INCLUDING BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, USE, DATA OR OTHER INTANGIBLE, EVEN IF %company%, Garden Media Inc and WP Vanity Email . HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>

<p>9. Email Message Storage</p>
<p>%company%, Garden Media Inc and WP Vanity Email does not assumes any responsibility for the deletion or failure to store email messages.</p>

<p>10. Promotional Messages</p>
<p>%company%, Garden Media Inc and WP Vanity Email  Garden Media Inc and WP Vanity Email and/or third parties may, from time to time, send email messages to Users containing advertisements, promotions, etc. %domain%  does not make any representation or warranty with respect to the content of any such email messages or any goods or services which may be obtained from such third parties, and User agrees that %domain% . shall not have any liability with respect thereto.</p>

<p>11. Indemnification</p>
<p>User agrees to indemnify and hold each of %domain% ., their parent company, subsidiaries, affiliates, officers and employees, harmless from any claim or demand, including reasonable attorneys\' fees, made by any third party due to or arising out of User\'s use of Vanity Email, the violation of these Terms of Use by User, or the infringement by User, or any other user of User\'s account, of any intellectual property or other right of any person or entity.</p>

<p>12. Applicable Law</p>
<p>These Terms of Use shall be governed by and construed in accordance with the laws of the State of Arizona, without giving effect to its conflict of laws provisions. Jurisdiction for litigation of any dispute, controversy or claim arising out of or in connection with this Agreement, shall be only in a federal or state court having subject matter jurisdiction located in the USA CANADA EUROPE.</p>
';


update_option('ve_tos_text', str_replace( '%developer_email%', $config['pp_email'],  $post_content ) );

if( !get_option('ve_timestamp') ){
	update_option('ve_timestamp', time() );
}

// creta pages


  $my_post = array(
  'post_title'    => 'Terms of Service',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'page'
);
$tos_page = wp_insert_post( $my_post );
if( !get_option( 'tos_page') ){
	update_option( 'tos_page', $tos_page );
}


  $my_post = array(
  'post_title'    => 'Help Page',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'page'
);
$help_page = wp_insert_post( $my_post );
if( !get_option( 'help_page') ){
	update_option( 'help_page', $help_page );
}

  $my_post = array(
  'post_title'    => 'Welcome Page',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'page'
);
$wellcome_page = wp_insert_post( $my_post );
if( !get_option( 'wellcome_page') ){
	update_option( 'wellcome_page', $wellcome_page );
}

  $my_post = array(
  'post_title'    => 'Error Page',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'page'
);
$error_page = wp_insert_post( $my_post );
if( !get_option( 'error_page') ){
	update_option( 'error_page', $error_page );
}

$domain = str_replace( 'http://', '', get_option('home') );
	$domain = str_replace( 'www.', '', $domain );
	
//delete_option('mw_options');
  $mw_options = array(  
		'subsription_type' =>  'buy_now',
       'domain_name' =>  $domain,
	  'pp_email' =>  'mail@mail.com',
	  'pp_price' =>  '1.00',
	  'pp_premiumprice' =>  '10.00',
	  'pp_currency' =>  'USD',
	  'pp_white' =>  'hotels,casinos,lawyers,tourism,limos,taxis,cars,autos,pizza,restaurants,weddings,radio,dining,shopping,events,news,tickets,sports,jobs,classifieds,coupons,deals,apartments,homes,homes,condos,parking,volleyball,football,soccer,basketball,social,softball,maps,tours,theatres,business,food,vacation,holiday,hotel,travel',
	  'pp_black' =>  'sex,porn,police,sheriff,fuck,ass,cunt',
	  'pp_emailtext' =>  '
	  Welcome %firstname% %lastname%
<br>
Thank you for registering at %domain% for your special Vanity Email address!<br><br>
Your information is as follows:<br>
Email =   %username%@%domain%<br>
Password = %password%<br>
Your Other Email Addreess = %email%<br>
<br><br>
Below you will find links to important information required to start using your Vanity Email address right away,<br>
'.get_permalink( get_option( 'help_page') ).'
<br><br>
Thank you<br>
	  ',
	  'pp_mailsubject' =>  'You new Vanity Email has arrived',
	  'pp_mailfrom' =>  'WP Vanity Email',
	  'pp_dir' => 'on',
	  'pp_company' => 'My Company',
		'pp_sitetype' => serialize( array() ),
	  );
  
  if( !get_option('mw_options') )
  update_option('mw_options', $mw_options );
  
  
}

register_activation_hook( __FILE__, 'ri_activate' );	

// if single
add_filter('the_content', 've_process_page');
function ve_process_page( $content ){
	global $post;
	$config = get_option('mw_options');
	/*
	'tos_page' => $_POST['tos_page'],
  'help_page' => $_POST['help_page'],
  'wellcome_page' => $_POST['wellcome_page'],
  'error_page' => $_POST['error_page'],
  */
	
	if( $post->ID == get_option( 'tos_page' ) ){
		$out_str = str_replace( '%domain%', $config['domain_name'], get_option('ve_tos_text') );
		echo str_replace( '%company%', $config['pp_company'], $out_str );
	}elseif( $post->ID == get_option('help_page') ){
		echo '<iframe src="http://www.wpvanityemail.com/help2.php" style="border:0px black solid;" name="wp_vanity_email_help" scrolling="auto" frameborder="0" align="top" height="800px" width="600px">
		</iframe>';
	}elseif( $post->ID == get_option('wellcome_page') ){
		$str = '
		<center><strong>Congratulations on your New Vanity Email</strong></center><br />
We will need some time to set this up on our Web Server so in the meantime you can <br />
find assistance on setting up your new email address in an message that has was sent to you upon registration.<br />
Thank You<br />
Vanity Email Team
		';
		echo str_replace( '%developer_email%', $config['pp_email'],  $str );
	}elseif( $post->ID == get_option('error_page') ){
		$str = '
		Sorry to see you leave, if there is anything I can do or to answer any
questions that you have my email is %developer_email%
		';
		echo str_replace( '%developer_email%', $config['pp_email'],  $str );
	}else{
		return $content;
	}
}

class Foo_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'foo_widget', // Base ID
			'WP Vanity Email', // Name
			array( 'description' => __( 'WP Vanity Email', 'text_domain' ), ) // Args
		);
	}
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$config = get_option('mw_options');
		echo $before_widget;
		if ( ! empty( $title ) )
			//echo $before_title . $title . $after_title;
		echo '
		
		<script>
			function validateName( login ) { 
				var re = /^[0-9a-zA-Z]+$/;	
				return re.test( login );
			} 
		
				function checkForm(){
					var error = 0;
					if( !jQuery("input[name=user_firstname]").val() ){
						error=1;
						jQuery("input[name=user_firstname]").css("background", "coral");
					}else{
						jQuery("input[name=user_firstname]").css("background", "#fff");
					}
					
				
					
					if( !jQuery("input[name=user_lastname]").val() ){
						error=1;
						jQuery("input[name=user_lastname]").css("background", "coral");
					}else{
						jQuery("input[name=user_lastname]").css("background", "#fff");
					}
					
					if( !jQuery("input[name=user_username]").val() || !validateName( jQuery("input[name=user_username]").val() ) ){
						error=1;
						jQuery("input[name=user_username]").css("background", "coral");
					}else{
						jQuery("input[name=user_username]").css("background", "#fff");
					}
					
					if( !jQuery("input[name=user_email]").val() || !validateEmail( jQuery("input[name=user_email]").val() ) ){
						error=1;
						jQuery("input[name=user_email]").css("background", "coral");
					}else{
						jQuery("input[name=user_email]").css("background", "#fff");
					}
					
					if( ( !jQuery("input[name=user_pass1]").val() || !jQuery("input[name=user_pass2]").val() ) || ( jQuery("input[name=user_pass1]").val() != jQuery("input[name=user_pass2]").val() ) ){
						error=1;
						jQuery("input[name=user_pass1]").css("background", "coral");
						jQuery("input[name=user_pass2]").css("background", "coral");
					}else{
						jQuery("input[name=user_pass1]").css("background", "#fff");
						jQuery("input[name=user_pass2]").css("background", "#fff");
					}
					//console.log( jQuery("#tos_box").attr("checked") );
					if( !jQuery("#tos_box").attr("checked")  ){
						error=1;
						jQuery(".tos_block").css("background", "coral");
					}else{
						jQuery(".tos_block").css("background", "#fff");
					}
					
					
					
					if( error == 0 ){
						check_user();
					}
					
				}
			function validateEmail(email) { 
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
			function add_user( acc_type ){
				var data = {
							action: "add_user",
							user_firstname: jQuery("input[name=user_firstname]").val(),
							user_lastname: jQuery("input[name=user_lastname]").val(),
							user_username: jQuery("input[name=user_username]").val(),
							user_email: jQuery("input[name=user_email]").val(),
							user_pass1: jQuery("input[name=user_pass1]").val(),
							security: \''.wp_create_nonce("security_nonce").'\'
						};

					//console.debug( data );  <input type="hidden" id="item_name" name="item_name" value="@plugin.com">
						  jQuery.ajax({url: \''.get_option('home').'/wp-admin/admin-ajax.php\',
							  type: "POST",
							  data: data,            
							  beforeSend: function(msg){
								jQuery("#status_block").html("");
								jQuery("#status_ajax").fadeIn();
								jQuery(".conf_msg").fadeOut();
								
							   },
								success: function(msg){
								//console.debug( msg );
								jQuery("#status_ajax").fadeOut();
								
								if( msg == "created" ){
									jQuery("#status_block").html("<div class=\'error_msg\'>Email secured, redirecting to Paypal.</div>");
									if( acc_type == "single" ){
										jQuery("#single_form").submit();
										jQuery("#subscribe_std_form").submit();
									}
									if( acc_type == "premium" ){
										jQuery("#premium_form").submit();
										jQuery("#subscribe_prem_form").submit();
									}
									
								}
								
							
								
								}, 
							  error:  function(msg) {
								alert("Error Saved!!: " + msg);
							  }          
					  });
			}
			function check_user( ){

						var data = {
							action: "check_user_action",
							user_username: jQuery("input[name=user_username]").val(),
							user_email: jQuery("input[name=user_email]").val(),
							security: \''.wp_create_nonce("security_nonce_check").'\'
						};

					//console.debug( data );
						  jQuery.ajax({url: \''.get_option('home').'/wp-admin/admin-ajax.php\',
							  type: "POST",
							  data: data,            
							  beforeSend: function(msg){
								jQuery("#status_block").html("");
								jQuery("#status_ajax").fadeIn();
								jQuery(".conf_msg").fadeOut();
								
							   },
								success: function(msg){
								//console.debug( msg );
								jQuery("#status_ajax").fadeOut();
								
								if( msg == "success" ){
									jQuery("#status_block").html("<div class=\'error_msg\'>Your email is secured.<br/>You need to pay for it in 24 hours, otherwise it will be available for anyone to register.</div>");
									
									jQuery("#item_name").val( jQuery("input[name=user_username]").val()+jQuery("#base_domain").val() );
									jQuery(".button_block").fadeIn();
									
								}
								if( msg == "email_exists" ){
									jQuery("#status_block").html("<div class=\'error_msg\'>This email address is not available, please try again</div>");
								}
								if( msg == "user_exists" ){
									jQuery("#status_block").html("<div class=\'error_msg\'>This username address is not available, try another Desired Username</div>");			
								} 
								if( msg == "user_premium" ){
								
									jQuery("#status_block").html("<div class=\'error_msg\'>This is a PREMIUM name and is '.$config['pp_premiumprice'].' '.$config['pp_currency'].' Please click the BuyNow button to continue</div>");			
									jQuery("#item_name_premium").val( jQuery("input[name=user_username]").val()+jQuery("#base_domain").val() );
									
									jQuery(".button_block_premium").fadeIn();
									
								} 
								
								}, 
							  error:  function(msg) {
								alert("Error Saved!!: " + msg);
							  }          
					  });
				}
			</script>
		<div class="msg_block">';
		if( $config['subsription_type'] == 'buy_now' ){
		echo '
			<b>Get your own Vanity eMail Address </br><strong> YOU@'.$config['domain_name'].'</strong></br> for '.$config['pp_price'].' '.$config['pp_currency'].'</b>';
		}else{
		echo '
			<b>Get your own Vanity eMail Address </br><strong> YOU@'.$config['domain_name'].'</strong></br></b>';
		}	
		echo '
		</div>
		<div class="form_conteiner register">
			<div>
			'.wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' ).'
			<input type="hidden" name="action" value="'.( is_user_logged_in() ? 'edit' : 'create' ).'" />
				<label>First Name</label>
				<input  type="text" name="user_firstname" value="" />
				<label>Last Name</label>
				<input  type="text" name="user_lastname" value=""  />
				<label>Desired Name</label>
				<input  type="text" name="user_username" class="in_small" value="" />&nbsp;@'.$config['domain_name'].'
				
				
				<label>Password</label>
				<input  type="password" name="user_pass1" value=""  />
				
				<label>Retype Password</label>
				<input  type="password" name="user_pass2" value=""  />
				
				<label>Your Other Email Address</label>
				<input  type="text" class="to_check" name="user_email" value=""  />
				
				<div class="tos_block">
					<input type="checkbox" value="on" id="tos_box" /> &nbsp; I agree to <b><a target="_blank" href="'.get_permalink( get_option('tos_page') ).'">Terms of Service</a></b> (TOS)
				</div>
			
			<br/>
			<input type="button" class="button_pl middle black" onClick="checkForm()" value="Get my new email address" />
			<div id="status_ajax"><img src="'.plugins_url('images/stat.gif', __FILE__ ).'" /></div>
			<div id="status_block"></div>
			
			<!-- SINGLE EMAIL -->
			<div class="button_block conf_msg">

			<input type="hidden" id="base_domain" value="@'.$config['domain_name'].'">';
			if( $config['subsription_type'] == 'buy_now' ){
			echo '
			<h2>Now you can pay for your new email address. Price: '.$config['pp_price'].' '.$config['pp_currency'].' </h2>
			';
			echo '
			<form method="post" id="single_form" action= "https://www.paypal.com/cgi-bin/webscr"> 
				<input type="hidden" name="cmd" value="_xclick"> 
				<input type="hidden" name="business" value="'.$config['pp_email'].'">
				<input type="hidden" id="item_name" name="item_name" value="@'.$config['domain_name'].'">
				<input type="hidden" name="item_number" value="1"> 
				<input type="hidden" name="amount" value="'.$config['pp_price'].'" id="pp_price" />
				<input type="hidden" name="return" value="'.get_permalink( get_option('wellcome_page') ).'"> 
				<input type="hidden" name="rm" value="2"> 
				<input type="hidden" name="cancel_return" value="'.get_permalink( get_option('error_page') ).'"> 
				<input type="hidden" name="no_shipping" value="0"> 
				<input type="hidden" name="currency_code" value="'.$config['pp_currency'].'">
				
				<input type="image" class="submit" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!"> 
			</FORM> 
			<input type="image" onClick="add_user( \'single\' );" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">			
			';
			}else{
			echo '
			<h2>Now you can pay for your new email address.</h2>
			';
			echo stripslashes( $config['standart_subsr_code'] );
			echo '
			<input type="image" onClick="add_user( \'single\' );" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">
			';
			}
			echo '
		
				
			</div>
			
			<!-- PREMIUM EMAIL -->
			<div class="button_block_premium conf_msg">
				
				';
			
			if( $config['subsription_type'] == 'buy_now' ){
			echo '
			<h2>Now you can pay for  PREMIUM email address. Price: '.$config['pp_premiumprice'].' '.$config['pp_currency'].' </h2>
			';
			echo '
			<form method="post" id="premium_form"  action= "https://www.paypal.com/cgi-bin/webscr"> 
				<input type="hidden" name="cmd" value="_xclick"> 
				<input type="hidden" name="business" value="'.$config['pp_email'].'">
				<input type="hidden" id="item_name_premium" name="item_name" value="@'.$config['domain_name'].'">
				<input type="hidden" name="item_number" value="1"> 
				<input type="hidden" name="amount" value="'.$config['pp_premiumprice'].'" id="pp_price" />
				<input type="hidden" name="return" value="'.get_permalink( get_option('wellcome_page') ).'"> 
				<input type="hidden" name="rm" value="2"> 
				<input type="hidden" name="cancel_return" value="'.get_permalink( get_option('error_page') ).'"> 
				<input type="hidden" name="no_shipping" value="0"> 
				<input type="hidden" name="currency_code" value="'.$config['pp_currency'].'">
				
				<input type="image" class="submit" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!"> 
			</FORM>
			<input type="image" onClick="add_user( \'premium\' );" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">
			';
			}else{
			echo '
			<h2>Now you can pay for  PREMIUM email address.</h2>
			';
			echo stripslashes( $config['premium_subsr_code'] );
			echo '
			<input type="image" onClick="add_user( \'premium\' );" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">
			';
			}
			
			echo '
				
				
			</div>
			
			</div>
			
		</div>
		';
		echo $after_widget;
	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}

} // class Foo_Widget
add_action( 'widgets_init', 'fn_init_widget' );
function fn_init_widget(){
	if( check_if_valid( ) ){
		register_widget( "foo_widget" );
	}
}




add_action( 'wp_ajax_check_user_action', 'mw_add_user_widget' );
add_action( 'wp_ajax_nopriv_check_user_action', 'mw_add_user_widget' );
function mw_add_user_widget(){
global $email, $wpdb;      
	
  if( check_ajax_referer( 'security_nonce_check', 'security') ){
		$config = get_option('mw_options');
		$bad_names = explode( ',', strtolower( $config['pp_black'] ) );
		$good_names = explode( ',', strtolower( $config['pp_white'] ) );
		
		if( in_array( $_POST['user_username'], $bad_names ) ){
			echo 'user_exists';
			die();
		}

		if( in_array( $_POST['user_username'], $good_names ) ){			
			echo 'user_premium';
			die();
		}
		
		
		$user_id = username_exists( $_POST['user_username'] );
		if( !$user_id ){
			if ( email_exists( $_POST['user_email'] ) == false ) {

				
				echo 'success';
			} else {
				echo 'email_exists';
			}
			}else{
				echo 'user_exists';
			}
	}
die();
}

add_action( 'wp_ajax_add_user', 'mw_add_user' );
add_action( 'wp_ajax_nopriv_add_user', 'mw_add_user' );
function mw_add_user(){
$config = get_option('mw_options'); 
	$user_id = wp_insert_user( 
				array ( 
				'user_login' => $_POST['user_username'], 
				'user_pass' => $_POST['user_pass1'], 
				'user_email' => $_POST['user_email'], 
				'first_name' => $_POST['user_firstname'], 
				'last_name' => $_POST['user_lastname']
				) 
				) ;
				update_usermeta( $user_id, 'orig_password', $_POST['user_pass1'] );
				add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
				
				global $wpdb;

				$pp_mailfrom = str_replace( '%firstname%', $_POST['user_firstname'], $config['pp_mailfrom'] );
				$pp_mailfrom = str_replace( '%lastname%', $_POST['user_lastname'], $pp_mailfrom );
				$pp_mailfrom = str_replace( '%email%', $_POST['user_email'], $pp_mailfrom );
				$pp_mailfrom = str_replace( '%developer_email%', $config['pp_email'], $pp_mailfrom );
				$pp_mailfrom = str_replace( '%password%', $_POST['user_pass1'], $pp_mailfrom );
				$pp_mailfrom = str_replace( '%username%', $_POST['user_username'], $pp_mailfrom );
				$pp_mailfrom = str_replace( '%domain%', $config['domain_name'], $pp_mailfrom );
				
				$subject = str_replace( '%firstname%', $_POST['user_firstname'], $config['pp_mailsubject'] );
				$subject = str_replace( '%lastname%', $_POST['user_lastname'], $subject );
				$subject = str_replace( '%email%', $_POST['user_email'], $subject );
				$subject = str_replace( '%developer_email%', $config['pp_email'], $subject);
				$subject = str_replace( '%password%', $_POST['user_pass1'], $subject );
				$subject = str_replace( '%username%', $_POST['user_username'], $subject );
				$subject = str_replace( '%domain%', $config['domain_name'], $subject );
	
				$content = str_replace( '%firstname%', $_POST['user_firstname'], $config['pp_emailtext'] );
				$content = str_replace( '%lastname%', $_POST['user_lastname'], $content );
				$content = str_replace( '%email%', $_POST['user_email'], $content );
				$content = str_replace( '%developer_email%', $config['pp_email'], $content );
				$content = str_replace( '%password%', $_POST['user_pass1'], $content );
				$content = str_replace( '%username%', $_POST['user_username'], $content );
				$content = str_replace( '%domain%', $config['domain_name'], $content );
			//pp_mailfrom
				//patch 
							
				$headers = 'From: '.$pp_mailfrom.' <'.get_option('admin_email').'>' . "\r\n";

				wp_mail( $_POST['user_email'], $subject, $content, $headers);
				
				wp_mail( $config['pp_email'], $subject, $content, $headers);
				
				echo 'created';
	die();
}

add_action('admin_menu', 'mw_item_menu');

function mw_item_menu() {
	add_options_page('WP Vanity Email', 'WP Vanity Email', 'manage_options', 'mw_config', 'mw_config');
}

function mw_config(){

?>
<div class="wrap">
<h2>Settings</h2>

 <?php if( ($_POST['posted'] == 1) && (is_admin() ) && wp_verify_nonce($_POST['_wpnonce']) ): ?>
  <div id="message" class="updated" > Settings saved successfully </div>
  
  <?php 
  
  $domain = str_replace( 'http://', '', get_option('home') );
	$domain = str_replace( 'www.', '', $domain );
  
  //var_dump( $_POST );
  
  if( substr_count( $_POST['standart_subsr_code'], 'subscribe_std_form') == 0 ){
	$standart_subsr_code = str_replace( '<form ', '<form id="subscribe_std_form" ', $_POST['standart_subsr_code'] );
	$standart_subsr_code = str_replace( '</form>', '<input type="hidden" id="item_name" name="item_name" value="@'.$domain.'"></form>', $standart_subsr_code );
	
  }else{
	$standart_subsr_code = $_POST['standart_subsr_code'];
  }
  if( substr_count( $_POST['premium_subsr_code'], 'subscribe_prem_form') == 0 ){
	$premium_subsr_code = str_replace( '<form ', '<form id="subscribe_prem_form" ', $_POST['premium_subsr_code'] );
	$premium_subsr_code = str_replace( '</form>', '<input type="hidden" id="item_name_premium" name="item_name" value="@'.$domain.'"></form>', $premium_subsr_code );
  }else{
	$premium_subsr_code = $_POST['premium_subsr_code'];
  }
  
  $mw_options = array(
  
  'subsription_type' =>  $_POST['subsription_type'],
  'standart_subsr_code' =>  $standart_subsr_code,
  'premium_subsr_code' =>  $premium_subsr_code,
  
  
  'domain_name' =>  $domain,
  'pp_email' =>  $_POST['pp_email'],
  'pp_price' =>  $_POST['pp_price'],
  'pp_currency' =>  $_POST['pp_currency'],
  'pp_white' =>  $_POST['pp_white'],
  'pp_black' =>  $_POST['pp_black'],
  'pp_emailtext' =>  $_POST['pp_emailtext'],
  'pp_mailsubject' =>  $_POST['pp_mailsubject'],
  'pp_onoff' =>  $_POST['pp_onoff'],
  'pp_mailfrom' =>  $_POST['pp_mailfrom'],
  'pp_premiumprice' =>  $_POST['pp_premiumprice'],
  'pp_dir' => $_POST['pp_dir'],
  'pp_sitetype' => serialize( $_POST['pp_sitetype'] ),
  
  
  
  'pp_company' => $_POST['pp_company'],
  
  
  
  );
  update_option('mw_options', $mw_options );
  
  if( $_POST['reg_code'] )
  update_option('reg_code', $_POST['reg_code'] );
  ?>
  
  
  <?php else:  ?>
  
  <?php //exit; ?>
  
  <?php endif; ?> 
<form method="post" action="">
<?php wp_nonce_field();  
$config = get_option('mw_options'); 


?>  
<table class="form-table">
   
  
   
	<tr valign="top">
      <th scope="row">Plugin Help</th>
      <td><a href="<?php echo plugins_url('QuickStart.pdf', __FILE__ ); ?>" target="_blank">QuickStart.pdf</a>

      </td>
    </tr>
	
    
	<tr valign="top">
      <th scope="row">Company Name</th>
      <td><input type="text" name="pp_company" value="<?php echo $config['pp_company']; ?>"  />
      <p>Enter Your Company.</p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Paypal Email</th>
      <td><input type="text" name="pp_email" value="<?php echo $config['pp_email']; ?>"  />
      <p>Enter PayPal Email.</p>
      </td>
    </tr>
	
	<!--
	<tr valign="top">
      <th scope="row">Turn Payments ON/OFF</th>
      <td><input type="checkbox" name="pp_onoff" value="on" <?php if( $config['pp_onoff'] == 'on' ) echo ' checked '; ?> />
      <p>Here you can turn ON/OFF payment message.</p>
      </td>
    </tr>
	-->
	
	<tr valign="top">
      <th scope="row">Price</th>
      <td><input type="text" name="pp_price" value="<?php echo $config['pp_price']; ?>"  />
      <p>Enter Price for STANDARD Email Usernames</p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Premium Price</th>
      <td><input type="text" name="pp_premiumprice" value="<?php echo $config['pp_premiumprice']; ?>"  />
      <p>Enter Price for PREMIUM Email Usernames that are listed in the WHITELIST below</p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Currency Code</th>
      <td>
	  <select name="pp_currency" >
	  <option value="USD" <?php if( $config['pp_currency'] == 'USD' ) echo ' selected '  ; ?> />USD
	  <option value="CAD" <?php if( $config['pp_currency'] == 'CAD' ) echo ' selected '  ; ?> >CAD
	  <option value="EUR" <?php if( $config['pp_currency'] == 'EUR' ) echo ' selected '  ; ?> >EUR
	  </select>
	  
      <p>Select your currency.</p>
      </td>
    </tr>
	
	 <tr valign="top">
      <th scope="row">Subscription Type</th>
      <td>
	  <input type="radio" name="subsription_type" value="buy_now" <?php if( $config['subsription_type'] == 'buy_now' ) echo ' checked '; ?> />BuyNow Button<br/>
	  <input type="radio" name="subsription_type" value="subscr" <?php if( $config['subsription_type'] == 'subscr' ) echo ' checked '; ?> />Subscribe Button<br/>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Standard Name Form Code</th>
      <td><textarea cols="70" rows="10" name="standart_subsr_code"><?php echo stripslashes( $config['standart_subsr_code'] ); ?></textarea>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Premium Name Form Code</th>
      <td><textarea cols="70" rows="10" name="premium_subsr_code"><?php echo stripslashes( $config['premium_subsr_code'] ); ?></textarea>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">White List</th>
      <td><textarea cols="70" rows="10" name="pp_white"><?php echo $config['pp_white']; ?></textarea>
      <p>Here you can enter usernames for whitelist <b>comma separated</b>.</p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Black List</th>
      <td><textarea cols="70" rows="10" name="pp_black"><?php echo $config['pp_black']; ?></textarea>
      <p>Here you can enter usernames for blacklist <b>comma separated</b>.</p>
      </td>
    </tr>
	
	
	
	<tr valign="top">
      <th scope="row">Email From</th>
      <td><input type="text" name="pp_mailfrom" value="<?php echo  stripslashes( $config['pp_mailfrom'] ); ?>"  />
  <p>Here you can compose your mail text. use %firstname%, %lastname%, %email%, %developer_email%,  %password%, %username%, %domain% </p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Email Subject</th>
      <td><input type="text" name="pp_mailsubject" value="<?php echo stripslashes( $config['pp_mailsubject'] ); ?>"  />
  <p>Here you can compose your mail text. use %firstname%, %lastname%, %email%, %developer_email%,  %password%, %username%, %domain% </p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">Email Text</th>
      <td><textarea cols="70" rows="10" name="pp_emailtext" ><?php echo  stripslashes( $config['pp_emailtext'] ); ?></textarea>
      <p>Here you can compose your mail text. use %firstname%, %lastname%, %email%, %developer_email%,  %password%, %username%, %domain% </p>
      </td>
    </tr>
	
	<tr valign="top">
      <th scope="row">List my domain in your Directory</th>
      <td><input type="checkbox" name="pp_dir" value="on" <?php if( $config['pp_dir'] == 'on' ) echo ' checked '; ?> />
      <p>If checked - site will be listed in email selling directory.</p>
      </td>
    </tr>
	
	

<tr valign="top">
      <th scope="row">List my domain in your Directory</th>
      <td>	
	  <select multiple="multiple" name="pp_sitetype[]">
	  <?php  $arr = unserialize( $config['pp_sitetype']); 
			if( count( $arr ) == 0 ){
				$arr = array();
			}
	  ?>
			<option value="fun" <?php  if( @in_array('fun', $arr) ) echo ' selected '; ?> >Fun</option>
			<option value="first-name" <?php  if( @in_array('first-name', $arr ) ) echo ' selected ';  ?> >First Name</option>
			<option value="last-name" <?php  if( @in_array('last-name', $arr ) ) echo ' selected '; ?> >Last Name</option>
			<option value="city"  <?php  if( @in_array('city', $arr ) ) echo ' selected '; ?> >City</option>
			<option value="occupation"  <?php  if( @in_array('occupation', $arr ) ) echo ' selected ';  ?> >Occupation</option>
			</select>
      <p>If checked - site will be listed in email selling directory.</p>
      </td>
    </tr>
 <?php if( !check_if_valid() ): ?>
	<tr valign="top">
			<th scope="row"><?php _e('Enter Reg Code'); ?></th>
			<td>
			 
			  <input type="text" name="reg_code" value="<?php echo get_option('reg_code'); ?>" />
			   <?php if( check_if_valid() ): ?>
				<div class="conf_msg">Your copy of plugin registered successfully.</div>
			  <?php else: ?>
				<div class="error_msg">Sorry, you entered invalid code. please purchase one from <a href="http://www.wpvanityemail.com/purchase.php" target="_blank">http://www.wpvanityemail.com/purchase.php</a></div>
			  <?php endif; ?>
			</td>
		</tr>
<?php else: ?>
		<tr valign="top">
			<th scope="row"></th>
			<td>
			 <div class="conf_msg">Your copy of plugin registered successfully.</div>
			</td>
		</tr>
		
 <?php endif; ?>
</table>

<input type="hidden" value="1" name="posted" />
<input type="Submit" value="Save" class="button-secondary" />
</form>
  
</div>


<?php 
}
function check_if_valid( ){

	// trial functionality
	$act_time = get_option('ve_timestamp');	
	$difference = time() - $act_time;
	//var_dump( $difference );
	if( $difference <  60 * 60 * 24 * 10 ){
		return true;
	}

	$config = get_option('mw_options'); 
	
	$site_url = str_replace('http://', '', get_option('home') );
	$site_url = str_replace('www.', '', $site_url );
	
	if( $config['pp_dir'] == 'on' ){
		$arr2use = unserialize( $config['pp_sitetype'] );
		if( count( $arr2use ) > 0 ){
			$add_str = '&dir_data='.implode( ',', $arr2use );
		}
		
	}
	
	if( !get_option('wve_registered') ){
		$res = @file_get_contents('http://wpvanityemail.com/listner.php?site_url='.$site_url.'&reg_code='.get_option('reg_code').$add_str );
			if( $res == 'true' ){
				update_option( 'wve_registered', 1 );
			}
	}else{
		$res = 'true';
	}
	
	

	if( $res == 'true' ) return true; else return false;
}

add_action('wp_head', 'mw_add_head');
function mw_add_head(){
	echo "<link href='http://fonts.googleapis.com/css?family=BenchNine:700' rel='stylesheet' type='text/css'>";
}
/************************************************************************************/
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		
		<tr>
			<th><label for="twitter">Original Password</label></th>

			<td>
				<input type="text" name="orig_password" id="orig_password" value="<?php echo esc_attr( get_the_author_meta( 'orig_password', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>
		

	</table>
<?php }
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;
	update_usermeta( $user_id, 'orig_password', $_POST['orig_password'] );	
}

add_action('wp_print_scripts', 'tv_add_script_fn');
function tv_add_script_fn(){

   if(is_admin()){
  
	wp_enqueue_style('admin_css', plugins_url('/css/admin.css', __FILE__ ) ) ;
  }else{
	wp_enqueue_script('tp_front_js', plugins_url('/js/front.js', __FILE__ ), array('jquery'), '1.0' ) ;
	wp_enqueue_style('la6_front_css', plugins_url('/css/front.css', __FILE__ ) ) ;
	wp_enqueue_style('la_buttons_js', plugins_url('/css/buttons.css', __FILE__ ) ) ;
  }
}

function get_image_type($file) {
     if (!$f = @fopen($file, 'rb')) {
         return false;
     }
 
     $data = fread($f, 8);
     fclose($f);
 
     if (
         @array_pop(unpack('H12', $data)) == '474946383961' ||
         @array_pop(unpack('H12', $data)) == '474946383761'
     ) {
         return 'GIF';
     } else if (
         @array_pop(unpack('H4', $data)) == 'ffd8'
     ) {
         return 'JPEG';
     } else if (
         @array_pop(unpack('H16', $data)) == '89504e470d0a1a0a'
     ) {
         return 'PNG';
     } 
 
     return false;
 }

add_action('wp_footer', 'tp_footer_injection') ;
function tp_footer_injection(){
	echo '<input type="hidden" id="ajaxurl" value="'.get_option('home').'/wp-admin/admin-ajax.php" />';
}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>