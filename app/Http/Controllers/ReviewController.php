<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use Image;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addReview(Request $request)
    {
        $this->validate($request, [
            'company_name' => ['required'],
            'reviewer_name' => ['required'],
            'reviewer_position' => ['required'],
            'review_date' => ['required'],
            'review_text' => ['required'],
        ]);

        if(!empty($request->review_visual_content))
        {

            $newReview = new Review($request->all());

            $newReview->save();

            return back()->with('message', 'Review with video was added successfully!');

        }elseif (is_file($request->file('thumb'))){

            $newReview = new Review($request->all());

            //get file from a request

            $file = $request->file('thumb');

            //set file name
            $filename = uniqid() . ' - ' . $file->getClientOriginalName();
            $newReview->review_visual_content = $filename;

            //move file to correct location

            if(!file_exists('picUploadTestDir/reviewsImgs'))
            {
                mkdir('picUploadTestDir/reviewsImgs', 0777, true);
            }
            $file->move('picUploadTestDir/reviewsImgs/', $filename);


            $file = Image::make('picUploadTestDir/reviewsImgs/'. $filename)->resize(1024, 768)->save('picUploadTestDir/reviewsImgs/' . $filename, 100);

            //save img path to DB

            $newReview->save();

            return back()->with('message', 'Review with photo was added successfully!');

        }else{

            return back()->with('message', 'Please enter data correctly.');
        }
    }

    public function deleteReview(Review $review)
    {
        $visualContent = 'picUploadTestDir/reviewsImgs/' . $review->review_visual_content;

        if(file_exists($visualContent))
        {
            unlink($visualContent);
        }

        $review->delete();

        return back()->with('message', 'Review was deleted successfully!');
    }
}
