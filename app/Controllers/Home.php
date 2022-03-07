<?php

namespace App\Controllers;

class Home extends BaseController{
    public function __construct(){
        $this->smtp = \Config\Services::email();
    }
    public function index(){
        $data = [
            'umur' => hitung_umur('2001-03-14'),
        ];
        return view('index', $data);
    }

    public function siadit(){
        if($this->request->isAJAX()){
            return view('portfolio/siadit');
        } else {
            return redirect()->to(base_url());
        }        
    }

    public function sifarmasi(){
        if($this->request->isAJAX()){
            return view('portfolio/sifarmasi');
        } else {
            return redirect()->to(base_url());
        }        
    }

    public function hitech(){
        if($this->request->isAJAX()){
            return view('portfolio/hitech');
        } else {
            return redirect()->to(base_url());
        }        
    }

    public function semnasti(){
        if($this->request->isAJAX()){
            return view('portfolio/semnasti');
        } else {
            return redirect()->to(base_url());
        }        
    }

    public function contact(){
        if($this->request->isAJAX()){
            $data = $this->request->getPost();
            $this->smtp->setFrom("contact@pelajar.net", "Web Profile");
            $this->smtp->setReplyTo("$data[email]", "$data[name]");
            $this->smtp->setTo('admin@mail.akbardwi.my.id');
            $this->smtp->setSubject("Pesan dari $data[name]");
            $this->smtp->setMessage("
                <html>
                <head>
                <title>Pesan dari $data[name]</title>
                </head>
                <body>
                <p>Hai, ada pesan dari <b>".$data['name']."</b></p>
                <p>$data[message]</p>
                </body>
                </html>
            ");
            $kirim = $this->smtp->send();
            if($kirim){
                $respon = [
                    'type' => 'success',
                    'message' => 'Pesan berhasil dikirim.',
                    'token' => csrf_hash()
                ];
            } else {
                $respon = [
                    'type' => 'danger',
                    'message' => 'Pesan gagal dikirim.',
                    'token' => csrf_hash()
                ];
            }
            return $this->response->setJSON($respon);
        } else {
            return redirect()->to(base_url());
        }        
    }
}
