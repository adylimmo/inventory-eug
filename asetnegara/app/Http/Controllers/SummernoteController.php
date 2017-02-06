<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Http\Requests;

use DB;



class SummernoteController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function tulis()

    {

        //

        $kategori = DB::table('category')

        ->get();

        return view('pages.tulis',compact('kategori'));

    }



    public function insert(Request $request)

    {

        DB::table('sumernote')->insert([

            'id_category'=>$request['id_kategori'],
            'idusers'=>$request['idusers'],

            'title'=>$request['title'],

            'detail'=>$request['summernote'],

            'slug' =>Str::slug($request->get('title')),

            ]);

        return redirect()->to('admin/lihat');

    }

    public function lihat()

    {

        $data = DB::table('sumernote')

        ->join('category','sumernote.id_category','=','category.id_category')

        ->orderBy('id', 'desc')

        ->paginate(10);

        return view('pages.lihat',compact('data'));

    }

    public function bacanih($slug)

    {

        $data = DB::table('sumernote')

        ->join('category','sumernote.id_category','=','category.id_category')
        ->join('users','users.id','=','sumernote.idusers')
        ->select('sumernote.id_category','category.nama_category','users.email','users.first_name','sumernote.title','sumernote.slug','sumernote.detail', 'sumernote.created_at')
        ->where('slug',$slug)->first();

        return view('pages.baca',compact('data'));

    }

    public function kategori($namakategori)

    {

        $data = DB::table('sumernote')

        ->join('category','sumernote.id_category','=','category.id_category')
        ->join('users','users.id','=','sumernote.idusers')
        ->select('sumernote.id_category','category.nama_category','users.email','users.first_name','sumernote.title','sumernote.slug','sumernote.detail', 'sumernote.created_at')
        ->where('nama_category',$namakategori)->first();

        return view('pages.kategori',compact('data'));

    }

    public function hapusini($id)

    {

        DB::table('sumernote')->where('id',$id)->delete();

        return back();

    }

    public function editnih($id)

    {

        $kategori = DB::table('category')

        ->get();

        $data = DB::table('sumernote')

        ->join('category','sumernote.id_category','=','category.id_category')

        ->where('id',$id)

        ->first();

        return view('pages.edit',compact('data','kategori'));

    }

    public function updatenih(Request $request)

    { 

        DB::table('sumernote')

        ->where('id',$request['id'])

        ->update([

            'id_category'=>$request['id_kategori'],

            'title'=>$request['title'],

            'detail'=>$request['summernote'],

            'slug' =>Str::slug($request->get('title'))

            ]);

        return redirect()->to('admin/lihat');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }

}

