<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use \Validator;
use Illuminate\Http\Request;

/**
 * Class UnikworkController
 * @package App\Http\Controllers
 */
class UnikworkController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['title'] = 'Worldclass application development agency | Unikwork Systems';
        $data['description'] = 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('home', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function about()
    {
        $data['title'] = 'About Us | Unikwork Systems';
        $data['description'] = 'Since 2015, Unikwork has been delivering software development services that evolve with the dynamic nature of technology to meet your demands.';
        $data['keywords'] = 'software development, software development solutions, technology services, technology solutions, web-based apps';
        return view('about', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function service()
    {
        $data['title'] = 'Services | Unikwork Systems';
        $data['description'] = 'Explore the full range of software development services and technology solutions Unikwork has to offer and move a step closer to your business goals.';
        $data['keywords'] = 'software development, mobile app developers, mobile app development services, web-based apps, quality assurance services, software products, custom websites, DevOps solutions, IoT solutions';
        return view('services', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function appdev()
    {
        $data['title'] = 'App Development | Unikwork Systems';
        $data['description'] = 'From the aesthetics and functionality to the performance, our mobile app developers create quality products, customized to you needs.';
        $data['keywords'] = 'custom mobile app, mobile app development, mobile app development services';
        return view('app-development', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function webdev()
    {
        $data['title'] = 'Web Development | Unikwork Systems';
        $data['description'] = 'At Unikwork, we create websites that perform through our web development services, allowing you to keep leads on your site.';
        $data['keywords'] = 'custom websites, web developers, web development, eCommerce web development services, custom web portal';
        return view('web-development', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function uiux()
    {
        $data['title'] = 'UI-UX Services | Unikwork Systems';
        $data['description'] = 'Discover how you can accelerate your products with UI/UX designs that make your software products more enjoyable to use.';
        $data['keywords'] = 'UI/UX, UI/UX designers, graphic designers, wireframing services';
        return view('ui-ux', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function iot()
    {
        $data['title'] = 'Internet Of Things | Unikwork Systems';
        $data['description'] = 'Take a look at how Unikwork’s IoT solutions can help you automate your home or business, the smart way.';
        $data['keywords'] = 'IoT solutions, cloud-based solutions, smart energy management systems, smart home automation solutions, IoT cloud-based solutions';
        return view('internet-of-things', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function devops()
    {
        $data['title'] = 'DevOps | Unikwork Systems';
        $data['description'] = 'Through high-impact DevOps services, Unikwork allows you to speed up the time-to-market of your software products.';
        $data['keywords'] = 'software development, DevOps, software products, cloud computing services, release strategies, develop apps, IaaS';
        return view('dev-ops', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function qa()
    {
        $data['title'] = 'Quality Assurance | Unikwork Systems';
        $data['description'] = '';
        $data['keywords'] = 'Quality Assurance consulting services, quality assurance testing, API testing, testing automation, testing automation, web testing automation';
        return view('quality-assurance', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function casestudy()
    {
        $data['title'] = 'Case Study | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'technical solutions, custom software development';
        return view('case-studies', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        $data['title'] = 'Contact Us | Unikwork Systems';
        $data['description'] = 'Looking for experienced software developers to create quality products that will accelerate your business? Here’s how you can get in touch.';
        $data['keywords'] = 'Technology solutions, Technology services, Software development services, UI/UX, Software development solutions, Software products, Mobile app development, Mobile applications, Web development, Quality assurance, IoT Solutions, DevOps, Testing automation, Product testing, Web-based app';
        return view('contact-us', compact('data'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function addcontact(Request $request)
    {
        try {
            $rule = [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'iam' => 'required',
                'help' => 'required',
                'message' => 'required',
                'captcha' => 'required|valid_captcha',
            ];

            $validator = Validator::make($request->all(), $rule);

            if ($validator->fails()) {

                return $this->sendError();
            }
            $data = $this->contactus;
            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->iam = $request->iam;
            $data->help = $request->help;
            $data->message = $request->message;
            $data->save();
            return $this->sendSuccess();
        } catch (Exception $e) {
            return $this->sendError();
        }
    }

    /**
     * @return Application|Factory|View
     */
    public function careers()
    {
        $data['title'] = 'Careers | Unikwork Systems';
        $data['description'] = 'At Unikwork, we are always on the hunt for fresh talent to partner with us in formulating effective software development solutions for our clients.';
        $data['keywords'] = 'Software development services';
        $data['requirements'] = $this->requirements::where('status', 1)->get();
        return view('careers', compact('data'));
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addcareer(Request $request)
    {
        try {

            $rule = [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'cv' => 'required',
                'requirement_id' => 'required'
            ];

            $validator = Validator::make($request->all(), $rule);

            if ($validator->fails()) {

                return $validator->errors()->first();
            }

            $data = $this->careers;
            $data->requirement_id = decrypt($request->requirement_id);
            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->expected_salary = $request->expected_salary;
            $data->experience = $request->experience;
            if (@$request->portfolio) {
                $data->portfolio = $this->uploadFile($request->portfolio, 'public/career_images/portfolio');
            }
            if ($request->cv) {
                $data->cv = $this->uploadFile($request->cv, 'public/career_images/cv');
            }
            $data->location = $request->location;
            $data->save();

            return $this->sendSuccess();
        } catch (Exception $e) {
            return $this->sendError();
        }
    }

    /**
     * @return Application|Factory|View
     */
    public function careerDetails($id)
    {
        $data['title'] = 'Career Details | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'technical solutions, custom software development';
        $id = decrypt($id);
        if ($id > 0) {
            $requirement = $this->requirements::where('id', $id)->first();
            return view('career-details', compact('data', 'requirement'));
        }
        return back()->withInput();
    }

    /**
     * @return Application|Factory|View
     */
    public function sitemap()
    {
        $data['title'] = 'Sitemap | Unikwork Systems';
        $data['description'] = 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('sitemap', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function policy()
    {
        $data['title'] = 'Privacy Policy | Unikwork Systems';
        $data['description'] = 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('privacy-policy', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function terms()
    {
        $data['title'] = 'Terms of Services | Unikwork Systems';
        $data['description'] = 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('terms-of-service', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function kooberi()
    {
        $data['title'] = 'Kooberi | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('kooberi', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function carblip()
    {
        $data['title'] = 'Carblip | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('carblip', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function kixify()
    {
        $data['title'] = 'Kixify | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('kixify', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function quick()
    {
        $data['title'] = 'Quick | Unikwork Systems';
        $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('quick', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function ourport()
    {
        $data['title'] = 'Our Portfolio | Unikwork Systems';
        $data['description'] = 'At Unikwork, we create websites that perform through our web development services, allowing you to keep leads on your site.';
        $data['keywords'] = 'custom websites, web developers, web development, eCommerce web development services, custom web portal';
        return view('our-portfolio', compact('data'));
    }

    public function appAds()
    {

        $path = base_path('app-ads.txt');
        $content = file_get_contents($path);

        return $content;
    }
}
