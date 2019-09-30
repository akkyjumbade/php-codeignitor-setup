<?php
function hashPassword(String $password = null)
{
    return password_hash($password, PASSWORD_BCRYPT);
}
function verifyPassword(String $password = null)
{
    return password_hash($password, PASSWORD_BCRYPT);
}
class optionalVar {
    function __get($key) {
        // var_dump($key);
        // die;
        if(is_null($key)) {
            return null;
        }
        return $key;
    }
   }
function optional($obj = null)
{
    if(!is_null($obj)){
        return $obj;
    }else {
        return new optionalVar();
    }
}
function _redirectIfNotLoggedIn(Type $var = null)
{
    $CI = & get_instance();
    $user = $CI->session->userdata('username');
    if($user) {
        return true;
    } else {
      session_destroy();
      header('Location: '.base_url('/auth/login'));
    }

}
function config($key, $default = null) {
   $CI = & get_instance();
   if($CI->config->item($key)) {
      return $CI->config->item($key);
   }
   return $default;
}
function do_upload($file) {
   $config['upload_path'] = APPPATH.'/../storage/public/';
   $config['allowed_types'] = 'gif|jpg|png|webp';
   $config['max_size'] = 10000;
   // $config['max_width'] = 1024;
   // $config['max_height'] = 768;
   $CI = & get_instance();
   $CI->load->library('upload', $config);
   $fileName = $file['name'];
   if ( ! $CI->upload->do_upload($fileName)) {
      return $error = array('error' => $CI->upload->display_errors());
      // return
   }
   else {
      return $data = array('upload_data' => $CI->upload->data());
      // return
   }
   return [
      'ok' => false,
   ];
}

function _response($ok = false, $params = []) {
   $CI = & get_instance();
   $statusCode = 200;
   // if(!$ok) {
   //    $statusCode = 400;
   // }
   // http_response_code($statusCode);
   $outputArr = array_merge([ 'ok' => $ok, ], $params);
   $output = json_encode($outputArr);
   return $CI->output->set_content_type('application/json')
                     ->set_status_header($statusCode)
                     ->set_output($output);
   exit;
}
function _user() {
   $CI = & get_instance();
   return (object) $CI->session->userdata('authUser');
}
function auth_user() {
   $CI = & get_instance();
   return (object) $CI->session->userdata('authUser');
}
// Get input param from url
function url_input($key, $default = null) {
   $get = $_GET;
   if(isset($get[$key]) && $get[$key]) {
      // parse value from url
      $value = trim($get[$key]);
      $value = addslashes($value);
      return $value;
   }
   return $default;
}
// Generate random image and return base64 encoded format of just return image
function create_random_image($key = 'cwt_lead_', $dump = true) {
   $keyName = uniqid($key);
   $imgUrl = "https://www.tinygraphs.com/squares/$keyName?theme=heatwave&numcolors=4&size=220&fmt=png";

   $img = file_get_contents($imgUrl);
   $img = base64_encode($img);
   $img = 'data:image/png;base64,'.$img;
   if($dump) {
      return $img;
   } else {
      return $imgUrl;
   }
}
function create_random_avatar($key = 'cwt_lead_', $dump = true) {
   $keyName = uniqid($key);
   $imgUrl = "https://api.adorable.io/avatars/285/".$key;

   $img = file_get_contents($imgUrl);
   $img = base64_encode($img);
   $img = 'data:image/png;base64,'.$img;
   if($dump) {
      return $img;
   } else {
      return $imgUrl;
   }
}
