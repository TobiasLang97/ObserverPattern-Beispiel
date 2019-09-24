<?php
abstract class HoloNetworkSatellite { 

    // Eigenschaft, die ein Array der Basen darstellt
    private $baseList = array(); 

    /**
     * Methode um ein Base Objekt zum Array hinzuzufügen
     */
    public function addBase($base) { 
        $this->baseList[] = $base;
    } 

    /**
     * Methode um ein Base Objekt aus dem Array zu entfernen
     */
    public function removeBase($base) { 
        if (($key = array_search($base, $this->baseList)) !== false) {
            unset($this->baseList[$key]);
        }
    } 

    /**
     * Methode um die geheimen Daten an die Objekte im Array zu senden
     */
    protected function sendData($data) { 
        foreach ($this->baseList as $currentBase) { 
            $currentBase->getData($data); 
        } 
    } 
} 
?>