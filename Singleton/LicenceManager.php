<?php
class LicenceManager{
    private static ?LicenceManager $licenceManager = null;
    private string $licenseKey = "ENT-2026-PRO";

    private function __construct() {}

    public static function getInstance(): LicenceManager{
        if(self::$licenceManager === null ){
            self::$licenceManager = new LicenceManager();
            echo 'Création du gestionnaire de licence';
        }
        return self::$licenceManager;
    }

    public function verifyLicense(string $userKey): bool
    {
        return $userKey === $this->licenseKey;
    }

}