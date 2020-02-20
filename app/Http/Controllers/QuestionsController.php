<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Storefront;
use App\User;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\QuestionCollection;
use App\Notifications\NewUserQuestion;
use Illuminate\Support\Str;

class QuestionsController extends Controller
{
    public function all(Request $request, $id)
    {
        $storefront = Storefront::find($id);
        $per_page = $request->query('per_page');
        $questions = $storefront->questions()->paginate($per_page);
        
        return QuestionResource::collection($questions);
    }

    public function create(Request $request, $id)
    {
        $question = new Question;
        $question->content = $request->content;
        $question->contact_email = $request->contact_email;
        $question->contact_name = $request->contact_name;
        $question->product_id = $request->product_id;
        $question->product_name = $request->product_name;
        $question->product_sku = $request->product_sku;
        $question->posted_date = date("Y-m-d");
        $question->storefront_id = $id;
        $question->save();
        
        $user = User::find(2);
        $user->notify(new NewUserQuestion($question));

        return response()->json($question);
    }

    public function updateStatus(Request $request, Question $question) 
    {
        $question->status = $request->status;
        $question->save();
        return response()->json(['message' => 'success!']);
    }

    public function productQuestions(Request $request, $storefront, $product)
    {
        $storefront = Storefront::find($storefront);
        // $questions = $storefront->questions()->where('product_id', $product)->where('status', 'active')->get();
        $questions = $storefront->questions()->where('product_id', $product)->paginate(10);
        return QuestionResource::collection($questions);
    }

    public function testEmail(Request $request)
    {
        $user = User::find(2);
        $question = Question::find(19);
        $user->notify(new NewUserQuestion($question));

        return response()->json($user);
    }

    public function search(Request $request, $storefront, $product)
    {
         
        $query = $request->query('search');
        $storefront = Storefront::find($storefront);
        $questions = $storefront->questions()->where([
            ['product_id', '=', $product],
            ['content', 'like', "%$query%"]
        ])->paginate(10);
        // $questions = $storefront->questions()->where('product_id', $product)->where('status', 'active')->get();
        // $questions = $storefront->questions()->where('content', 'like', "%$query%")->limit(10);
        return QuestionResource::collection($questions);
    
    }

}
