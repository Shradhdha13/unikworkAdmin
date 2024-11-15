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

        $pagename = seoPage('Home');
        // $data['page_name'] = $pagename['page_name'];
        // $data['title'] = $pageTitle['title'];
        // $data['description'] = $pageDesc['description'];
        // $data['key_word'] = $pageKeyword['key_word'];


        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Home page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Worldclass application development agency | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        // dd($data);
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development agency, custom software development company​,custom mobile app development services, custom website development';
        // $data['title'] = 'Worldclass application development agency | Unikwork Systems';
        // $data['description'] = 'Choose Unikwork, an offshore software development company, for custom mobile app development, web application development, and IoT consulting solutions.';
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';
        return view('home', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function about()
    {
        // $data['title'] = 'About Us | Unikwork Systems | Transforming IT Services';
        // $data['description'] = 'Unikwork: Your trusted partner in software development since 2015, evolving services to meet the dynamic demands of technology.';
        // $data['keywords'] = 'software development, software development solutions, technology services, technology solutions, web-based apps';
        $pagename = seoPage('About Us');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'About Us page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'About Us | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Since 2015, Unikwork has been delivering software development services that evolve with the dynamic nature of technology to meet your demands.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology services, technology solutions, web-based apps';
        return view('about', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function service()
    {
        // $data['title'] = 'Unikwork Systems: Innovative Services to Elevate Your Business';
        // $data['description'] = 'Unikwork: A leading software development company offering custom software, web & mobile app development, IoT consulting, UI/UX design, and offshore development services.';
        // $data['keywords'] = 'software development, mobile app developers, mobile app development services, web-based apps, quality assurance services, software products, custom websites, DevOps solutions, IoT solutions';

        $pagename = seoPage('Services');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Services page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Services | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : "Explore the full range of software development services and technology solutions Unikwork has to offer and move a step closer to your business goals.";
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, mobile app developers, mobile app development services, web-based apps, quality assurance services, software products, custom websites, DevOps solutions, IoT solutions';
        return view('services', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function appdev()
    {
        // $data['title'] = 'Transform Ideas with Custom Mobile Apps development | Unikwork Systems';
        // $data['description'] = 'Unikwork, a top mobile app development company, provides custom mobile app development services and cross-platform solutions for iOS and Android.';
        // $data['keywords'] = 'custom mobile app, mobile app development, mobile app development services';

        $pagename = seoPage('App Development');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'App Development page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'App Development | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'From the aesthetics and functionality to the performance, our mobile app developers create quality products, customized to you needs.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'custom mobile app, mobile app development, mobile app development services';
        return view('app-development', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function webdev()
    {
        // $data['title'] = 'Custom Web Development & Design services | Unikwork Systems';
        // $data['description'] = 'Unikwork offers expert web application development, custom website development, and full-stack development services to create high-performing, tailored solutions.';
        // $data['keywords'] = 'custom websites, web developers, web development, eCommerce web development services, custom web portal';

        $pagename = seoPage('Web Development');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Web Development page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Web Development | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'At Unikwork, we create websites that perform through our web development services, allowing you to keep leads on your site.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'custom websites, web developers, web development, eCommerce web development services, custom web portal';
        return view('web-development', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function uiux()
    {
        // $data['title'] = 'Creative UI UX Design Services | Unikwork Agency Excellence';
        // $data['description'] = 'Enhance user experience with our UI/UX design services. Partner with our UI/UX design agency to create software products that delight users.';
        // $data['keywords'] = 'UI/UX, UI/UX designers, graphic designers, wireframing services';

        $pagename = seoPage('UI-UX Services');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'UI-UX Services page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'UI-UX Services | Unikwork Systemss';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Discover how you can accelerate your products with UI/UX designs that make your software products more enjoyable to use.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'UI/UX, UI/UX designers, graphic designers, wireframing services';
        return view('ui-ux', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function iot()
    {
        // $data['title'] = 'Smart Solutions: IoT Consulting & App Development | Unikwork Systems';
        // $data['description'] = "Unlock smart automation with Unikwork's IoT consulting and development services. Expert IoT app, software, and solution development for your home or business";
        // $data['keywords'] = 'IoT solutions, cloud-based solutions, smart energy management systems, smart home automation solutions, IoT cloud-based solutions';

        $pagename = seoPage('IoT Services');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'IoT Services page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Smart Solutions: IoT Consulting & App Development | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : "Unlock smart automation with Unikwork's IoT consulting and development services. Expert IoT app, software, and solution development for your home or business";
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'IoT solutions, cloud-based solutions, smart energy management systems, smart home automation solutions, IoT cloud-based solutions';
        return view('internet-of-things', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function devops()
    {
        // $data['title'] = 'DevOps Innovation for Modern Development | Unikwork Systems LLP';
        // $data['description'] = "Unikwork's DevOps services enhance your software development process, accelerating time-to-market and ensuring high-quality products.";
        // $data['keywords'] = 'software development, DevOps, software products, cloud computing services, release strategies, develop apps, IaaS';

        $pagename = seoPage('DevOps');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'DevOps page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'DevOps | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Through high-impact DevOps services, Unikwork allows you to speed up the time-to-market of your software products.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, DevOps, software products, cloud computing services, release strategies, develop apps, IaaS';
        return view('dev-ops', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function qa()
    {
        // $data['title'] = 'Reliable Quality Assurance Services | Unikwork Systems';
        // $data['description'] = '';
        // $data['keywords'] = 'Quality Assurance consulting services, quality assurance testing, API testing, testing automation, testing automation, web testing automation';

        $pagename = seoPage('Quality Assurance');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Quality Assurance page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Quality Assurance | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : '';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'Quality Assurance consulting services, quality assurance testing, API testing, testing automation, testing automation, web testing automation';
        return view('quality-assurance', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function casestudy()
    {
        // $data['title'] = 'Unikwork Case Studies: Showcasing Success in Tech Projects';
        // $data['description'] = 'See how our talented software developers have built web and mobile solutions for companies like yours. Discover our case studies today!';
        // $data['keywords'] = 'technical solutions, custom software development';
        $pagename = seoPage('Case Study');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Case Study page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Case Study | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'technical solutions, custom software development';
        return view('case-studies', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function contact()
    {
        // $data['title'] = 'Connect with Unikwork Systems | Contact for Support & Services';
        // $data['description'] = "Contact our experienced software developers to craft innovative solutions that drive your business forward. Let's connect and start building!";
        // $data['keywords'] = 'Technology solutions, Technology services, Software development services, UI/UX, Software development solutions, Software products, Mobile app development, Mobile applications, Web development, Quality assurance, IoT Solutions, DevOps, Testing automation, Product testing, Web-based app';
        $pagename = seoPage('Contact Us');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Contact Us page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Contact Us | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Looking for experienced software developers to create quality products that will accelerate your business? Here’s how you can get in touch.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'Technology solutions, Technology services, Software development services, UI/UX, Software development solutions, Software products, Mobile app development, Mobile applications, Web development, Quality assurance, IoT Solutions, DevOps, Testing automation, Product testing, Web-based app';
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
        // $data['title'] = 'Join Our Team | Exciting Career Opportunities at Unikwork Systems';
        // $data['description'] = 'Join Unikwork’s dynamic team! We seek fresh talent in software development to create innovative solutions for clients. Explore career opportunities now!';
        // $data['keywords'] = 'Software development services';

        $pagename = seoPage('Careers');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Careers page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Careers | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'At Unikwork, we are always on the hunt for fresh talent to partner with us in formulating effective software development solutions for our clients.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'Software development services';
        $data['requirements'] = $this->requirements::where('status', 1)->get();
        // dd($data['requirements']);
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
                'requirement_id' => 'required',
                'expected_salary' => 'required',
                'experience' => 'required',
                'location' => 'required'

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
        // $data['title'] = 'Career Details | Unikwork Systems';
        // $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        // $data['keywords'] = 'technical solutions, custom software development';
        $id = decrypt($id);
        if ($id > 0) {
            $requirement = $this->requirements::where('id', $id)->first();
            if ($requirement) {
                // Check the technology selected in the requirement (assuming 'technology' field exists)
                switch (($requirement->technology)) {
                    case 'PHP Laravel Developer Intern':
                        $pagename = seoPage('PHP Laravel Developer Intern');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'PHP Laravel Developer Intern page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'php developer jobs since yesterday​, php developer jobs since yesterday​, php development services​, developer php job​, laravel developer jobs​, hire laravel developer​, hire laravel developers​';
                        break;

                    case 'React Native Interns':
                        $pagename = seoPage('React Native Interns');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'React Native Interns page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'React Native vs. Native Apps, react native, native react ';
                        break;

                    case 'Android Developer':
                        $pagename = seoPage('Android Developer');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Android Developer page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'android developer jobs, hire android app developer​';
                        break;

                    case 'PHP Developer':
                        $pagename = seoPage('PHP Developer');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'PHP Developer page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'php developer jobs since yesterday​, php developer jobs since yesterday​, php development services​, developer php job​​';
                        break;

                    case 'Junior BDE':
                        $pagename = seoPage('Junior BDE');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Junior BDE page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, career opportunities, technology, innovation​';
                        break;

                    case 'iOS Developer Intern':
                        $pagename = seoPage('iOS Developer Intern');
                        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'iOS Developer Intern page';
                        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Career Details | Unikwork Systems';
                        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
                        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, career opportunities, technology, innovation​';
                        break;

                        // You can add more cases for other technologies as needed
                    default:
                        $data['title'] = 'Career Opportunities | Unikwork Systems';
                        $data['description'] = 'Explore career opportunities in software development across various technologies.';
                        $data['keywords'] = 'software development, career opportunities, technology, innovation';
                        break;
                }
            }
            return view('career-details', compact('data', 'requirement'));
        }
        return back()->withInput();
    }

    /**
     * @return Application|Factory|View
     */
    public function blogDetails($id)
    {
        $pagename = metaBlog('blog');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'blog page';
        $data['SEO_title'] = isset($pagename['SEO_title']) && !empty($pagename['SEO_title']) ? $pagename['SEO_title'] : 'Worldclass application development agency | Unikwork Systems';
        $data['meta_desc'] = isset($pagename['meta_desc']) && !empty($pagename['meta_desc']) ? $pagename['meta_desc'] : 'Smart Software Development Solutions that Revolutionize the Way you Do Business';
        $data['meta_keyword'] = isset($pagename['meta_keyword']) && !empty($pagename['meta_keyword']) ? $pagename['meta_keyword'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('blogDetail', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function sitemap()
    {
        // $data['title'] = 'Explore Unikwork Systems Sitemap | Web, App, IoT, ui ux design Services';
        // $data['description'] = "Access Unikwork's sitemap for a comprehensive overview of our web, app, and software development services. Find what you need quickly!";
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';

        $pagename = seoPage('Sitemap');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Sitemap page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Sitemap | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        // dd($data);
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('sitemap', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function policy()
    {
        // $data['title'] = 'Unikwork Systems Privacy Policy: Safeguarding Your Data';
        // $data['description'] = 'At Unikwork, your privacy matters. Read our policy to understand how we safeguard your data while providing top-tier web, app, software, and IoT services.';
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';

        $pagename = seoPage('Privacy Policy');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Privacy Policy page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Privacy Policy | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('privacy-policy', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function terms()
    {
        // $data['title'] = 'Unikwork LLP Terms & Conditions | Service Use Guidelines';
        // $data['description'] = "Read Unikwork LLP's Terms of Service for our web development services. Discover our commitment to quality and client satisfaction.";
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';

        $pagename = seoPage('Terms of Services');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Terms of Services';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Terms of Services | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Unikwork provides quality software development services that allow you to create quality software products that perform.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('terms-of-service', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function kooberi()
    {
        // $data['title'] = 'Kooberi | Unikwork Systems';
        // $data['description'] = 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';

        $pagename = seoPage('Kooberi');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Kooberi Services';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Kooberi | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';
        return view('kooberi', compact('data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function carblip()
    {
        // $data['title'] = "Case Study: Carblip's Growth with Unikwork Systems";
        // $data['description'] = "Explore how Unikwork's software developers built innovative web and mobile solutions for businesses like yours in the Carblip case study.";
        // $data['keywords'] = 'software development, software development solutions, technology service, software testing, software products';

        $pagename = seoPage('Carblip');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Carblip page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Carblip | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'Our software developers have created dozens of web-based products and mobile apps for numerous companies just like yours, and here’s how.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'software development, software development solutions, technology service, software testing, software products';
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
        // $data['title'] = 'Unikwork Systems Portfolio: Innovative IT Solutions';
        // $data['description'] = "Discover Unikwork's portfolio! Our web development services craft high-performing websites that capture leads and boost your business growth.";
        // $data['keywords'] = 'custom websites, web developers, web development, eCommerce web development services, custom web portal';

        $pagename = seoPage('Our Portfolio');
        $data['page_name'] = isset($pagename['page_name']) && !empty($pagename['page_name']) ? $pagename['page_name'] : 'Our Portfolio page';
        $data['title'] = isset($pagename['title']) && !empty($pagename['title']) ? $pagename['title'] : 'Our Portfolio | Unikwork Systems';
        $data['description'] = isset($pagename['description']) && !empty($pagename['description']) ? $pagename['description'] : 'At Unikwork, we create websites that perform through our web development services, allowing you to keep leads on your site.';
        $data['key_word'] = isset($pagename['key_word']) && !empty($pagename['key_word']) ? $pagename['key_word'] : 'custom websites, web developers, web development, eCommerce web development services, custom web portal';
        return view('our-portfolio', compact('data'));
    }

    public function appAds()
    {

        $path = base_path('app-ads.txt');
        $content = file_get_contents($path);

        return $content;
    }
}
