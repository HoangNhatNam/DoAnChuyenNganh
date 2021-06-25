<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Http\Requests\CertificateAddRequest;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    use DeleteModelTrait;
    private $certificate;

    public function __construct(Certificate $certificate)
    {
        $this->certificate = $certificate;
    }
    public function index()
    {
        $certificates = $this->certificate->paginate(10);
        return view('admin.certificate.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificate.add');
    }

    public function store(CertificateAddRequest $request)
    {
        $this->certificate->create([
            'CertificateName' => $request->CertificateName
        ]);
        return redirect()->route('certificates.index');
    }

    public function edit($id, Request $request)
    {
        $CertificateFollowIdEdit = $this->certificate->find($id);
        return view('admin.certificate.edit', compact('CertificateFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
        $this->certificate->find($id)->update([
            'CertificateName' => $request->CertificateName
        ]);
        return redirect()->route('certificates.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->certificate);
    }
}
