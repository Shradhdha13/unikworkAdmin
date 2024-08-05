<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contactus;
use App\Models\Careers;
use App\Models\Requirements;
use App\Models\BlogEtcPost;
use App\Models\Post;
use App\Models\User;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Contactus
     */
    public $contactus;

    /**
     * @var Careers
     */
    public $careers;

    /**
     * @var Requirements
     */
    public $requirements;

    /**
     * @var Post
     */
    public $post;

    /**
     * @var User
     */
    public $user;


    /**
     * Controller constructor.
     */
    public function __construct()
    {
        date_default_timezone_set("Asia/Kolkata"); 
        $this->contactus = new Contactus();
        $this->careers = new Careers();
        $this->requirements = new Requirements();
        $this->post = new Post();
        $this->user = new User();
    }

    /**
     * @param $data
     * @param $path
     * @return string
     */
    public function uploadFile($data, $path){
        $name = \Carbon\Carbon::now()->format('YmdHisu') . '.' . $data->clientExtension();
        $data->move($path, $name);
        return $name;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendSuccess()
    {
        $response = [
            'status' => 1,
            'message' => "Success"
        ];

        return response()->json($response, 200);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendError()
    {
        $response = [
            'status' => 0,
            'message' => 'Something went to wrong!',
        ];

        return response()->json($response, 500);
    }
}
