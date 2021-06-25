<?php

namespace App\Components;

use App\Certificate;
use App\Level;
use App\Users;

class Recusive
{
    private $data;
    private $htmlSlelectCertificate = '';
    private $htmlSlelectLevel = '';
    private $htmlSlelectRegent = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function certificateRecusive($idCertificate)
    {
        foreach ($this->data as $value){
            if(!empty($idCertificate) && $idCertificate == $value['id'])
            {
                $this->htmlSlelectCertificate .= "<option selected value=' " . $value['id']."'>" . $value['CertificateName'] . "</option>";
            }else{
                $this->htmlSlelectCertificate .= "<option value=' " . $value['id']."'>" . $value['CertificateName'] . "</option>";
            }
        }
        return $this->htmlSlelectCertificate;
    }

    public function levelRecusive($idLevel)
    {
        foreach ($this->data as $value){
            if(!empty($idLevel) && $idLevel == $value['id'])
            {
                $this->htmlSlelectLevel .= "<option selected value=' " . $value['id']."'>" . $value['LevelName'] . "</option>";
            }else{
                $this->htmlSlelectLevel .= "<option value=' " . $value['id']."'>" . $value['LevelName'] . "</option>";
            }
        }
        return $this->htmlSlelectLevel;
    }

    public function regentRecusive($idRegent)
    {
        foreach ($this->data as $value){
            if(!empty($idRegent) && $idRegent == $value['id'])
            {
                $this->htmlSlelectRegent .= "<option selected value=' " . $value['id']."'>" . $value['RegentName'] . "</option>";
            }else{
                $this->htmlSlelectRegent .= "<option value=' " . $value['id']."'>" . $value['RegentName'] . "</option>";
            }
        }
        return $this->htmlSlelectRegent;
    }
}
