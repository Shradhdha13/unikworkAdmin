<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use App\Models\Contactus;
use App\Models\Requirements;
use App\Models\Post;
use App\Models\User;
use App\Models\Blog;
use App\Models\seo;
use App\Models\category;
use App\Models\comments;
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
     * @var seo
     */
    public $seo;

    /**
     * @var Blog
     */
    public $blogs;

    /**
     * @var comments
     */
    public $comments;

    /**
     * @var category
     */
    public $category;

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
        $this->seo = new seo();
        $this->blogs = new Blog();
        $this->comments = new comments();
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
        $pagename = "Dashboard";
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

        return view('admin/index', compact('careerCount', 'contactCount', 'careerMonthlyCount', 'contactMonthlyCount', 'careerPr', 'contactPr', 'blogData', 'counts', 'pagename'));
    }

    /**
     * @return Application|Factory|View
     */
    public function requirements()
    {
        $pagename = 'View Career';
        return view('admin/requirements', compact('pagename'));
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
        $Careers->status = $request->status;
        $Careers->save();

        return redirect('admin/requirements')->with('msg', 1);
    }

    public function updateStatus(Request $request)
    {
        $getCareers = $this->requirements::where('id', $request->id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function viewCareer(Request $request)
    {
        try {
            $pagename = 'View Career';
            if ($request->ajax()) {
                $careerView = $this->requirements::latest()->paginate(100);
                $data['status'] = 1;
                $data['data'] = View::make('admin.career.data', compact('careerView'))->render();
                return response()->json($data);
            }

            $careerView = $this->requirements::latest()->paginate(100);
            return view('admin/career/view-careers', compact('careerView', 'pagename'));
        } catch (Exception $e) {
            abort(500);
        }
    }


    public function deleteCareer($id)
    {
        // $this->requirements::find($id)->delete();
        // return redirect('admin/view-career');
        try {
            $id = decrypt($id);
            $this->requirements::find($id)->delete();
            return [
                'status' => 200
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }


    public function editCareer($id)
    {
        $pagename = "View Career";
        $careerRec = $this->requirements::find($id);
        return view('admin/edit-career', compact('careerRec', 'pagename'));
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
            'position' => $request->position,
            'status' => $request->status
        ];

        $id = $request->edit_career_id;
        $this->requirements::where('id', $id)->update($careerEditRec);
        return redirect('admin/view-career')->with('msg', 1);
    }

    // public function ContactView(Request $request)
    // {
    //     try {
    //         $pagename = 'Contact';
    //         if ($request->ajax()) {
    //             $contactView = $this->contactus::latest()->paginate(100);
    //             $data['status'] = 1;
    //             $data['data'] = View::make('admin.contact.data', compact('contactView'))->render();
    //             return response()->json($data);
    //         }
    //     } catch (Exception $e) {
    //         abort(500);
    //     }
    //     $contactView = $this->contactus::latest()->paginate(100);
    //     return view('admin/contact/contact-view', compact('contactView', 'pagename'));
    // }

//    public function ContactView(Request $request)
//     {
//         try {
//             $pagename = 'Contact';
//             $query = $this->contactus::query();

//             if ($request->has('date') && !empty($request->date)) {
//                 [$startDate, $endDate] = explode(' - ', $request->date);

//                 $startDate = \Carbon\Carbon::parse($startDate)->startOfDay();
//                 $endDate = \Carbon\Carbon::parse($endDate)->endOfDay();

//                 $query->whereBetween('created_at', [$startDate, $endDate]);
//             }

//             $contactView = $query->latest()->paginate(5);

//             if ($request->ajax()) {
//                 return response()->json([
//                     'data' => view('admin.contact.data', compact('contactView'))->render()
//                 ]);
//             }

//             return view('admin.contact.contact-view', compact('contactView', 'pagename'));

//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }

public function ContactView(Request $request)
{
    try {
        $pagename = 'Contact';

       $query = $this->contactus::query();// Use correct model

         // Filter by name
           if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('firstname', 'like', "%{$search}%")
                  ->orWhere('lastname', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // If user provides a date range filter
        if ($request->has('date') && !empty($request->date)) {
            [$startDate, $endDate] = explode(' - ', $request->date);

            $startDate = Carbon::parse($startDate)->startOfDay();
            $endDate = Carbon::parse($endDate)->endOfDay();

            $query->whereBetween('created_at', [$startDate, $endDate]);
        } else {
            // Default: show today's records
            $query->whereDate('created_at', Carbon::today());
        }

        $contactView = $query->orderBy('created_at', 'desc')->paginate(5);

        if ($request->ajax()) {
            return response()->json([
                'data' => view('admin.contact.data', compact('contactView'))->render()
            ]);
        }

        return view('admin.contact.contact-view', compact('contactView', 'pagename'));

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}



   public function CareerView(Request $request)
    {
        try {
            $pagename = 'Resume';
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
                    if (!empty($details->technology) && !in_array($details->technology, $technologies)) {
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

                $careerView = $careerView->orderBy('id', 'DESC')->paginate(100);

                // dd($careerView);
                $data['status'] = 1;
                $data['data'] = View::make('admin.resume.data', compact('careerView'))->render();
                return response()->json($data);
            }
            return view('admin.resume.career-view', compact('experience', 'technologies', 'location', 'pagename'));
        } catch (Exception $e) {
            // dd($e);
            abort(500);
        }
    }


    public function contactDelete($id)
    {
        // $this->contactus::find($id)->delete();
        // return redirect('admin/contact-view');
        try {
            $id = decrypt($id);
            $this->contactus::find($id)->delete();
            return [
                'status' => 200
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }

     public function deletecontacts(Request $request)
    {
        $ids = $request->input('ids');

        if (is_array($ids) && count($ids) > 0) {
            try {
                $this->contactus::whereIn('id', $ids)->delete();
                return response()->json(['success' => true]);
            } catch (\Exception $e) {
                dd($e);
                return response()->json(['success' => false, 'message' => 'Failed to delete records.']);
            }
        }

        return response()->json(['success' => false, 'message' => 'No records to delete.']);
    }

      public function contactDeletes(Request $request)
    {
        // dd($request->id);
        $contactus = $this->contactus::find($request->id);
        if (!is_null($contactus)) {
           
            $contactus->delete();
        }
        return redirect('admin/contact-view');
        // return;
    }

    public function careerDelete(Request $request)
    {
        // dd($request->id);
        $careers = $this->careers::find($request->id);
        if (!is_null($careers)) {
            if (file_exists('public/career_images/cv/' . $careers->cv)) {
                unlink('public/career_images/cv/' . $careers->cv);
            }
            $careers->delete();
        }
        return redirect('admin/career-view');
        // return;
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
            $pagename = 'Users';
            $roleSearch = $this->user::groupBy('role')->pluck('role', 'id');
            if ($request->ajax()) {
                $result = $this->user->newQuery();
                if ($request->has('role') && !empty($request->role)) {
                    $result = $result->where('role', $request->role);
                }
                // $result = $this->user;
                // if (!empty($request->search)) {
                //     $result = $result->where('firstname', 'like', '%' . $request->search . '%');
                // }
                $result = $result->paginate(100);
                $data['status'] = 1;
                $data = View::make('admin.users.data', compact('result'))->render();

                return response()->json(['data' => $data]);
                // return response()->json($data);
            }
            return view('admin.users.index', compact('roleSearch', 'pagename'));
        } catch (Exception $e) {
            abort(500);
        }
    }

    function seo_details(Request $request)
    {
        try {
            $pagename = 'SEO Details';
            if ($request->ajax()) {
                $result = $this->seo->newQuery();
                $result = $result->paginate(100);
                $data['status'] = 1;
                $data = View::make('admin.seo.data', compact('result'))->render();

                return response()->json(['data' => $data]);
                // return response()->json($data);
            }
            return view('admin.seo.index', compact('pagename'));
        } catch (Exception $e) {
            abort(500);
        }
    }

    //SEO Add/Update and Delete
    public function addSEO(Request $request)
    {
        try {
            $id = '';
            if ($request->id != null) {
                $seoEditRec = [
                    'page_name' => $request->page_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    // 'key_word' => $request->key_word
                ];

                $id = $request->id;
                $this->seo::where('id', $id)->update($seoEditRec);
            } else {
                $addseo = $this->seo;
                $addseo->id = $request->id;
                $addseo->page_name = $request->page_name;
                $addseo->title = $request->title;
                $addseo->description = $request->description;
                $addseo->key_word = $request->key_word;
                $addseo->save();
            }

            // return view('admin.users.index');
            return redirect()->back()->with('success', 'your message,here');
        } catch (Exception $e) {
            dd($e);
            abort(500);
        }
    }

    public function editSEO($id)
    {
        try {
            $id = decrypt($id);
            $data = $this->seo->where('id', $id)->first();
            return [
                'status' => 'true',
                'data' => $data
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function deleteSEO($id)
    {
        try {
            $id = decrypt($id);
            $this->seo::find($id)->delete();
            return [
                'status' => 200
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function addUser(Request $request)
    {
        try {
            $id = '';
            if ($request->id != null) {
                $userEditRec = [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'role' => $request->role
                ];

                if ($request->password != null) {
                    $userEditRec['password'] = Hash::make($request->password);
                }

                $id = $request->id;
                $this->user::where('id', $id)->update($userEditRec);
            } else {
                $addUser = $this->user;
                $addUser->id = $request->id;
                $addUser->firstname = $request->firstname;
                $addUser->lastname = $request->lastname;
                $addUser->email = $request->email;
                $addUser->password = Hash::make($request->password);
                $addUser->role = $request->role;
                $addUser->save();
            }

            // return view('admin.users.index');
            return redirect()->back()->with('success', 'your message,here');
        } catch (Exception $e) {
            dd($e);
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

    /*Get Blogs*/
    function blogs(Request $request)
    {
        try {
            $pagename = 'Blogs';
            if ($request->ajax()) {
                $blogData = $this->blogs::with('users')->latest()->paginate(100);
                $data['status'] = 1;
                $data['data'] = View::make('admin.blogs.data', compact('blogData'))->render();
                return response()->json($data);
            }
        } catch (Exception $e) {
            abort(500);
        }
        $blogData = $this->blogs::latest()->paginate(100);
        return view('admin.blogs.index', compact('blogData', 'pagename'));
    }

    function addblogs()
    {
        // dd("dsfd");
        $pagename = 'Blogs';
        $auth_id = User::all();
        $categoryList = Category::all();
        // dd($categoryList);
        return view('admin.blogs.addblog', compact('auth_id', 'categoryList', 'pagename'));
    }
    /**
     * @param Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Add Blogs
     */
    public function addblog(Request $request)
    {
        $this->validate($request, [
            'slug' => 'required',
            'auth_id' => 'required',
            'title' => 'required',
            'category' => 'required'
        ]);

        // $auth = User::with('users')->get();
        // dd($auth);
        // $authName = $auth->id;

        $Blogs = $this->blogs;
        if ($Blogs->category_id != $request->category) {
            // Check if the category exists
            $category = Category::find($request->category);

            if (!$category) {
                // If it doesn't exist, create a new category
                $category = new Category();
                $category->name = $request->category; // Assuming you want to store the name as the ID
                $category->save(); // Save the new category
            }

            // Now assign the category ID to the blog
            // $Blogs->category_id = $category->id; // Use the ID of the existing or newly created category
        }
        $Blogs->slug = $request->slug;
        $Blogs->auth_id = $request->auth_id;;
        $Blogs->title = $request->title;
        $Blogs->category_id = $category->id;
        $Blogs->desc =  $request->input('desc');
        // $Blogs->feature_img = $request->feature_img;
        $Blogs->SEO_title = $request->SEO_title;
        $Blogs->meta_desc = $request->meta_desc;
        $Blogs->meta_keyword = $request->meta_keyword;
        $Blogs->blog_faq = $request->blog_faq;
        $Blogs->status = $request->status;

        // Handle the file upload for the feature image
        if ($request->hasFile('feature_img')) {
            $file = $request->file('feature_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blogs', $filename); // Save to storage/app/public/feature_images

            $Blogs->feature_img = $filename;
        }
        $Blogs->save();
        // dd($Blogs);


        // return view('admin.blogs.index')->with('msg', 1);
        return redirect()->route('bloglist')->with('msg', 'Blog Added successfully!');
    }

    public function editblog($id)
    {
        try {
            $pagename = 'Update Blog';
            $id = decrypt($id);
            $updateBlog = $this->blogs::find($id);
            $auth_id = User::all();
            $categoryList = Category::all();
            // dd($updateBlog);
            return view('admin.blogs.edit-blog', compact('updateBlog', 'auth_id', 'categoryList', 'pagename'));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }

    public function editBlogData(Request $request)
    {
        try {
            $id = $request->id;
            $blog = $this->blogs::find($id);
            $filename = $blog->feature_img; // Default to existing image if no new image is uploaded

            // Check if a file is uploaded
            if ($request->hasFile('feature_img')) {
                $file = $request->file('feature_img');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // Store the file in the public storage
                $file->storeAs('public/blogs', $filename); // Save to storage/app/public/blogs
            }

            $blogEditRec = [
                'auth_id' => $request->auth_id,
                'slug' => $request->slug,
                'title' => $request->title,
                'desc' => $request->desc,
                'category_id' => $request->category,
                'feature_img' => $filename,
                'SEO_title' => $request->SEO_title,
                'meta_desc' => $request->meta_desc,
                'meta_keyword' => $request->meta_keyword,
                'blog_faq' => $request->blog_faq,
                'status' => $request->status
            ];

            $this->blogs::where('id', $id)->update($blogEditRec);
            return redirect()->route('admin.blogs.index')->with('msg', 'Blog updated successfully!');
        } catch (\Throwable $th) {
            // Handle the exception appropriately
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    public function deleteblog($id)
    {
        try {
            $id = decrypt($id);
            $this->blogs::find($id)->delete();
            return [
                'status' => 200
            ];
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function deleteCareers(Request $request)
    {
        $ids = $request->input('ids');

        if (is_array($ids) && count($ids) > 0) {
            try {
                $this->careers::whereIn('id', $ids)->delete();
                return response()->json(['success' => true]);
            } catch (\Exception $e) {
                dd($e);
                return response()->json(['success' => false, 'message' => 'Failed to delete records.']);
            }
        }

        return response()->json(['success' => false, 'message' => 'No records to delete.']);
    }

    public function upload(Request $request)
    {
        // Validate the image
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image
        $file = $request->file('file');
        $path = $file->store('images', 'public');

        // Generate a URL for the image
        $url = Storage::url($path);

        // Return the URL as a JSON response
        return response()->json(['location' => $url]);
    }

    public function medataDesc()
    {
        $meta = [
            'title' => 'Home Page Title',
            'description' => 'This is the home page description.'
        ];

        return view('admin.layouts.header', compact('meta'));
    }

    //Add comments
    function addcomments(Request $request)
    {

        $addCommment = $this->comments;
        $addCommment->blog_id = $request->blog_id;
        $addCommment->author_name = $request->author_name;
        $addCommment->author_email = $request->author_email;
        $addCommment->comment = $request->comment;
        $addCommment->save();
        return redirect()->back();
    }

    public function markAsRead(Request $request)
    {
        // dd($request->all());
        // $career = Careers::find($id);
        // if ($career) {
        //     $career->read = 1;
        //     $career->save();
        //     return response()->json(['success' => true]);
        // }
        // return response()->json(['success' => false], 404);
        {
            $career = Careers::find($request->id);
            if ($career) {
                $career->read = 1;
                $career->save();
                return response()->json(['success' => true]);
            }
            return response()->json(['success' => false], 404);
        }
    }
}
