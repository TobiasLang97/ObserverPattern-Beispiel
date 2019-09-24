<?php
class SecretDataService extends HoloNetworkSatellite { 

    // Eigenschaft, in der die geheimen Daten gespeichert werden
    private $data; 

    /**
     * Methode zum setzen der geheimen Daten
     */
    public function setData($data) { 
        $this->data = $data; 
        $this->sendData($data); 
    } 

    /**
     * Methode um die geheimen Daten zu erhalten
     */
    public function getData() { 
        return $this->data; 
    } 
} 
?>