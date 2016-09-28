@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="well well-lg form-well">
      <h2>Bootstrap Mixed Form <p class="lead">with horizontal and inline fields</p></h2>
        
        <form role="form" class="form-horizontal" method="POST" action="/quote">

    
        {{ csrf_field() }}

        <input type="hidden" name="id" value="1">
        <input type="hidden" name="contact_name" value="Dispatch">
        <input type="hidden" name="contact_phone" value="877-663-2200">
        
        <!--

        <input type="hidden" name="offering" value="0">
        <input type="hidden" name="in_house_offering" value="0">
        <input type="hidden" name="its_customer" id="its_customer" value="">

        <div class="form-group">
            <label for="pick_zip" class="control-label col-sm-2">Pick Zip</label>
                <div class="col-sm-2">
                    <input type="text" name="pick_zip" id="pick_zip" class="form-control" value="">
                </div>
            <label for="delivery_zip" class="control-label col-sm-2">Delivery Zip</label>
                <div class="col-sm-2">
                    <input type="text" name="delivery_zip" id="delivery_zip" class="form-control" value="">
                </div>
        </div>

        <div class="form-group">
            <label for="tmanum" class="control-label col-sm-2">Reference #</label>
                <div class="col-sm-2">
                    <input type="text" name="tmanum" id="tmanum" class="form-control" value="" required>
                </div>
            <label for="ponumber" class="control-label col-sm-2">Purchase Order #</label>
                <div class="col-sm-2">
                    <input type="text" name="ponumber" id="ponumber" class="form-control" value="" required>
                </div>
            <label for="selected_carrier" class="control-label col-sm-2">Carrier</label>
                <div class="col-sm-2">
                    <input type="text" name="selected_carrier" id="selected_carrier" class="form-control" value="" required>
                </div>
        </div>

        <div class="form-group">
            <label for="urgency" class="control-label col-sm-2">Urgency</label>
                <div class="col-sm-2">
                    <select name="urgency" id="urgency" class="form-control">
                        <option value="Quote">Quote</option>
                        <option value="Has Time">Has Time</option>
                        <option value="Hot">Hot</option>
                        <option value="Screaming">Screaming</option>
                        <option value="Booked">Booked</option>
                        <option value="Loaded">Loaded</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Closed">Closed</option>

                    </select>
                </div>

            <label for="load_type" class="control-label col-sm-2">Load Type</label>
                <div class="col-sm-2">
                    <select name="load_type" id="load_type" class="form-control">
                        <option value="FULL">Full</option>
                        <option value="PARTIAL">Partial</option>
                    </select>
                </div>

                <label for="billing" class="control-label col-sm-2">Rate</label>
                <div class="col-sm-2">
                    <input type="number" name="billing" id="billing" class="form-control" value="" placeholder="0">
                </div>
        </div>

        -->
        <div class="form-group">
            <label for="pick_city" class="control-label col-sm-2">Pick City</label>
                <div class="col-sm-2">
                    <input type="text" name="pick_city" id="pick_city" class="form-control" value="" required><span id="found_pick_address"></span>
                </div>
            <label for="pick_state" class="control-label col-sm-2">Pick State (ex. OH)</label>
                <div class="col-sm-2">
                    <input type="text" name="pick_state" id="pick_state" class="form-control" value="" required>
                </div>
            <label for="pick_pc_number" class="control-label col-sm-2">Pick Store # or Code</label>
                <div class="col-sm-2">
                <div class="input-group">
                    <input type="text" name="pick_pc_number" id="pick_pc_number" class="form-control" value="">
                <span class="input-group-btn">
                        <button class="btn btn-success" id="pick_store_number" type="button">FIND</button>
                </span>
                </div>
                </div>
        </div>

        <div class="form-group">
            <label for="delivery_city" class="control-label col-sm-2">Delivery City</label>
                <div class="col-sm-2">
                    <input type="text" name="delivery_city" class="form-control" id="delivery_city" value=""required><span id="found_delivery_address"></span>
                </div>
            <label for="delivery_state" class="control-label col-sm-2">Delivery State (ex. IL)</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="text" name="delivery_state" id="delivery_state" class="form-control" value="" required>
                            <span class="input-group-btn">
                                <button class="btn btn-success" id="quote_map" type="button">MAP</button>
                            </span>
                    </div>
                </div>
            <label for="del_pc_number" class="control-label col-sm-2">Delivery Store # or Code</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="text" name="del_pc_number" id="del_pc_number" class="form-control" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-success" id="delivery_store_number" type="button">FIND</button>
                            </span>
                    </div>
                </div>
        </div>

        <div class="form-group">
            <label for="commodity" class="control-label col-sm-2">Commodity</label>
                <div class="col-sm-4">
                    <input type="text" name="commodity" id="commodity" class="form-control" value="" placeholder="What are you moving?" required>
                </div>
<!--

            <label for="trailer_type" class="control-label col-sm-2">Trailer Type</label>
            <div class="col-sm-4">
                <select name="trailer_type" id="trailer_type" class="form-control">
                
    <option value="F">Flatbed</option>
    <option value="CONG">Conestoga</option>
    <option value="DD">Double Drop</option>
    <option value="FWS">Flatbed w/Sides</option>
    <option value="FA">Flatbed Air-Ride</option>
    <option value="FEXT">Stretch Flatbed</option>
    <option value="FSD">Flat or Step Deck</option>
    <option value="FSDV">Flatbed, Step Deck, Van</option>
    <option value="FV">Van or Flatbed</option>
    <option value="HS">Hot Shot</option>
    <option value="PO">Power Only</option>
    <option value="RGN">Removable Goose Multi-Axle Heavy</option>
    <option value="RGNE">RGN Extendable</option>
    <option value="SD">Step Deck</option>
    <option value="SDL">Step Deck w/Loading Ramps</option>
    <option value="SDRG">Step Deck or Removable Gooseneck</option>
    <option value="V">Van</option>
    <option value="LAF">Landoll</option>
                </select>
                </div>
        </div>

        <div class="form-group">

        <label for="length" class="control-label col-sm-2">Length (ft.)</label>
            <div class="col-sm-2">
                <input type="number" name="length" id="length" class="form-control" placeholder="15" value="" required>
            </div>


        <label for="width" class="control-label col-sm-2">Width (ft.)</label>
            <div class="col-sm-2">
                <input type="number" name="width" id="width" class="form-control" placeholder="8" value="" required>
            </div>


        <label for="height" class="control-label col-sm-2">Height (ft.)</label>
            <div class="col-sm-2">
                <input type="number" name="height" id="height" class="form-control" placeholder="8" value="" required>
            </div>
    </div>

    <div class="form-group">
        <label for="weight" class="control-label col-sm-2">Weight (lbs.)</label>
            <div class="col-sm-3">
            <input type="number" name="weight" id="weight" class="form-control" placeholder="10000" value="" required>
            </div>
    </div>

    <div class="form-group">
        <label for="pick_date" class="control-label col-sm-2">Pick Date</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="pick_date" id="datepicker" value="" required>
            </div>
        <label for="del_date" class="control-label col-sm-2">Delivery Date</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="del_date" id="datepicker2" value="" required>
            </div>
            <label for="miles" class="control-label col-sm-2">Miles</label>
                <div class="col-sm-2">
                    <input type="number" name="miles" id="miles" class="form-control" value="">
                </div>

    </div>

    <div class="form-group">
        <label for="special_instructions" class="control-label col-sm-2">Special Instructions</label>
            <div class="col-sm-6">
                <input type="text" name="special_instructions" class="form-control" id="special_instructions" value="" required>
            </div>
    </div>
-->



       

                <button type="submit" class="btn btn-primary">Submit</button>

    </form>
     </div>
</div>
@endsection
