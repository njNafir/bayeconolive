<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Member;
use Illuminate\Http\Request;
use Flash;
use Response;

class MemberController extends AppBaseController
{
    /**
     * Display a listing of the Member.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Member $members */
        $members = Member::withSearch()->latest()->paginate(10);

        return view('admin.members.index')
            ->with('members', $members);
    }

    /**
     * Show the form for creating a new Member.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created Member in storage.
     *
     * @param CreateMemberRequest $request
     *
     * @return Response
     */
    public function store(CreateMemberRequest $request, Member $member)
    {
        $input = $request->all();
        $input['image'] = $member->uploadFile($field = 'image', $save_title=$request->name, $path=null);

        /** @var Member $member */
        $member = Member::create($input);

        Flash::success('Member saved successfully.');

        return redirect(route('admin.members.index'));
    }

    /**
     * Display the specified Member.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Member $member */
        $member = Member::find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        return view('admin.members.show')->with('member', $member);
    }

    /**
     * Show the form for editing the specified Member.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Member $member */
        $member = Member::find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        return view('admin.members.edit')->with('member', $member);
    }

    /**
     * Update the specified Member in storage.
     *
     * @param int $id
     * @param UpdateMemberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMemberRequest $request)
    {
        /** @var Member $member */
        $member = Member::find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }
        $input = $request->all();
        $input['image'] = $member->uploadFile($field = 'image', $save_title=$request->name, $path=null);
        $member->fill($input);
        $member->save();

        Flash::success('Member updated successfully.');

        return redirect(route('admin.members.index'));
    }

    /**
     * Remove the specified Member from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Member $member */
        $member = Member::find($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        $member->delete();

        Flash::success('Member deleted successfully.');

        return redirect(route('admin.members.index'));
    }
}
