<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Cviebrock\EloquentSluggable\Services\SlugService;
class ProductController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $products = product::all();
        $products =  product::orderBy("id", "desc")->paginate(2);
       //$products =  product::orderBy("id", "desc")->get();

        ///recent product
        $productts =  product::orderBy("id", "desc")->take(3)->get();
          // dd($categories);
        $count = array();

        $all_modernChairs        =   product::where("cat_id","=","1")->get();
        $all_modernTables            =   product::where("cat_id","=","2")->get();
        $all_officeChair         =   product::where("cat_id","=","3")->get();       
       
        
        $count[1]      = count($all_modernChairs);
        $count[2]      = count( $all_modernTables );
        $count[3]      = count( $all_officeChair);
        

        $categories =  Category::all();
        // dd($categories);
        return view('/product.index')->with('products', $products)->with('categories', $categories)->with("cat_count",$count)->with('productts', $productts);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('/product.create');
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
            'name'=>'required',
            // 'slug'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            
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


        $product = new product;
        $product->name = $request-> input('name');
        $product->slug = SlugService::createSlug(product::class, 'slug',$request->name);
        $product->description = $request-> input('description');
        $product->cat_id = $request->cat_id;
        $product->quantity = $request->input('quantity');
        $product->price = $request-> input('price');
        $userId = Auth::user()->id;
        $product->userId = $userId;


        if($request->hasFile('image')){
            $product->image = $fileNameToStore;
        }
        
        $product->save();
    

        return redirect('/product')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = product::where('slug',$slug)->first();
        $categories = Category::all();
        $count = array();
        $productts =  product::orderBy("id", "desc")->take(3)->get();
    

        $all_modernChairs        =   product::where("cat_id","=","1")->get();
        $all_modernTables            =   product::where("cat_id","=","2")->get();
        $all_officeChair         =   product::where("cat_id","=","3")->get();       
       
        
        $count[1]      = count($all_modernChairs);
        $count[2]      = count( $all_modernTables );
        $count[3]      = count( $all_officeChair);

        return view('/product.show')->with('product',$product)
                                ->with('categories',$categories)
                                ->with("cat_count",$count)
                                ->with('productts', $productts);
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

        $product = product::where('slug',$slug)->first();
        // $product = product::find($id);
        //dd($product);
        $productts =  product::orderBy("id", "desc")->take(3)->get();

        if ( $authId != $product->userId ){
            return redirect('/product')->with('error', 'sorry, you can\'t edit someone else product');
        }
    
        return view('/product.edit', compact('product',$product))->with('productts', $productts);
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
            'name'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
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

        // $product = product::find($id);
        $product = product::where('slug',$slug)->first();
        $product->name = $request-> input('name');
        // dd($product->name);
        $product->slug = SlugService::createSlug(product::class, 'slug',$request->name);
        $product->description = $request-> input('description');
        $product->quantity =  $request-> input('quantity');
        $product->price = $request-> input('price');
        if($request->hasFile('image')){
            $product->image = $fileNameToStore;
        }
        $product->save();
    

        return redirect('/product')->with('success', 'product product Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        
        $authId = Auth::user()->id;

     //    incase delete doesnt work in below code inside if 
     // auth()->user()->id !== $product->userId
    
        if ($authId != $product->userId ){
            return redirect('/product')->with('error', 'sorry, you can\'t Delete someone else product');
    }
        $product->delete();

        return redirect('/product')->with('success', 'product Deleted Successfully');

    }


    public function personalproduct()
    {
        $userId = Auth::user()->id; 
        // $products = product::all();
        $products =  product::where('userId',$userId)->get();
        //dd($products);
        $productts =  product::orderBy("id", "desc")->take(3)->get();
        $categories = Category::all();
        $count = array();
        
        // $all_recs = DB::select("select * from products where 1=1 ORDER BY updated_at DESC");

        $all_modernChairs        =   product::where("cat_id","=","1")->get();
        $all_modernTables            =   product::where("cat_id","=","2")->get();
        $all_officeChair         =   product::where("cat_id","=","3")->get();       
       
        
        $count[1]      = count($all_modernChairs);
        $count[2]      = count( $all_modernTables );
        $count[3]      = count( $all_officeChair);

            return view('/product.personalproduct')->with('products', $products)
                                             ->with('categories',$categories)
                                             ->with("cat_count",$count)
                                             ->with('productts', $productts);
        
        
    }
    
    public function cat_products($cat_id = null){
        
        if($cat_id != null && $cat_id != ""){
            $products  =  product::where('cat_id',$cat_id)->paginate(4);
            $productts =  product::orderBy("id", "desc")->take(3)->get();
            //$products =  product::orderBy("id", "desc")->paginate(4);
            
            $all_modernChairs        =   product::where("cat_id","=","1")->get();
        $all_modernTables            =   product::where("cat_id","=","2")->get();
        $all_officeChair         =   product::where("cat_id","=","3")->get();       
       
        
        $count[1]      = count($all_modernChairs);
        $count[2]      = count( $all_modernTables );
        $count[3]      = count( $all_officeChair);
        

        $categories =  Category::all();
        #getting category title 
        $title = "";
        $category_title_obj =  Category::find($cat_id);
        if(!empty($category_title_obj)) {
            $title =  $category_title_obj['cat_description'];
        }

            return view('/product.index')->with('products', $products)->with('categories', $categories)->with("cat_count",$count)->with("cat_title",$title)->with('productts', $productts);
    
        }
        else{
            return "Oops! Page not found";
        }
    }

    public function search(){
        $count = array();
  
        // $all_recs = DB::select("select * from products where 1=1 ORDER BY updated_at DESC");

        $all_modernChairs        =   product::where("cat_id","=","1")->get();
        $all_modernTables            =   product::where("cat_id","=","2")->get();
        $all_officeChair         =   product::where("cat_id","=","3")->get();       
       
        
        $count[1]      = count($all_modernChairs);
        $count[2]      = count( $all_modernTables );
        $count[3]      = count( $all_officeChair);

        $categories =  Category::all();

        $products = product::where('title', 'like', '%' . request('query') . '%')->get();
        //$categories = Category::take(4)->get();
        $productts =  product::orderBy("id", "desc")->take(3)->get();

        return view('product.search')->with('products',$products)
                                    ->with('categories',$categories)
                                    ->with('query',request('query'))->with("cat_count",$count)->with('productts',$productts);
    }

    

    /// CkEditor image upload inside product product
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
