<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Sekolah;
use App\Models\datakeluarga;
use App\Models\pengalamanorganisasi;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
        public function index()
        {
            $dtMahasiswa = Mahasiswa::all();
            return view ('mahasiswa.data-mahasiswa',compact('dtMahasiswa'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view ('mahasiswa.create-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nik = $data['nik'];
        $mahasiswa->nama = $data['nama'];
        $mahasiswa->jenis_kelamin = $data['jenis_kelamin'];
        $mahasiswa->tempat_lahir = $data['tempat_lahir'];
        $mahasiswa->tgllhr = $data['tgllhr'];
        $mahasiswa->bb = $data['bb'];
        $mahasiswa->tb = $data['tb'];
        $mahasiswa->agama = $data['agama'];
        $mahasiswa->goldar = $data['goldar'];
        $mahasiswa->status = $data['status'];
        $mahasiswa->alamat = $data['alamat'];
        $mahasiswa->kel = $data['kel'];
        $mahasiswa->kec = $data['kec'];
        $mahasiswa->kota = $data['kota'];
        $mahasiswa->prov = $data['prov'];
        $mahasiswa->negara = $data['negara'];
        $mahasiswa->no_hp = $data['no_hp'];
        $mahasiswa->email = $data['email'];
        $mahasiswa->save();

        $sekolah = new Sekolah();
        $sekolah->id = $mahasiswa->id;
        $sekolah->sd = $data['sd'];
        $sekolah->smp = $data['smp'];
        $sekolah->sma = $data['sma'];
        $sekolah->kuliah = $data['kuliah'];
        $sekolah->save(); 

        $datakeluarga = new datakeluarga();
        $datakeluarga->id = $mahasiswa->id;
        $datakeluarga->nama_ayah = $data['nama_ayah'];
        $datakeluarga->pek_ayah = $data['pek_ayah'];
        $datakeluarga->no_ayah = $data['no_ayah'];
        $datakeluarga->nama_ibu = $data['nama_ibu'];
        $datakeluarga->pek_ibu = $data['pek_ibu'];
        $datakeluarga->no_ibu = $data['no_ibu'];
        $datakeluarga->saudara1 = $data['saudara1'];
        $datakeluarga->saudara2 = $data['saudara2'];
        $datakeluarga->save();

        $pengalaman = new pengalamanorganisasi();
        $pengalaman->id = $mahasiswa->id;
        $pengalaman->organisasi1 = $data['organisasi1'];
        $pengalaman->tahun1 = $data['tahun1'];
        $pengalaman->jabatan1 = $data['jabatan1'];
        $pengalaman->organisasi2 = $data['organisasi2'];
        $pengalaman->tahun2 = $data['tahun2'];
        $pengalaman->jabatan2 = $data['jabatan2'];
        $pengalaman->save(); 


        // Mahasiswa::create([
        //     'nik' => $request->nik,
        //     'nama' => $request->nama,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'tempat_lahir' => $request->tempat_lahir,
        //     'tgllhr' => $request->tgllhr,
        //     'bb' => $request->bb,
        //     'tb' => $request->tb,
        //     'agama' => $request->agama,
        //     'goldar' => $request->goldar,
        //     'status' => $request->status,
        //     'alamat' => $request->alamat,
        //     'kel' => $request->kel,
        //     'kec' => $request->kec,
        //     'kota' => $request->kota,
        //     'prov' => $request->prov,
        //     'negara' => $request->negara,
        //     'no_hp' => $request->no_hp,
        //     'email' => $request->email,
            
        // ]);

        return redirect('data-mahasiswa')->with('success', 'Data Berhasil Disimpan!');
        //dd($request->all());
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
        
        $mahasiswa = Mahasiswa::find($id);
        $sekolah = Sekolah::where('id','=',$id)->first();
        $datakeluarga = datakeluarga::where('id','=',$id)->first();
        $pengalaman = pengalamanorganisasi::where('id','=',$id)->first();
        //var_dump($pengalaman->organisasi1);
        return view ('mahasiswa.edit-mahasiswa', compact('mahasiswa','sekolah','datakeluarga','pengalaman'));
        //dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $data = $request->all();
        // dd($request->organisasi1);
        //dd($data);

        Mahasiswa::where('id','=', $id)->update([
            
            'nik'=> $data['nik'],
            'nama'=> $data['nama'],
            'jenis_kelamin'=> $data['jenis_kelamin'],
            'tempat_lahir'=> $data['tempat_lahir'],
            'tgllhr'=> $data['tgllhr'],
            'bb'=> $data['bb'],
            'tb'=> $data['tb'],
            'agama'=> $data['agama'],
            'goldar'=> $data['goldar'],
            'status'=> $data['status'],
            'alamat'=> $data['alamat'],
            'kel'=> $data['kel'],
            'kec'=> $data['kec'],
            'kota'=> $data['kota'],
            'prov'=> $data['prov'],
            'negara'=> $data['negara'],
            'no_hp'=> $data['no_hp'],
            'email'=> $data['email']
            
        ]);

        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nik = $data['nik'];
        // $mahasiswa->nama = $data['nama'];
        // $mahasiswa->jenis_kelamin = $data['jenis_kelamin'];
        // $mahasiswa->tempat_lahir = $data['tempat_lahir'];
        // $mahasiswa->tgllhr = $data['tgllhr'];
        // $mahasiswa->bb = $data['bb'];
        // $mahasiswa->tb = $data['tb'];
        // $mahasiswa->agama = $data['agama'];
        // $mahasiswa->goldar = $data['goldar'];
        // $mahasiswa->status = $data['status'];
        // $mahasiswa->alamat = $data['alamat'];
        // $mahasiswa->kel = $data['kel'];
        // $mahasiswa->kec = $data['kec'];
        // $mahasiswa->kota = $data['kota'];
        // $mahasiswa->prov = $data['prov'];
        // $mahasiswa->negara = $data['negara'];
        // $mahasiswa->no_hp = $data['no_hp'];
        // $mahasiswa->email = $data['email'];
        // $mahasiswa->update();

        Sekolah::where('id_sek','=', $data['id_sek'])->update([
            
            'sd'=> $data['sd'],
            'smp'=> $data['smp'],
            'sma'=> $data['sma'],
            'kuliah'=> $data['kuliah']
        ]);

        // $sekolah = new Sekolah();
        // $sekolah->id = $data['id_sek'];
        // $sekolah->sd = $data['sd'];
        // $sekolah->smp = $data['smp'];
        // $sekolah->sma = $data['sma'];
        // $sekolah->kuliah = $data['kuliah'];
        // $sekolah->update(); 

        datakeluarga::where('id_dakel','=', $data['id_dakel'])->update([
            
            'nama_ayah'=> $data['nama_ayah'],
            'pek_ayah'=> $data['pek_ayah'],
            'no_ayah'=> $data['no_ayah'],
            'nama_ibu'=> $data['nama_ibu'],
            'pek_ibu'=> $data['pek_ibu'],
            'no_ibu'=> $data['no_ibu'],
            'saudara1'=> $data['saudara1'],
            'saudara2'=> $data['saudara2']
        ]);

        // $datakeluarga = new datakeluarga();
        // $datakeluarga->id = $data['id_dakel'];
        // $datakeluarga->nama_ayah = $data['nama_ayah'];
        // $datakeluarga->pek_ayah = $data['pek_ayah'];
        // $datakeluarga->no_ayah = $data['no_ayah'];
        // $datakeluarga->nama_ibu = $data['nama_ibu'];
        // $datakeluarga->pek_ibu = $data['pek_ibu'];
        // $datakeluarga->no_ibu = $data['no_ibu'];
        // $datakeluarga->saudara1 = $data['saudara1'];
        // $datakeluarga->saudara2 = $data['saudara2'];
        // $datakeluarga->update();

        // $pengalaman = array(
        //     'organisasi1'=> $data['organisasi1'],
        //     'tahun1'=> $data['tahun1'],
        //     'jabatan1'=> $data['jabatan1'],
        //     'organisasi2'=> $data['organisasi2'],
        //     'tahun2'=> $data['tahun2'],
        //     'jabatan2'=> $data['jabatan2']
        // );
        //dd($data['jabatan1']);
        pengalamanorganisasi::where('id_pengalaman','=', $data['id_pengalaman'])->update([
            
            'organisasi1'=> $data['organisasi1'],
            'tahun1'=> $data['tahun1'],
            'jabatan1'=> $data['jabatan1'],
            'organisasi2'=> $data['organisasi2'],
            'tahun2'=> $data['tahun2'],
            'jabatan2'=> $data['jabatan2']
        ]);
        
        
        // $pengalaman = new pengalamanorganisasi();
        // $pengalaman->id = $data['id_pengalaman'];
        // $pengalaman->organisasi1 = $data['organisasi1'];
        // $pengalaman->tahun1 = $data['tahun1'];
        // $pengalaman->jabatan1 = $data['jabatan1'];
        // $pengalaman->organisasi2 = $data['organisasi2'];
        // $pengalaman->tahun2 = $data['tahun2'];
        // $pengalaman->jabatan2 = $data['jabatan2'];
        // $pengalaman->update();
            // dd($pengalaman);
        // $data = Mahasiswa::find( $id);
        // //$data = Sekolah::find( $);
        // $data->update($request->all());


        return redirect('data-mahasiswa')->with('success', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Mahasiswa::find( $id);
        $data->delete();


        

        return redirect('data-mahasiswa')->with('success', 'Data Berhasil Di Hapus!');
        //$mah = Mahasiswa::findorfail($id);
        //$mah->delete();
        //return back();
    }
}
?>