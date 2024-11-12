-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 02:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unikwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `auth_id` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `feature_img` text DEFAULT NULL,
  `SEO_title` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `blog_faq` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=Deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `auth_id`, `slug`, `title`, `category`, `desc`, `feature_img`, `SEO_title`, `meta_desc`, `meta_keyword`, `blog_faq`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'react', 'React', 'react native', '<div class=\"blog-details-head text-md-center mb-3\" style=\"text-align: center;\">\r\n<h2 class=\"blog_title p-0\" style=\"text-align: center;\">Why should you use ReactJS?</h2>\r\n<span class=\"blog_subtitle\">when to use ReactJS?</span>\r\n<h6 class=\"mt-2\" style=\"text-align: center;\">by&nbsp;&nbsp;Aug 23, 2022</h6>\r\n<p class=\"m-0\" style=\"text-align: center;\">&nbsp;2 years ago, in&nbsp;ReactJS</p>\r\n</div>\r\n<p style=\"text-align: center;\"><img class=\"d-block\" src=\"https://unikwork.com/public/blog_images/why-should-you-use-reactjs-dlhpc-1000x700.png\" alt=\"Why should you use ReactJS?\" /></p>\r\n<p class=\"blog_body_content mt-4\" style=\"text-align: center;\">&nbsp;</p>\r\n<h3 style=\"text-align: center;\"><strong>About ReactJS</strong></h3>\r\n<p style=\"text-align: center;\">ReactJS is an open-source front-end JavaScript library maintained by Meta. It is used for building user interfaces for single-page applications based on UI components. It requires only a minimal understanding of HTML and JavaScript.</p>\r\n<p style=\"text-align: center;\">Two main features JSX and Virtual DOMs, make React more than just a library.&nbsp;&nbsp;</p>\r\n<ul style=\"text-align: center;\">\r\n<li>JSX is syntax extension to JavaScript. It combines HTML syntax with JavaScript making it easier for developers to interact with the browser.</li>\r\n<li>Virtual DOM is a virtual copy of the DOM tree. Instead of manipulating the browser\'s DOM directly, React creates a virtual DOM in memory, where it does all the necessary manipulating, before making the changes in the browser DOM. React finds out what changes have been made, and changes&nbsp;only&nbsp;what needs to be changed.</li>\r\n</ul>\r\n<h3 style=\"text-align: center;\"><strong>Build Rich User Interfaces</strong></h3>\r\n<p style=\"text-align: center;\">A front-end application must have an attractive, responsive UI and a seamless UX with swift navigable views. An application filled with high-quality UI has more chances of getting noticed by the users. React allows building such high-quality, rich user interfaces through its declarative components, which brings us to our next point. This framework ensures the final product is well-design with super high quality to attract users to its key functionalities without fail.&nbsp;</p>\r\n<h3 style=\"text-align: center;\"><strong>Reusability of components</strong></h3>\r\n<p style=\"text-align: center;\">ReactJS allows fragmenting large applications into several individual components. In React, a reusable component is a piece of UI that can be used in various parts of an application to build more than one UI instance. Re-usable components ensure that the user experience is consistent across all products. One more advantage is any component fault discovered in one product would be automatically repaired for all products. Because updating a component will automatically update all areas where the component is used, thereby enabling ease of maintenance.</p>\r\n<h3 style=\"text-align: center;\"><strong>Fast Rendering</strong></h3>\r\n<p style=\"text-align: center;\">Internally, React uses several clever techniques to minimize the number of costly DOM operations required to update the UI. For many applications, using React will lead to a fast user interface without doing much work to specifically optimize for performance. Updating DOM is a key factor when it comes to web performance. React is using something called&nbsp;virtual DOM to solve this problem. Any view changes are first reflected in the virtual DOM, then an efficient diff algorithm compares the previous and current states of the virtual DOM and calculates the best way to apply these changes. Finally, those updates are applied to the DOM to ensure minimum read/write time. It&rsquo;s a much more efficient method that leads to faster rendering and leads to React&rsquo;s high performance.</p>\r\n<h3 style=\"text-align: center;\"><strong>Strong Community Support</strong></h3>\r\n<p style=\"text-align: center;\">One of the main reasons to adopt React JS in your project is that React has very strong community support. It has very large community support on the StackOverflow forum to ask code-level questions or if you&rsquo;re stuck with a specific error.</p>\r\n<h3 style=\"text-align: center;\"><strong>Better code stability</strong></h3>\r\n<p style=\"text-align: center;\">React JS ensures a more stable code by using downward data flow only so Any changes that occur in the child structure don&rsquo;t get affected the parent structure. In changing an object, developers only need to modify its state and make amendments for specific components. This kind of data binding structure ensures code stability and smooth application performance. Additionally, it provides a fault-tolerant &lsquo;UI&rsquo; because of the component creation aspect, which allows developers to efficiently conduct unit testing to avoid system crashes. Code reusability enables reducing time performing redundant tests to improve code quality giving stability to Code structure.</p>\r\n<h3 style=\"text-align: center;\"><strong>SEO-friendly</strong></h3>\r\n<p style=\"text-align: center;\">One of the relevant challenges that developers face is to ensure that an app is SEO-friendly. This is especially necessary for businesses in this day and age when there are several hundreds of apps out there. Normally the lower the page load time and the faster the rendering speed, the higher an app will rank on Google. React has fast rendering compared to other frameworks, it significantly reduces the page load time, which greatly helps higher rank on Google Search Engine Result Page.</p>', '1726137517.png', 'React SEO..', 'test react', 'meta react..', 'react faq', 1, '2024-09-12 10:38:37', '2024-09-12 10:38:37'),
(2, 8, 'test2', 'test2', 'test 2', '<div class=\"blog-details-head text-md-center mb-3\" style=\"text-align: center;\">\r\n<h2 class=\"blog_title p-0\" style=\"text-align: center;\">What should you choose for mobile application development? React Native vs. Native</h2>\r\n<span class=\"blog_subtitle\">When should You choose Native for your app development?</span>\r\n<h6 class=\"mt-2\" style=\"text-align: center;\">by&nbsp;&nbsp;Aug 25, 2022</h6>\r\n<p class=\"m-0\" style=\"text-align: center;\">&nbsp;2 years ago, in&nbsp;React Native</p>\r\n</div>\r\n<p style=\"text-align: center;\"><img class=\"d-block\" src=\"https://unikwork.com/public/blog_images/what-should-you-choose-for-mobile-application-development-react-native-vs-native-ejjmo-1000x700.png\" alt=\"What should you choose for mobile application development? React Native vs. Native\"></p>\r\n<p class=\"blog_body_content mt-4\" style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">With the rising popularity of React Native mobile applications, developers could be wondering What they should choose? Is it React Native or traditional Native? This article explains how React Native and Native apps perform in different areas of concern and helps you choose the best technology for mobile application development.</p>\r\n<h3 style=\"text-align: center;\"><strong>What is React Native?</strong></h3>\r\n<p style=\"text-align: center;\">React Native is a technology based on Metas&rsquo; React, a Javascript library for building responsive user interfaces. React Native combines native development with React for building cross-platform mobile applications using a single codebase. It renders to the UI using the platforms&rsquo; rendering APIs and allows for creating truly native mobile apps. React Native has gained vast popularity today because of its many advantages over Native apps. Top tech companies like Meta, Instagram, UberEATS, Pinterest, and Shopify are reaping the benefits of using React Native for their applications.</p>\r\n<h3 style=\"text-align: center;\"><strong>What is Native?</strong></h3>\r\n<p style=\"text-align: center;\">A native application is built to run in a specific mobile device and its operating system (OS) using native technologies. For example, Java and Kotlin for Android, Objective-C, and Swift for iOS. It means native apps can use hardware and software specific to that device. Since such apps work with the platforms&rsquo; OS, they can provide a good user experience and overall high performance.</p>\r\n<h3 style=\"text-align: center;\"><strong>React Native Vs. Native Apps: What is the best choice?</strong></h3>\r\n<p style=\"text-align: center;\">Consider how React Native and Native apps perform in the following key aspects of mobile application development.</p>\r\n<h3 style=\"text-align: center;\"><strong>Time-To-Market</strong></h3>\r\n<p style=\"text-align: center;\">How long a mobile app would take to deploy to the market depends on how fast it can develop. If a company needs to develop a native app for iOS and Android, they must write, deploy, and maintain separate platform-specific codebases, which will require two development teams&rsquo; effort. If there is any update to the application, it requires changes in two codebases and the building and running of the complete project to reflect changes.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">But in React Native, developers only must write a single codebase for Android and iOS platforms. Thus, it is easy to introduce changes to the application. Also, React native provides hot reloading &amp; live reloading features which enable developers to see the effects of the code changes in real-time without building the whole app. Therefore, React Native allows faster and easier development and faster time to market than native apps.</p>\r\n<h3 style=\"text-align: center;\"><strong>Development and Maintenance Cost</strong></h3>\r\n<p style=\"text-align: center;\">Another reason to choose React Native over Native is the lower application costs. Developing and maintaining two separate codebases for each platform needs more developers with significant expertise in their costs. Therefore, costs for hiring and training, paying developers, and maintaining two code bases will be higher if you opt for native app development. Especially for startup companies, these costs can become unbearable.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">In contrast, React Native apps require only a smaller number of developers. Since there is only one codebase to maintain, maintenance costs are lower.</p>\r\n<h3 style=\"text-align: center;\"><strong>Performance and interaction with other Native apps</strong></h3>\r\n<p style=\"text-align: center;\">When it comes to performance, most Native apps outperform React Native apps. This is because Native apps can access the devices&rsquo; hardware and software. Thus, they are well-suited for resource-intensive mobile apps. Also, Native apps can interact and exchange data with other native apps relatively faster.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">React native apps, on the other hand, are not suitable for performance-heavy applications because there can be performance issues with their native and Javascript threads. Also, for communicating with Native apps, React Native apps require third-party libraries. Thus, regarding the app performance and native support, most Native applications still are ahead of React Native applications.</p>\r\n<h3 style=\"text-align: center;\"><strong>User Experience</strong></h3>\r\n<p style=\"text-align: center;\">Considering the user experiences, both types have equal capabilities to provide an intuitive user experience. Although react native apps use Javascript to render the UI, it provides a native user experience to the user. Also, React Native can combine with native languages, which allows you to build features specific to each device.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Native apps also provide a great user experience comparable to React Native because they are designed specifically for each platform and can harness device-specific features.</p>\r\n<h3 style=\"text-align: center;\"><strong>Security</strong></h3>\r\n<p style=\"text-align: center;\">Compared with Native apps, React Native apps rely heavily on third-party libraries and APIs to provide cross-platform support and additional features. Therefore, if any issue is related to such libraries, troubleshooting, and fixing them will take significant time and effort. Resultantly, there can be security loopholes in the entire system which could go unnoticed for a long time and later can cause severe security issues. Thus, if you solely consider the time to identify and fix security issues, Native apps still win over React Native apps.</p>\r\n<h3 style=\"text-align: center;\"><strong>API and Modules Support</strong></h3>\r\n<p style=\"text-align: center;\">One of the strong points of Native languages is their ability to directly use all types of Native APIs. However, React Native apps have limited capabilities to use complex APIs, requiring building a connection layer with Native technologies. Thus, if your application needs a lot of APIs, Native development will be a better choice. In addition, although React Native supports a wide range of modules, they do not address every feature requirement. Thus, custom modules will be required to accommodate more specific features.</p>\r\n<h3 style=\"text-align: center;\"><strong>Community Support</strong></h3>\r\n<p style=\"text-align: center;\">In contrast to Native languages, React Native has more powerful and wider community support than Native apps. Since React and JavaScript are very popular among developers worldwide, there is constant community support. Thus, if you face any issue with your code, it is highly likely that the same issue has been encountered by someone and provided the solution for fixing it. Also, novice developers find it easy to learn to code with a plethora of tutorials, articles, documentation, and books available on the internet.</p>\r\n<h3 style=\"text-align: center;\"><strong>Advantages and Disadvantages of&nbsp; React Native and Native</strong></h3>\r\n<p style=\"text-align: center;\">In summary, React Native and Native have the following advantages and disadvantages.</p>\r\n<h3 style=\"text-align: center;\"><strong>React Native</strong></h3>\r\n<p style=\"text-align: center;\"><strong>Advantages</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>Hot reloading and live reloading make development easier</li>\r\n<li>Single codebase for multiple platforms</li>\r\n<li>Lower development and maintenance costs</li>\r\n<li>Native-like user experience</li>\r\n<li>Strong community support</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><strong>Disadvantages</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>No direct access to device-specific hardware and software</li>\r\n<li>Less secure</li>\r\n</ul>\r\n<h3 style=\"text-align: center;\"><strong>Native</strong></h3>\r\n<p style=\"text-align: center;\"><strong>Advantages</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>Great for resource-intensive applications</li>\r\n<li>Secure than React Native apps</li>\r\n<li>Great user experience</li>\r\n</ul>\r\n<p style=\"text-align: center;\"><strong>Disadvantages</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>Must maintain two codebases for two platforms</li>\r\n<li>High developer and maintenance costs</li>\r\n<li>Longer time-to-market</li>\r\n</ul>\r\n<h3 style=\"text-align: center;\"><strong>When should You choose React Native for your app development?</strong></h3>\r\n<p style=\"text-align: center;\"><strong>Choose React Native if :</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>If you want to build apps faster with limited resources</li>\r\n<li>If you have a limited budget and want to reduce development and maintenance costs</li>\r\n<li>If you want to develop apps for multiple platforms</li>\r\n<li>If you consider building an MVP that needs to deploy quickly to the market for user testing</li>\r\n<li>If you want to provide a native-like user experience to the customer</li>\r\n<li>If you do not want to provide device-specific features to the applications</li>\r\n</ul>\r\n<h3 style=\"text-align: center;\"><strong>When should You choose Native for your app development?</strong></h3>\r\n<p style=\"text-align: center;\"><strong>Choose Native if:</strong></p>\r\n<ul style=\"text-align: center;\">\r\n<li>If you want to build resource-intensive applications</li>\r\n<li>If you are targeting only a specific platform</li>\r\n<li>If you want to provide the app with device-specific features</li>\r\n<li>If&nbsp; you are concerned more about app security issues that can arise from third-party libraries</li>\r\n</ul>\r\n<h3 style=\"text-align: center;\"><strong>Conclusion</strong></h3>\r\n<p style=\"text-align: center;\">You can choose Native type development or React Native when you want to build a mobile application. The main factors you need to consider when deciding which to choose to include the development and maintenance costs, time-to-market, performance, user experience, security, community support, and module support. When considering these factors, React choosing Native over Native has many advantages, mainly because of the ability to develop cross-platform apps, faster time to market, and less development and maintenance costs. Native apps, on the other hand, are suitable for resource-intensive apps and when the time and costs required to build the app are not a significant concern.</p>\r\n<p style=\"text-align: center;\">One of the relevant challenges that developers face is to ensure that an app is SEO-friendly. This is especially necessary for businesses in this day and age when there are several hundreds of apps out there. Normally the lower the page load time and the faster the rendering speed, the higher an app will rank on Google. React has fast rendering compared to other frameworks, it significantly reduces the page load time, which greatly helps higher rank on Google Search Engine Result Page</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">TEST</p>\r\n<p>When we mix organized Jugaad with our structural R&amp;D and expertise, it can deliver commendable results that create value. All in all, IndiaNIC believes that Jugaad shouldn&rsquo;t replace the structured approach to innovation but rather compliment it like bread &amp; butter. It&rsquo;s always about finding the right balance between top-down R&amp;D vs bottom-up Jugaad innovation.</p>\r\n<div class=\"jugaad-video\">&nbsp;</div>', '1726146699.png', 'react', 'test react..', 'meta react..', 'react faq', 1, '2024-09-12 13:11:39', '2024-09-13 04:13:56'),
(3, 8, 'php', 'PHP', 'php blog', '<div class=\"blog-details-head text-md-center mb-3\" style=\"text-align: center;\">\r\n<h2 class=\"blog_title p-0\" style=\"text-align: center;\">What should you choose for mobile application development? React Native vs. Native</h2>\r\n<span class=\"blog_subtitle\">When should You choose Native for your app development?</span>\r\n<h6 class=\"mt-2\" style=\"text-align: center;\">by&nbsp;&nbsp;Aug 25, 2022</h6>\r\n<p class=\"m-0\" style=\"text-align: center;\">&nbsp;2 years ago, in&nbsp;React Native</p>\r\n</div>\r\n<p style=\"text-align: center;\"><img class=\"d-block\" src=\"https://unikwork.com/public/blog_images/what-should-you-choose-for-mobile-application-development-react-native-vs-native-ejjmo-1000x700.png\" alt=\"What should you choose for mobile application development? React Native vs. Native\"></p>\r\n<p class=\"blog_body_content mt-4\" style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">With the rising popularity of React Native mobile applications, developers could be wondering What they should choose? Is it React Native or traditional Native? This article explains how React Native and Native apps perform in different areas of concern and helps you choose the best technology for mobile application development.</p>\r\n<h3 style=\"text-align: center;\"><strong>What is React Native?</strong></h3>\r\n<p style=\"text-align: center;\">React Native is a technology based on Metas&rsquo; React, a Javascript library for building responsive user interfaces. React Native combines native development with React for building cross-platform mobile applications using a single codebase. It renders to the UI using the platforms&rsquo; rendering APIs and allows for creating truly native mobile apps. React Native has gained vast popularity today because of its many advantages over Native apps. Top tech companies like Meta, Instagram, UberEATS, Pinterest, and Shopify are reaping the benefits of using React Native for their applications.</p>\r\n<h3 style=\"text-align: center;\"><strong>What is Native?</strong></h3>\r\n<p style=\"text-align: center;\">A native application is built to run in a specific mobile device and its operating system (OS) using native technologies. For example, Java and Kotlin for Android, Objective-C, and Swift for iOS. It means native apps can use hardware and software specific to that device. Since such apps work with the platforms&rsquo; OS, they can provide a good user experience and overall high performance.</p>\r\n<h3 style=\"text-align: left;\"><strong>React Native Vs. Native Apps: What is the best choice?</strong></h3>\r\n<p style=\"text-align: left;\">Consider how React Native and Native apps perform in the following key aspects of mobile application development.</p>', '1726230015.jpg', 'PHP SEO', 'PHP Desc', 'PHP meta keyword', 'TEST', 1, '2024-09-13 12:20:15', '2024-09-13 12:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_etc_categories`
--

CREATE TABLE `blog_etc_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `category_description` mediumtext DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'user id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_etc_categories`
--

INSERT INTO `blog_etc_categories` (`id`, `category_name`, `slug`, `category_description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'ReactJS', 'reactjs', NULL, NULL, '2022-08-22 12:10:47', '2022-08-22 12:10:47'),
(2, 'React Native', 'react-native', NULL, NULL, '2022-08-25 11:48:16', '2022-08-25 11:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_etc_comments`
--

CREATE TABLE `blog_etc_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_etc_post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'if user was logged in',
  `ip` varchar(255) DEFAULT NULL COMMENT 'if enabled in the config file',
  `author_name` varchar(255) DEFAULT NULL COMMENT 'if not logged in',
  `comment` text NOT NULL COMMENT 'the comment body',
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_email` varchar(255) DEFAULT NULL,
  `author_website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_etc_comments`
--

INSERT INTO `blog_etc_comments` (`id`, `blog_etc_post_id`, `user_id`, `ip`, `author_name`, `comment`, `approved`, `created_at`, `updated_at`, `author_email`, `author_website`) VALUES
(1, 3, 0, '59.93.75.80', 'cPYDyIer', 'UvLFuHQCeJYDbPm', 0, '2022-08-25 05:03:51', '2022-08-25 05:03:51', 'arlai19a6y8e3ue0@outlook.com', NULL),
(2, 3, 0, '59.93.75.80', 'XvTRVzNOdErSCbn', 'YdnFbcpqECZmaMj', 0, '2022-08-25 05:03:52', '2022-08-25 05:03:52', 'arlai19a6y8e3ue0@outlook.com', NULL),
(3, 3, 0, '59.93.75.80', 'YdElJAbKauUfiVqB', 'VCxqWayompK', 0, '2022-08-25 05:03:54', '2022-08-25 05:03:54', 'arlai19a6y8e3ue0@outlook.com', NULL),
(4, 3, 0, '59.93.75.80', 'HrAsqxnVXQYktBI', 'XhjDEtfFHxgWwaBU', 0, '2022-08-25 05:03:54', '2022-08-25 05:03:54', 'arlai19a6y8e3ue0@outlook.com', NULL),
(5, 5, 0, '118.200.60.207', 'RcvkyUueNiEsHtq', 'PSmWkZNKORgDz', 0, '2022-08-29 19:55:21', '2022-08-29 19:55:21', 'lennisyi6ou8adkp7@outlook.com', NULL),
(6, 5, 0, '118.200.60.207', 'vIFoltfHBpOEAXZ', 'hEqNRDjgk', 0, '2022-08-29 19:55:26', '2022-08-29 19:55:26', 'lennisyi6ou8adkp7@outlook.com', NULL),
(7, 5, 0, '118.200.60.207', 'uaFBymUJRgL', 'aDjQqPdwvHCzUAhX', 0, '2022-08-29 19:55:27', '2022-08-29 19:55:27', 'lennisyi6ou8adkp7@outlook.com', NULL),
(8, 3, 0, '118.200.60.207', 'tRMywfLim', 'VPnLtmASRrHd', 0, '2022-08-29 19:55:40', '2022-08-29 19:55:40', 'lennisyi6ou8adkp7@outlook.com', NULL),
(9, 3, 0, '118.200.60.207', 'bOCDxanYQrJ', 'GryeLsfPJCXhaS', 0, '2022-08-29 19:55:41', '2022-08-29 19:55:41', 'lennisyi6ou8adkp7@outlook.com', NULL),
(10, 3, 0, '118.200.60.207', 'YrBGqVZxHhtD', 'tIaxOFWL', 0, '2022-08-29 19:55:59', '2022-08-29 19:55:59', 'lennisyi6ou8adkp7@outlook.com', NULL),
(11, 3, 0, '118.200.60.207', 'qLJQfgsjUa', 'hTaIpcvkMBHsErg', 0, '2022-08-29 19:56:01', '2022-08-29 19:56:01', 'lennisyi6ou8adkp7@outlook.com', NULL),
(12, 5, 0, '213.158.0.9', 'tjJvgHns', 'wnGkDgePlxEyWqtM', 0, '2022-09-02 10:22:46', '2022-09-02 10:22:46', 'chaeo5eo95eoe@outlook.com', NULL),
(13, 5, 0, '213.158.0.9', 'xjRwWDukna', 'aoIqbWkjE', 0, '2022-09-02 10:22:46', '2022-09-02 10:22:46', 'chaeo5eo95eoe@outlook.com', NULL),
(14, 5, 0, '213.158.0.9', 'hgPEuzrxWHlILSoM', 'nGhmcdeCAbD', 0, '2022-09-02 10:22:47', '2022-09-02 10:22:47', 'chaeo5eo95eoe@outlook.com', NULL),
(15, 5, 0, '213.158.0.9', 'EgHYaKbop', 'IzWgCDKJ', 0, '2022-09-02 10:22:47', '2022-09-02 10:22:47', 'chaeo5eo95eoe@outlook.com', NULL),
(16, 3, 0, '213.158.0.9', 'KwnxGJSRmUXpW', 'irSNAVHoWxEmCcXR', 0, '2022-09-02 10:22:51', '2022-09-02 10:22:51', 'chaeo5eo95eoe@outlook.com', NULL),
(17, 3, 0, '213.158.0.9', 'SesrInjbmWAKu', 'qnamLlwo', 0, '2022-09-02 10:22:51', '2022-09-02 10:22:51', 'chaeo5eo95eoe@outlook.com', NULL),
(18, 3, 0, '213.158.0.9', 'zLbUJKADFirlG', 'yMZUiBVPus', 0, '2022-09-02 10:22:52', '2022-09-02 10:22:52', 'chaeo5eo95eoe@outlook.com', NULL),
(19, 3, 0, '213.158.0.9', 'uyKmYdlJC', 'OFZhCnrNez', 0, '2022-09-02 10:22:52', '2022-09-02 10:22:52', 'chaeo5eo95eoe@outlook.com', NULL),
(20, 5, 0, '117.200.169.3', 'QviIDWrLTwXy', 'hMfmQqkCXbWe', 0, '2022-09-10 08:16:22', '2022-09-10 08:16:22', 'cyrenewh1y4y5by@outlook.com', NULL),
(21, 5, 0, '117.200.169.3', 'NmiQuBOZSHLG', 'LEdKxaWVcr', 0, '2022-09-10 08:16:23', '2022-09-10 08:16:23', 'cyrenewh1y4y5by@outlook.com', NULL),
(22, 5, 0, '117.200.169.3', 'CJxYdPBTpKvrhotZ', 'CsDAFtnzVxXgrZQ', 0, '2022-09-10 08:16:26', '2022-09-10 08:16:26', 'cyrenewh1y4y5by@outlook.com', NULL),
(23, 5, 0, '117.200.169.3', 'TmvLZPtDXpUzg', 'tFIXxZAc', 0, '2022-09-10 08:16:26', '2022-09-10 08:16:26', 'cyrenewh1y4y5by@outlook.com', NULL),
(24, 3, 0, '117.200.169.3', 'kXOvQSzJKaMEjPB', 'NyIUJtzvFKA', 0, '2022-09-10 08:16:29', '2022-09-10 08:16:29', 'cyrenewh1y4y5by@outlook.com', NULL),
(25, 3, 0, '117.200.169.3', 'vdWaiFuySfgJr', 'rbsxMvVoUKqAOhGa', 0, '2022-09-10 08:16:30', '2022-09-10 08:16:30', 'cyrenewh1y4y5by@outlook.com', NULL),
(26, 3, 0, '117.200.169.3', 'ADoXUMnwB', 'aVoLItESyOqJpXvQ', 0, '2022-09-10 08:16:32', '2022-09-10 08:16:32', 'cyrenewh1y4y5by@outlook.com', NULL),
(27, 3, 0, '117.200.169.3', 'bRJVUIKyQ', 'yGLrajMpVC', 0, '2022-09-10 08:16:32', '2022-09-10 08:16:32', 'cyrenewh1y4y5by@outlook.com', NULL),
(28, 5, 0, '62.215.135.164', 'dGnaswkTZOYCfjh', 'YNHiQOIt', 0, '2022-09-14 03:19:22', '2022-09-14 03:19:22', 'meranday5o2x16@outlook.com', NULL),
(29, 5, 0, '62.215.135.164', 'daJCnWphADeQc', 'dqwMeYFS', 0, '2022-09-14 03:19:23', '2022-09-14 03:19:23', 'meranday5o2x16@outlook.com', NULL),
(30, 5, 0, '62.215.135.164', 'xoQlYKesZSdHvIc', 'rRMocDiNxdeCh', 0, '2022-09-14 03:19:25', '2022-09-14 03:19:25', 'meranday5o2x16@outlook.com', NULL),
(31, 5, 0, '62.215.135.164', 'PuQRGwBcpAHZYXDo', 'dvbgaCqHwTR', 0, '2022-09-14 03:19:25', '2022-09-14 03:19:25', 'meranday5o2x16@outlook.com', NULL),
(32, 3, 0, '62.215.135.164', 'VDlvdgsaeArCTKNS', 'sDOHZGCShbxmUNi', 0, '2022-09-14 03:19:27', '2022-09-14 03:19:27', 'meranday5o2x16@outlook.com', NULL),
(33, 3, 0, '62.215.135.164', 'PnEUOydxMQkCZvs', 'cGpmJyrDhCgjb', 0, '2022-09-14 03:19:27', '2022-09-14 03:19:27', 'meranday5o2x16@outlook.com', NULL),
(34, 3, 0, '62.215.135.164', 'HjZdzPRIck', 'mhHINujRlDGOCMQ', 0, '2022-09-14 03:19:28', '2022-09-14 03:19:28', 'meranday5o2x16@outlook.com', NULL),
(35, 3, 0, '62.215.135.164', 'zANtZexYQa', 'FUsMGvYzQo', 0, '2022-09-14 03:19:29', '2022-09-14 03:19:29', 'meranday5o2x16@outlook.com', NULL),
(36, 5, 0, '119.42.78.195', 'hjUlExfYT', 'rXptMAqIUD', 0, '2022-09-22 18:00:59', '2022-09-22 18:00:59', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(37, 5, 0, '119.42.78.195', 'EPwerLUF', 'cnpLfmWYXzETbMZh', 0, '2022-09-22 18:00:59', '2022-09-22 18:00:59', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(38, 5, 0, '119.42.78.195', 'PXIzdGmKVMJvew', 'WSJeZmsUTRHlVqrj', 0, '2022-09-22 18:01:02', '2022-09-22 18:01:02', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(39, 5, 0, '119.42.78.195', 'jEyGSNmcuYkP', 'uacCEYAnKjrs', 0, '2022-09-22 18:01:03', '2022-09-22 18:01:03', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(40, 3, 0, '119.42.78.195', 'mJUOPdkgC', 'wcJvbOaNroH', 0, '2022-09-22 18:01:07', '2022-09-22 18:01:07', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(41, 3, 0, '119.42.78.195', 'onSUyFfwY', 'qksHBAnlSUNYCjW', 0, '2022-09-22 18:01:07', '2022-09-22 18:01:07', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(42, 3, 0, '119.42.78.195', 'aHFswrqWU', 'RthfqrmZFIlLoaPU', 0, '2022-09-22 18:01:10', '2022-09-22 18:01:10', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(43, 3, 0, '119.42.78.195', 'RnqpIomdV', 'rBgKVvah', 0, '2022-09-22 18:01:11', '2022-09-22 18:01:11', 'ioluwakemi8iro0i927e@outlook.com', NULL),
(44, 5, 0, '36.93.126.60', 'cyFbVDGiL', 'VRZbEMPtwQS', 0, '2022-10-11 20:23:19', '2022-10-11 20:23:19', 'ivanmik6at8@outlook.com', NULL),
(45, 5, 0, '36.93.126.60', 'KeFQozUwRt', 'myWNZifSbYFajuPH', 0, '2022-10-11 20:23:20', '2022-10-11 20:23:20', 'ivanmik6at8@outlook.com', NULL),
(46, 5, 0, '36.93.126.60', 'wGHguZdYO', 'rKPjGZIQVlyCRp', 0, '2022-10-11 20:23:28', '2022-10-11 20:23:28', 'ivanmik6at8@outlook.com', NULL),
(47, 3, 0, '36.93.126.60', 'joRLuYcP', 'hEoJGUOD', 0, '2022-10-11 20:23:38', '2022-10-11 20:23:38', 'ivanmik6at8@outlook.com', NULL),
(48, 3, 0, '36.93.126.60', 'fhTXNjWn', 'DScUNIblVKMtaZv', 0, '2022-10-11 20:23:39', '2022-10-11 20:23:39', 'ivanmik6at8@outlook.com', NULL),
(49, 3, 0, '36.93.126.60', 'KwzpNBkjcQoDCT', 'xEXfLIdhP', 0, '2022-10-11 20:23:52', '2022-10-11 20:23:52', 'ivanmik6at8@outlook.com', NULL),
(50, 3, 0, '36.93.126.60', 'adWIPnGkrh', 'RhlpbjyvfDgOu', 0, '2022-10-11 20:23:53', '2022-10-11 20:23:53', 'ivanmik6at8@outlook.com', NULL),
(51, 5, 0, '1.64.109.177', 'LQdfAesZwqjN', 'FESHhzyZTmQMDCL', 0, '2022-10-15 15:55:04', '2022-10-15 15:55:04', 'pyotrbogztq@outlook.com', NULL),
(52, 5, 0, '1.64.109.177', 'wdiNCZGIeFca', 'bJimjkPA', 0, '2022-10-15 15:55:05', '2022-10-15 15:55:05', 'pyotrbogztq@outlook.com', NULL),
(53, 5, 0, '1.64.109.177', 'wzXWndDU', 'GVhEencQLSYaPq', 0, '2022-10-15 15:55:07', '2022-10-15 15:55:07', 'pyotrbogztq@outlook.com', NULL),
(54, 5, 0, '1.64.109.177', 'ZMbxXVGD', 'jbzKMBQcVZ', 0, '2022-10-15 15:55:08', '2022-10-15 15:55:08', 'pyotrbogztq@outlook.com', NULL),
(55, 3, 0, '1.64.109.177', 'SvkyhDaUnL', 'TRZaqXeholzwvS', 0, '2022-10-15 15:55:11', '2022-10-15 15:55:11', 'pyotrbogztq@outlook.com', NULL),
(56, 3, 0, '1.64.109.177', 'HsYZEiAVnGINWBz', 'iZADNujgrwEstSv', 0, '2022-10-15 15:55:12', '2022-10-15 15:55:12', 'pyotrbogztq@outlook.com', NULL),
(57, 3, 0, '1.64.109.177', 'kbswIuZx', 'anvbOlMHcW', 0, '2022-10-15 15:55:15', '2022-10-15 15:55:15', 'pyotrbogztq@outlook.com', NULL),
(58, 3, 0, '1.64.109.177', 'bKDXdvfmL', 'ydOUkJQjDzobMwY', 0, '2022-10-15 15:55:15', '2022-10-15 15:55:15', 'pyotrbogztq@outlook.com', NULL),
(59, 5, 0, '164.77.44.166', 'yuEFKifeqn', 'RrKtWdHvAopFlsg', 0, '2022-10-19 01:27:31', '2022-10-19 01:27:31', 'valentin70kal@outlook.com', NULL),
(60, 5, 0, '164.77.44.166', 'GjEihzYtOdNZpvPc', 'WPBMEzVL', 0, '2022-10-19 01:27:31', '2022-10-19 01:27:31', 'valentin70kal@outlook.com', NULL),
(61, 5, 0, '164.77.44.166', 'jQGUMqivtfhPDg', 'vrqSDewaPKmBAM', 0, '2022-10-19 01:27:32', '2022-10-19 01:27:32', 'valentin70kal@outlook.com', NULL),
(62, 5, 0, '164.77.44.166', 'QbouzilTqNR', 'LkdVTBzqWZQc', 0, '2022-10-19 01:27:33', '2022-10-19 01:27:33', 'valentin70kal@outlook.com', NULL),
(63, 3, 0, '164.77.44.166', 'zqcXxCEUSBv', 'bydkZsDzK', 0, '2022-10-19 01:27:35', '2022-10-19 01:27:35', 'valentin70kal@outlook.com', NULL),
(64, 3, 0, '164.77.44.166', 'MuodCywDcQkKbzn', 'hLrBwicaVIZk', 0, '2022-10-19 01:27:36', '2022-10-19 01:27:36', 'valentin70kal@outlook.com', NULL),
(65, 3, 0, '164.77.44.166', 'gnrulIizcWtZym', 'vrSpyTPW', 0, '2022-10-19 01:27:37', '2022-10-19 01:27:37', 'valentin70kal@outlook.com', NULL),
(66, 3, 0, '164.77.44.166', 'KvVtLFMio', 'vgIDqBYbRmkdfi', 0, '2022-10-19 01:27:38', '2022-10-19 01:27:38', 'valentin70kal@outlook.com', NULL),
(67, 5, 0, '46.229.99.17', 'HhKrWPDsJltf', 'nxNIGLkQipcwOCzZ', 0, '2022-10-22 08:32:15', '2022-10-22 08:32:15', 'kirillkostinhk@outlook.com', NULL),
(68, 5, 0, '46.229.99.17', 'BYNTMQKzJPigq', 'ZaCumhwTgnxHWbGc', 0, '2022-10-22 08:32:16', '2022-10-22 08:32:16', 'kirillkostinhk@outlook.com', NULL),
(69, 5, 0, '46.229.99.17', 'cWpEwzDiYHtT', 'WMEurUCwLxbBQ', 0, '2022-10-22 08:32:17', '2022-10-22 08:32:17', 'kirillkostinhk@outlook.com', NULL),
(70, 5, 0, '46.229.99.17', 'BcPgMnDyf', 'IRAjVDKPWlb', 0, '2022-10-22 08:32:17', '2022-10-22 08:32:17', 'kirillkostinhk@outlook.com', NULL),
(71, 3, 0, '46.229.99.17', 'ypQmHEUBPZKufhe', 'prEwZQunOI', 0, '2022-10-22 08:32:18', '2022-10-22 08:32:18', 'kirillkostinhk@outlook.com', NULL),
(72, 3, 0, '46.229.99.17', 'RvHhTbclKBmieftN', 'yXaTLQzKxCgdwicD', 0, '2022-10-22 08:32:19', '2022-10-22 08:32:19', 'kirillkostinhk@outlook.com', NULL),
(73, 3, 0, '46.229.99.17', 'sgSibetFT', 'GURsAeCu', 0, '2022-10-22 08:32:20', '2022-10-22 08:32:20', 'kirillkostinhk@outlook.com', NULL),
(74, 3, 0, '46.229.99.17', 'ydWxUkSuz', 'WmBQUdhacFHA', 0, '2022-10-22 08:32:20', '2022-10-22 08:32:20', 'kirillkostinhk@outlook.com', NULL),
(75, 3, 0, '49.36.83.92', 'test', 'tetstest', 0, '2022-11-05 19:18:32', '2022-11-05 19:18:32', 'test@gmail.com', NULL),
(76, 5, 0, '95.142.89.108', 'YnJFTZfxgRikVWPo', 'oEOULBaDQbePH', 0, '2022-11-08 08:31:02', '2022-11-08 08:31:02', 'devonf6ghe@outlook.com', NULL),
(77, 5, 0, '95.142.89.108', 'xKXZaebNt', 'BCjIaMimTQYdZAw', 0, '2022-11-08 08:31:03', '2022-11-08 08:31:03', 'devonf6ghe@outlook.com', NULL),
(78, 5, 0, '95.142.89.108', 'aSeqgQWVL', 'NDJyjbQEtsLUp', 0, '2022-11-08 08:31:04', '2022-11-08 08:31:04', 'devonf6ghe@outlook.com', NULL),
(79, 5, 0, '95.142.89.108', 'HqpfrOdmlsV', 'jyCLGratMRsYAcnO', 0, '2022-11-08 08:31:05', '2022-11-08 08:31:05', 'devonf6ghe@outlook.com', NULL),
(80, 3, 0, '95.142.89.108', 'nOBvGMxpU', 'ipcPFuWlyzUrMo', 0, '2022-11-08 08:31:07', '2022-11-08 08:31:07', 'devonf6ghe@outlook.com', NULL),
(81, 3, 0, '95.142.89.108', 'WpIvlfXSHmz', 'uFKoAGfEDLSviY', 0, '2022-11-08 08:31:07', '2022-11-08 08:31:07', 'devonf6ghe@outlook.com', NULL),
(82, 3, 0, '95.142.89.108', 'aLmvtNqWJUAZx', 'QdvhZGPOKJ', 0, '2022-11-08 08:31:08', '2022-11-08 08:31:08', 'devonf6ghe@outlook.com', NULL),
(83, 3, 0, '95.142.89.108', 'NIwWRKioFAZchbnO', 'ERhXWOTf', 0, '2022-11-08 08:31:09', '2022-11-08 08:31:09', 'devonf6ghe@outlook.com', NULL),
(84, 5, 0, '119.192.150.128', 'wYhxkSnFfGPtLr', 'qwokLrnxjgAc', 0, '2022-11-15 20:33:06', '2022-11-15 20:33:06', 'vavjazuguf@outlook.com', NULL),
(85, 5, 0, '119.192.150.128', 'TWqsKNmHipLQ', 'VOUCDjiuQHRnbZwg', 0, '2022-11-15 20:33:07', '2022-11-15 20:33:07', 'vavjazuguf@outlook.com', NULL),
(86, 5, 0, '119.192.150.128', 'ItLkxjzgKBYa', 'wDdOKNYMcVjab', 0, '2022-11-15 20:33:09', '2022-11-15 20:33:09', 'vavjazuguf@outlook.com', NULL),
(87, 5, 0, '119.192.150.128', 'TiyOrIDXtW', 'qUIEZkoyLMtVFm', 0, '2022-11-15 20:33:10', '2022-11-15 20:33:10', 'vavjazuguf@outlook.com', NULL),
(88, 3, 0, '119.192.150.128', 'tjxTugMnVoJrNseG', 'NwCZeXWBibUs', 0, '2022-11-15 20:33:13', '2022-11-15 20:33:13', 'vavjazuguf@outlook.com', NULL),
(89, 3, 0, '119.192.150.128', 'MUwYkyVi', 'YcBSfHGl', 0, '2022-11-15 20:33:13', '2022-11-15 20:33:13', 'vavjazuguf@outlook.com', NULL),
(90, 3, 0, '119.192.150.128', 'jLgldcorXesROShH', 'KlTtwcvJb', 0, '2022-11-15 20:33:17', '2022-11-15 20:33:17', 'vavjazuguf@outlook.com', NULL),
(91, 3, 0, '119.192.150.128', 'vSOdlaXF', 'DIAShFUE', 0, '2022-11-15 20:33:17', '2022-11-15 20:33:17', 'vavjazuguf@outlook.com', NULL),
(92, 5, 0, '218.58.154.21', 'ZxkJiybaPz', 'IXJBmegVpsMZaWN', 0, '2022-11-21 20:46:37', '2022-11-21 20:46:37', 'liwlozizak@outlook.com', NULL),
(93, 5, 0, '218.58.154.21', 'myCShswUtvLQ', 'pSvKugtyPmajVNE', 0, '2022-11-21 20:46:38', '2022-11-21 20:46:38', 'liwlozizak@outlook.com', NULL),
(94, 5, 0, '218.58.154.21', 'ckjfWgYahBPxpXqO', 'KvLAuPtEC', 0, '2022-11-21 20:46:40', '2022-11-21 20:46:40', 'liwlozizak@outlook.com', NULL),
(95, 5, 0, '218.58.154.21', 'mvnJUKqNGgHQz', 'vFfnzticWVsHJgLk', 0, '2022-11-21 20:46:41', '2022-11-21 20:46:41', 'liwlozizak@outlook.com', NULL),
(96, 3, 0, '218.58.154.21', 'nSYUbWCJDQ', 'FaATHhbGVB', 0, '2022-11-21 20:46:44', '2022-11-21 20:46:44', 'liwlozizak@outlook.com', NULL),
(97, 3, 0, '218.58.154.21', 'ruWGFIMd', 'rhLJkBVIjRTEGzYK', 0, '2022-11-21 20:46:44', '2022-11-21 20:46:44', 'liwlozizak@outlook.com', NULL),
(98, 3, 0, '218.58.154.21', 'BDKNIPwXCctUFdxG', 'VDFIsMxPZwdgOQ', 0, '2022-11-21 20:46:48', '2022-11-21 20:46:48', 'liwlozizak@outlook.com', NULL),
(99, 3, 0, '218.58.154.21', 'SoigcFaYrMbqnBwu', 'RCpSmldvtani', 0, '2022-11-21 20:46:48', '2022-11-21 20:46:48', 'liwlozizak@outlook.com', NULL),
(100, 5, 0, '147.75.118.231', 'kGRyZOcCbLifFxa', 'ptKfTMoGghQjxD', 0, '2022-12-01 07:34:19', '2022-12-01 07:34:19', 'nevgavifat@outlook.com', NULL),
(101, 3, 0, '147.75.118.231', 'EDNFVJCglZLYde', 'gzYVQIlGKkr', 0, '2022-12-01 07:35:48', '2022-12-01 07:35:48', 'nevgavifat@outlook.com', NULL),
(102, 3, 0, '147.75.118.231', 'yZBDqYWPHxtiAr', 'kMwHsYSBGObW', 0, '2022-12-01 07:36:08', '2022-12-01 07:36:08', 'nevgavifat@outlook.com', NULL),
(103, 3, 0, '147.75.118.231', 'OzQXDJbw', 'ScxkKIePa', 0, '2022-12-01 07:36:13', '2022-12-01 07:36:13', 'nevgavifat@outlook.com', NULL),
(104, 5, 0, '91.187.223.182', 'YOhcKBFjwutWXib', 'RJgdfKSm', 0, '2022-12-16 00:56:38', '2022-12-16 00:56:38', 'zaskodiyiq@outlook.com', NULL),
(105, 5, 0, '91.187.223.182', 'XBLJuAexEfSkYQi', 'qdsNQSalRIrPYK', 0, '2022-12-16 00:56:38', '2022-12-16 00:56:38', 'zaskodiyiq@outlook.com', NULL),
(106, 5, 0, '91.187.223.182', 'pmDgUbVrLTeB', 'IiVGdCoqsnQHZ', 0, '2022-12-16 00:56:39', '2022-12-16 00:56:39', 'zaskodiyiq@outlook.com', NULL),
(107, 5, 0, '91.187.223.182', 'xCzwXDpHRmZsLk', 'tFxqJRLjzav', 0, '2022-12-16 00:56:39', '2022-12-16 00:56:39', 'zaskodiyiq@outlook.com', NULL),
(108, 3, 0, '91.187.223.182', 'luyxbcChD', 'ZvHmosgLWdBIaAPM', 0, '2022-12-16 00:56:40', '2022-12-16 00:56:40', 'zaskodiyiq@outlook.com', NULL),
(109, 3, 0, '91.187.223.182', 'HYqLXTjvkN', 'EWXhMBnwplt', 0, '2022-12-16 00:56:40', '2022-12-16 00:56:40', 'zaskodiyiq@outlook.com', NULL),
(110, 3, 0, '91.187.223.182', 'apjCqfomAvRO', 'IeXhGvrxqkz', 0, '2022-12-16 00:56:41', '2022-12-16 00:56:41', 'zaskodiyiq@outlook.com', NULL),
(111, 3, 0, '91.187.223.182', 'vYZeJqHwky', 'ZGutKxcS', 0, '2022-12-16 00:56:41', '2022-12-16 00:56:41', 'zaskodiyiq@outlook.com', NULL),
(112, 5, 0, '221.10.195.200', 'qYHtNlBubnhc', 'dsJbGDeycoVnX', 0, '2022-12-23 12:35:30', '2022-12-23 12:35:30', 'kifzilesil@outlook.com', NULL),
(113, 5, 0, '221.10.195.200', 'obSwFGBNpfH', 'AHxJYoeprfOqUCwZ', 0, '2022-12-23 12:35:31', '2022-12-23 12:35:31', 'kifzilesil@outlook.com', NULL),
(114, 5, 0, '221.10.195.200', 'zfDFThLtvZ', 'QkqmMSIvaPL', 0, '2022-12-23 12:35:34', '2022-12-23 12:35:34', 'kifzilesil@outlook.com', NULL),
(115, 5, 0, '221.10.195.200', 'NtUzQOkYri', 'aDdwHXBtPnpTOIi', 0, '2022-12-23 12:35:35', '2022-12-23 12:35:35', 'kifzilesil@outlook.com', NULL),
(116, 3, 0, '221.10.195.200', 'TNJejwDM', 'oXHjpvRqlSGCKFke', 0, '2022-12-23 12:35:38', '2022-12-23 12:35:38', 'kifzilesil@outlook.com', NULL),
(117, 3, 0, '221.10.195.200', 'cUyOWSQgGxvC', 'IBaGWoiT', 0, '2022-12-23 12:35:39', '2022-12-23 12:35:39', 'kifzilesil@outlook.com', NULL),
(118, 3, 0, '221.10.195.200', 'JLcMRNBY', 'imYLRlXqazTGyP', 0, '2022-12-23 12:35:41', '2022-12-23 12:35:41', 'kifzilesil@outlook.com', NULL),
(119, 3, 0, '221.10.195.200', 'CeAFKMDBNxm', 'uMbBfwzqTLOPAZ', 0, '2022-12-23 12:35:42', '2022-12-23 12:35:42', 'kifzilesil@outlook.com', NULL),
(120, 5, 0, '123.16.145.194', 'FLjXqBevrdGgwux', 'EjhgIyfvapBCbi', 0, '2023-01-22 02:05:22', '2023-01-22 02:05:22', 'frrubymn@outlook.com', NULL),
(121, 5, 0, '123.16.145.194', 'qFrfpbthxX', 'NuxlZMpFqhYQKamV', 0, '2023-01-22 02:05:24', '2023-01-22 02:05:24', 'frrubymn@outlook.com', NULL),
(122, 5, 0, '123.16.145.194', 'mNsRgnwUf', 'APfKmTgtM', 0, '2023-01-22 02:06:41', '2023-01-22 02:06:41', 'frrubymn@outlook.com', NULL),
(123, 5, 0, '123.16.145.194', 'zYphunCBMUmc', 'zcLFekbSJqrUiTjI', 0, '2023-01-22 02:06:43', '2023-01-22 02:06:43', 'frrubymn@outlook.com', NULL),
(124, 3, 0, '123.16.145.194', 'EsdlevDOMtKQZAnB', 'RimogMrtxEYluGh', 0, '2023-01-22 02:07:47', '2023-01-22 02:07:47', 'frrubymn@outlook.com', NULL),
(125, 3, 0, '123.16.145.194', 'YOIJXZbV', 'OSURWGrm', 0, '2023-01-22 02:08:09', '2023-01-22 02:08:09', 'frrubymn@outlook.com', NULL),
(126, 5, 0, '20.246.72.39', 'Kevinver', 'Passive Income – Effortlessly \r\nWith our help, you can earn money just by sharing your Internet. \r\nStart earning right now \r\nYou get a $5 gift when you register! \r\nhttps://bit.ly/3GXAk2k', 0, '2023-04-29 16:31:38', '2023-04-29 16:31:38', 'vitalikkalininbt4048@rambler.ru', NULL),
(127, 5, 0, '20.246.72.39', 'FrankOxynC', 'Are you tired of dealing with slow internet speeds or blocked content on your favorite social networks? \r\nLook no further than our premium proxy services! \r\nWith our high-quality IPv4 and IPv6 proxies, \r\nyou can enjoy lightning-fast internet speeds and access any content you desire. \r\nOur dedicated proxies are individually assigned and optimized for social media use, \r\nensuring the best possible performance. And the best part? \r\nYou can try our proxies for free! \r\nDon\'t let slow speeds and content restrictions hold you back any longer. \r\nUpgrade to our premium proxies today and experience the difference for yourself. \r\n \r\n\"USER-51dc81f32f38b647\" - this is the promo code for a 30% discount. \r\nHere\'s the registration link: https://clck.ru/32Sj5U \r\n \r\n<a href=https://clck.ru/32Sj5U>fast internet speeds</a>', 0, '2023-05-01 12:49:36', '2023-05-01 12:49:36', 'v.i.c.tor0806.80.4.8@gmail.com', NULL),
(128, 5, 0, '77.246.96.78', 'Edwindog', 'ChatCrypto is building a high performance AI Bot which is CHATGPT of CRYPTO. \r\nWe are launching the Worlds first deflationary Artificial Intelligence token (CHATCRYPTOTOKEN) which will be used as a payment gateway to license \r\nBe rest assured and happy to be part of Chatcrypto family as signing up would give you free 1600 chatcrypto tokens(CCAIT) \r\nProject link https://bit.ly/41Fp0jc \r\nand with every referral you refer to Chatcrypto, you earn extra 1600 tokens for free. \r\nq1w2e19z', 0, '2023-05-05 18:44:54', '2023-05-05 18:44:54', 'a.le.x1.2.m.i.r.r.5.04.6@gmail.com', NULL),
(129, 5, 0, '92.114.220.178', 'EvTDSIqhiea', 'ezTcuCPRGx', 0, '2023-10-19 20:12:42', '2023-10-19 20:12:42', 'RonaldParent822@yahoo.com', NULL),
(130, 5, 0, '92.114.220.178', 'sgLbKhwScmyElrTV', 'ZHlmwpKUeMxFny', 0, '2023-10-19 20:12:43', '2023-10-19 20:12:43', 'RonaldParent822@yahoo.com', NULL),
(131, 5, 0, '92.114.220.178', 'EvTDSIqhiea', 'ezTcuCPRGx', 0, '2023-10-19 20:12:43', '2023-10-19 20:12:43', 'RonaldParent822@yahoo.com', NULL),
(132, 3, 0, '92.114.220.178', 'DVRTLXWU', 'nVdCyoMH', 0, '2023-10-19 20:12:45', '2023-10-19 20:12:45', 'RonaldParent822@yahoo.com', NULL),
(133, 3, 0, '92.114.220.178', 'VncyvAHgS', 'JmzKogCarZFRi', 0, '2023-10-19 20:12:45', '2023-10-19 20:12:45', 'RonaldParent822@yahoo.com', NULL),
(134, 3, 0, '92.114.220.178', 'DVRTLXWU', 'nVdCyoMH', 0, '2023-10-19 20:12:46', '2023-10-19 20:12:46', 'RonaldParent822@yahoo.com', NULL),
(135, 3, 0, '186.179.100.51', 'LRGUIkTKx', 'grWxFIzf', 0, '2023-10-30 13:22:38', '2023-10-30 13:22:38', 'sengibubep@outlook.com', NULL),
(136, 3, 0, '186.179.100.51', 'JiINTGOAYapbm', 'bUMLRYVCowzsctiS', 0, '2023-10-30 13:22:39', '2023-10-30 13:22:39', 'sengibubep@outlook.com', NULL),
(137, 3, 0, '186.179.100.51', 'LRGUIkTKx', 'grWxFIzf', 0, '2023-10-30 13:22:39', '2023-10-30 13:22:39', 'sengibubep@outlook.com', NULL),
(138, 5, 0, '186.179.100.51', 'XNiSWnrtQIO', 'qFWRpoCeUYOLDH', 0, '2023-10-30 13:23:01', '2023-10-30 13:23:01', 'sengibubep@outlook.com', NULL),
(139, 5, 0, '186.179.100.51', 'tTzaCQdGiFs', 'zveFOxAnu', 0, '2023-10-30 13:23:02', '2023-10-30 13:23:02', 'sengibubep@outlook.com', NULL),
(140, 5, 0, '186.179.100.51', 'XNiSWnrtQIO', 'qFWRpoCeUYOLDH', 0, '2023-10-30 13:23:02', '2023-10-30 13:23:02', 'sengibubep@outlook.com', NULL),
(141, 5, 0, '103.146.232.185', 'uCwGDeSUa', 'HgKABwRE', 0, '2024-02-02 21:19:10', '2024-02-02 21:19:10', 'donna84hartleyjk1@outlook.com', NULL),
(142, 5, 0, '103.146.232.185', 'uCwGDeSUa', 'HgKABwRE', 0, '2024-02-02 21:19:11', '2024-02-02 21:19:11', 'donna84hartleyjk1@outlook.com', NULL),
(143, 5, 0, '103.146.232.185', 'uCwGDeSUa', 'HgKABwRE', 0, '2024-02-02 21:19:12', '2024-02-02 21:19:12', 'donna84hartleyjk1@outlook.com', NULL),
(144, 3, 0, '103.146.232.185', 'BKMFWyqY', 'XLfbYPnRDa', 0, '2024-02-02 21:19:14', '2024-02-02 21:19:14', 'donna84hartleyjk1@outlook.com', NULL),
(145, 3, 0, '103.146.232.185', 'BKMFWyqY', 'XLfbYPnRDa', 0, '2024-02-02 21:19:15', '2024-02-02 21:19:15', 'donna84hartleyjk1@outlook.com', NULL),
(146, 3, 0, '103.146.232.185', 'BKMFWyqY', 'XLfbYPnRDa', 0, '2024-02-02 21:19:16', '2024-02-02 21:19:16', 'donna84hartleyjk1@outlook.com', NULL),
(147, 5, 0, '213.108.113.110', 'wBDPVRtjTqF', 'UwaMZTAxjWnRB', 0, '2024-02-28 19:38:53', '2024-02-28 19:38:53', 'LetitiaMccormack711@aol.com', NULL),
(148, 5, 0, '213.108.113.110', 'wBDPVRtjTqF', 'UwaMZTAxjWnRB', 0, '2024-02-28 19:38:54', '2024-02-28 19:38:54', 'LetitiaMccormack711@aol.com', NULL),
(149, 5, 0, '213.108.113.110', 'wBDPVRtjTqF', 'UwaMZTAxjWnRB', 0, '2024-02-28 19:38:55', '2024-02-28 19:38:55', 'LetitiaMccormack711@aol.com', NULL),
(150, 3, 0, '213.108.113.110', 'vfrBPhjOow', 'vpRbuitxVM', 0, '2024-02-28 19:38:57', '2024-02-28 19:38:57', 'LetitiaMccormack711@aol.com', NULL),
(151, 3, 0, '213.108.113.110', 'vfrBPhjOow', 'vpRbuitxVM', 0, '2024-02-28 19:38:58', '2024-02-28 19:38:58', 'LetitiaMccormack711@aol.com', NULL),
(152, 3, 0, '213.108.113.110', 'vfrBPhjOow', 'vpRbuitxVM', 0, '2024-02-28 19:38:59', '2024-02-28 19:38:59', 'LetitiaMccormack711@aol.com', NULL),
(153, 5, 0, '45.32.121.56', 'zDVMfJKOI', 'zXSYdZDtf', 0, '2024-03-06 20:15:54', '2024-03-06 20:15:54', 'danburzynski1985@yahoo.com', NULL),
(154, 5, 0, '45.32.121.56', 'zDVMfJKOI', 'zXSYdZDtf', 0, '2024-03-06 20:15:56', '2024-03-06 20:15:56', 'danburzynski1985@yahoo.com', NULL),
(155, 5, 0, '45.32.121.56', 'zDVMfJKOI', 'zXSYdZDtf', 0, '2024-03-06 20:15:58', '2024-03-06 20:15:58', 'danburzynski1985@yahoo.com', NULL),
(156, 3, 0, '45.32.121.56', 'LOHMyfiQVYzP', 'ZuSRIOtJsPrFoalU', 0, '2024-03-06 20:16:01', '2024-03-06 20:16:01', 'danburzynski1985@yahoo.com', NULL),
(157, 3, 0, '45.32.121.56', 'LOHMyfiQVYzP', 'ZuSRIOtJsPrFoalU', 0, '2024-03-06 20:16:02', '2024-03-06 20:16:02', 'danburzynski1985@yahoo.com', NULL),
(158, 3, 0, '45.32.121.56', 'LOHMyfiQVYzP', 'ZuSRIOtJsPrFoalU', 0, '2024-03-06 20:16:04', '2024-03-06 20:16:04', 'danburzynski1985@yahoo.com', NULL),
(159, 3, 0, '202.137.154.178', 'baZJeESWwqoL', 'JKkdbaAQSGMEV', 0, '2024-03-11 04:08:48', '2024-03-11 04:08:48', 'jeffrey_allen7h35@outlook.com', NULL),
(160, 3, 0, '202.137.154.178', 'baZJeESWwqoL', 'JKkdbaAQSGMEV', 0, '2024-03-11 04:08:50', '2024-03-11 04:08:50', 'jeffrey_allen7h35@outlook.com', NULL),
(161, 3, 0, '202.137.154.178', 'baZJeESWwqoL', 'JKkdbaAQSGMEV', 0, '2024-03-11 04:08:51', '2024-03-11 04:08:51', 'jeffrey_allen7h35@outlook.com', NULL),
(162, 5, 0, '202.137.154.178', 'sfJkLXqUg', 'gIQrjiucNKPSh', 0, '2024-03-11 04:08:55', '2024-03-11 04:08:55', 'jeffrey_allen7h35@outlook.com', NULL),
(163, 5, 0, '202.137.154.178', 'sfJkLXqUg', 'gIQrjiucNKPSh', 0, '2024-03-11 04:08:56', '2024-03-11 04:08:56', 'jeffrey_allen7h35@outlook.com', NULL),
(164, 3, 0, '119.152.243.107', 'joLxBKfMmZN', 'AcPDkXImExMKqrgZ', 0, '2024-04-02 23:17:39', '2024-04-02 23:17:39', 'dimabt5roz@outlook.com', NULL),
(165, 3, 0, '119.152.243.107', 'joLxBKfMmZN', 'AcPDkXImExMKqrgZ', 0, '2024-04-02 23:17:40', '2024-04-02 23:17:40', 'dimabt5roz@outlook.com', NULL),
(166, 3, 0, '119.152.243.107', 'joLxBKfMmZN', 'AcPDkXImExMKqrgZ', 0, '2024-04-02 23:17:41', '2024-04-02 23:17:41', 'dimabt5roz@outlook.com', NULL),
(167, 5, 0, '119.152.243.107', 'lkNBpExUtKrCjcM', 'JPoNBTUYq', 0, '2024-04-02 23:17:44', '2024-04-02 23:17:44', 'dimabt5roz@outlook.com', NULL),
(168, 5, 0, '119.152.243.107', 'lkNBpExUtKrCjcM', 'JPoNBTUYq', 0, '2024-04-02 23:17:45', '2024-04-02 23:17:45', 'dimabt5roz@outlook.com', NULL),
(169, 5, 0, '119.152.243.107', 'lkNBpExUtKrCjcM', 'JPoNBTUYq', 0, '2024-04-02 23:17:46', '2024-04-02 23:17:46', 'dimabt5roz@outlook.com', NULL),
(170, 3, 0, '37.221.202.84', 'SIXazRkbAojQwBxG', 'EdFTzslkyY', 0, '2024-04-07 11:52:06', '2024-04-07 11:52:06', 'LoganCollado728@aol.com', NULL),
(171, 3, 0, '37.221.202.84', 'SIXazRkbAojQwBxG', 'EdFTzslkyY', 0, '2024-04-07 11:52:09', '2024-04-07 11:52:09', 'LoganCollado728@aol.com', NULL),
(172, 3, 0, '37.221.202.84', 'SIXazRkbAojQwBxG', 'EdFTzslkyY', 0, '2024-04-07 11:52:11', '2024-04-07 11:52:11', 'LoganCollado728@aol.com', NULL),
(173, 5, 0, '37.221.202.84', 'eLzjuUkofpNx', 'RNEKezMqPOlDSA', 0, '2024-04-07 11:52:14', '2024-04-07 11:52:14', 'LoganCollado728@aol.com', NULL),
(174, 5, 0, '37.221.202.84', 'eLzjuUkofpNx', 'RNEKezMqPOlDSA', 0, '2024-04-07 11:52:15', '2024-04-07 11:52:15', 'LoganCollado728@aol.com', NULL),
(175, 5, 0, '37.221.202.84', 'eLzjuUkofpNx', 'RNEKezMqPOlDSA', 0, '2024-04-07 11:52:17', '2024-04-07 11:52:17', 'LoganCollado728@aol.com', NULL),
(176, 3, 0, '110.44.118.216', 'ybAYLXgNsfD', 'EKqPwtjWOBefh', 0, '2024-04-13 21:21:50', '2024-04-13 21:21:50', 'obreimif1994@gmail.com', NULL),
(177, 3, 0, '110.44.118.216', 'ybAYLXgNsfD', 'EKqPwtjWOBefh', 0, '2024-04-13 21:21:51', '2024-04-13 21:21:51', 'obreimif1994@gmail.com', NULL),
(178, 3, 0, '110.44.118.216', 'ybAYLXgNsfD', 'EKqPwtjWOBefh', 0, '2024-04-13 21:21:52', '2024-04-13 21:21:52', 'obreimif1994@gmail.com', NULL),
(179, 5, 0, '110.44.118.216', 'UTZPCzYeNof', 'eHGLnybhPxEFWfJ', 0, '2024-04-13 21:21:54', '2024-04-13 21:21:54', 'obreimif1994@gmail.com', NULL),
(180, 5, 0, '110.44.118.216', 'UTZPCzYeNof', 'eHGLnybhPxEFWfJ', 0, '2024-04-13 21:21:55', '2024-04-13 21:21:55', 'obreimif1994@gmail.com', NULL),
(181, 5, 0, '110.44.118.216', 'UTZPCzYeNof', 'eHGLnybhPxEFWfJ', 0, '2024-04-13 21:21:56', '2024-04-13 21:21:56', 'obreimif1994@gmail.com', NULL),
(182, 3, 0, '58.65.128.78', 'BLHlpaMdO', 'sYuiJNybQwv', 0, '2024-04-25 19:26:15', '2024-04-25 19:26:15', 'lindsiashleyjc48@gmail.com', NULL),
(183, 3, 0, '58.65.128.78', 'BLHlpaMdO', 'sYuiJNybQwv', 0, '2024-04-25 19:26:17', '2024-04-25 19:26:17', 'lindsiashleyjc48@gmail.com', NULL),
(184, 3, 0, '58.65.128.78', 'BLHlpaMdO', 'sYuiJNybQwv', 0, '2024-04-25 19:26:19', '2024-04-25 19:26:19', 'lindsiashleyjc48@gmail.com', NULL),
(185, 5, 0, '58.65.128.78', 'rgMvWAuadVSTKI', 'gSrCbejIZL', 0, '2024-04-25 19:26:22', '2024-04-25 19:26:22', 'lindsiashleyjc48@gmail.com', NULL),
(186, 5, 0, '58.65.128.78', 'rgMvWAuadVSTKI', 'gSrCbejIZL', 0, '2024-04-25 19:26:24', '2024-04-25 19:26:24', 'lindsiashleyjc48@gmail.com', NULL),
(187, 5, 0, '58.65.128.78', 'rgMvWAuadVSTKI', 'gSrCbejIZL', 0, '2024-04-25 19:26:26', '2024-04-25 19:26:26', 'lindsiashleyjc48@gmail.com', NULL),
(188, 5, 0, '160.226.241.86', 'VBDtvlZzWEgMhfRy', 'VLvNZBHfbh', 0, '2024-05-05 16:18:52', '2024-05-05 16:18:52', 'miller.wayne1996@yahoo.com', NULL),
(189, 5, 0, '160.226.241.86', 'VBDtvlZzWEgMhfRy', 'VLvNZBHfbh', 0, '2024-05-05 16:18:54', '2024-05-05 16:18:54', 'miller.wayne1996@yahoo.com', NULL),
(190, 5, 0, '160.226.241.86', 'VBDtvlZzWEgMhfRy', 'VLvNZBHfbh', 0, '2024-05-05 16:18:56', '2024-05-05 16:18:56', 'miller.wayne1996@yahoo.com', NULL),
(191, 3, 0, '160.226.241.86', 'lWopSJHaIAwBRsj', 'jSwqxdyZFtMORu', 0, '2024-05-05 16:19:01', '2024-05-05 16:19:01', 'miller.wayne1996@yahoo.com', NULL),
(192, 3, 0, '160.226.241.86', 'lWopSJHaIAwBRsj', 'jSwqxdyZFtMORu', 0, '2024-05-05 16:19:03', '2024-05-05 16:19:03', 'miller.wayne1996@yahoo.com', NULL),
(193, 3, 0, '160.226.241.86', 'lWopSJHaIAwBRsj', 'jSwqxdyZFtMORu', 0, '2024-05-05 16:19:05', '2024-05-05 16:19:05', 'miller.wayne1996@yahoo.com', NULL),
(194, 3, 0, '194.150.171.242', 'ClIyXWAbiM', 'PpLCvAQYbd', 0, '2024-05-08 20:04:28', '2024-05-08 20:04:28', 'pyotrgor5emd@outlook.com', NULL),
(195, 3, 0, '194.150.171.242', 'ClIyXWAbiM', 'PpLCvAQYbd', 0, '2024-05-08 20:04:29', '2024-05-08 20:04:29', 'pyotrgor5emd@outlook.com', NULL),
(196, 3, 0, '194.150.171.242', 'ClIyXWAbiM', 'PpLCvAQYbd', 0, '2024-05-08 20:04:30', '2024-05-08 20:04:30', 'pyotrgor5emd@outlook.com', NULL),
(197, 5, 0, '92.204.134.38', 'xiYrVGqwP', 'epoHaXqVMQ', 0, '2024-05-19 05:10:28', '2024-05-19 05:10:28', 'linnayellrh1980@gmail.com', NULL),
(198, 5, 0, '92.204.134.38', 'xiYrVGqwP', 'epoHaXqVMQ', 0, '2024-05-19 05:10:29', '2024-05-19 05:10:29', 'linnayellrh1980@gmail.com', NULL),
(199, 3, 0, '92.204.134.38', 'WltcbyLHUBpsQ', 'RwhCVDSLfEPvHmZg', 0, '2024-05-19 05:10:32', '2024-05-19 05:10:32', 'linnayellrh1980@gmail.com', NULL),
(200, 3, 0, '92.204.134.38', 'WltcbyLHUBpsQ', 'RwhCVDSLfEPvHmZg', 0, '2024-05-19 05:10:34', '2024-05-19 05:10:34', 'linnayellrh1980@gmail.com', NULL),
(201, 5, 0, '92.87.142.158', 'rHlivzThYc', 'bXHghImt', 0, '2024-05-22 16:49:33', '2024-05-22 16:49:33', 'jose.fachini3408@yahoo.com', NULL),
(202, 5, 0, '92.87.142.158', 'rHlivzThYc', 'bXHghImt', 0, '2024-05-22 16:49:34', '2024-05-22 16:49:34', 'jose.fachini3408@yahoo.com', NULL),
(203, 3, 0, '92.87.142.158', 'nLhGsHdvT', 'cIPguWjdLQCU', 0, '2024-05-22 16:49:36', '2024-05-22 16:49:36', 'jose.fachini3408@yahoo.com', NULL),
(204, 3, 0, '92.87.142.158', 'nLhGsHdvT', 'cIPguWjdLQCU', 0, '2024-05-22 16:49:37', '2024-05-22 16:49:37', 'jose.fachini3408@yahoo.com', NULL),
(205, 3, 0, '200.201.179.168', 'fyhivVCm', 'zXfFJtoGTMd', 0, '2024-06-03 22:49:37', '2024-06-03 22:49:37', 'drikq1990@gmail.com', NULL),
(206, 3, 0, '200.201.179.168', 'fyhivVCm', 'zXfFJtoGTMd', 0, '2024-06-03 22:49:39', '2024-06-03 22:49:39', 'drikq1990@gmail.com', NULL),
(207, 5, 0, '200.201.179.168', 'ZKkTWmrYXRhp', 'WMDhoRvGdIEa', 0, '2024-06-03 22:49:43', '2024-06-03 22:49:43', 'drikq1990@gmail.com', NULL),
(208, 5, 0, '200.201.179.168', 'ZKkTWmrYXRhp', 'WMDhoRvGdIEa', 0, '2024-06-03 22:49:45', '2024-06-03 22:49:45', 'drikq1990@gmail.com', NULL),
(209, 3, 0, '45.15.72.93', 'medranostarckuzz8n0+5uq2fat1t5pi@gmail.com', 'deserunt inventore dolorem laudantium ut velit sit nobis quae eaque necessitatibus ea. consectetur qui libero dolorem necessitatibus facilis repudiandae.', 0, '2024-06-21 10:48:01', '2024-06-21 10:48:01', 'medranostarckuzz8n0+5uq2fat1t5pi@gmail.com', NULL),
(210, 5, 0, '103.157.210.179', 'edwImlqhT', 'dYjMpqPcD', 0, '2024-07-05 01:16:06', '2024-07-05 01:16:06', 'kjergaard.kyle1987@yahoo.com', NULL),
(211, 5, 0, '103.157.210.179', 'edwImlqhT', 'dYjMpqPcD', 0, '2024-07-05 01:16:07', '2024-07-05 01:16:07', 'kjergaard.kyle1987@yahoo.com', NULL),
(212, 3, 0, '103.157.210.179', 'PMuEOyYbRF', 'aFncHtUgRNsfAS', 0, '2024-07-05 01:16:10', '2024-07-05 01:16:10', 'kjergaard.kyle1987@yahoo.com', NULL),
(213, 3, 0, '103.157.210.179', 'PMuEOyYbRF', 'aFncHtUgRNsfAS', 0, '2024-07-05 01:16:11', '2024-07-05 01:16:11', 'kjergaard.kyle1987@yahoo.com', NULL),
(214, 5, 0, '171.248.40.217', 'hcSPrfuHsNBzmlX', 'qkFJYWNc', 0, '2024-07-10 13:09:40', '2024-07-10 13:09:40', 'kennediykf27@gmail.com', NULL),
(215, 5, 0, '171.248.40.217', 'hcSPrfuHsNBzmlX', 'qkFJYWNc', 0, '2024-07-10 13:09:42', '2024-07-10 13:09:42', 'kennediykf27@gmail.com', NULL),
(216, 3, 0, '171.248.40.217', 'MrfXeHnjkFmExLzC', 'lLJMxUomY', 0, '2024-07-10 13:09:45', '2024-07-10 13:09:45', 'kennediykf27@gmail.com', NULL),
(217, 3, 0, '171.248.40.217', 'MrfXeHnjkFmExLzC', 'lLJMxUomY', 0, '2024-07-10 13:09:47', '2024-07-10 13:09:47', 'kennediykf27@gmail.com', NULL),
(218, 3, 0, '188.130.128.106', 'grossekalluswko9l2+5uq2fa28ht3c@gmail.com', 'aspernatur aut quia aut id dicta dicta vitae eum. quam temporibus dolorum dolores velit doloribus voluptatum et. aspernatur molestiae rerum maiores eum doloremque culpa nobis ex et possimus quisquam.', 0, '2024-07-12 21:06:52', '2024-07-12 21:06:52', 'grossekalluswko9l2+5uq2fa28ht3c@gmail.com', NULL),
(219, 3, 0, '105.23.243.90', 'gOkVhoyX', 'QKEBDxgNwLPHnk', 0, '2024-07-14 03:35:28', '2024-07-14 03:35:28', 'noelinfx9831@gmail.com', NULL),
(220, 3, 0, '105.23.243.90', 'gOkVhoyX', 'QKEBDxgNwLPHnk', 0, '2024-07-14 03:35:30', '2024-07-14 03:35:30', 'noelinfx9831@gmail.com', NULL),
(221, 5, 0, '105.23.243.90', 'MTDwOnaurSBletiP', 'RAkQsCDu', 0, '2024-07-14 03:35:34', '2024-07-14 03:35:34', 'noelinfx9831@gmail.com', NULL),
(222, 5, 0, '105.23.243.90', 'MTDwOnaurSBletiP', 'RAkQsCDu', 0, '2024-07-14 03:35:36', '2024-07-14 03:35:36', 'noelinfx9831@gmail.com', NULL),
(223, 5, 0, '177.38.185.53', 'XNDLhAnESGT', 'ZoBJLiYvXwqPgTfI', 0, '2024-07-16 11:05:36', '2024-07-16 11:05:36', 'helena62milesmfh@outlook.com', NULL),
(224, 5, 0, '177.38.185.53', 'XNDLhAnESGT', 'ZoBJLiYvXwqPgTfI', 0, '2024-07-16 11:05:38', '2024-07-16 11:05:38', 'helena62milesmfh@outlook.com', NULL),
(225, 3, 0, '177.38.185.53', 'JMsXmUwvoONW', 'tOrznCRjPMxDsKH', 0, '2024-07-16 11:05:42', '2024-07-16 11:05:42', 'helena62milesmfh@outlook.com', NULL),
(226, 3, 0, '177.38.185.53', 'JMsXmUwvoONW', 'tOrznCRjPMxDsKH', 0, '2024-07-16 11:05:44', '2024-07-16 11:05:44', 'helena62milesmfh@outlook.com', NULL),
(227, 3, 0, '113.165.167.87', 'XEQAZOTWdHkBeJ', 'oiBeEHWmv', 0, '2024-07-19 08:42:04', '2024-07-19 08:42:04', 'minashegie7455@yahoo.com', NULL),
(228, 5, 0, '203.189.135.25', 'XNDAixfncqd', 'KpDHxfLezyAJM', 0, '2024-07-21 23:18:12', '2024-07-21 23:18:12', 'roy99minor5sp@outlook.com', NULL),
(229, 5, 0, '203.189.135.25', 'XNDAixfncqd', 'KpDHxfLezyAJM', 0, '2024-07-21 23:18:14', '2024-07-21 23:18:14', 'roy99minor5sp@outlook.com', NULL),
(230, 3, 0, '203.189.135.25', 'aTikhzUsylbcHo', 'YHJvxyaLDMZdPUr', 0, '2024-07-21 23:18:17', '2024-07-21 23:18:17', 'roy99minor5sp@outlook.com', NULL),
(231, 3, 0, '203.189.135.25', 'aTikhzUsylbcHo', 'YHJvxyaLDMZdPUr', 0, '2024-07-21 23:18:20', '2024-07-21 23:18:20', 'roy99minor5sp@outlook.com', NULL),
(232, 5, 0, '61.19.31.222', 'KSoiwECWJyc', 'AmRHKqruNbv', 0, '2024-07-27 03:20:20', '2024-07-27 03:20:20', 'forpemmw3060@gmail.com', NULL),
(233, 5, 0, '61.19.31.222', 'KSoiwECWJyc', 'AmRHKqruNbv', 0, '2024-07-27 03:20:21', '2024-07-27 03:20:21', 'forpemmw3060@gmail.com', NULL),
(234, 3, 0, '61.19.31.222', 'HKJmGcYuagwFCzsb', 'MiBYxuFcKak', 0, '2024-07-27 03:20:23', '2024-07-27 03:20:23', 'forpemmw3060@gmail.com', NULL),
(235, 3, 0, '61.19.31.222', 'HKJmGcYuagwFCzsb', 'MiBYxuFcKak', 0, '2024-07-27 03:20:25', '2024-07-27 03:20:25', 'forpemmw3060@gmail.com', NULL),
(236, 5, 0, '115.186.128.154', 'HOfnwEhgIVsQjKeX', 'xvLslTAMqkWt', 0, '2024-07-29 13:19:16', '2024-07-29 13:19:16', 'hyksleihl2001@gmail.com', NULL),
(237, 5, 0, '115.186.128.154', 'HOfnwEhgIVsQjKeX', 'xvLslTAMqkWt', 0, '2024-07-29 13:19:18', '2024-07-29 13:19:18', 'hyksleihl2001@gmail.com', NULL),
(238, 3, 0, '115.186.128.154', 'HptuRjZJybL', 'tlpMPNjY', 0, '2024-07-29 13:19:27', '2024-07-29 13:19:27', 'hyksleihl2001@gmail.com', NULL),
(239, 3, 0, '115.186.128.154', 'HptuRjZJybL', 'tlpMPNjY', 0, '2024-07-29 13:19:29', '2024-07-29 13:19:29', 'hyksleihl2001@gmail.com', NULL),
(240, 5, 0, '200.52.130.193', 'CtFxreGq', 'khzvyIWEZQdsuOTj', 0, '2024-08-01 10:50:08', '2024-08-01 10:50:08', 'kirkhowelld51@gmail.com', NULL),
(241, 5, 0, '200.52.130.193', 'CtFxreGq', 'khzvyIWEZQdsuOTj', 0, '2024-08-01 10:50:10', '2024-08-01 10:50:10', 'kirkhowelld51@gmail.com', NULL),
(242, 3, 0, '200.52.130.193', 'XhbKAYWHOZfrsguU', 'ODIQFlmWEkJGhRpg', 0, '2024-08-01 10:50:13', '2024-08-01 10:50:13', 'kirkhowelld51@gmail.com', NULL),
(243, 3, 0, '200.52.130.193', 'XhbKAYWHOZfrsguU', 'ODIQFlmWEkJGhRpg', 0, '2024-08-01 10:50:15', '2024-08-01 10:50:15', 'kirkhowelld51@gmail.com', NULL),
(244, 3, 0, '45.81.137.119', 'osbornehartlinejvp4u1+5uq2f94fqqft@gmail.com', 'eum magni labore aperiam fugit voluptatibus quae vitae mollitia aut reiciendis architecto velit sit pariatur architecto. beatae doloremque illum dolore iure adipisci et expedita eos possimus dolores.', 0, '2024-08-02 14:19:11', '2024-08-02 14:19:11', 'osbornehartlinejvp4u1+5uq2f94fqqft@gmail.com', NULL),
(245, 5, 0, '104.28.243.32', 'HMsUGxEwIzuPhe', 'theogaBHkNRS', 0, '2024-08-04 04:58:50', '2024-08-04 04:58:50', 'carolyn2z_nitzd5@outlook.com', NULL),
(246, 5, 0, '104.28.243.32', 'HMsUGxEwIzuPhe', 'theogaBHkNRS', 0, '2024-08-04 04:58:52', '2024-08-04 04:58:52', 'carolyn2z_nitzd5@outlook.com', NULL),
(247, 3, 0, '104.28.243.32', 'JGtHKyYBvzDg', 'WjcKmDiuNZrL', 0, '2024-08-04 04:58:56', '2024-08-04 04:58:56', 'carolyn2z_nitzd5@outlook.com', NULL),
(248, 3, 0, '104.28.243.32', 'JGtHKyYBvzDg', 'WjcKmDiuNZrL', 0, '2024-08-04 04:58:58', '2024-08-04 04:58:58', 'carolyn2z_nitzd5@outlook.com', NULL),
(249, 3, 9, '::1', NULL, 'test', 0, '2024-08-30 10:32:41', '2024-08-30 10:32:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_etc_posts`
--

CREATE TABLE `blog_etc_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT 'New blog post',
  `subtitle` varchar(255) DEFAULT '',
  `meta_desc` text DEFAULT NULL,
  `post_body` mediumtext DEFAULT NULL,
  `use_view_file` varchar(255) DEFAULT NULL COMMENT 'If not null, this should refer to a blade file in /views/',
  `posted_at` datetime DEFAULT NULL COMMENT 'Public posted at time, if this is in future then it wont appear yet',
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `image_large` varchar(255) DEFAULT NULL,
  `image_medium` varchar(255) DEFAULT NULL,
  `image_thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_etc_posts`
--

INSERT INTO `blog_etc_posts` (`id`, `slug`, `user_id`, `title`, `subtitle`, `meta_desc`, `post_body`, `use_view_file`, `posted_at`, `is_published`, `image_large`, `image_medium`, `image_thumbnail`, `created_at`, `updated_at`, `short_description`, `seo_title`) VALUES
(3, 'why-should-you-use-react-js', 1, 'Why should you use ReactJS?', 'when to use ReactJS?', NULL, '<h3><strong>About ReactJS</strong></h3>\r\n\r\n<p>ReactJS is an open-source front-end JavaScript library maintained by Meta. It is used for building user interfaces for single-page applications based on UI components. It requires only a minimal understanding of HTML and JavaScript.</p>\r\n\r\n<p>Two main features JSX and Virtual DOMs, make React more than just a library.&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>JSX is syntax extension to JavaScript. It combines HTML syntax with JavaScript making it easier for developers to interact with the browser.</li>\r\n	<li>Virtual DOM is a virtual copy of the DOM tree. Instead of manipulating the browser&#39;s DOM directly, React creates a virtual DOM in memory, where it does all the necessary manipulating, before making the changes in the browser DOM. React finds out what changes have been made, and changes&nbsp;only&nbsp;what needs to be changed.</li>\r\n</ul>\r\n\r\n<h3><strong>Build Rich User Interfaces</strong></h3>\r\n\r\n<p>A front-end application must have an attractive, responsive UI and a seamless UX with swift navigable views. An application filled with high-quality UI has more chances of getting noticed by the users. React allows building such high-quality, rich user interfaces through its declarative components, which brings us to our next point. This framework ensures the final product is well-design with super high quality to attract users to its key functionalities without fail.&nbsp;</p>\r\n\r\n<h3><strong>Reusability of components</strong></h3>\r\n\r\n<p>ReactJS allows fragmenting large applications into several individual components. In React, a reusable component is a piece of UI that can be used in various parts of an application to build more than one UI instance. Re-usable components ensure that the user experience is consistent across all products. One more advantage is any component fault discovered in one product would be automatically repaired for all products. Because updating a component will automatically update all areas where the component is used, thereby enabling ease of maintenance.</p>\r\n\r\n<h3><strong>Fast Rendering</strong></h3>\r\n\r\n<p>Internally, React uses several clever techniques to minimize the number of costly DOM operations required to update the UI. For many applications, using React will lead to a fast user interface without doing much work to specifically optimize for performance. Updating DOM is a key factor when it comes to web performance. React is using something called&nbsp;virtual DOM to solve this problem. Any view changes are first reflected in the virtual DOM, then an efficient diff algorithm compares the previous and current states of the virtual DOM and calculates the best way to apply these changes. Finally, those updates are applied to the DOM to ensure minimum read/write time. It&rsquo;s a much more efficient method that leads to faster rendering and leads to React&rsquo;s high performance.</p>\r\n\r\n<h3><strong>Strong Community Support</strong></h3>\r\n\r\n<p>One of the main reasons to adopt React JS in your project is that React has very strong community support. It has very large community support on the StackOverflow forum to ask code-level questions or if you&rsquo;re stuck with a specific error.</p>\r\n\r\n<h3><strong>Better code stability</strong></h3>\r\n\r\n<p>React JS ensures a more stable code by using downward data flow only so Any changes that occur in the child structure don&rsquo;t get affected the parent structure. In changing an object, developers only need to modify its state and make amendments for specific components. This kind of data binding structure ensures code stability and smooth application performance. Additionally, it provides a fault-tolerant &lsquo;UI&rsquo; because of the component creation aspect, which allows developers to efficiently conduct unit testing to avoid system crashes. Code reusability enables reducing time performing redundant tests to improve code quality giving stability to Code structure.</p>\r\n\r\n<h3><strong>SEO-friendly</strong></h3>\r\n\r\n<p>One of the relevant challenges that developers face is to ensure that an app is SEO-friendly. This is especially necessary for businesses in this day and age when there are several hundreds of apps out there. Normally the lower the page load time and the faster the rendering speed, the higher an app will rank on Google. React has fast rendering compared to other frameworks, it significantly reduces the page load time, which greatly helps higher rank on Google Search Engine Result Page.</p>', NULL, '2022-08-23 04:16:07', 1, 'why-should-you-use-reactjs-dlhpc-1000x700.png', 'why-should-you-use-reactjs-rvint-600x400.png', 'why-should-you-use-reactjs-053o5-150x150.png', '2022-08-23 04:18:25', '2022-08-26 11:32:02', NULL, NULL),
(5, 'when-should-you-choose-react-native-for-your-app-development', 1, 'What should you choose for mobile application development? React Native vs. Native', 'When should You choose Native for your app development?', NULL, '<p>With the rising popularity of React Native mobile applications, developers could be wondering What they should choose? Is it React Native or traditional Native? This article explains how React Native and Native apps perform in different areas of concern and helps you choose the best technology for mobile application development.</p>\r\n\r\n<h3><strong>What is React Native?</strong></h3>\r\n\r\n<p>React Native is a technology based on Metas&rsquo; React, a Javascript library for building responsive user interfaces. React Native combines native development with React for building cross-platform mobile applications using a single codebase. It renders to the UI using the platforms&rsquo; rendering APIs and allows for creating truly native mobile apps. React Native has gained vast popularity today because of its many advantages over Native apps. Top tech companies like Meta, Instagram, UberEATS, Pinterest, and Shopify are reaping the benefits of using React Native for their applications.</p>\r\n\r\n<h3><strong>What is Native?</strong></h3>\r\n\r\n<p>A native application is built to run in a specific mobile device and its operating system (OS) using native technologies. For example, Java and Kotlin for Android, Objective-C, and Swift for iOS. It means native apps can use hardware and software specific to that device. Since such apps work with the platforms&rsquo; OS, they can provide a good user experience and overall high performance.</p>\r\n\r\n<h3><strong>React Native Vs. Native Apps: What is the best choice?</strong></h3>\r\n\r\n<p>Consider how React Native and Native apps perform in the following key aspects of mobile application development.</p>\r\n\r\n<h3><strong>Time-To-Market</strong></h3>\r\n\r\n<p>How long a mobile app would take to deploy to the market depends on how fast it can develop. If a company needs to develop a native app for iOS and Android, they must write, deploy, and maintain separate platform-specific codebases, which will require two development teams&rsquo; effort. If there is any update to the application, it requires changes in two codebases and the building and running of the complete project to reflect changes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>But in React Native, developers only must write a single codebase for Android and iOS platforms. Thus, it is easy to introduce changes to the application. Also, React native provides hot reloading &amp; live reloading features which enable developers to see the effects of the code changes in real-time without building the whole app. Therefore, React Native allows faster and easier development and faster time to market than native apps.</p>\r\n\r\n<h3><strong>Development and Maintenance Cost</strong></h3>\r\n\r\n<p>Another reason to choose React Native over Native is the lower application costs. Developing and maintaining two separate codebases for each platform needs more developers with significant expertise in their costs. Therefore, costs for hiring and training, paying developers, and maintaining two code bases will be higher if you opt for native app development. Especially for startup companies, these costs can become unbearable.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In contrast, React Native apps require only a smaller number of developers. Since there is only one codebase to maintain, maintenance costs are lower.</p>\r\n\r\n<h3><strong>Performance and interaction with other Native apps</strong></h3>\r\n\r\n<p>When it comes to performance, most Native apps outperform React Native apps. This is because Native apps can access the devices&rsquo; hardware and software. Thus, they are well-suited for resource-intensive mobile apps. Also, Native apps can interact and exchange data with other native apps relatively faster.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>React native apps, on the other hand, are not suitable for performance-heavy applications because there can be performance issues with their native and Javascript threads. Also, for communicating with Native apps, React Native apps require third-party libraries. Thus, regarding the app performance and native support, most Native applications still are ahead of React Native applications.</p>\r\n\r\n<h3><strong>User Experience</strong></h3>\r\n\r\n<p>Considering the user experiences, both types have equal capabilities to provide an intuitive user experience. Although react native apps use Javascript to render the UI, it provides a native user experience to the user. Also, React Native can combine with native languages, which allows you to build features specific to each device.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Native apps also provide a great user experience comparable to React Native because they are designed specifically for each platform and can harness device-specific features.</p>\r\n\r\n<h3><strong>Security</strong></h3>\r\n\r\n<p>Compared with Native apps, React Native apps rely heavily on third-party libraries and APIs to provide cross-platform support and additional features. Therefore, if any issue is related to such libraries, troubleshooting, and fixing them will take significant time and effort. Resultantly, there can be security loopholes in the entire system which could go unnoticed for a long time and later can cause severe security issues. Thus, if you solely consider the time to identify and fix security issues, Native apps still win over React Native apps.</p>\r\n\r\n<h3><strong>API and Modules Support</strong></h3>\r\n\r\n<p>One of the strong points of Native languages is their ability to directly use all types of Native APIs. However, React Native apps have limited capabilities to use complex APIs, requiring building a connection layer with Native technologies. Thus, if your application needs a lot of APIs, Native development will be a better choice. In addition, although React Native supports a wide range of modules, they do not address every feature requirement. Thus, custom modules will be required to accommodate more specific features.</p>\r\n\r\n<h3><strong>Community Support</strong></h3>\r\n\r\n<p>In contrast to Native languages, React Native has more powerful and wider community support than Native apps. Since React and JavaScript are very popular among developers worldwide, there is constant community support. Thus, if you face any issue with your code, it is highly likely that the same issue has been encountered by someone and provided the solution for fixing it. Also, novice developers find it easy to learn to code with a plethora of tutorials, articles, documentation, and books available on the internet.</p>\r\n\r\n<h3><strong>Advantages and Disadvantages of&nbsp; React Native and Native</strong></h3>\r\n\r\n<p>In summary, React Native and Native have the following advantages and disadvantages.</p>\r\n\r\n<h3><strong>React Native</strong></h3>\r\n\r\n<p><strong>Advantages</strong></p>\r\n\r\n<ul>\r\n	<li>Hot reloading and live reloading make development easier</li>\r\n	<li>Single codebase for multiple platforms</li>\r\n	<li>Lower development and maintenance costs</li>\r\n	<li>Native-like user experience</li>\r\n	<li>Strong community support</li>\r\n</ul>\r\n\r\n<p><strong>Disadvantages</strong></p>\r\n\r\n<ul>\r\n	<li>No direct access to device-specific hardware and software</li>\r\n	<li>Less secure</li>\r\n</ul>\r\n\r\n<h3><strong>Native</strong></h3>\r\n\r\n<p><strong>Advantages</strong></p>\r\n\r\n<ul>\r\n	<li>Great for resource-intensive applications</li>\r\n	<li>Secure than React Native apps</li>\r\n	<li>Great user experience</li>\r\n</ul>\r\n\r\n<p><strong>Disadvantages</strong></p>\r\n\r\n<ul>\r\n	<li>Must maintain two codebases for two platforms</li>\r\n	<li>High developer and maintenance costs</li>\r\n	<li>Longer time-to-market</li>\r\n</ul>\r\n\r\n<h3><strong>When should You choose React Native for your app development?</strong></h3>\r\n\r\n<p><strong>Choose React Native if :</strong></p>\r\n\r\n<ul>\r\n	<li>If you want to build apps faster with limited resources</li>\r\n	<li>If you have a limited budget and want to reduce development and maintenance costs</li>\r\n	<li>If you want to develop apps for multiple platforms</li>\r\n	<li>If you consider building an MVP that needs to deploy quickly to the market for user testing</li>\r\n	<li>If you want to provide a native-like user experience to the customer</li>\r\n	<li>If you do not want to provide device-specific features to the applications</li>\r\n</ul>\r\n\r\n<h3><strong>When should You choose Native for your app development?</strong></h3>\r\n\r\n<p><strong>Choose Native if:</strong></p>\r\n\r\n<ul>\r\n	<li>If you want to build resource-intensive applications</li>\r\n	<li>If you are targeting only a specific platform</li>\r\n	<li>If you want to provide the app with device-specific features</li>\r\n	<li>If&nbsp; you are concerned more about app security issues that can arise from third-party libraries</li>\r\n</ul>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>You can choose Native type development or React Native when you want to build a mobile application. The main factors you need to consider when deciding which to choose to include the development and maintenance costs, time-to-market, performance, user experience, security, community support, and module support. When considering these factors, React choosing Native over Native has many advantages, mainly because of the ability to develop cross-platform apps, faster time to market, and less development and maintenance costs. Native apps, on the other hand, are suitable for resource-intensive apps and when the time and costs required to build the app are not a significant concern.</p>', NULL, '2022-08-25 11:44:56', 1, 'what-should-you-choose-for-mobile-application-development-react-native-vs-native-ejjmo-1000x700.png', 'what-should-you-choose-for-mobile-application-development-react-native-vs-native-prlpi-600x400.png', 'what-should-you-choose-for-mobile-application-development-react-native-vs-native-f4zsh-150x150.png', '2022-08-25 11:48:47', '2022-08-26 11:55:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_etc_post_categories`
--

CREATE TABLE `blog_etc_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_etc_post_id` int(10) UNSIGNED NOT NULL,
  `blog_etc_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_etc_post_categories`
--

INSERT INTO `blog_etc_post_categories` (`id`, `blog_etc_post_id`, `blog_etc_category_id`) VALUES
(2, 3, 1),
(4, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_etc_uploaded_photos`
--

CREATE TABLE `blog_etc_uploaded_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `uploaded_images` text DEFAULT NULL,
  `image_title` varchar(255) DEFAULT NULL,
  `source` varchar(255) NOT NULL DEFAULT 'unknown',
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_etc_uploaded_photos`
--

INSERT INTO `blog_etc_uploaded_photos` (`id`, `uploaded_images`, `image_title`, `source`, `uploader_id`, `created_at`, `updated_at`) VALUES
(1, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 07:02:56', '2022-08-23 07:02:56'),
(2, '{\"image_large\":{\"filename\":\"asd-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"asd-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"asd-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 07:04:54', '2022-08-23 07:04:54'),
(3, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 08:56:31', '2022-08-23 08:56:31'),
(4, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.jpg\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.jpg\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.jpg\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:38:35', '2022-08-23 11:38:35'),
(5, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.jpg\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.jpg\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.jpg\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:39:48', '2022-08-23 11:39:48'),
(6, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.jpg\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.jpg\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.jpg\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:40:23', '2022-08-23 11:40:23'),
(7, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:41:27', '2022-08-23 11:41:27'),
(8, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-licsf-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-hqyrd-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-1uds7-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:42:04', '2022-08-23 11:42:04'),
(9, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-o0ctd-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-nlc8q-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-2sdse-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:43:06', '2022-08-23 11:43:06'),
(10, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-t7uyb-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-tcnb3-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-a4alu-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:44:43', '2022-08-23 11:44:43'),
(11, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-twp6z-1000x700.jpg\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-jftop-600x400.jpg\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-m8k8l-150x150.jpg\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:45:02', '2022-08-23 11:45:02'),
(12, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-d8pny-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-badvi-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-xtuyr-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:45:22', '2022-08-23 11:45:22'),
(13, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-qwe9u-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-asuys-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-shszt-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:47:28', '2022-08-23 11:47:28'),
(14, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-gf2hg-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-o45jo-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-afp87-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-23 11:48:09', '2022-08-23 11:48:09'),
(15, '{\"image_large\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-25 11:50:40', '2022-08-25 11:50:40'),
(16, '{\"image_large\":{\"filename\":\"why-you-should-use-reactjs-1000x700.jpeg\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-you-should-use-reactjs-600x400.jpeg\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-you-should-use-reactjs-150x150.jpeg\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-25 14:09:40', '2022-08-25 14:09:40'),
(17, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:03:11', '2022-08-26 11:03:11'),
(18, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-zzz0c-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-s5vuh-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-wwflm-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:07:46', '2022-08-26 11:07:46'),
(19, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-qolnx-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-vj2uc-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-5dy4x-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:11:52', '2022-08-26 11:11:52'),
(20, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-xfxrv-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-x0co3-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-8y5ws-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:22:29', '2022-08-26 11:22:29'),
(21, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-mof21-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-qxlrk-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-s5mwe-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:25:37', '2022-08-26 11:25:37'),
(22, '{\"image_large\":{\"filename\":\"why-should-you-use-reactjs-dlhpc-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"why-should-you-use-reactjs-rvint-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"why-should-you-use-reactjs-053o5-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:32:02', '2022-08-26 11:32:02'),
(23, '{\"image_large\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-bc3jx-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-13gu0-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-ejp1y-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:50:54', '2022-08-26 11:50:54'),
(24, '{\"image_large\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-bzgjt-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-afhfi-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-ulfaf-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:55:05', '2022-08-26 11:55:05'),
(25, '{\"image_large\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-ejjmo-1000x700.png\",\"w\":1000,\"h\":700},\"image_medium\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-prlpi-600x400.png\",\"w\":600,\"h\":400},\"image_thumbnail\":{\"filename\":\"what-should-you-choose-for-mobile-application-development-react-native-vs-native-f4zsh-150x150.png\",\"w\":150,\"h\":150}}', NULL, 'BlogFeaturedImage', NULL, '2022-08-26 11:55:31', '2022-08-26 11:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `expected_salary` varchar(191) DEFAULT NULL,
  `experience` varchar(191) DEFAULT NULL,
  `portfolio` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `requirement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `firstname`, `lastname`, `email`, `phone`, `expected_salary`, `experience`, `portfolio`, `cv`, `location`, `requirement_id`, `created_at`, `updated_at`) VALUES
(17005, 'Mohammad Anas', 'Munshi', 'anasmunshi2002@gmail.com', '7229096366', '6000', 'Fresher', NULL, '20240730195344725231.pdf', 'Surat', 47, '2024-07-30 14:23:44', '2024-07-30 14:23:44'),
(17012, 'Zeel', 'Shethna', 'zeelichhaporia@gmail.con', '9327421477', '12000', 'Fresher', NULL, '20240730202441587090.pdf', 'Adajan Surat', 49, '2024-07-30 14:54:41', '2024-07-30 14:54:41'),
(17014, 'Avinash', 'Sahoo', 'abhinashs321@gmail.com', '9328064711', '10000', 'Fresher', NULL, '20240730203139980041.pdf', 'Surat', 49, '2024-07-30 15:01:39', '2024-07-30 15:01:39'),
(17019, 'SHREENIWASH', 'Yadav', 'yadavshreeniwash22@gmail.com', '8154857962', '20000', '6 Month and above', NULL, '20240730203854991758.pdf', 'Surat', 47, '2024-07-30 15:08:54', '2024-07-30 15:08:54'),
(17043, 'Ajeet', 'Kumar', 'ajeet62068bca@gmail.com', '6205919377', '30000', 'Fresher', NULL, '20240731103115515206.pdf', 'surat', 47, '2024-07-31 05:01:15', '2024-07-31 05:01:15'),
(17108, 'Arpit', 'Jain', 'arpitj724@gmail.com', '8955228619', '50000', 'Fresher', NULL, '20240801012829435893.pdf', 'Vadodara', 47, '2024-07-31 19:58:29', '2024-07-31 19:58:29'),
(17128, 'Disha', 'Limbasiya', 'limbasiyadisha22@gmail.com', '9099855206', NULL, '6 Month and above', NULL, '20240801114314278017.pdf', 'Ahmedabad', 45, '2024-08-01 06:13:14', '2024-08-01 06:13:14'),
(17166, 'SAMEER', 'SHAIK', 'sameervali3009@gmail.com', '6281030753', NULL, 'Fresher', NULL, '20240802115126278981.pdf', 'ONGOLE', 1, '2024-08-02 06:21:26', '2024-08-02 06:21:26'),
(17167, 'GUNTUR RAHUL', 'ANAND TEJA', 'rahulteja599@gmail.com', '9121929329', '4.5', '1 Year and above', NULL, '20240802141724795370.pdf', 'Guntur', 3, '2024-08-02 08:47:24', '2024-08-02 08:47:24'),
(17168, 'Swati', 'Pyatigoudar', 'swatibp8@gmail.com', '8088460114', '15000', 'Fresher', NULL, '20240802162619515308.pdf', 'Belagavi', 47, '2024-08-02 10:56:19', '2024-08-02 10:56:19'),
(17169, 'Piyush', 'Gulati', 'piyushgulati456@gmail.com', '9056477586', '25000', 'Fresher', NULL, '20240802191450485931.pdf', 'JALANDHAR', 47, '2024-08-02 13:44:50', '2024-08-02 13:44:50'),
(17170, 'Shaik', 'Darbar', 'shaikdarbar2002@gmail.com', '8688960632', '10000', 'Fresher', NULL, '20240802194150691655.pdf', 'Proddatur', 45, '2024-08-02 14:11:50', '2024-08-02 14:11:50'),
(17171, 'Nunavath', 'Rajendar', 'nunavathrajendar43@gmail.com', '7989057131', '4', 'Fresher', NULL, '20240802195034686669.pdf', 'Hyderabad', 47, '2024-08-02 14:20:34', '2024-08-02 14:20:34'),
(17172, 'Santhosh Kumar', 'Savvana', 'santhoshsavvana@gmail.com', '8106809612', '35000', '1 Year and above', NULL, '20240802201600140632.pdf', 'SRIKAKULAM', 3, '2024-08-02 14:46:00', '2024-08-02 14:46:00'),
(17173, 'Kartik', 'Jain', 'kartikjain095@gmail.com', '7528900314', '25000', '6 Month and above', NULL, '20240802215025409067.pdf', 'Meerut', 47, '2024-08-02 16:20:25', '2024-08-02 16:20:25'),
(17174, 'Ashfaq', 'Ahamad', 'ashfaqahamad02@gmail.com', '9133858602', NULL, 'Fresher', NULL, '20240802220506523254.pdf', 'Vijayawada', 47, '2024-08-02 16:35:06', '2024-08-02 16:35:06'),
(17175, 'Vrushali', 'Wangekar', 'vrushali.wangekar1996@gmail.com', '8779862529', NULL, NULL, NULL, '20240802225119029480.pdf', NULL, 44, '2024-08-02 17:21:19', '2024-08-02 17:21:19'),
(17176, 'Swapnaneel', 'Roy', 'roy.royswapnaneel@gmail.com', '9804020800', '25000', 'Fresher', NULL, '20240803003107687301.pdf', 'Kolkata', 47, '2024-08-02 19:01:07', '2024-08-02 19:01:07'),
(17177, 'Aishvitha', 'Merugu', 'maishvitha@gmail.com', '8978046133', '3.0', 'Fresher', NULL, '20240803010049079329.pdf', 'hyderabad', 47, '2024-08-02 19:30:49', '2024-08-02 19:30:49'),
(17178, 'Samba', 'Ashok', 'sambaashok36@gmail.com', '7569220810', '10000', 'Fresher', NULL, '20240803081222077654.pdf', 'Hyderabad', 45, '2024-08-03 02:42:22', '2024-08-03 02:42:22'),
(17179, 'Saba', 'Begum', 'saba03096@gmail.com', '8861792638', NULL, NULL, NULL, '20240803102023361940.pdf', NULL, 44, '2024-08-03 04:50:23', '2024-08-03 04:50:23'),
(17180, 'Vedika', 'Soni', 'vedikasoni911@gmail.com', '8827508680', '10000', 'Fresher', NULL, '20240803113134982345.pdf', 'Ujjain', 47, '2024-08-03 06:01:34', '2024-08-03 06:01:34'),
(17181, 'MAHAM', 'BARIKA', 'mahambarika2708@gmail.com', '08887805999', '80000', 'Fresher', NULL, '20240803125041468874.pdf', 'Kanpur', 45, '2024-08-03 07:20:41', '2024-08-03 07:20:41'),
(17182, 'Raghavendra', 'Gochikonda', 'gochikondaraghavendra@gmail.com', '8179108508', NULL, NULL, NULL, '20240803141859952367.pdf', 'Warangal', 47, '2024-08-03 08:48:59', '2024-08-03 08:48:59'),
(17183, 'Vipin', 'Thakur', 'vipin.thakur409@gmail.com', '9039558676', '235000', '10 Year and above', NULL, '20240803184421001099.pdf', 'Mumbai', 3, '2024-08-03 13:14:21', '2024-08-03 13:14:21'),
(17184, 'Ayush', 'shukla', 'ayush1235shukla@gmail.com', '9591234811', '60000', 'Fresher', NULL, '20240803211423910637.pdf', 'Bangalore', 47, '2024-08-03 15:44:23', '2024-08-03 15:44:23'),
(17185, 'Aadrsh', 'Dubey', '74407518ad@gmail.com', '8839321996', '20000', 'Fresher', NULL, '20240803215524837988.pdf', 'indore', 45, '2024-08-03 16:25:24', '2024-08-03 16:25:24'),
(17186, 'Abhisek', 'Mahato', 'abhi.mahato2000@gmail.com', '8709239755', NULL, 'Fresher', NULL, '20240803215722052280.pdf', NULL, 47, '2024-08-03 16:27:22', '2024-08-03 16:27:22'),
(17187, 'Arunima', 'Ghosh', 'ag9210@srmist.edu.in', '09371280311', NULL, 'Fresher', NULL, '20240803224106234126.pdf', 'pune', 45, '2024-08-03 17:11:06', '2024-08-03 17:11:06'),
(17188, 'Divya', 'Choudhury', 'choudhurydivy01@gmail.com', '6266391571', NULL, NULL, NULL, '20240803230618800084.pdf', 'Bhopal', 47, '2024-08-03 17:36:18', '2024-08-03 17:36:18'),
(17189, 'Kunal', 'Mali', 'kunalmali4343@gmail.com', '8530551161', '15000', 'Fresher', NULL, '20240803233900966122.pdf', 'Shirpur', 45, '2024-08-03 18:09:00', '2024-08-03 18:09:00'),
(17190, 'Vansh', 'Sharma', 'vanshsharma5503@gmail.com', '9877991062', NULL, 'Fresher', NULL, '20240804014029628020.pdf', 'chennai', 45, '2024-08-03 20:10:29', '2024-08-03 20:10:29'),
(17191, 'Saikrishna', 'vavileti', 'saikrishnavavileti@gmail.com', '9989519579', '2.5', 'Fresher', NULL, '20240804101655959628.pdf', 'Benguluru', 44, '2024-08-04 04:46:55', '2024-08-04 04:46:55'),
(17192, 'Saikrishna', 'vavileti', 'saikrishnavavileti@gmail.com', '9989519579', '2.8', 'Fresher', NULL, '20240804101749464580.pdf', 'Benguluru', 44, '2024-08-04 04:47:49', '2024-08-04 04:47:49'),
(17193, 'Pooja', 'Deokar', 'poojadeokar001@gmail.com', '9975656970', '30000', 'Fresher', NULL, '20240804134612301120.pdf', 'Pune', 47, '2024-08-04 08:16:12', '2024-08-04 08:16:12'),
(17194, 'Deenesh', 'Sabat', 'deeneshsabat2002@gmail.com', '09861413867', '15000', 'Fresher', NULL, '20240804174228392241.pdf', 'Ganjam', 45, '2024-08-04 12:12:28', '2024-08-04 12:12:28'),
(17195, 'Harini', 'Sridhar', 'anusharinisridhar@gmail.com', '9345417051', '30000', 'Fresher', NULL, '20240804175946942143.pdf', 'BANGALORE', 45, '2024-08-04 12:29:46', '2024-08-04 12:29:46'),
(17196, 'Dimpal', 'Kumari', 'dimpidimpal0@gmail.com', '8000778980', NULL, 'Fresher', NULL, '20240804185355496057.pdf', 'Jhunjhunu', 45, '2024-08-04 13:23:55', '2024-08-04 13:23:55'),
(17197, 'Ritik', 'Trivedi', 'ritikktrivedi9999@gmail.com', '7049950018', '400000', 'Fresher', NULL, '20240804190024829970.pdf', 'Rewa Madhya Pradesh', 47, '2024-08-04 13:30:24', '2024-08-04 13:30:24'),
(17198, 'Sanskar', 'kaosudhan', 'indiansanskar2000@gmail.com', '6393357857', '8', 'Fresher', NULL, '20240804190744310393.pdf', 'Lucknow', 47, '2024-08-04 13:37:44', '2024-08-04 13:37:44'),
(17199, 'Nunavath', 'Rajendar', 'nunavathrajendar43@gmail.com', '7989057131', '35000', 'Fresher', NULL, '20240804200428495055.pdf', 'Hyderabad', 47, '2024-08-04 14:34:28', '2024-08-04 14:34:28'),
(17200, 'Kaustuv', 'Sarkar Chakravarty', 'kaustuvsarkarchakravarty@gmail.com', '8584928573', '30000', '6 Month and above', NULL, '20240804211340152308.pdf', 'Bhubaneswar, Khordha, Odisha, IND', 45, '2024-08-04 15:43:40', '2024-08-04 15:43:40'),
(17201, 'Deva kumar', 'Puppala', 'puppaladevakumar0@gmail.com', '9100466255', '22000', 'Fresher', NULL, '20240804213017227924.pdf', 'bengulure', 47, '2024-08-04 16:00:17', '2024-08-04 16:00:17'),
(17202, 'Jubal', 'Jacob', 'jacobjubal18@gmail.com', '9082645138', '20000', '6 Month and above', NULL, '20240804213637812314.pdf', 'Mumbai', 3, '2024-08-04 16:06:37', '2024-08-04 16:06:37'),
(17203, 'Ekta', 'Danganavar', 'ektamd02@gmail.com', '9686164351', '1', '6 Month and above', NULL, '20240804221241679307.pdf', 'Hubli', 45, '2024-08-04 16:42:41', '2024-08-04 16:42:41'),
(17204, 'Faiz', 'Khan', 'fk7.faiz@gmail.com', '8128643492', '24000', 'Fresher', NULL, '20240804231813165295.pdf', 'Vapi', 45, '2024-08-04 17:48:13', '2024-08-04 17:48:13'),
(17205, 'Muhammed Gous', 'Shaikh', 'gousm55@gmail.com', '8928065925', '20000', 'Fresher', NULL, '20240804233952901861.pdf', 'Mumbai', 47, '2024-08-04 18:09:52', '2024-08-04 18:09:52'),
(17206, 'Adviti', 'Gangwar', 'advitigangwar123@gmail.com', '8791296794', '13000', 'Fresher', NULL, '20240805014211023629.pdf', 'ghziabad, ncr', 45, '2024-08-04 20:12:11', '2024-08-04 20:12:11'),
(17207, 'Saicharan', 'Varikuppala', 'saicharan.chintu9111@gmail.com', '9182668826', NULL, NULL, NULL, '20240805094923077126.pdf', NULL, 47, '2024-08-05 04:19:23', '2024-08-05 04:19:23'),
(17208, 'Manikanta', 'Devagusthapu', 'dmk.mani321@gmail.com', '09866755883', NULL, '6 Month and above', NULL, '20240805094948648841.pdf', NULL, 47, '2024-08-05 04:19:48', '2024-08-05 04:19:48'),
(17209, 'VENNELA', 'GOPICHAND', 'vennelagopichandpandu1000@gmail.com', '8008546572', NULL, 'Fresher', NULL, '20240805095006829911.pdf', 'Hyderabad', 47, '2024-08-05 04:20:06', '2024-08-05 04:20:06'),
(17210, 'Aditya Kumar', 'Pattnaik', 'adityakumarpattnaik143@gmail.com', '9692139941', '10000', 'Fresher', NULL, '20240805095037605370.pdf', 'Bangalore', 47, '2024-08-05 04:20:37', '2024-08-05 04:20:37'),
(17211, 'Saurabh', 'Sharma', 'saurhbsharma7983@gmail.com', '8868079692', '30000', 'Fresher', NULL, '20240805095451600981.pdf', 'Greater Noida', 47, '2024-08-05 04:24:51', '2024-08-05 04:24:51'),
(17212, 'Sai Narasimha', 'Somesula', 'sainarasimhasomesula@gmail.com', '8919179551', NULL, 'Fresher', NULL, '20240805095550088850.pdf', 'Andhra Pradesh', 47, '2024-08-05 04:25:50', '2024-08-05 04:25:50'),
(17213, 'Pushpak', 'Rai', 'pushpakrai7@gmail.com', '9284802539', '10000', '1 Year and above', NULL, '20240805095554636110.pdf', 'Jalgoan, Maharashtra', 47, '2024-08-05 04:25:54', '2024-08-05 04:25:54'),
(17214, 'Parvez', 'Khan', 'parvezkhsn5347@gmail.com', '8077106375', NULL, '1 Year and above', NULL, '20240805095656317369.pdf', NULL, 47, '2024-08-05 04:26:56', '2024-08-05 04:26:56'),
(17215, 'Vishal', 'Birla', 'vishalbirla26487@gmail.com', '7999204662', '10000', 'Fresher', NULL, '20240805095656671398.pdf', 'Khargone', 47, '2024-08-05 04:26:56', '2024-08-05 04:26:56'),
(17216, 'Udit', 'Sharma', 'udits0999@gmail.com', '999964', NULL, NULL, NULL, '20240805095757930621.pdf', 'DELHI', 47, '2024-08-05 04:27:57', '2024-08-05 04:27:57'),
(17217, 'Udit', 'Sharma', 'udits0999@gmail.com', '9999648451', NULL, 'Fresher', NULL, '20240805095819846569.pdf', 'DELHI', 47, '2024-08-05 04:28:19', '2024-08-05 04:28:19'),
(17218, 'Bottu', 'Hema Priya', 'bottuhemapriya@gmail.com', '7997835834', NULL, 'Fresher', NULL, '20240805095958118192.jpg', 'N.Gollapelam', 47, '2024-08-05 04:29:58', '2024-08-05 04:29:58'),
(17219, 'Ankush Raj', 'Singh', 'ankushrajsingh2004@gmail.com', '9179399543', '15000', 'Fresher', NULL, '20240805100122493499.pdf', 'Bhopal', 47, '2024-08-05 04:31:22', '2024-08-05 04:31:22'),
(17220, 'Tushyen', 'Gotmare', 'tanmaygotmare@gmail.com', '7249352208', NULL, '6 Month and above', NULL, '20240805100137772277.pdf', 'Nagpur', 47, '2024-08-05 04:31:37', '2024-08-05 04:31:37'),
(17221, 'Deepana', 'Balmoor', 'deepanabalmoor7@gmail.com', '9542111825', NULL, 'Fresher', NULL, '20240805100917410855.pdf', 'Hyderabad', 47, '2024-08-05 04:39:17', '2024-08-05 04:39:17'),
(17222, 'Vaishnavi', 'Yerge', 'yergevaishnavi@gmail.com', '9322906439', NULL, 'Fresher', NULL, '20240805101032224832.pdf', 'Pune', 47, '2024-08-05 04:40:32', '2024-08-05 04:40:32'),
(17223, 'NIRANJAN', 'KUMAR', 'niranjanmourya000@gmail.com', '8284086903', '18000', 'Fresher', NULL, '20240805101148974637.pdf', 'Sikar', 47, '2024-08-05 04:41:48', '2024-08-05 04:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `author_name`, `author_email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'Test', 'test34@gmail.com', 'rdgfdfrg', '2024-09-16 06:07:13', '2024-09-16 06:07:13'),
(2, 2, 'Test', 'test1@gmail.com', 'testing', '2024-09-16 06:10:02', '2024-09-16 06:10:02'),
(3, 2, 'Test', 'test1@gmail.com', 'testing', '2024-09-16 06:10:14', '2024-09-16 06:10:14'),
(4, 2, 'Test', 'test4@gmail.com', 'rfdgdg', '2024-09-16 06:10:26', '2024-09-16 06:10:26'),
(5, 2, 'Test1', 'test341@gmail.com', 'wsee', '2024-09-16 06:11:07', '2024-09-16 06:11:07'),
(6, 2, 'Test', 'test34@gmail.com', 'dfcgd', '2024-09-16 06:13:01', '2024-09-16 06:13:01'),
(7, 2, 'Test', 'test3114@gmail.com', 'dfcgd', '2024-09-16 06:13:09', '2024-09-16 06:13:09'),
(8, 2, 'Test2', 'test@gmail.com', 'rftyujki\'\' fghyjkul;', '2024-09-16 06:18:20', '2024-09-16 06:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `iam` varchar(191) NOT NULL,
  `help` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `firstname`, `lastname`, `email`, `phone`, `iam`, `help`, `message`, `created_at`, `updated_at`) VALUES
(94, 'Tisha', 'Anghan', 'anghantisha@gmail.com', '9328394334', 'Other', 'Other', 'Any vacancy for react native developer?', '2024-06-13 15:27:44', '2024-06-13 15:27:44'),
(95, 'kathineni chandra sekhar', 'Reddy', 'info@sathvicsoftsolution.com', '9113977164', 'Corporation', 'Consultation', 'Greetings from Sathvic Soft Solution! \r\nDo you require excellent candidates to fill technical positions? Look no further! SATHVIC SOFT SOLUTION is here to help.\r\n \r\nGreetings from SATHVIC SOFT SOLUTION ! As a leading technical recruitment & staffing company, we specialize in providing top talent for a wide range of IT industries, including Java, .Net, Testing, UI development, full stack, Cloud, SAP, Telecom, Data Analysis, Microsoft, Adobe, Salesforce, Mule, Pega, IBM, Sitecore, Oracle, ETL, Infrastructure, and many other technology fields.\r\n \r\nWith a proven track record of providing E2E recruitment solutions for volume, lateral, leadership, drive, and MGT level hiring, our team has the expertise to support your hiring needs across India.\r\n \r\nplease reach us ( KATHINENI CHANDRA SEKHAR REDDY ) for Vendor Empanelment:\r\nMob: +919113977164 ; mail id- info@sathvicsoftsolution.com\r\n \r\nLet us help you find the perfect fit for your company. Contact us now to schedule a call and learn more about how we can support your staffing needs! Looking forward to hearing from you and having a fruitful business relationship.\r\n \r\nThanks & Regards\r\nKathineni Chandra Sekhar Reddy\r\nCeo Of sathvic Soft Solution\r\nWhatsapp 9113977164\r\nwww.sathvicsoftsolution.com', '2024-06-27 01:15:15', '2024-06-27 01:15:15'),
(97, 'urvil', 'golakiya', 'golakiyaurvil1@gmail.com', '9023544584', 'Other', 'Other', 'i intenship', '2024-07-09 10:15:45', '2024-07-09 10:15:45'),
(98, 'Parmar', 'Twinkle', 'parmar.twinkle2003@gmail.com', '9104996368', 'Other', 'Building a new product', 'I am a Fresher', '2024-07-16 14:34:22', '2024-07-16 14:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_19_101424_create_contacts_table', 1),
(5, '2021_07_20_115556_create_careers_table', 1),
(6, '2021_08_06_071459_create_admincareers_table', 1),
(7, '2021_08_11_070009_create_requirements_table', 2),
(8, '2018_05_28_224023_create_blog_etc_posts_table', 3),
(9, '2018_09_16_224023_add_author_and_url_blog_etc_posts_table', 3),
(10, '2018_09_26_085711_add_short_desc_textrea_to_blog_etc', 3),
(11, '2018_09_27_122627_create_blog_etc_uploaded_photos_table', 3),
(12, '2021_08_27_050339_add_position_to_requirements', 4),
(13, '2021_08_27_051054_add_position_to_requirements_table', 5),
(14, '2021_08_27_051349_add_position_to_requirements_table', 6),
(15, '2021_08_27_052017_add_position_to_requirements', 7),
(16, '2021_09_02_042350_add_field_to_careers', 8),
(17, '2022_08_26_090833_add_status_in_requirements', 9),
(18, '2022_08_29_104103_add_fields_to_users', 10),
(20, '2023_01_16_174907_add_location_to_careers', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `technology` varchar(191) NOT NULL,
  `qualification` varchar(191) NOT NULL,
  `experience` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `time` varchar(191) NOT NULL,
  `salary` varchar(191) NOT NULL,
  `requirement` text DEFAULT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0.inactive, 1.active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `technology`, `qualification`, `experience`, `location`, `time`, `salary`, `requirement`, `position`, `status`, `created_at`, `updated_at`) VALUES
(4, 'PHP Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', '2 to 3 years', 'Surat', 'Full-time', '6,00,000 LPA', '[\"Must have good knowledge of OOPS Concepts\",\"Collaborate with a team of developers and UX designers to create a PHP based web application\",\"Design and develop server-side logic using Laravel\\/Codeigniter\",\"Define and maintain database\",\"Create reusable, effective, and scalable PHP code\",\"Should have strong knowledge of Core PHP, MySQL, Jquery and JavaScript, Bootstrap\",\"Demonstrable knowledge of web technologies including HTML, HTML5 CSS, Javascript, AJAX etc\",\"Good knowledge of relational databases, developing web services and version control tools\",\"Understanding of MVC design patterns, Strong knowledge of PHP web frameworks ( Laravel, CI)\",\"Should be agile and quick problem solver\",\"Should have excellent communication skill\",\"Experience with handling Services, RESTful, APIs.\"]', 1, 0, '2021-08-06 01:56:23', '2024-04-16 10:19:34'),
(5, 'ReactJS/ NodeJS/ AngularJS Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECH(CSE/IT)', '1 to 3 years', 'Surat', 'Full-time', 'Upto 80k', '[\"Understanding of client side development, coding in HTML5, CSS3, JavaScript ES6, and jQuery.\",\"Sound knowledge and experience using a client side MVC framework such as NodeJS, React JS, Redux, and Express\",\"Knowledge in responsive design, cross browser compatibility and website performance\",\"Experience in object oriented design skills\",\"Aggressive problem diagnosis and creative problem solving skills\",\"Good understanding of how browsers and virtual DOM work.\",\"Experience with handling Services, RESTful, APIs.\",\"Knowledge of frontend CSS frameworks like Bootstrap\"]', 3, 0, '2021-08-06 02:00:19', '2024-07-16 06:17:48'),
(6, 'Business Development Executive', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT), BBA/MBA (IT/Marketing)', 'Freshers', 'Surat', 'Full-time', '2,40,000 LPA', '[\"Knowledge and understanding of platforms like  Upwork, Freelancer, GURU\",\"Fetching projects from job portals\",\"Drafting quality and customised bids for generating business\",\"Experience in Project Analysis and Handling\",\"Expertise in Setting Milestone and Feature Listing\",\"Generating business through online freelancing portals\",\"Should have Strong communication and IT fluency\",\"Should be technically sound\",\"Ability to handle pressure and meet deadlines\"]', 2, 0, '2021-08-06 02:02:09', '2024-02-14 07:05:48'),
(37, 'Ruby on Rails Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', 'More than 2 Years', 'Surat, Vadodara', 'Full-time', 'Upto 80k', '[\"2 to 5+ years of hands-on experience on Ruby on Rails with test driver development using rspec, capybara is mandatory. Ruby on Rails experience is MANDATORY.\",\"Experience on Bootstrap.\",\"Knowledge of front end frameworks such as Angular\\/React js\\/React Native.\",\"Passion for coding with open source technologies and building new frameworks.\",\"Team player with the ability and desire to become an integral part of a fast-paced team.\"]', 2, 0, '2022-06-29 00:28:51', '2023-01-30 06:01:56'),
(38, 'Android Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', 'Freshers to 1 year', 'Vadodara', 'Full-time', '3,00,000 LPA', '[\"Understanding of using Java or Kotlin\",\"Designing and Implementing Applications\",\"Independently write quality code that is simple, reliable, and scalable\",\"Exposure to latest mobile software architectures\",\"Work on bug fixing and improving application performance\",\"Ability to use the Android Studio, including the Android SDK, with ease\"]', 1, 0, '2022-10-02 23:42:14', '2023-10-26 13:14:02'),
(39, 'UI DESIGNER', 'Any Graduate', 'Fresher/Internship', 'Surat', 'Full Time', '1,80,000 LPA', '[\"Applications: Adobe Creative Suite (highly proficient), Sketch, Principle, MS Office (.PPT), Git, Github\",\"Front-end web technologies (HTML5, CSS, etc.) a plus\",\"Proficient in experience design methodologies, ability to create wireframes, visual design\",\"Strong knowledge of latest design tools such as Adobe Creative Cloud, Adobe XD, Sketch, Axure, Figma, etc\"]', 1, 0, '2022-12-01 13:28:32', '2024-06-17 10:17:50'),
(40, 'Node.js Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', 'Fresher/Internship', 'Surat, Vadodara', 'Full Time', 'Upto 50k', '[\"Design, build and implement  applications based on specification\",\"Working with different stackholders to ensure successful software release\",\"Good understanding of object-oriented programming, algorithms, and data structures\",\"Experience with setting up CI\\/CD pipelines\",\"DynamoDB, PostgreSQL, MongoDB\"]', 1, 0, '2022-12-27 04:56:50', '2023-10-10 18:23:44'),
(41, 'Digital Marketing Executive ', 'Any Graduate', 'Freshers to 3 years', 'Surat', 'Full Time', 'Upto 50k', '[\"Proven experience as Digital Marketing Executive or similar role\",\"Excellent understanding of digital marketing concepts and best practices\",\"Experience with B2C social media, Google Adwords and email campaigns and SEO\\/SEM\",\"Perfect knowledge of web analytics tools (Google Analytics)\",\"Skills and experience in creative content writing\",\"Analytical mindset and critical thinking\",\"Excellent communication and interpersonal skills\"]', 3, 0, '2023-01-16 23:03:32', '2023-03-30 03:27:17'),
(42, 'Shopify Developer', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', 'Freshers to 1 year', 'Surat', 'Full Time', '2,40,000 - 3,60,000 LPA', '[\"Strong knowledge of liquid programming language.\\u2028\",\"Generate custom \\u2013 tailored Shopify theme and altering pre \\u2013 existing template.\\u2028\",\"Act as Shopify expert, specializing in all facets of the ecommerce platform.\",\"Clear concept of HTML5,CSS3,javascript\\/jQuery.\\u2028\",\"Knowledge in other ecommerce platform like Magento, woo commerce, Big Commerce will be preferred.\\u2028\",\"Experience in Shopify theme development and customization.\\u2028\",\"working with different Shopify JS APIs will be added advantage(storefront, AJAX Cart, Sections etc).\\u2028\",\"Proficiency in Webhooks, HTML5, CSS3 and JavaScript\\/ECMA Script 5\\/6.\\u2028\",\"Good Knowledge of SCSS.\\u2028\",\"Hands on experience in installing & customizing new Shopify theme and experience in Shopify custom app development would be added advantage.\"]', 2, 0, '2023-01-16 23:05:00', '2024-02-12 07:09:14'),
(43, 'HR Executive', 'Bachelor’s degree in human resources or related field', '1 to 3 years', 'Surat', 'Full Time', '2,40,000 - 3,60,000 LPA', '[\"Arrangement of interviews and manage the overall interview\",\"Manage on boarding new hire, enrol on system, Payroll, PF, ESIC etc.\",\"Letter issue to employees whenever required like Experience letter, Reliving letter\",\"Induction process, Document collect of new joined for verification.\",\"Well-developed leadership and management skills at executive management level.\",\"Strong analytical, communication skills, change management, advanced interpersonal skills and networking skills\",\"A people oriented person who has a passion for people development and transformation and can engage at all levels in the organization\",\"Design & post job Ads to attract suitable candidates\",\"Handle end to end recruitment\",\"*This job is work from office only*\"]', 1, 0, '2023-01-20 00:10:07', '2023-10-18 10:40:55'),
(44, 'Quality Assurance', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', '1 to 2 years', 'Surat', 'Full Time', '2,40,000 - 3,00,000 LPA', '[\"Knowledge of software testing principles, concepts, and terminologies.\",\"Understanding of different types of testing such as functional testing, non-functional testing, regression testing, and usability testing.\",\"Conduct thorough testing of mobile applications across various platforms (iOS, Android) to ensure functionality, usability, and performance meet quality standards.\",\"Familiarity with defect tracking tools like JIRA, Bugzilla, or similar.\",\"Skill in identifying, documenting, and tracking defects throughout their lifecycle, ability to prioritize defects based on severity and impact on the software.\",\"Effective verbal and written communication skills.\",\"Problem-solving: Analytical thinking and troubleshooting abilities.\",\"Willingness to learn and adapt to new tools and methodologies.\",\"Ability to work effectively in a team environment.\",\"Contribute to the development and refinement of QA processes, methodologies, and best practices to enhance the overall quality assurance function.\"]', 1, 0, '2024-04-24 12:50:10', '2024-06-18 08:50:54'),
(45, 'iOS Developer Intern', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ ME(CSE/IT)/ M.SC/ M.TECH(CSE/IT)', 'Fresher', 'Surat', 'Full Time', 'Paid Internship', '[\"Assist in App Development: Work alongside senior developers to build, test, and maintain iOS applications.\",\"Code and Debug: Write clean, efficient, and maintainable code, and troubleshoot issues as they arise.\",\"Collaborate: Participate in team meetings, contribute ideas, and collaborate with cross-functional teams to ensure project success.\",\"Learn and Adapt: Stay up-to-date with the latest iOS trends, tools, and technologies, and apply them to ongoing projects.\",\"Document: Maintain accurate documentation for development processes and project updates.\",\"Technical Skills: Basic understanding of Swift and Objective-C, and familiarity with Xcode and iOS development frameworks.\",\"Communication: Good verbal and written communication skills, with the ability to work effectively in a team environment.\"]', 2, 0, '2024-07-30 05:30:17', '2024-08-01 04:05:30'),
(46, 'React Native Interns', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ ME(CSE/IT)/ M.SC/ M.TECh(CSE/IT)', 'Fresher', 'Surat', 'Full Time', 'Paid Internship', '[\"Assist in App Development: Collaborate with the development team to build and enhance React Native applications for both iOS and Android platforms.\",\"Code and Debug: Write clean, efficient, and reusable code, and identify and resolve bugs and performance issues.\",\"Collaborate: Engage in team meetings, share ideas, and contribute to brainstorming sessions and project discussions.\",\"Learn and Implement: Stay updated with the latest React Native trends and best practices, and apply new knowledge to ongoing projects.\",\"Document: Help maintain project documentation and update code repositories as needed.\",\"Technical Skills: Basic understanding of React Native, JavaScript, and related libraries. Familiarity with React.js and mobile development concepts is a plus.\",\"Problem-Solving Skills: Ability to analyze issues and find effective solutions with attention to detail.\",\"Communication: Good verbal and written communication skills and the ability to work well in a team setting.\"]', 2, 0, '2024-07-30 05:34:51', '2024-07-30 12:06:30'),
(47, 'React.JS Developer Interns', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ ME(CSE/IT)/ M.SC/ M.TECH(CSE/IT)', 'Fresher', 'Surat', 'Full Time', 'Paid Internship', '[\"Assist in Web Development: Collaborate with the development team to build and maintain dynamic and responsive web applications using React.js.\",\"Code and Debug: Write clean, efficient, and reusable code, troubleshoot issues, and ensure high performance of applications.\",\"Collaborate: Participate in team meetings, contribute ideas, and work closely with designers and other developers to deliver high-quality solutions.\",\"Learn and Apply: Stay updated with the latest trends and best practices in React.js and web development, and apply new knowledge to ongoing projects.\",\"Document: Maintain accurate documentation for code and project updates.\",\"Technical Skills: Basic understanding of React.js, JavaScript, HTML, and CSS. Familiarity with front-end development tools and libraries is a plus.\",\"Passion for Web Development: Enthusiastic about web technologies and eager to learn and grow in the field.\",\"Communication: Good verbal and written communication skills, with the ability to work well in a team environment.\"]', 2, 0, '2024-07-30 05:37:37', '2024-07-30 12:06:28'),
(48, 'PHP Laravel Developer Intern', 'BE (CSE/IT)/ B.TECH(CSE/IT)/ MCA/ ME(CSE/IT)/ M.SC/ M.TECH(CSE/IT)', 'Fresher', 'Surat', 'Full Time', 'Paid Internship', '[\"Assist in Backend Development: Collaborate with the development team to build, maintain, and optimize web applications using PHP and the Laravel framework.\",\"Code and Debug: Write clean, efficient, and well-documented code. Troubleshoot and resolve issues as they arise.\",\"Collaborate: Engage with team members to understand project requirements, contribute to design discussions, and ensure timely delivery of tasks.\",\"Learn and Apply: Stay current with the latest developments in PHP and Laravel, and apply new knowledge to enhance your work and contribute to project success.\",\"Document: Maintain clear and accurate documentation for code, processes, and project updates.\",\"echnical Skills: Basic understanding of PHP, Laravel, and web development concepts. Familiarity with databases (e.g., MySQL) is a plus.\",\"Passion for Development: Strong interest in backend development and eagerness to learn and grow in the field.\",\"Problem-Solving Skills: Ability to analyze issues, find effective solutions, and pay attention to detail.\",\"Communication: Good verbal and written communication skills, with the ability to work effectively in a team setting.\"]', 2, 0, '2024-07-30 05:40:16', '2024-07-30 12:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL COMMENT '	1.admin, 2.hr, 3.project manager	',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'info@unikwork.com', NULL, '$2y$10$5pFmtBKPwZ9XS.FW3s0xx.qQsaIEti7HAzW7FJwS81un08f0IGEv2', 1, NULL, NULL, NULL),
(4, 'Jaimin', 'Patel', 'jaimin@unikwork.com', NULL, '$2y$10$GRvkEC47VG0hKYZXOUJu6.MIVxjg6VwifyTIHH3pHSpnfY9BE21ie', 2, NULL, '2023-02-02 12:46:10', '2023-02-02 12:46:10'),
(8, 'Shraddha', 'Shah', 'sharddha.hrwork@gmail.com', NULL, '$2y$10$ZvQi3pbC1NanfWap2qqX7OEIAQEbKUXQG6ZQsQSg2QO2384q/1vD.', 2, NULL, '2023-11-01 17:59:41', '2023-11-01 17:59:41'),
(9, 'Jigar', 'Modi', 'jigar.webappdev@gmail.com', NULL, '$2y$10$CcwfUJaXdT.aeSGNh5wJuO5ptpVKPoF4/PiHG5XD9jVgBzn407v9i', 1, NULL, '2024-08-02 16:57:34', '2024-08-02 16:57:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_etc_categories`
--
ALTER TABLE `blog_etc_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_etc_categories_slug_unique` (`slug`),
  ADD KEY `blog_etc_categories_created_by_index` (`created_by`);

--
-- Indexes for table `blog_etc_comments`
--
ALTER TABLE `blog_etc_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_etc_comments_blog_etc_post_id_index` (`blog_etc_post_id`),
  ADD KEY `blog_etc_comments_user_id_index` (`user_id`);

--
-- Indexes for table `blog_etc_posts`
--
ALTER TABLE `blog_etc_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_etc_posts_slug_unique` (`slug`),
  ADD KEY `blog_etc_posts_user_id_index` (`user_id`),
  ADD KEY `blog_etc_posts_posted_at_index` (`posted_at`);

--
-- Indexes for table `blog_etc_post_categories`
--
ALTER TABLE `blog_etc_post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_etc_post_categories_blog_etc_post_id_index` (`blog_etc_post_id`),
  ADD KEY `blog_etc_post_categories_blog_etc_category_id_index` (`blog_etc_category_id`);

--
-- Indexes for table `blog_etc_uploaded_photos`
--
ALTER TABLE `blog_etc_uploaded_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_etc_uploaded_photos_uploader_id_index` (`uploader_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_etc_categories`
--
ALTER TABLE `blog_etc_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_etc_comments`
--
ALTER TABLE `blog_etc_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `blog_etc_posts`
--
ALTER TABLE `blog_etc_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_etc_post_categories`
--
ALTER TABLE `blog_etc_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_etc_uploaded_photos`
--
ALTER TABLE `blog_etc_uploaded_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17229;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_etc_comments`
--
ALTER TABLE `blog_etc_comments`
  ADD CONSTRAINT `blog_etc_comments_blog_etc_post_id_foreign` FOREIGN KEY (`blog_etc_post_id`) REFERENCES `blog_etc_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_etc_post_categories`
--
ALTER TABLE `blog_etc_post_categories`
  ADD CONSTRAINT `blog_etc_post_categories_blog_etc_category_id_foreign` FOREIGN KEY (`blog_etc_category_id`) REFERENCES `blog_etc_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_etc_post_categories_blog_etc_post_id_foreign` FOREIGN KEY (`blog_etc_post_id`) REFERENCES `blog_etc_posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
