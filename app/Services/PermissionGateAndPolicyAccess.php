<?php

namespace App\Services;

use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\Types\This;

class PermissionGateAndPolicyAccess{
    public function setGateAndPolicyAccess()
    {
        $this->defineGateRegent();
        $this->defineGateCertificate();
        $this->defineGateLevel();
        $this->defineGatePartner();
        $this->defineGateReport();
        $this->defineGateReportFile();
        $this->defineGateSetting();
        $this->defineGateUser();
        $this->defineGateRole();
        $this->defineGatePermission();
        $this->defineGateTime();
        $this->defineGateCallForPaper();
    }
    public function defineGateRegent()
    {
        Gate::define('regents-list', 'App\Policies\RegentPolicy@view');
        Gate::define('regents-add', 'App\Policies\RegentPolicy@create');
        Gate::define('regents-edit', 'App\Policies\RegentPolicy@update');
        Gate::define('regents-delete', 'App\Policies\RegentPolicy@delete');
    }
    public function defineGateCertificate()
    {
        Gate::define('certificate-list', 'App\Policies\CertificatePolicy@view');
        Gate::define('certificate-add', 'App\Policies\CertificatePolicy@create');
        Gate::define('certificate-edit', 'App\Policies\CertificatePolicy@update');
        Gate::define('certificate-delete', 'App\Policies\CertificatePolicy@delete');
    }
    public function defineGateLevel()
    {
        Gate::define('level-list', 'App\Policies\LevelPolicy@view');
        Gate::define('level-add', 'App\Policies\LevelPolicy@create');
        Gate::define('level-edit', 'App\Policies\LevelPolicy@update');
        Gate::define('level-delete', 'App\Policies\LevelPolicy@delete');
    }
    public function defineGatePartner()
    {
        Gate::define('partner-list', 'App\Policies\PartnerPolicy@view');
        Gate::define('partner-add', 'App\Policies\PartnerPolicy@create');
        Gate::define('partner-edit', 'App\Policies\PartnerPolicy@update');
        Gate::define('partner-delete', 'App\Policies\PartnerPolicy@delete');
    }
    public function defineGateReport()
    {
        Gate::define('report-list', 'App\Policies\ReportPolicy@view');
        Gate::define('report-add', 'App\Policies\ReportPolicy@create');
        Gate::define('report-edit', 'App\Policies\ReportPolicy@update');
        Gate::define('report-delete', 'App\Policies\ReportPolicy@delete');
    }
    public function defineGateReportFile()
    {
        Gate::define('reportfile-list', 'App\Policies\ReportFilePolicy@view');
        Gate::define('reportfile-add', 'App\Policies\ReportFilePolicy@create');
        Gate::define('reportfile-edit', 'App\Policies\ReportFilePolicy@update');
        Gate::define('reportfile-delete', 'App\Policies\ReportFilePolicy@delete');
        Gate::define('reportfile-download', 'App\Policies\ReportFilePolicy@download');
    }
    public function defineGateSetting()
    {
        Gate::define('setting-list', 'App\Policies\SettingPolicy@view');
        Gate::define('setting-add', 'App\Policies\SettingPolicy@create');
        Gate::define('setting-edit', 'App\Policies\SettingPolicy@update');
        Gate::define('setting-delete', 'App\Policies\SettingPolicy@delete');
    }
    public function defineGateUser()
    {
        Gate::define('user-list', 'App\Policies\UserPolicy@view');
        Gate::define('user-add', 'App\Policies\UserPolicy@create');
        Gate::define('user-edit', 'App\Policies\UserPolicy@update');
        Gate::define('user-delete', 'App\Policies\UserPolicy@delete');
        Gate::define('user-profile', 'App\Policies\UserPolicy@profile');
    }
    public function defineGateRole()
    {
        Gate::define('role-list', 'App\Policies\RolePolicy@view');
        Gate::define('role-add', 'App\Policies\RolePolicy@create');
        Gate::define('role-edit', 'App\Policies\RolePolicy@update');
        Gate::define('role-delete', 'App\Policies\RolePolicy@delete');
    }
    public function defineGatePermission()
    {
        Gate::define('permission-list', 'App\Policies\PermissionPolicy@view');
        Gate::define('permission-add', 'App\Policies\PermissionPolicy@create');
        Gate::define('permission-edit', 'App\Policies\PermissionPolicy@update');
        Gate::define('permission-delete', 'App\Policies\PermissionPolicy@delete');
    }
    public function defineGateTime()
    {
        Gate::define('time-list', 'App\Policies\TimePolicy@view');
        Gate::define('time-edit', 'App\Policies\TimePolicy@update');
    }
    public function defineGateCallForPaper()
    {
        Gate::define('callforpaper-list', 'App\Policies\CallForPaperPolicy@view');
        Gate::define('callforpaper-add', 'App\Policies\CallForPaperPolicy@create');
        Gate::define('callforpaper-edit', 'App\Policies\CallForPaperPolicy@update');
        Gate::define('callforpaper-delete', 'App\Policies\CallForPaperPolicy@delete');
    }
}


