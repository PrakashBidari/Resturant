<?php
if (!function_exists('seoData')) {
    function seoData($page)
    {
        $metaData["default"] = [
            "meta_title" => "Bethel Gurkha Coffee Garden",
            "meta_keywords" => "",
            "meta_description" => "Bethel Gurkha Coffee Garden.",
        ];
        // $metaData["home"] = [
        //     "meta_title" => "Super Dynamic Training & Educational Pvt Ltd | Best Barista Training Institute in  Kathmandu",
        //     "meta_keywords" => "",
        //     "meta_description" => "Join Super Dynamic for expert barista training in Kathmandu. Master coffee making with top-notch education and hands-on experience",
        // ];
        // $metaData["about-us"] = [
        //     "meta_title" => "About Us | Super Dynamic Training & Educational Pvt Ltd",
        //     "meta_keywords" => "",
        //     "meta_description" => "Learn about Super Dynamic Training & Educational Pvt Ltd, our mission, origins, and commitment to excellence in barista training and coffee education."
        // ];
        // $metaData['contact-us'] = [
        //     "meta_title" => "Contact Super Dyanamic | Get in touch with us today ",
        //     "meta_keywords" => "",
        //     "meta_description" => "Rich out to Super Dynamic to Get in touch with us in Kathmandu for expert barista training and coffee education. ",
        // ];
        // $metaData['gallery'] = [
        //     "meta_title" => "Super Dynamic Gallery  - Explore our  Events and celebration",
        //     "meta_keywords" => "",
        //     "meta_description" => "Explore our Gallery to see Super Dynamic Training & Educational Pvt Ltd in action. View photos of our barista training sessions, events, and community activities.",
        // ];
        // $metaData["training"] = [
        //     "meta_title" => "Training Programs | Super Dynamic Training & Educational Pvt Ltd",
        //     "meta_keywords" => "",
        //     "meta_description" => "Discover our barista training programs at Super Dynamic Training & Educational Pvt Ltd. Gain hands-on experience and master coffee-making skills with expert instructors."
        // ];
        // $metaData["blog"] = [
        //     "meta_title" => "Blog | Super Dynamic Training & Educational Pvt Ltd",
        //     "meta_keywords" => "",
        //     "meta_description" => "Stay updated with the latest news, tips, and insights from Super Dynamic Training & Educational Pvt Ltd. Explore our blog for articles on barista training and coffee culture."
        // ];


        return isset($metaData[$page]) ? $metaData[$page] : $metaData['default'];
    }
}
