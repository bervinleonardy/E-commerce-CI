<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends MY_Controller	 {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Orders_model');
        $params = array('server_key' => 'SB-Mid-server-CeTJwdIySTkI6sMVTOMkNJlz', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    // public function index()
    // {
    // 	$this->load->view('checkout_snap');
    // }

    public function token(){
    	//var_dump($_SESSION);
    	$order_id=$_SESSION['order_id'];
    	$user_id = $_SESSION['logged_user']['id'];
		$detail_order=$this->Orders_model->getDetailOrder($order_id,$user_id);
		$item_details=json_encode($detail_order);
		// Optional
		$gross_amount=0;
		foreach ($detail_order as  $value) {
			$gross_amount += $value->price * $value->quantity;
		}
		$bill_and_ship=$this->Orders_model->getInfoUser($user_id);
		$name=$bill_and_ship->name;
		$names=explode(" ",$name);
		$transaction_details = array(
            'order_id'      => $_SESSION['order_id'],
            'gross_amount'  => round($gross_amount)
        );
		$billing_address = array(
		  'first_name'    => $names[0],
		  'last_name'     => $names[1],
		  'address'       => $bill_and_ship->alamat,
		  'city'          => $bill_and_ship->city,
		  'postal_code'   => $bill_and_ship->postal_code,
		  'phone'         => $bill_and_ship->phone,
		  'country_code'  => $bill_and_ship->country_code
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => $names[0],
		  'last_name'     => $names[1],
		  'address'       => $bill_and_ship->alamat,
		  'city'          => $bill_and_ship->city,
		  'postal_code'   => $bill_and_ship->postal_code,
		  'phone'         => $bill_and_ship->phone,
		  'country_code'  => $bill_and_ship->country_code
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $names[0],
		  'last_name'     => $names[1],
		  'email'         => $bill_and_ship->email,
		  'phone'         => $bill_and_ship->phone,
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 20
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
     }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

    }
}
