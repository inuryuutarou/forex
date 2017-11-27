<?php
class M_captcha extends CI_Model{
	
	function simple_php_captcha($config = array()) {
	
		// Check for GD library
		if( !function_exists('gd_info') ) {
			throw new Exception('Required GD library is missing');
		}
	
		$bg_path = base_url('media/images/captcha/backgrounds')."/";
		$font_path = "media/images/captcha/fonts/";
	
		// Default values
		$captcha_config = array(
			'code' => '',
			'min_length' => 5,
			'max_length' => 5,
			'backgrounds' => array(
				$bg_path . '45-degree-fabric.png',
				$bg_path . 'cloth-alike.png',
				$bg_path . 'grey-sandbag.png',
				$bg_path . 'kinda-jean.png',
				$bg_path . 'polyester-lite.png',
				$bg_path . 'stitched-wool.png',
				$bg_path . 'white-carbon.png',
				$bg_path . 'white-wave.png'
			),
			'fonts' => array(
				$font_path . 'times_new_yorker.ttf'
			),
			'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZ23456789',
			'min_font_size' => 28,
			'max_font_size' => 28,
			'color' => '#666',
			'angle_min' => 0,
			'angle_max' => 10,
			'shadow' => true,
			'shadow_color' => '#fff',
			'shadow_offset_x' => -1,
			'shadow_offset_y' => 1
		);
	
		// Overwrite defaults with custom config values
		if( is_array($config) ) {
			foreach( $config as $key => $value ) $captcha_config[$key] = $value;
		}
	
		// Restrict certain values
		if( $captcha_config['min_length'] < 1 ) $captcha_config['min_length'] = 1;
		if( $captcha_config['angle_min'] < 0 ) $captcha_config['angle_min'] = 0;
		if( $captcha_config['angle_max'] > 10 ) $captcha_config['angle_max'] = 10;
		if( $captcha_config['angle_max'] < $captcha_config['angle_min'] ) $captcha_config['angle_max'] = $captcha_config['angle_min'];
		if( $captcha_config['min_font_size'] < 10 ) $captcha_config['min_font_size'] = 10;
		if( $captcha_config['max_font_size'] < $captcha_config['min_font_size'] ) $captcha_config['max_font_size'] = $captcha_config['min_font_size'];
	
		// Generate CAPTCHA code if not set by user
		if( empty($captcha_config['code']) ) {
			$captcha_config['code'] = '';
			$length = mt_rand($captcha_config['min_length'], $captcha_config['max_length']);
			while( strlen($captcha_config['code']) < $length ) {
				$captcha_config['code'] .= substr($captcha_config['characters'], mt_rand() % (strlen($captcha_config['characters'])), 1);
			}
		}
	
		// Generate HTML for image src
		$image_src = site_url("captcha/generate_image_captcha").'?_CAPTCHA&amp;t='.urlencode(microtime());
	
		$CAPTCHA['config'] = $captcha_config;
		$this->session->set_userdata('_CAPTCHA',$CAPTCHA);
	
		$aray_return=array(
						'code' => $captcha_config['code'],
						'image_src' => $image_src
					);
		
		return $aray_return;
	
	}
}
?>