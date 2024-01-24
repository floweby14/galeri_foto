<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class User extends BaseController {

	// ================================================================================================================================ //

        public function index() {

            if (session() -> get('id') == NULL) {

                return redirect() -> to('/home/');

            } else if (session() -> get('id') > 0 && in_array(session() -> get('level'), [1, 2])) {

                $Schema = new Schema();

                    // Fetching data

                    $on = 'user.level = tb_level.id_level';
                    
                    $_fetch['userData'] = $Schema -> visual_table_join2('user', 'tb_level', $on);

                echo view('layout/_heading');
                echo view('pages/data_user', $_fetch);
                echo view('layout/_footer');
                echo view('layout/_menu');

            }

        }

    // ================================================================================================================================ // - Petugas

        public function petugas() {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    $_fetch['petugasData'] = $Schema -> visual_table('tb_petugas');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_petugas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function tambah_petugas() {

            if(in_array(session() -> get('level'), [1])) {
    
                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/tambah_petugas');
                echo view('layout/_footer');
    
            } else {
    
                return redirect()->to('/home/');
    
            }
    
        }
    
        public function aksi_tambah_petugas() {
            
            if (in_array(session() -> get('level'), [1])) {
    
                $Schema = new Schema();
    
                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('password');
                    $nama_petugas = $this->request->getPost('nama_petugas');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_hp = $this->request->getPost('no_hp');
    
                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> '2',
                );
                
                    if (in_array(session() -> get('level'), [1])) {
    
                        $Schema -> insert_data('user', $user);
    
                    } else {
    
                        return redirect() -> to('/user/petugas');
    
                    }
    
                $where = array('username' => $username);
                $_fetch = $Schema -> getWhere2('user', $where);
    
                $_id = $_fetch['id_user'];
    
                $murid = array(
                    'nama_petugas' => $nama_petugas,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'no_hp' => '+62 ' . $no_hp,
                    'user' => $_id,
                );
    
                    if (in_array(session() -> get('level'), [1])) {
    
                        $Schema -> insert_data('tb_petugas', $murid);
    
                    } else {
    
                        return redirect() -> to('/user/petugas');
    
                    }
    
                return redirect()->to('/user/petugas');
    
            } else {
    
                return redirect()->to('/home/');
    
            }
    
        }

        public function edit_petugas($id) {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Schema();

                    $on = 'user.id_user = tb_petugas.user';
    
                    $_fetch['petugasData'] = $Schema -> getWhere_table_join_2('user', 'tb_petugas', $on, array('id_user' => $id));
    
                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_petugas', $_fetch);
                echo view('layout/_footer');
    
            } else {
    
                return redirect() -> to('/home/');
    
            }
    
        }
    
        public function aksi_edit_petugas() {
            
            if (in_array(session() -> get('level'), [1])) {
    
                $Schema = new Schema();
    
                    $username = $this->request->getPost('username');
                    $id_user = $this->request->getPost('id_user');
    
                    $nama_petugas = $this->request->getPost('nama_petugas');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_hp = $this->request->getPost('no_hp');
                    $id_petugas = $this->request->getPost('id_petugas');
    
                    $where = array('id_user' => $id_user);
    
                $user = array(
                    'username'=> $username,
                );
                
                    if (in_array(session() -> get('level'), [1])) {
    
                        $Schema -> edit_data('user', $user, $where);
    
                    } else {
    
                        return redirect() -> to('/user/');
    
                    }
    
                    $where2 = array('user' => $id_petugas);
    
                $murid = array(
                    'nama_petugas' => $nama_petugas,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'no_hp' => '+62 ' . $no_hp,
                );
    
                    if (in_array(session() -> get('level'), [1])) {
    
                        $Schema -> edit_data('tb_petugas', $murid, $where2);
    
                    } else {
    
                        return redirect() -> to('/user/petugas');
    
                    }
    
                return redirect()->to('/user/petugas');
    
            } else {
    
                return redirect()->to('/home/');
    
            }
    
        }
    
        public function hapus_petugas($id) {
    
            $Schema = new Schema();
    
                $user = array('id_user' => $id);
                $petugas = array('user' => $id);
    
                if (in_array(session() -> get('level'), [1])) {
    
                    $Schema -> delete_data('user', $user);
                    $Schema -> delete_data('tb_petugas', $petugas);
    
                } else {
    
                    return redirect() -> to('/home/petugas');
    
                }
    
            return redirect() -> to('/home/petugas');
    
        }

    // ================================================================================================================================ // - Masyarakat

        public function masyarakat() {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    $_fetch['masyarakatData'] = $Schema -> visual_table('tb_masyarakat');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_masyarakat', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function tambah_masyarakat() {

            if(in_array(session() -> get('level'), [1])) {

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/tambah_masyarakat');
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_tambah_masyarakat() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Schema();

                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('password');
                    $nama_masyarakat = $this->request->getPost('nama_masyarakat');
                    $alamat = $this->request->getPost('alamat');
                    $no_hp = $this->request->getPost('no_hp');

                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> '2',
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> insert_data('user', $user);

                    } else {

                        return redirect() -> to('/user/masyarakat');

                    }

                    $where = array('username' => $username);
                    $_fetch = $Schema -> getWhere2('user', $where);

                    $_id = $_fetch['id_user'];

                $murid = array(
                    'nama_masyarakat' => $nama_masyarakat,
                    'alamat' => $alamat,
                    'no_hp' => '+62 ' . $no_hp,
                    'user' => $_id,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> insert_data('tb_masyarakat', $murid);

                    } else {

                        return redirect() -> to('/user/masyarakat');

                    }

                return redirect()->to('/user/masyarakat');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function edit_masyarakat($id) {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Schema();

                    $on = 'user.id_user = tb_masyarakat.user';
    
                    $_fetch['masyarakatData'] = $Schema -> getWhere_table_join_2('user', 'tb_masyarakat', $on, array('id_user' => $id));

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_masyarakat', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_edit_masyarakat() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Schema();

                    $username = $this->request->getPost('username');
                    $id_user = $this->request->getPost('id_user');

                    $nama_masyarakat = $this->request->getPost('nama_masyarakat');
                    $alamat = $this->request->getPost('alamat');
                    $no_hp = $this->request->getPost('no_hp');
                    $id_masyarakat = $this->request->getPost('id_masyarakat');

                    $where = array('id_user' => $id_user);

                $user = array(
                    'username'=> $username,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('user', $user, $where);

                    } else {

                        return redirect() -> to('/user/');

                    }

                    $where2 = array('user' => $id_masyarakat);

                $murid = array(
                    'nama_masyarakat' => $nama_masyarakat,
                    'alamat' => $alamat,
                    'no_hp' => '+62 ' . $no_hp,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('tb_masyarakat', $murid, $where2);

                    } else {

                        return redirect() -> to('/user/masyarakat');

                    }

                return redirect()->to('/user/masyarakat');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function hapus_masyarakat($id) {

            $Schema = new Schema();

                $user = array('id_user' => $id);
                $masyarakat = array('user' => $id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('user', $user);
                    $Schema -> delete_data('tb_masyarakat', $masyarakat);

                } else {

                    return redirect() -> to('/user/masyarakat');

                }

            return redirect() -> to('/user/masyarakat');

        }
    

}