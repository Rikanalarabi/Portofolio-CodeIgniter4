<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Latihan Ci4'
		];
		return view('Pages/Home', $data);
	}

	public function About()
	{
		$data = [
			'title' => 'About | Latihan Ci4'
		];
		return view('Pages/About', $data);
	}

	public function Contact()
	{
		$data = [
			'title' => 'Contact | Latihan Ci4',
			'alamat' => [
				[
				'Wa' => '081313243232',
				'Email' => 'Rikanalarabi8@gmail.com',
				'alamat' => 'Kp. Madapada Ds. Cisaruni Kec. Padakembang Kab. Tasikmalaya Jawa Barat 46466',
				'domisili' => 'Gang Raden Jibja No 155 Kel. Cicaheum Kab. Kiaracondong Kota Bandung Jawa Barat'
			]
		]			
	];
		return view('Pages/Contact', $data);
	}
}
