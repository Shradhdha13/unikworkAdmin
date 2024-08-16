<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use App\Models\Contactus;
use App\Models\Requirements;
use App\Models\Post;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Hash;
use Exception;
use View;

class AdminController extends Controller
{
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
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->contactus = new Contactus();
        $this->careers = new Careers();
        $this->requirements = new Requirements();
        $this->post = new Post();
        $this->user = new User();
    }

    public function login()
    {
        return redirect('admin/dashboard');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $careerCount = $this->careers::count();
        $contactCount = $this->contactus::count();

        $date = Carbon::now()->subDays(30);
        $careerMonthlyCount = $this->careers::where('created_at', '>=', $date)->count();
        $contactMonthlyCount = $this->contactus::where('created_at', '>=', $date)->count();

        $careerPr = $contactPr = 0;
        if ($careerCount > 0) {
            $careerPr = ($careerMonthlyCount * 100) / $careerCount;
        }

        if ($contactCount) {
            $contactPr = ($contactMonthlyCount * 100) / $contactCount;
        }

        $contactCounts = [];
        $careerCounts = [];
        for ($i = 1; $i <= 12; $i++) {
            $contactCounts[] = $this->contactus::whereMonth('created_at', $i)->count();
            $careerCounts[] = $this->careers::whereMonth('created_at', $i)->count();
        }
        $counts['contactDataCount'] = json_encode($contactCounts, JSON_NUMERIC_CHECK);
        $counts['careerDataCount'] = json_encode($careerCounts, JSON_NUMERIC_CHECK);

        $blogData = $this->post::all();

        return view('admin/index', compact('careerCount', 'contactCount', 'careerMonthlyCount', 'contactMonthlyCount', 'careerPr', 'contactPr', 'blogData', 'counts'));
    }

    /**
     * @return Application|Factory|View
     */
    public function requirements()
    {
        return view('admin/requirements');
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addRequirements(Request $request)
    {
        // $rules = [];

        // foreach($request->input('requirement') as $key => $value) {
        //     $rules["requirement.{$key}"] = 'required';
        // }

        // $request->validate([
        //     'tech_name' => 'required',
        //     'qualification' => 'required',
        //     'experience' => 'required',
        //     'location' => 'required',
        //     'time' => 'required',
        //     'salary' => 'required',
        //     'requirement[]' => 'required',
        //     'position' => 'required',
        // ],
        // ['requirement[].required' => 'The requirement field is required.']);


        $requirement = [];
        foreach ($request->input('requirement') as $key => $value) {
            if (!empty($value)) {
                $requirement[$key] = $value;
            }
        }
        $manage = json_encode($requirement);

        $Careers = $this->requirements;
        $Careers->technology = $request->tech_name;
        $Careers->qualification = $request->qualification;
        $Careers->experience = $request->experience;
        $Careers->location = $request->location;
        $Careers->time = $request->time;
        $Careers->salary = $request->salary;
        $Careers->requirement = $manage;
        $Careers->position = $request->position;
        $Careers->save();

        return redirect('admin/requirements')->with('msg', 1);
    }

    public function updateStatus(Request $request)
    {
        $getCareers = $this->requirements::where('id', $request->id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function viewCareer()
    {
        $careerView = $this->requirements::latest()->get();
        return view('admin/view-careers', compact('careerView'));
    }


    public function deleteCareer($id)
    {
        $this->requirements::find($id)->delete();
        return redirect('admin/view-career');
    }


    public function editCareer($id)
    {
        $careerRec = $this->requirements::find($id);
        return view('admin/edit-career', compact('careerRec'));
    }

    public function editCareerData(Request $request)
    {
        $requirement = [];
        foreach ($request->input('requirement') as $key => $value) {
            if (!empty($value)) {
                $requirement[$key] = $value;
            }
        }
        $manage = json_encode($requirement);

        $careerEditRec = [
            'technology' => $request->tech_name,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'location' => $request->location,
            'time' => $request->time,
            'salary' => $request->salary,
            'requirement' => $manage,
            'position' => $request->position
        ];

        $id = $request->edit_career_id;
        $this->requirements::where('id', $id)->update($careerEditRec);
        return redirect('admin/view-career')->with('msg', 1);
    }

    public function ContactView()
    {
        $contactView = $this->contactus::latest()->paginate(100);
        return view('admin/contact-view', compact('contactView'));
    }

    public function CareerView(Request $request)
    {
        try {
            $experience = $this->careers::groupBy('experience')->pluck('experience', 'id');
            $location = $this->careers::groupBy('location')->pluck('location', 'id');
            $requirements = $this->careers::with('requirementDetail')->get();
            $technologies = [];
            foreach ($requirements as $requirement) {
                $details = $requirement->requirementDetail;
                if ($details instanceof \Illuminate\Database\Eloquent\Collection) {
                    foreach ($details as $detail) {
                        // Add technology to the array if it's not already present
                        if ($detail->technology && !in_array($detail->technology, $technologies)) {
                            $technologies[] = $detail->technology;
                        }
                    }
                } else {
                    // If requirementDetail is a single object
                    if ($details->technology && !in_array($details->technology, $technologies)) {
                        $technologies[] = $details->technology;
                    }
                }
            }
            // dd($technologies);
            if ($request->ajax()) {
                $careerView = $this->careers->newQuery();
                if ($request->has('exp') && !empty($request->exp)) {
                    $careerView = $careerView->where('experience', $request->exp);
                }
                if ($request->has('req') && !empty($request->req)) {
                    $careerView->whereHas('requirementDetail', function ($query) use ($request) {
                        $query->where('technology', $request->req);
                    });
                }
                if ($request->has('lcn') && !empty($request->lcn)) {
                    $careerView = $careerView->where('location', $request->lcn);
                }

                $careerView = $careerView->orderBy('id', 'DESC')->paginate(10);

                // dd($careerView);
                $data['status'] = 1;
                $data['data'] = View::make('admin.career.data', compact('careerView'))->render();
                return response()->json($data);
            }
            return view('admin.career.career-view', compact('experience', 'technologies', 'location'));
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function contactDelete($id)
    {
        $this->contactus::find($id)->delete();
        return redirect('admin/contact-view');
    }

    public function careerDelete($id)
    {
        $careers = $this->careers::find($id);
        if (!is_null($careers)) {
            if (file_exists('public/career_images/cv/' . $careers->cv)) {
                unlink('public/career_images/cv/' . $careers->cv);
            }
            $careers->delete();
        }
        return redirect('admin/career-view');
    }

    public function admin()
    {
        return view('auth/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function users(Request $request)
    {
        try {
            if ($request->ajax()) {
                $result = $this->user;
                if (!empty($request->search)) {
                    $result = $result->where('firstname', 'like', '%' . $request->search . '%');
                }
                $result = $result->paginate(50);
                $data = View::make('admin.users.data', compact('result'))->render();

                return response()->json(['data' => $data]);
            }
            return view('admin.users.index');
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function addUser(Request $request)
    {
        try {
            $id = '';
            if ($request->usersid != null) {
                $userEditRec = [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'role' => $request->role
                ];

                if ($request->password != null) {
                    $userEditRec['password'] = Hash::make($request->password);
                }

                $id = $request->usersid;
                $this->user::where('id', $id)->update($userEditRec);
            } else {
                $addUser = $this->user;
                $addUser->firstname = $request->firstname;
                $addUser->lastname = $request->lastname;
                $addUser->email = $request->email;
                $addUser->password = Hash::make($request->password);
                $addUser->role = $request->role;
                $addUser->save();
            }

            return view('admin.users.index');
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function editUser($id)
    {
        try {
            $id = decrypt($id);
            $data = $this->user->where('id', $id)->first();
            return [
                'status' => 'true',
                'data' => $data
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function deleteUser($id)
    {
        try {
            $id = decrypt($id);
            $this->user::find($id)->delete();
            return [
                'status' => 200
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }
}