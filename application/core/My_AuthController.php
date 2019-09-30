<?php
class MY_AuthController extends CI_Controller {
   public $data;
   public $user;

   public $layout = 'layouts/default';
   public function __construct() {
      parent::__construct();
      if(!isset($_SESSION['authUser']) && empty($_SESSION['authUser'])) {
         header('Location: '.('/index.php/auth/login'));
         return $this;
      } else {
         $this->user = auth_user();
      }
   }
   function render($view, $options = [])
   {
      $params = array_merge(['view' =>  $view ], $options);
      // $this->parser->parse($this->layout, array_merge($this->data, $params), false);
      $this->load->view($this->layout, array_merge($this->data, $params));
   }
   protected function sendEmail(array $to, array $msg) {
      $mailContent = $this->parser->parse($msg['template'], $msg['vars'], true);
      $this->email->initialize(config('smtp'));
      $this->email->from('no-reply@domain.com', config('app.name'));
      $this->email->to($to['email'], isset($to['name']) ? $to['name']: '');
      $this->email->subject($msg['subject']);
      $this->email->message($mailContent);
      return $this->email->send();
   }
   protected function sendPushNotification($token, $payload = []) {
      $payload = array_merge([
         'notification' => [
            'title' => $payload['title'],
            'body' => isset($payload['body']) ? $payload['body']: $payload['title'],
            'icon' => config('app.icon'),
         ],
         'to' => $token,
      ], $payload);
      $payload = json_encode($payload);
      $headers = [
         'Authorization' => 'key='. config('fcm.server_key'),
         'Content-Type' => 'application/json',
      ];
      $notifyUrl = 'https://fcm.googleapis.com/fcm/send';
      $response = \Unirest\Request::post( $notifyUrl, $headers, $payload );
      return $response->body;
   }
   protected function _upload($file) {
      $config['upload_path'] = APPPATH.'/../storage/public/';
      //$config['allowed_types'] = 'gif|jpg|png|webp|jpeg';
      $config['max_size'] = 11000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload($file)) {
         $error = array('error' => $this->upload->display_errors());
         return $error;
      }
      else {
         $data = array('upload_data' => $this->upload->data());
         return $data;
      }
   }
   function api($route) {
      $route = strtolower($route);
      $route = str_replace('-', '_', $route);
      $methodName = 'api_'.$route;
      if(method_exists($this, $methodName)) {
         return $this->$methodName();
      }
   }
   function inputs($key = null, $default = null) {
      $inputs = $_POST;
      if(!count($inputs)) {
         $inputs = json_decode(file_get_contents('php://input'), true);
      }
      if($key) {
         return $inputs[$key];
      }
      return $inputs;
   }
}
