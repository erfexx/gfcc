<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $data['page_title'] = 'Attendance';
        $data['result'] = DB::table('attendances')
                        ->orderBy('attendances.tanggal','desc')
                        ->join('events','attendances.event_id','=','events.id')
                        ->join('cms_users','attendances.person_in_charge_id','=','cms_users.id')
                        ->join('members','cms_users.member_id','=','members.id')
                        ->select('attendances.id', 'attendances.tanggal', 'events.event_name','members.fullname','percentage')->get();

        return view('custom_view_attendance.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $data = [];
        $data['page_title'] = 'Attendance : Create Data';
        $data['event'] = DB::table('events')->pluck('event_name','id')->toArray();
        $data['pic'] = DB::table('cms_users')
                            ->join('members','cms_users.member_id','=','members.id')
                            ->pluck('members.fullname','cms_users.id')->toArray();

//        echo json_encode($data['event']);

        return view('custom_view_attendance.create', $data);
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
        $data = new Attendance();

        $data->tanggal = $request->tanggal;
        $data->event_id = $request->event;
        $data->person_in_charge_id = $request->pic;
        $data->percentage = $request->percentage;

        $data->save();

        return redirect()->route('attendance.index');
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
        $data = [];
        $data['page_title'] = 'Attendance : Detail of Attendance';
        $data['member_list'] = DB::table('members')->select()->get();
        $data['attendance_id'] = $id;

//        echo json_encode($data['member_list']);

//        echo $id;

        return view('custom_view_attendance.detail', $data);
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
        $data = [];
        $data['page_title'] = 'Attendance : Edit Data';
        $data['item'] = Attendance::findOrFail($id);
        $data['event'] = DB::table('events')->pluck('event_name','id')->toArray();
        $data['pic'] = DB::table('cms_users')
            ->join('members','cms_users.member_id','=','members.id')
            ->pluck('members.fullname','cms_users.id')->toArray();

        return view('custom_view_attendance.edit', $data);
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
        $data = Attendance::findOrFail($id);

        $data->tanggal = $request->tanggal;
        $data->event_id = $request->event;
        $data->person_in_charge_id = $request->pic;
        $data->percentage = $request->percentage;

        $data->save();

        return redirect()->route('attendance.index');
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

    public function member_list(Request $req)
    {
        $members = DB::table('members')->select(
            '*',
            DB::raw(' CASE WHEN gender = "M" THEN "Male" ELSE "Female" END AS sex')
        )->get();

        return DataTables::of($members)
            ->addColumn('action', function ($member) {
                $id = $member->id;
                return
                    '<td align="center" style="text-align: center;">
                        <button class="btnTgl btn btn-success" type="button" value="0" style="text-align: center;" name="atte">Hadir</button>
                        <input type="hidden" id="'.$id.'" name="id_member[]" value="'.$id.'">
                        <input type="hidden" id="" name="atts[]" class="atte" value="0">
                     </td>';
            })
            ->addColumn('id', function ($member) {
                $id = $member->id;
                return
                    $id;
            })
            ->make(true);
    }

    public function storeAttend(Request $req)
    {
        $m_len = sizeof($req->id_member);
        $m = $req->id_member;
        $a = $req->atts;

        //for insert to database
        for ($i = 0; $i<$m_len; $i++)
        {
            echo $m[$i].' '.$a[$i];
            echo '<br>';
        }

    }
}
