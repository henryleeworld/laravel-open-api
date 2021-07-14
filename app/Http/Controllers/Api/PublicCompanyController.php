<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PublicCompany;
use App\Http\Resources\PublicCompanyResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PublicCompanyController extends Controller
{
    public function index() {
        $queryParams = request()->query();
        ksort($queryParams);
        return Cache::remember(sha1(request()->url() . (!empty($queryParams) ? '?' . http_build_query($queryParams) : null)), 60*60*24, function () {
            return PublicCompanyResource::collection(PublicCompany::paginate(20));
        });
    }
}
