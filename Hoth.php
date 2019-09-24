<?php
class Hoth implements Base {
    
    // Eigenschaft, die den Namen der Basis darstellt
    private $name = "Hoth";
    
    /**
     * Methode um die geheimen Daten abzurufen
     */
	public function getData ($data) {
		 echo ($this->name." | Nachricht: ".$data.'<br>');
	}
}
?>