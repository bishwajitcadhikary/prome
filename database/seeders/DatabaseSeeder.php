<?php

namespace Database\Seeders;

use App\Models\Carousel;
use App\Models\OurAchievement;
use App\Models\OurService;
use App\Models\OurWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key'           => 'website.title',
                'value'         => 'Prome Agro Foods Limited'
            ],
            [
                'key'           => 'website.phone',
                'value'         => '+৮৮ ০১৩ ১৩৭৯ ৪৪৪৪'
            ],
            [
                'key'           => 'website.social.facebook',
                'value'         => 'https://facebook.com'
            ],
            [
                'key'           => 'website.social.twitter',
                'value'         => 'https://twitter.com'
            ],
            [
                'key'           => 'website.social.youtube',
                'value'         => 'https://youtube.com'
            ],
            [
                'key'           => 'website.social.linkedin',
                'value'         => 'https://linkedin.com'
            ],
            [
                'key'           => 'website.social.behance',
                'value'         => 'https://behance.net'
            ],
            [
                'key'           => 'website.announcement',
                'value'         => '<h4>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা <span> পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন।</span></h4>'
            ],
            [
                'key'           => 'website.address',
                'value'         => '487, গোবিন্দপুর, ময়নারটেক, উত্তরখান, ঢাকা -1230 ফোন: +88 02 58953286, 8932856, 58950719, 58954683'
            ],
            [
                'key'           => 'website.maps_embed',
                'value'         => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7308.675082894598!2d90.1297974767152!3d23.663884115256845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37558e0bbc9d42b9%3A0x16d5c2686f72d130!2sGobindapur!5e0!3m2!1sen!2sbd!4v1646912134028!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="fast"></iframe>'
            ],
            [
                'key'           => 'website.about',
                'value'         => '<p>আমরা সততা এবং সবার উপর আস্থা রেখে গাড়ি চালানোর চেষ্টা করি। আমরা সততা এবং সবার উপর আস্থা রেখে গাড়ি চালানোর চেষ্টা করি। আমরা বিভিন্ন অনুগত মানুষের একটি কোম্পানি হতে সংগ্রাম. আমাদের স্থানীয় এবং বিশ্ব সম্প্রদায়ের পরিবেশন এবং সমর্থন. মুনাফা এবং বৃদ্ধির মাধ্যমে সম্পদ তৈরি করা। আমাদের পরিবেশ সংরক্ষণের অনুশীলন এবং অগ্রগতি। </p>'
            ],
            [
                'key'           => 'website.fax',
                'value'         => '+88 02 8953947'
            ],
            [
                'key'           => 'website.email',
                'value'         => 'info@prome.com.bd'
            ],
            [
                'key'           => 'website.footer_text',
                'value'         => '© 2018. All Rights Reserved By Prome Agro Foods Limited.'
            ],
        ];

        foreach ($settings as $setting) {
            setting()->set($setting['key'], $setting['value']);
            setting()->save();
        }

        $carousels = [
            'slide1.jpg',
            'slide2.jpg',
            'slide3.jpg',
            'slide4.jpg'
        ];

        foreach ($carousels as $carousel) {
            Carousel::create([
                'image' => $carousel
            ]);
        }

        $our_services = [
            [
                'is_accordion'      => true,
                'title'             => 'সফ্টওয়্যার ও ইআরপি সলিউশন',
                'description'       => '<p>মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে।মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে। </p>',
            ],
            [
                'is_accordion'      => true,
                'title'             => 'ট্রেনিং এবং সার্ভিস সাপোর্ট',
                'description'       => '<p>মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে।মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে। </p>',
            ],
            [
                'is_accordion'      => true,
                'title'             => 'ই-কমার্স সলিউশন',
                'description'       => '<p>মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে।মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে। </p>',
            ],
            [
                'is_accordion'      => true,
                'title'             => 'ডিজিটাল মার্কেটিং',
                'description'       => '<p>মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে।মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে। </p>',
            ],
            [
                'is_accordion'      => true,
                'title'             => 'আইওটি সেবা',
                'description'       => '<p>মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে।মোবাইল অ্যাপ্লিকেশন বা মোবাইল অ্যাপ হলো এক ধরনের কম্পিউটার প্রোগ্রাম বা সফটওয়্যার আপ্লিকেশন। অ্যাপ একটি মোবাইল ডিভাইস (ফোন, ট্যাবলেট) ব্যবহার করার জন্য অ্যাপ খুবই প্রয়োজনীয়।গুগল কর্তৃক অ্যান্ড্রয়েড ফোনের জন্য গুগল প্লেস্টোর এবং আইফোনের জন্য অ্যাপ স্টোর এই ব্যবস্থা রেখেছে। </p>',
            ],
            [
                'title'             => 'ল্যাব',
                'description'       => '<p>ই- কমার্স হল অনলাইনে বেচা-কেনার বা লেনদেনের মাধ্যম। ই-কমার্স ইলেকট্রনিক সমাধানের সরবরাহ চেইনের উপর দৃষ্টি আকর্ষণ করে; দ্বিতীয়ত,জরুরী ফলাফল হিসাবে ই-বাণিজ্য  জরুরী ফলাফল হিসাবে ই-বাণিজ্য ।</p>',
                'image'             => 'Lab.jpg',
            ],
            [
                'title'             => 'প্যাকেজিং',
                'description'       => '<p>ই- কমার্স হল অনলাইনে বেচা-কেনার বা লেনদেনের মাধ্যম। ই-কমার্স ইলেকট্রনিক সমাধানের সরবরাহ চেইনের উপর দৃষ্টি আকর্ষণ করে; দ্বিতীয়ত,জরুরী ফলাফল হিসাবে ই-বাণিজ্য  জরুরী ফলাফল হিসাবে ই-বাণিজ্য ।</p>',
                'image'             => 'Chutney-Packaging.jpg',
            ],
            [
                'title'             => 'ল্যাব',
                'description'       => '<p>ই- কমার্স হল অনলাইনে বেচা-কেনার বা লেনদেনের মাধ্যম। ই-কমার্স ইলেকট্রনিক সমাধানের সরবরাহ চেইনের উপর দৃষ্টি আকর্ষণ করে; দ্বিতীয়ত,জরুরী ফলাফল হিসাবে ই-বাণিজ্য  জরুরী ফলাফল হিসাবে ই-বাণিজ্য ।</p>',
                'image'             => 'amm-ras.jpg',
            ],
            [
                'title'             => 'ল্যাব',
                'description'       => '<p>ই- কমার্স হল অনলাইনে বেচা-কেনার বা লেনদেনের মাধ্যম। ই-কমার্স ইলেকট্রনিক সমাধানের সরবরাহ চেইনের উপর দৃষ্টি আকর্ষণ করে; দ্বিতীয়ত,জরুরী ফলাফল হিসাবে ই-বাণিজ্য  জরুরী ফলাফল হিসাবে ই-বাণিজ্য ।</p>',
                'image'             => 'Edible-Gell-Production.jpg',
            ],
            [
                'title'             => 'ল্যাব',
                'description'       => '<p>ই- কমার্স হল অনলাইনে বেচা-কেনার বা লেনদেনের মাধ্যম। ই-কমার্স ইলেকট্রনিক সমাধানের সরবরাহ চেইনের উপর দৃষ্টি আকর্ষণ করে; দ্বিতীয়ত,জরুরী ফলাফল হিসাবে ই-বাণিজ্য  জরুরী ফলাফল হিসাবে ই-বাণিজ্য ।</p>',
                'image'             => 'Pudding-Jelly-Edible-Jell.jpg',
            ],
        ];

        foreach ($our_services as $our_service) {
            OurService::create($our_service);
        }

        $our_achievements = [
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award1.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award2.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award1.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award2.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award1.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award2.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award1.jpg'
            ],
            [
                'title'         => 'প্রমি এগ্রো ফুড্স লিঃ এঁর উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি',
                'description'   => '<p>২০১৩-২০১৪ অর্থ বছরে ঢাকা জেলায় জাতীয় রাজস্ব বোর্ড কর্তৃক প্রমি এগ্রো ফুড্স লিঃ কে উৎপাদন খাতে সর্বোচ্চ করদাতা প্রতিষ্ঠান হিসেবে স্বীকৃতি দেয়। এই স্বীকৃতির প্রেক্ষিতে ১২ জুলাই ২০১৫ ইং তারিখে বঙ্গবন্ধু আন্তর্জাতিক সম্মেলন কেন্দ্রে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয় অর্থ মন্ত্রী কতৃক প্রমি এগ্রো ফুড্স লিঃ এর চেয়ারম্যান ও বাবস্থাপনা পরিচালক মোঃ এনামুল হাসান খান মহোদয় কে সম্মাননা প্রদান করেন। প্রমি এগ্রো ফুড্স লিঃ <span class="seen"> এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে। এর সকল কর্মকর্তা ও কর্মচারীবৃন্দ আত্র প্রতিষ্ঠানের এই সম্মাননা পওয়ায় মাননীয় চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক মহোদয়কে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছে।.....</span></p>',
                'image'         => 'award2.jpg'
            ],
        ];

        foreach ($our_achievements as $our_achievement) {
            OurAchievement::create($our_achievement);
        }

        $our_works = [
            [
                'title'         => 'দেবিদ্বার উপজেলা প্রশাসন',
                'description'   => '<p>দেবিদ্বার উপজেলার মাধ্যমিক শিক্ষা অফিসার, ৫৯ টি মাধ্যমিক স্কুল/মাদ্রাসার প্রধান শিক্ষক/প্রিন্সিপাল/সুপার উপস্থিতিতে সফটওয়্যার প্রশিক্ষন প্রদান করা হয়।</p>',
                'image'         => 'work1.png',
            ],
            [
                'title'         => 'দেবিদ্বার উপজেলা প্রশাসন',
                'description'   => '<p>দেবিদ্বার উপজেলার মাধ্যমিক শিক্ষা অফিসার, ৫৯ টি মাধ্যমিক স্কুল/মাদ্রাসার প্রধান শিক্ষক/প্রিন্সিপাল/সুপার উপস্থিতিতে সফটওয়্যার প্রশিক্ষন প্রদান করা হয়।</p>',
                'image'         => 'work2.png',
            ],
            [
                'title'         => 'দেবিদ্বার উপজেলা প্রশাসন',
                'description'   => '<p>দেবিদ্বার উপজেলার মাধ্যমিক শিক্ষা অফিসার, ৫৯ টি মাধ্যমিক স্কুল/মাদ্রাসার প্রধান শিক্ষক/প্রিন্সিপাল/সুপার উপস্থিতিতে সফটওয়্যার প্রশিক্ষন প্রদান করা হয়।</p>',
                'image'         => 'work3.png',
            ],
            [
                'title'         => 'দেবিদ্বার উপজেলা প্রশাসন',
                'description'   => '<p>দেবিদ্বার উপজেলার মাধ্যমিক শিক্ষা অফিসার, ৫৯ টি মাধ্যমিক স্কুল/মাদ্রাসার প্রধান শিক্ষক/প্রিন্সিপাল/সুপার উপস্থিতিতে সফটওয়্যার প্রশিক্ষন প্রদান করা হয়।</p>',
                'image'         => 'work3.png',
            ],
        ];

        foreach ($our_works as $our_work) {
            OurWork::create($our_work);
        }
    }
}
