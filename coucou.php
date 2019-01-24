<?php
    $i;
    $table = $_GET['table'];
    $result;

    if (isset($_GET['table'])) {
 
    echo '<div class="conteTable">';
    echo '<h2>' . 'Voici la table de ' . $table . '</h2>';    
    echo '<div id="reponse">';
    for ($i=0; $i < 33; $i++)
			{ 
	    $result = $table * $i;
	    echo $table . ' x ' . $i . ' = ' . $result . '<br/>';
    }
    echo '</div';
    echo '</div>';
}
?>