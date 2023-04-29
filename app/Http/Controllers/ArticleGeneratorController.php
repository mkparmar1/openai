<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
class ArticleGeneratorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->title == null) {
            return;
        }
        
        $title = $request->title;

        // $client = OpenAI::client(env('OPENAI_API_KEY'));
        // dd($client);

        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 500,
            'prompt' => sprintf('Write article about: %s', $title),
        ]);
        $content = trim($result['choices'][0]['text']);
        return response()->json(['content'=>$content], 200);
    }

    public function grammarCorrection(Request $request)
    {
        if ($request->title == null) {
            return;
        }
        $title = $request->title;
        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 500,
            'prompt' => "Correct this to standard English:\n\n".$title,
        ]);
        $content = trim($result['choices'][0]['text']);
        return response()->json(['content'=>$content], 200);
    }

    public function extractContactInformation(Request $request)
    {
        if ($request->title == null) {
            return;
        }
        $title = $request->title;
        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 500,
            'prompt' => "Extract the name and mailing address from this email:\n\n".$title,
        ]);
        $content = trim($result['choices'][0]['text']);
        return response()->json(['content'=>$content], 200);
    }

    public function keywords(Request $request)
    {
        if ($request->title == null) {
            return;
        }
        $title = $request->title;
        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 500,
            'prompt' => "Extract keywords from this text:\n\n".$title,
        ]);
        $content = trim($result['choices'][0]['text']);
        return response()->json(['content'=>$content], 200);
    }

    public function laravelProblemSolving(Request $request)
    {
        if ($request->title == null) {
            return;
        }
        $title = $request->title;
        $result = OpenAI::completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 500,
            'prompt' => "In Laravel Framwork:\n\n".$title,
        ]);
        $content = trim($result['choices'][0]['text']);
        return response()->json(['content'=>$content], 200);
    }

    public function image(Request $request){
        if ($request->title == null) {
            return;
        }
        $title = $request->title;
        //// prompt: command/idea that we give to generate an image (maximum 1000 characters)
        //// n: the number of images generated (between 1 to 10 images)
        //// size: the size of the resulting image (256 x 256, 512 x 512, or 1024 x 1024)
        $result = OpenAI::images()->create([
            'prompt' => $title,
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'url',
        ]);
        
        //// save to local if needed.
        //// $file = 'base64_'. md5(Carbon::now()->toDateTimeString());
        //// Storage::disk('local')->put($file.'.png', file_get_contents($result["data"][0]["url"]));
    
        return $result["data"][0];
    }

   // // public function imageVariation(Request $request){
   // //     if ($request->title == null) {
   // //         return;
   // //     }
   // //     $title = $request->title;
   // //     $imageName = time().'.'.$title->extension();  
        
         

//     //     $title->move(public_path('images'), $imageName);
//     //     $imagePath = asset('images/'.$imageName);
//     //     // dd($imagePath);
//     //     // prompt: command/idea that we give to generate an image (maximum 1000 characters)
//     //     // n: the number of images generated (between 1 to 10 images)
//     //     // size: the size of the resulting image (256 x 256, 512 x 512, or 1024 x 1024)
//     //     $result = OpenAI::images()->create_variation([
//     //         'image'=>$imagePath,
//     //         // 'image'=>fopen($title, "rb"),
//     //         'n' => 1,
//     //         'size' => '256x256',
//     //         'response_format' => 'url',
//     //     ]);
        
//     //     // save to local if needed.
//     //     // $file = 'base64_'. md5(Carbon::now()->toDateTimeString());
//     //     // Storage::disk('local')->put($file.'.png', file_get_contents($result["data"][0]["url"]));
    
//     //     return $result["data"][0];
//     // }
}
