<label class="box-container-disabled js-add-ticket {{ in_array($i, $tickers) ? 'active-current'  : '' }}
    {{ $vehicle->v_action == \Modules\Guest\Entities\Vehicle::TYPE_CAR_BAO  ? 'active' : ''}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 28 44" style="width: 22px; height: 37px;">
        <g fill="#fff" stroke="#000" stroke-width=".5"><g>
                <rect width="28" height="44" rx="4" stroke="none"></rect>
                <rect x=".25" y=".25" width="27.5" height="43.5" rx="3.75" fill="none"></rect>
            </g>
            <g transform="translate(2)"><rect width="24" height="34" rx="2" stroke="none"></rect>
                <rect x=".25" y=".25" width="23.5" height="33.5" rx="1.75" fill="none"></rect>
            </g>
            <g transform="translate(6 36)">
                <rect width="16" height="8" rx="2" stroke="none"></rect>
                <rect x=".25" y=".25" width="15.5" height="7.5" rx="1.75" fill="none"></rect>
            </g>
        </g>
    </svg>
    <input type="checkbox" class="js-item-add {{ in_array($i, $tickers) ? "js-item-ticker"  : "" }}" name="tickets[]" {{ $vehicle->v_action == \Modules\Guest\Entities\Vehicle::TYPE_CAR_BAO  ? 'checked' : ''}}
    {{ in_array($i, $tickers) ? "checked disabled"  : "" }} value="{{ $i }}">
</label>