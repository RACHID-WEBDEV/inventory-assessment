<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Cviebrock\EloquentSluggable\Services\SlugService;
class PostController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $posts = Post::all();
        $posts =  post::orderBy("id", "desc")->paginate(2);
       //$posts =  Post::orderBy("id", "desc")->get();

        ///recent post
        $postts =  post::orderBy("id", "desc")->take(3)->get();
          // dd($categories);
        $count = array();

        $all_TrendingTechNews         =   post::where("cat_id","=","1")->get();
        $all_WebDevelopment            =   post::where("cat_id","=","2")->get();
        $all_DigitalMarketing         =   post::where("cat_id","=","3")->get();       
        $all_GraphicAndDesign           =   post::where("cat_id","=","4")->get();
        $all_SocialMediaMarketing      =   post::where("cat_id","=","5")->get();
        $all_Uncategorized          =   post::where("cat_id","=","6")->get();
        
        $count[1]      = count($all_TrendingTechNews);
        $count[2]      = count( $all_WebDevelopment );
        $count[3]      = count( $all_DigitalMarketing);
        $count[4]      = count($all_GraphicAndDesign);
        $count[5]      = count( $all_SocialMediaMarketing);
        $count[6]      = count( $all_Uncategorized);

        $categories =  Category::all();
        // dd($categories);
        return view('/blog.index')->with('posts', $posts)->with('categories', $categories)->with("cat_count",$count)->with('postts', $postts);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('/blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, [
            'title'=>'required',
            // 'slug'=>'required',
            'body'=>'required',
            
        ]);
        

        //File Upload
        if($request->hasFile('image')){
            //get file name with exthension
            $filenameWithExt = $request->file('image')-> getClientOriginalName();
            //get just file name
            $filename = Pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $request->file('image')-> getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        }


        $post = new post;
        $post->title = $request-> input('title');
        $post->slug = SlugService::createSlug(post::class, 'slug',$request->title);
        $post->body = $request-> input('body');
        
        $post->cat_id = $request->cat_id;
        $userId = Auth::user()->id;
        $post->userId = $userId;


        if($request->hasFile('image')){
            $post->image = $fileNameToStore;
        }
        
        $post->save();
    

        return redirect('/blog')->with('success', 'Blog Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = post::where('slug',$slug)->first();
        $categories = Category::all();
        $count = array();
        $postts =  post::orderBy("id", "desc")->take(3)->get();
    

        $all_TrendingTechNews         =   post::where("cat_id","=","1")->get();
        $all_WebDevelopment            =   post::where("cat_id","=","2")->get();
        $all_DigitalMarketing         =   post::where("cat_id","=","3")->get();       
        $all_GraphicAndDesign           =   post::where("cat_id","=","4")->get();
        $all_SocialMediaMarketing      =   post::where("cat_id","=","5")->get();
        $all_Uncategorized          =   post::where("cat_id","=","6")->get();
    
        $count[1]      = count($all_TrendingTechNews);
        $count[2]      = count( $all_WebDevelopment );
        $count[3]      = count( $all_DigitalMarketing);
        $count[4]      = count($all_GraphicAndDesign);
        $count[5]      = count( $all_SocialMediaMarketing);
        $count[6]      = count( $all_Uncategorized);

        return view('/blog.show')->with('post',$post)
                                ->with('categories',$categories)
                                ->with("cat_count",$count)
                                ->with('postts', $postts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $authId = Auth::user()->id;

        $post = post::where('slug',$slug)->first();
        // $post = post::find($id);
        //dd($post);
        $postts =  post::orderBy("id", "desc")->take(3)->get();

        if ( $authId != $post->userId ){
            return redirect('/blog')->with('error', 'sorry, you can\'t edit someone else post');
        }
    
        return view('/blog.edit', compact('post',$post))->with('postts', $postts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
        ]);

        //File Upload
        if($request->hasFile('image')){
            //get file name with exthension
            $filenameWithExt = $request->file('image')-> getClientOriginalName();
            //get just file name
            $filename = Pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $request->file('image')-> getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        }

        // $post = post::find($id);
        $post = post::where('slug',$slug)->first();
        $post->title = $request-> input('title');
        // dd($post->title);
        $post->slug = SlugService::createSlug(post::class, 'slug',$request->title);
        $post->body = $request-> input('body');
        if($request->hasFile('image')){
            $post->image = $fileNameToStore;
        }
        $post->save();
    

        return redirect('/blog')->with('success', 'Blog Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        
        $authId = Auth::user()->id;

     //    incase delete doesnt work in below code inside if 
     // auth()->user()->id !== $post->userId
    
        if ($authId != $post->userId ){
            return redirect('/blog')->with('error', 'sorry, you can\'t Delete someone else post');
    }
        $post->delete();

        return redirect('/blog')->with('success', 'Blog Deleted Successfully');

    }


    public function personalpost()
    {
        $userId = Auth::user()->id; 
        // $posts = Post::all();
        $posts =  post::where('userId',$userId)->get();
        //dd($posts);
        $postts =  post::orderBy("id", "desc")->take(3)->get();
        $categories = Category::all();
        $count = array();
        
        // $all_recs = DB::select("select * from posts where 1=1 ORDER BY updated_at DESC");

        $all_TrendingTechNews         =   post::where("cat_id","=","1")->get();
        $all_WebDevelopment            =   post::where("cat_id","=","2")->get();
        $all_DigitalMarketing         =   post::where("cat_id","=","3")->get();       
        $all_GraphicAndDesign           =   post::where("cat_id","=","4")->get();
        $all_SocialMediaMarketing      =   post::where("cat_id","=","5")->get();
        $all_Uncategorized          =   post::where("cat_id","=","6")->get();
        
        $count[1]      = count($all_TrendingTechNews);
        $count[2]      = count( $all_WebDevelopment );
        $count[3]      = count( $all_DigitalMarketing);
        $count[4]      = count($all_GraphicAndDesign);
        $count[5]      = count( $all_SocialMediaMarketing);
        $count[6]      = count( $all_Uncategorized);

            return view('/blog.personalpost')->with('posts', $posts)
                                             ->with('categories',$categories)
                                             ->with("cat_count",$count)
                                             ->with('postts', $postts);
        
        
    }
    
    public function cat_posts($cat_id = null){
        
        if($cat_id != null && $cat_id != ""){
            $posts  =  post::where('cat_id',$cat_id)->paginate(4);
            $postts =  post::orderBy("id", "desc")->take(3)->get();
            //$posts =  Post::orderBy("id", "desc")->paginate(4);
            
            $all_TrendingTechNews         =   post::where("cat_id","=","1")->get();
            $all_WebDevelopment            =   post::where("cat_id","=","2")->get();
            $all_DigitalMarketing         =   post::where("cat_id","=","3")->get();       
            $all_GraphicAndDesign           =   post::where("cat_id","=","4")->get();
            $all_SocialMediaMarketing      =   post::where("cat_id","=","5")->get();
            $all_Uncategorized          =   post::where("cat_id","=","6")->get();
        
            $count[1]      = count($all_TrendingTechNews);
            $count[2]      = count( $all_WebDevelopment );
            $count[3]      = count( $all_DigitalMarketing);
            $count[4]      = count($all_GraphicAndDesign);
            $count[5]      = count( $all_SocialMediaMarketing);
            $count[6]      = count( $all_Uncategorized);
        

        $categories =  Category::all();
        #getting category title 
        $title = "";
        $category_title_obj =  Category::find($cat_id);
        if(!empty($category_title_obj)) {
            $title =  $category_title_obj['cat_description'];
        }

            return view('/blog.index')->with('posts', $posts)->with('categories', $categories)->with("cat_count",$count)->with("cat_title",$title)->with('postts', $postts);
    
        }
        else{
            return "Oops! Page not found";
        }
    }

    public function search(){
        $count = array();
  
        // $all_recs = DB::select("select * from posts where 1=1 ORDER BY updated_at DESC");

        $all_TrendingTechNews         =   post::where("cat_id","=","1")->get();
        $all_WebDevelopment            =   post::where("cat_id","=","2")->get();
        $all_DigitalMarketing         =   post::where("cat_id","=","3")->get();       
        $all_GraphicAndDesign           =   post::where("cat_id","=","4")->get();
        $all_SocialMediaMarketing      =   post::where("cat_id","=","5")->get();
        $all_Uncategorized          =   post::where("cat_id","=","6")->get();
       
        $count[1]      = count($all_TrendingTechNews);
        $count[2]      = count( $all_WebDevelopment );
        $count[3]      = count( $all_DigitalMarketing);
        $count[4]      = count($all_GraphicAndDesign);
        $count[5]      = count( $all_SocialMediaMarketing);
        $count[6]      = count( $all_Uncategorized);

        $categories =  Category::all();

        $posts = post::where('title', 'like', '%' . request('query') . '%')->get();
        //$categories = Category::take(4)->get();
        $postts =  post::orderBy("id", "desc")->take(3)->get();

        return view('blog.search')->with('posts',$posts)
                                    ->with('categories',$categories)
                                    ->with('query',request('query'))->with("cat_count",$count)->with('postts',$postts);
    }

    // protected $featureds;
    // public function index()
    // {
    //     $posts = Post::orderBy('title','desc')->get();
    //     $getfeatured = 'Featured Post';
    //     $featureds = Post::where('featuredpost', $getfeatured)->get();
    //     return view('blog.index',compact('featureds'))->with('posts', $posts);
    // }

    /// CkEditor image upload inside Blog Post
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
    

}
