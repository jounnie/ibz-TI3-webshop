<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ad = new Advertisement();
        return view('advertisement.create', compact('ad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new Advertisement();
        $ad->description = $request->description;
        $ad->amount = $request->amount;
        $ad->quality = $request->quality;
        $ad->deliveryDate = $request->deliveryDate;
        $ad->user_id = $request->session()->get('loggedInUser')->id;
        $ad->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        $ad = $advertisement;
        $offers = $ad->offers;
        return view('advertisement.view', compact('ad', 'offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        $ad = $advertisement;
        return view('advertisement.create', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $advertisement->description = $request->description;
        $advertisement->amount = $request->amount;
        $advertisement->quality = $request->quality;
        $advertisement->deliveryDate = $request->deliveryDate;
        $advertisement->save();
        return redirect("/advertisements");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect("/advertisements");
    }

    public function search(Request $request)
    {
        $description = $request->description;
        $status = $request->status;

        $whereStatements = [];
        if (!empty($description)) {
            array_push($whereStatements, ['description', 'like', "%$description%"]);
        }

        if (!empty($status) && $status !== 'all') {
            array_push($whereStatements, ['status', '=', "$status"]);
        }

        $ads = Advertisement::where($whereStatements)->get();;
        return view('advertisement.index', compact('ads'));
    }
}
