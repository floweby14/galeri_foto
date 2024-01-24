<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class Penawaran extends BaseController {

	// ================================================================================================================================ //

        public function index() {

            if (session() -> get('id') == NULL) {

                return redirect() -> to('/home/');

            } else if (session() -> get('id') > 0 && in_array(session() -> get('level'), [1, 2])) {

                $Schema = new Schema();

                    // Fetching data
                    
                    $_fetch['penawaranData'] = $Schema -> visual_table('tb_barang');

                echo view('layout/_heading');
                echo view('masyarakat/penawaran', $_fetch);
                echo view('layout/_footer');
                echo view('layout/_menu');

            }

        }

        public function detail_penawaran($id) {
           
            if(session()->get('id') > 0) {

                $Schema = new Schema();
                
                    $_fetch['penawaran']= $Schema -> getWhere('tb_barang', array('id_barang'=> $id));

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('masyarakat/detail_penawaran', $_fetch);
                echo view('layout/_footer');

	        } else {

		        return redirect()->to('/Home');
                
            }

        }

}