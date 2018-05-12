<?php

namespace App\Http\Controllers\Admin\Personal\Culture;

use App\Http\Requests\Personal\Culture\CreateDiaryRequest;
use App\Http\Requests\Personal\Culture\EditDiaryRequest;
use App\Models\Personal\Culture\Diary;
use App\Models\Setting\Icons;
use App\Repositories\Personal\Culture\Diaries\DiariesEloquentRepository;
use App\Repositories\Settings\Icons\IconsEloquentRepository;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Redirect;

class DiaryController extends Controller
{

    public function __construct(DiariesEloquentRepository $diariesRepository,
                                IconsEloquentRepository $iconRespository)
    {
        $this->diariesRepository = $diariesRepository;
        $this->iconRespository = $iconRespository;
        $this->status = config('common.status');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $userId = Sentinel::getUser()->id;
            $diaries = $this->diariesRepository->getDiaryWithPaginate($userId, 10, 'desc');
            $lastDiary = $this->diariesRepository->getLastDiaryOfUserOrderBy($userId, 'created_at', 'desc');
            return view('admin.pages.personal.culture.diaries.index', ['diaries' => $diaries, 'lastDiary' => $lastDiary]);
        } catch (Exception $e) {
            return Redirect::route('main')->with('errors', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emotions = $this->iconRespository->getIconsByType(Icons::EMOTION_TYPE);
        $weathers = $this->iconRespository->getIconsByType(Icons::WEATHER_TYPE);
        return view('admin.pages.personal.culture.diaries.create', [
            'status'    => $this->status,
            'emotions'  => $emotions,
            'weathers'  => $weathers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiaryRequest $request)
    {
        try {
            $userId = Sentinel::getUser()->id;
            $data = $request->all();
            $data['user_id'] = $userId;
            unset($data['_token']);
            $diary = $this->diariesRepository->create($data);
            if ($diary['status']) {
                return Redirect::route('diary.index')->with('success', 'Create new diary successfully!');
            } else {
                return Redirect::back()->withInput()->with('danger', $diary['content']);
            }
        } catch (Exception $e) {
            return Redirect::back()->withInput()->with('errors', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diary = $this->diariesRepository->getDiaryDetail($id);
        return view('admin.pages.personal.culture.diaries.show',['diary' => $diary, 'status' => $this->status]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emotions = $this->iconRespository->getIconsByType(Icons::EMOTION_TYPE);
        $weathers = $this->iconRespository->getIconsByType(Icons::WEATHER_TYPE);
        $diary = $this->diariesRepository->find($id);
        return view('admin.pages.personal.culture.diaries.edit',[
            'diary'     => $diary,
            'status'    => $this->status,
            'emotions'  => $emotions,
            'weathers'  => $weathers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditDiaryRequest $request, $id)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            unset($data['_method']);
            $diary = $this->diariesRepository->update($id, $data);
            if ($diary['status']) {
                return Redirect::route('diary.index')->with('success', 'Update diary successfully!');
            } else {
                return Redirect::back()->withInput()->with('danger', $diary['content']);
            }
        } catch (Exception $e) {
            return Redirect::back()->withInput()->with('errors', $e->getMessage());
        }
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
