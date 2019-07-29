<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkWithPage;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Page $pages)
    {
        $this->pages = $pages;
       $this->middleware('admin');
    }


    public function index()
    {
        $pages = Page::all();
        //$pages = Page::all()->withDepth();
        return view('admin.pages.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create')->with([
            'model' => new Page(),
            //'orderPages' => Page::defaultOrder()->withDepth()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkWithPage $request)
    {
        $page = new Page($request->only(['title', 'url', 'content']));
        Auth::user()->pages()->save($page);

        //$this->updatePageOrder($page, $request);

        return redirect('/admin/pages/')->with('status', 'A new page was created.');
        //return redirect()->route('admin.pages.index')->with('status', 'A new page was created.');
    }


    /**
     * Show the form for editing the specified resource.
     *r
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'model' => $page,
            //'orderPages' => Page::defaultOrder()->withDepth()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(WorkWithPage $request, Page $page)
    {

        /*if ($response = $this->updatePageOrder($page, $request)){
            return $response;
        }*/

        $page->fill($request->only(['title', 'url', 'content']));

        $page->save();

        return redirect('/admin/pages/')->with('status', "The page '$page->title' was successfully updated.");
        //return redirect()->route('admin.pages.index')->with('status', "The page '$page->title' was successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->pages->findOrFail($id);
        $page->delete();
        return redirect('/admin/pages/')->with('status', "The page '$page->title' was successfully deleted.");
        //return view()->route('admin.pages.index')->with('status', "The page '$page->title' was successfully updated.");
    }

    protected function updatePageOrder(Page $page, Request $request) {
        if ($request->has('order', 'orderPage')){
            if ($page->id == $request->orderPage) {
                return redirect()->route('pages.edit', ['page'=>$page->id])->withInput()->withErrors(['error'=>'Cannot order page against itself']);
            }

            $page->updateOrder($request->order, $request->orderPage);
        }
    }
}
