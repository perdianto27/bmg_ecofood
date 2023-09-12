<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('artikel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      {
        $response = array(
            'status' => 500,
            'status_desc'=> 'error',
            'message' => '',
            'data' => '',
    
        );
        try {
            $artikel = new Artikel;
            $artikel->judul_artikel = $request->judul;
            $artikel->isi_artikel = $request->isi;
            $artikel->thumbnail_artikel = $request->thumbnail;
            $artikel->tag_artikel = $request->tag;
            $artikel->kategori_artikel = $request->kategori;
            $artikel->penulis = $request->penulis;
    
            if ($artikel->save()){
                $response['status'] = 200;
                $response['status_desc'] = 'success';
                $response['data'] = $artikel;
            }
    
        } catch (\Exception $e) {
            $response['status'] = 400;
            $response['message'] = $e->getMessage();
            unset($response['data']);
        }
    
        return response()->json($response, $response['status']);
      }
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
      $artikel = Artikel::find($id);
      return response()->json($artikel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $response = array(
        'status' => 500,
        'status_desc'=> 'error',
        'message' => '',
        'data' => '',
      );
      try {

          $artikel = Artikel::find($request->id);

          if($artikel === null){
            $response['message'] = 'ID tidak ditemukan';
            unset($response['data']);
            return response()->json($response, $response['status']);
          }
          
          $artikel->id = $request->id;
          $artikel->judul_artikel = $request->judul;
          $artikel->isi_artikel = $request->isi;
          $artikel->thumbnail_artikel = $request->thumbnail;
          $artikel->tag_artikel = $request->tag;
          $artikel->kategori_artikel = $request->kategori;
          $artikel->penulis = $request->penulis;

          if ($artikel->save()){
              $response['status'] = 200;
              $response['status_desc'] = 'success';
              $response['data'] = $artikel;
              unset($response['message']);
          }

      } catch (\Exception $e) {
          $response['status'] = 400;
          $response['message'] = $e->getMessage();
          unset($response['data']);
      }

      return response()->json($response, $response['status']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $response = array(
        'status' => 500,
        'status_desc'=> 'error',
        'message' => '',
        'data' => '',

      );
      try {

          $artikel = Artikel::find($id);

          if($artikel === null){
            $response['message'] = 'ID tidak ditemukan';
            unset($response['data']);
            return response()->json($response, $response['status']);
          }

          if ($artikel->delete()){
              $response['status'] = 200;
              $response['status_desc'] = 'success';
              $response['data'] = $artikel;
              unset($response['message']);
          }

      } catch (\Exception $e) {
          $response['status'] = 400;
          $response['message'] = $e->getMessage();
          unset($response['data']);
      }

      return response()->json($response, $response['status']);
    }

    public function getArtikel(Request $request)
    {
      $list = Artikel::select('*')
      ->orderBy('updated_at', 'desc')
      ->limit(6)
      ->get();
    
      $data = array();
      $no = $request->start;
      foreach ($list as $item) {
        $no++;
        $row = array();
        $row['id'] = $item->id;
        $row['judul_artikel'] = $item->judul_artikel;
        $row['isi_artikel'] = $item->isi_artikel;
        $row['thumbnail_artikel'] = $item->thumbnail_artikel;
        $row['tag_artikel'] = $item->tag_artikel;
        $row['penulis'] = $item->penulis;
        $row['kategori_artikel'] = $item->kategori_artikel;
        $timestamp= explode(" ", $item->updated_at);
        $row['updated_at'] =$timestamp[0]." ".$timestamp[1];
  
        $data[] = $row;
      }
  
      $output = array(
        "artikel" => $data,
      );
      //output to json format
      // echo json_encode($output);
      return response()->json($output);
    }

    public function ajax_list(Request $request)
    {
      $list = Artikel::select('*')
      ->orderBy('updated_at', 'desc')
      ->get();
    
      $data = array();
      $no = $request->start;
      foreach ($list as $item) {
        $no++;
        $row = array();
        $row[] = $item->id;
        $row[] = $item->judul_artikel;
        $row[] = $item->isi_artikel;
        $row[] = $item->thumbnail_artikel;
        $row[] = $item->tag_artikel;
        $row[] = $item->penulis;
        $row[] = $item->kategori_artikel;
        $timestamp= explode(" ", $item->created_at);
        $row[] =$timestamp[0]." ".$timestamp[1];

        $row[] = '<a class="btn btn-outline-primary btn-sm" href="javascript:void(0)" title="Edit" onclick="edit('."'".$item->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>        
          <a class="btn btn-outline-danger btn-sm" href="javascript:void(0)" title="Hapus" onclick="delete_by_id('."'".$item->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete
          </a>';  
        $data[] = $row;
      }
  
      $output = array(
        "start" => intval($request->start),
        "length" => intval($request->length),
        "draw" => intval($request->draw),
        "recordsTotal" => intval($this->count_all()),
        "recordsFiltered" => intval($this->count_filtered()),
        "data" => $data,
      );
      //output to json format
      // echo json_encode($output);
      return response()->json($output);
    }
  
    function count_all()
    {
      $countAll = Artikel::count();
      return $countAll;     
    }
    
    function count_filtered()
    {
      $countFiltered = Artikel::select('*')
      ->orderBy('updated_at', 'desc')
      ->get()
      ->count();
      return $countFiltered;      
    }    
}
