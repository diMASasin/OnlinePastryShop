<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Gate;


class CakeController extends Controller
{
    public  function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $perpage = $request->perpage ?? 2;
        return view('cakes', [
            'cakes' => Cake::paginate($perpage)->withQueryString()
        ]);
    }

    public function store(Request $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $request->validate([
           'name' => 'required|unique:cakes|max:255',
           'price' => 'required|integer',
           'category_id' => 'required|integer',
           'weight' => 'required|integer',
           'description' => 'required',
           'filling_id' => 'required|integer',
           'type_id' => 'required|integer'
        ]);
        $cake = new Cake($validated);
        $cake->save();
        return redirect('/cakes');
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('item_create', [
            'categories' => Category::all()
        ]);
    }

    public function edit(string $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('item_edit', [
            'cake' => Cake::all()->where('id', $id)->first(),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, string $id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $request->validate([
            'name' => 'required|unique:cakes|max:255',
            'price' => 'required|integer',
            'category_id' => 'required|integer',
            'weight' => 'required|integer',
            'description' => 'required',
            'filling_id' => 'required|integer',
            'type_id' => 'required|integer'
        ]);

        $item = Cake::all()->where('id', $id)->first();
        $item->name = $validated['name'];
        $item->price = $validated['price'];
        $item->category_id = $validated['category_id'];
        $item->weight = $validated['weight'];
        $item->description = $validated['description'];
        $item->filling_id = $validated['filling_id'];
        $item->type_id = $validated['type_id'];
        $item->save();

        return redirect('/cakes');
    }

    public function destroy(string $id)
    {
        if (!Gate::allows('destroy-item', Cake::all()->where('id', $id)->first())) {
            return redirect(to: '/error')->with('message', 'У вас нет разрешения на удаление товара номер ' . $id);
        }
        Cake::destroy($id);
        return redirect(to: '/item');
    }
}
