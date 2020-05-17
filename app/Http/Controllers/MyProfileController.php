<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyProfileController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a","*",$fullname);
        echo $sensor_name;

        return view("myprofile/create");
    }

    
    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }

    public function gallery( )
	{
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
        $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
        $spider = "https://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/03/spider-man-far-from-home-tom-holland.jpg";

        return view("gallery", compact("ant","bird","cat","god","spider") );

		
    }

    public function ant()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";


        return view("ant", compact("ant") );        
    }

    public function bird()
    {
        $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
        return view("bird", compact("bird") );
                
              
    }

    public function cat()
    {
       
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
        return view("cat", compact("cat") );   
    }

    public function god()
    {
        $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
        return view("god", compact("god") );              
    }

    public function spider()
    {
        $spider = "https://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/03/spider-man-far-from-home-tom-holland.jpg";
        return view("spider", compact("spider") );             
    }

    public function coronavirus(){
        $reports = [
            (object) ["country"=>"Thailand" , "date"=>"2020-04-19" , "total"=>"2765", "active"=>"790"  , "death"=>"47", "recovered"=>"1928"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-18" , "total"=>"2733", "active"=>"899"  , "death"=>"47", "recovered"=>"1787"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-17" , "total"=>"2700", "active"=>"964"  , "death"=>"47", "recovered"=>"1689"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-16" , "total"=>"2672", "active"=>"1033" , "death"=>"46", "recovered"=>"1593"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-15" , "total"=>"2643", "active"=>"1103" , "death"=>"43", "recovered"=>"1497"],
        ];
        return view("myprofile/coronavirus", compact("reports") );
    }


    



}




