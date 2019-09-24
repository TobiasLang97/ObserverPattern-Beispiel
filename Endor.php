<?php
class Endor implements Base {

	// Eigenschaft, die den Namen der Basis darstellt
	private $name = "Endor";
	
	/**
     * Methode um die geheimen Daten abzurufen
     */
	public function getData ($data) {
		echo ($this->name." | Nachricht: ".$data.'<br>');
	}
}
?>