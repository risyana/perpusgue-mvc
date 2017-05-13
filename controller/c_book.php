<?

include("model/m_book.php");
include("view/v_book.php");

class c_book{

	function cViewAllBooks(){
		$result = m_book::getAllBook();
		v_book::viewAllBooks($result);
	}

	function cViewBook($id,$mode){
		
		//$viewParam => (VISIBILITY, SUBMIT_BUTTON, DISABLED)

		$result = m_book::getBook($id);
		$value = mysql_fetch_row($result);
		
		if (!$mode){
			$value = array('','','','');
			$viewParam = array('visibility: hidden;', '-', '');
		}else if ($mode=='add'){
			$value = array('','','','');
			$viewParam = array('visibility: visible;', 'Save', '');
		}else if ($mode=='update'){
			$viewParam = array('visibility: visible;', 'Update', '');
		}else if ($mode=='delete'){
			$viewParam = array('visibility: visible;', 'Delete', 'disabled');
		}

		v_book::viewBook($value,$viewParam,$mode);
	}

	function cDML(){
		$id=$_POST['id'];
		$mode=$_POST['mode'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$year=$_POST['year'];

		if($mode=='add'){
			m_book::setNewBook($title, $author, $year);
		} else if($mode=='update'){
			m_book::setUpdateBook($id,$title, $author, $year);
		} else if($mode=='delete'){
			m_book::setDeleteBook($id);
		}

	}

}

?>