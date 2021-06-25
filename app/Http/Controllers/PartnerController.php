<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerAddRequest;
use App\Partner;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;
class PartnerController extends Controller
{
    use DeleteModelTrait;
    use StorageImageTrait;
    private $partner;
    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }
    public function index()
    {
        $partners = $this->partner->latest()->paginate(5);
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partner.add');
    }

    public function store(PartnerAddRequest $request)
    {
        $dataPartnerCreate = [
            'PartnerName' => $request->PartnerName,
            'link_partner' => $request->link_partner
        ];
        $dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'partner');
        if(!empty($dataUploadImage))
        {
            $dataPartnerCreate['image_name'] = $dataUploadImage['file_name'];
            $dataPartnerCreate['image_path'] = $dataUploadImage['file_path'];
        }
        $partner = $this->partner->create($dataPartnerCreate);
        return redirect()->route('partner.index');
    }

    public function edit($id)
    {
        $partner = $this->partner->find($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $dataPartnerUpdate = [
            'PartnerName' => $request->PartnerName,
            'link_partner' => $request->link_partner
        ];
        $dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'partner');
        if(!empty($dataUploadImage))
        {
            $dataPartnerUpdate['image_name'] = $dataUploadImage['file_name'];
            $dataPartnerUpdate['image_path'] = $dataUploadImage['file_path'];
        }
        $this->partner->find($id)->update($dataPartnerUpdate);
        return redirect()->route('partner.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->partner);
    }
}
