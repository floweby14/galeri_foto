<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Models;
use App\Models\Schema;

class Home extends BaseController {

	// ================================================================================================================================ //

		public function index() {

			if (session() -> get('id') == NULL) {

			    return view('login');

            } else if (session() -> get('id') > 0) {

                return redirect() -> to('/home/dashboard');

            }

		}
		
	// ================================================================================================================================ // - Login System

		public function aksi_login() {

            $Schema = new Schema();

                $username = $this -> request -> getPost('username');
                $password = $this -> request -> getPost('password');

            $data = array(
                'username' => $username,
                'password' => md5($password)
            );

                $session = $Schema -> getWhere2('user', $data);

            if ($session > 0) {

                session() -> set('id', $session['id_user']);
                session() -> set('username', $session['username']);
                session() -> set('level', $session['level']);

                return redirect()->to('/home/dashboard');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function logout() {

            session() -> destroy();

            return redirect() -> to('/home/');

        }

        public function dashboard() {

		    if(session()->get('id')>0) {

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('dashboard');
                echo view('layout/_footer');

	        } else {

		        return redirect()->to('/Home');

            }

        }

        public function register_user() {

            if (session() -> get('id') == NULL) {

                echo view('register');

            } else if (session() -> get('id') > 0) {

                return redirect() -> to('/home/dashboard');

            }

        }

        public function aksi_register() {

            if (session() -> get('id') == NULL) {

                $Schema = new Schema();

                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('password');

                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> '3',
                );
                
                    $Schema -> insert_data('user', $user);

                $where = array('username' => $username);
                $_fetch = $Schema -> getWhere2('user', $where);

                $_id = $_fetch['id_user'];

                    $Schema -> insert_data('tb_masyarakat', array('user' => $_id));

                return redirect()->to('/home/');

            } else {

                return redirect()->to('/home/');

            }

        }

    // ================================================================================================================================ // -Data Barang 

    public function barang() {

        if (session() -> get('id') > 0) {

            $Schema = new Schema();

                $_fetch['barangData'] = $Schema -> visual_table('tb_barang');

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('pages/data_barang', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect() -> to('/home/');

        }
    }

    public function tambah_data_barang() {

        if(in_array(session() -> get('level'), [1])) {

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/tambah_data_barang');
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }
    }
    public function aksi_tambah_barang() {
        
        if (in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();

            $foto = $this->request->getFile('foto');
            $nama_barang = $this->request->getPost('nama_barang');
            $tgl = $this->request->getPost('tgl');
            $deskripsi_barang = $this->request->getPost('deskripsi_barang');
            $status = $this->request->getPost('status');

            if ($foto && $foto -> isValid() && ! $foto -> hasMoved()) {

                if ($foto == 'default.png' || NULL) {

                    $images = $foto -> getRandomName();
                    $foto -> move('images', $images);

                } else {

                    $images = $foto -> getRandomName();
                    $foto -> move('images', $images);
                    
                }

            } else {

                $images = 'default.png';

            }

            $penawaranData = array(
                'nama_barang' => $nama_barang,
                'tgl' => $tgl,
                'deskripsi_barang' => $deskripsi_barang,
                'foto' => $images
            );
                $Schema -> insert_data('tb_barang', $penawaranData);
            return redirect()->to('/home/barang');

        } else {

            return redirect()->to('/home/');

        }

    }
    
}    
