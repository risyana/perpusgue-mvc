<?

class m_book{
	function getBook($id){
		$q = "select c_id, c_title, c_author, c_release_year from t_m_books where c_id='$id' ";
		$result = mysql_query($q);
		return $result;
	}

	function getAllBook(){
		$q = "select t.c_id, t.c_title, t.c_author, t.c_release_year from t_m_books t";
		$result = mysql_query($q);
		return $result;
	}

	function setNewBook($title, $author, $year){
		$q = "insert into t_m_books(c_title, c_author, c_release_year) values('$title','$author','$year')";
		$result = mysql_query($q);
	}

	function setUpdateBook($id,$title, $author, $year){
		$q = "update t_m_books set c_title = '$title',  c_author = '$author', c_release_year='$year' where c_id=$id ";
		$result = mysql_query($q);
	}

	function setDeleteBook($id){
		$q = "delete from t_m_books where c_id=$id";
		$result = mysql_query($q);
	}
}

?>