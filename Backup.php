<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller { 

	public function __construct()
    {
        parent:: __construct(); 

        if ( !$this->session->userdata('admin_id')  ) { 
            redirect('login'); 
        }
    }

	public function index()
	{
        
		$data['page_title'] = "Back up";
		$data['db_name'] = $this->db->database;
		$this->load->view('admin/backup', $data);
	}


    public function export()
    {
        // Load the DB utility class
        $this->load->dbutil();

        // get all the table
        $tables = $this->db->list_tables();

        // data preferences
        $prefs = array(
            'tables'             => $tables,   // Array of tables to backup.
            'ignore'             => array(),   // List of tables to omit from the backup
            'format'             => 'sql',     // gzip, zip, txt
            'add_drop'           => true,      // Whether to add DROP TABLE statements to backup file
            'add_insert'         => true,      // Whether to add INSERT data to backup file
            'newline'            => "\n",      // Newline character used in backup file
            'foreign_key_checks' => false,
        );

        // Backup your entire database and assign it to a variable
        $backup   = $this->dbutil->backup($prefs);
        $filename = md5(date("Y-m-d h.i.s") . ' ' . $this->db->database) . '.sql';

        if (write_file(FCPATH . '/database/' . $filename, $backup)) { 
				
			echo '
				<script>
					alert("Database Exported!");
					window.location.href="../backup";
				</script>';
        } else { 
				
			echo '
				<script>
					alert("Unabled to backup database!");
					window.location.href="../backup";
				</script>';
        }  
 
    } 
 
    
}
