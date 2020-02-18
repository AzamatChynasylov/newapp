<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassShedulingRequest;
use App\Http\Requests\UpdateClassShedulingRequest;
use App\Repositories\ClassShedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClassShedulingController extends AppBaseController
{
    /** @var  ClassShedulingRepository */
    private $classShedulingRepository;

    public function __construct(ClassShedulingRepository $classShedulingRepo)
    {
        $this->classShedulingRepository = $classShedulingRepo;
    }

    /**
     * Display a listing of the ClassSheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classShedulings = $this->classShedulingRepository->all();

        return view('class_shedulings.index')
            ->with('classShedulings', $classShedulings);
    }

    /**
     * Show the form for creating a new ClassSheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_shedulings.create');
    }

    /**
     * Store a newly created ClassSheduling in storage.
     *
     * @param CreateClassShedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassShedulingRequest $request)
    {
        $input = $request->all();

        $classSheduling = $this->classShedulingRepository->create($input);

        Flash::success('Class Sheduling saved successfully.');

        return redirect(route('classShedulings.index'));
    }

    /**
     * Display the specified ClassSheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSheduling = $this->classShedulingRepository->find($id);

        if (empty($classSheduling)) {
            Flash::error('Class Sheduling not found');

            return redirect(route('classShedulings.index'));
        }

        return view('class_shedulings.show')->with('classSheduling', $classSheduling);
    }

    /**
     * Show the form for editing the specified ClassSheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSheduling = $this->classShedulingRepository->find($id);

        if (empty($classSheduling)) {
            Flash::error('Class Sheduling not found');

            return redirect(route('classShedulings.index'));
        }

        return view('class_shedulings.edit')->with('classSheduling', $classSheduling);
    }

    /**
     * Update the specified ClassSheduling in storage.
     *
     * @param int $id
     * @param UpdateClassShedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassShedulingRequest $request)
    {
        $classSheduling = $this->classShedulingRepository->find($id);

        if (empty($classSheduling)) {
            Flash::error('Class Sheduling not found');

            return redirect(route('classShedulings.index'));
        }

        $classSheduling = $this->classShedulingRepository->update($request->all(), $id);

        Flash::success('Class Sheduling updated successfully.');

        return redirect(route('classShedulings.index'));
    }

    /**
     * Remove the specified ClassSheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSheduling = $this->classShedulingRepository->find($id);

        if (empty($classSheduling)) {
            Flash::error('Class Sheduling not found');

            return redirect(route('classShedulings.index'));
        }

        $this->classShedulingRepository->delete($id);

        Flash::success('Class Sheduling deleted successfully.');

        return redirect(route('classShedulings.index'));
    }
}
