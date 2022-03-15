@extends('layouts.frontend')

@section('title', trans('home_page'))

@section('content')
    <div class="container">
        <section id="profile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-12 col-lg-6 text-center">
                        <div class="profile_header">
                            <img src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt="">
                            <h2> {{ setting('website.title') }} </h2>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

                <div class="profile_body">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <table>
                                <tr>
                                    <td>কোম্পানির নাম</td>
                                    <td>{{ setting('website.profile.company_name') }}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>রেজিস্ট্রেশন নম্বর</td>
                                    <td>{{ setting('website.profile.registration_number') }}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>ট্রেড লাইসেন্স (কোন আপডেট নেই) </td>
                                    <td>{{ setting('website.profile.trade_license') }}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>কোম্পানির ট্যাগলাইন</td>
                                    <td>{{ setting('website.profile.tag_line') }}</td>
                                    <td>Prome</td>
                                </tr>

                                <tr>
                                    <td>কোম্পানী লোগো</td>
                                    <td style="z-index: 9;"> <img src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt=""></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>ওয়েব সাইট</td>
                                    <td>{{ setting('website.profile.website') }}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>ব্যাংক অ্যাকাউন্ট নম্বর</td>
                                    <td>{{ setting('website.profile.bank_account') }}</td>
                                    <td>{{ setting('website.profile.bank_account_2') }}</td>
                                </tr>


                                <tr>
                                    <td>মোবাইল ব্যাংকিং নম্বর</td>
                                    <td>{{ setting('website.profile.mobile_banking') }}</td>
                                    <td>{{ setting('website.profile.mobile_banking_2') }}</td>
                                </tr>

                                <tr>
                                    <td>পেমেন্ট মারচেন্ট</td>
                                    <td>13454897 (B-kash)</td>
                                    <td>634848546 (Nagad)</td>
                                </tr>

                                <tr>
                                    <td>মোট কর্মচারী</td>
                                    <td>1590 (পুরুষ)</td>
                                    <td>1000 (মহিলা)</td>
                                </tr>

                                <tr>
                                    <td>কোম্পানির পরিষেবা</td>
                                    <td>********</td>
                                    <td>********</td>
                                </tr>

                                <tr>
                                    <td>কোম্পানি  স্থান</td>
                                    <td>বাংলাদেশ</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
