<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Offer;
use App\Order;
use DateTime;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function create(Advertisement $advertisement)
    {
        $ad = $advertisement;
        $offer = new Offer();
        return view('offer.create', compact('ad', 'offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Advertisement $advertisement)
    {
        $offer = new Offer();
        $offer->price = $request->price;
        $offer->user_id = $request->session()->get('loggedInUser')->id;
        $offer->advertisement_id = $advertisement->id;
        $offer->save();

        return redirect("/advertisements/$advertisement->id");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Advertisement $advertisement
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement, Offer $offer)
    {
        $ad = $advertisement;
        return view('offer.create', compact('ad', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Advertisement $advertisement
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement, Offer $offer)
    {
        $offer->price = $request->price;
        $offer->save();
        return redirect("/advertisements/$advertisement->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Advertisement $advertisement
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Advertisement $advertisement, Offer $offer)
    {
        $offer->delete();
        return redirect("/advertisements/$advertisement->id");
    }

    public function select(Advertisement $advertisement, Offer $offer)
    {
        $order = new Order();
        $order->orderDate = new DateTime();
        $order->offer_id = $offer->id;
        $order->save();

        $advertisement->status = 'closed';
        $advertisement->save();

        return redirect("/advertisements/$advertisement->id");
    }
}
