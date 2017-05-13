<?
class v_book{

	function viewAllBooks($result){
		echo "<a id='add' class='btn' href='index.php?mode=add' title='Add Book'><img src='img/b_insrow.png'  /> Add </a>";
		echo "<div class='table-row'>";
            echo "<span class='table_med' id='head'>Title</span>";
            echo "<span class='table_med' id='head'>Author</span>";
            echo "<span class='table_med' id='head'>Released </span>";
            echo "<span class='table_small' id='head'> </span>";
   		 echo "</div>";

		while($row=mysql_fetch_row($result)){
			echo "<div class='table-row'>";
				echo "<span class='table_med'><a href='http://google.com?#q=$row[1] $row[2]' target='_blank' >$row[1]</a></span>";
				echo "<span class='table_med'>".$row[2]."</span> ";
				echo "<span class='table_med'>".$row[3]."</span> ";
				echo "<span class='table_small'>";
					echo "<a class='btn' href='index.php?mode=update&id=$row[0]' title='Update Book' ><img src='img/b_edit.png' /></a> ";
					echo "<a class='btn' href='index.php?mode=delete&id=$row[0]' title='Delete Book' ><img src='img/b_drop.png'  /></a> ";
				echo "</span> ";
			echo "</div>";
		}

	}

	function viewBook($value,$viewParam,$mode){

		echo "<form  action='index.php' method='POST'>";
			echo "<input style='$viewParam[0]' name='id' type='hidden' value='$value[0]' />";
			echo "<input style='$viewParam[0]' name='mode' type='hidden' value='$mode' />";
			echo "<input style='$viewParam[0]' name='title' type='text' placeholder='Title' value='$value[1]'  autocomplete='off' required autofocus $viewParam[2] /> ";
			echo "<input style='$viewParam[0]' name='author' type='text' placeholder='Author' value='$value[2]' autocomplete='off' required $viewParam[2] /> ";
			echo "<input style='$viewParam[0]' name='year' type='number' placeholder='Year' value='$value[3]'  autocomplete='off' required min=1900 max=3000 $viewParam[2] /> ";
			echo "<input style='$viewParam[0]' type='submit' value='$viewParam[1]' />";
			echo "<a style='$viewParam[0]' href='/PerpusGue-mvc'><input type='button' value='Cancel' /></a>";
		echo "</form>";


	}
}

?>