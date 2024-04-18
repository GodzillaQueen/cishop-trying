<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends MY_Model 
{
	protected $table	= 'orders';
	public function getDefaultValues()
	{
		return [
			'name'		=> '',
			'address'	=> '',
			'phone'		=> '',
			'status'	=> ''
		];
	}
	public function getValidationRules()
	{
		$validationRules	= [
		[
			'field'		=> 'name',
			'lable'		=> 'Nama',
			'rules'		=> 'trim|required'
		],
		[
			'field'		=> 'address',
			'lable'		=> 'Alamat',
			'rules'		=> 'trim|required'
		],
		[
			'field'		=> 'phone',
			'lable'		=> 'Telepon',
			'rules'		=> 'trim|required|max_length[15]'
		]
	];
	return $validationRules;
	}
	

}

/* End of file Checkout_model.php */

