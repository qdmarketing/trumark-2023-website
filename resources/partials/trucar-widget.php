<script>
    function doSubmitUsed() {
        //alert('Used');
        var errMsg = document.getElementById('errorMsg2');
        errMsg.style.color = "transparent";

        var make = document.getElementById('makeName').value;
        var location = document.getElementById('postalCode2').value;
        var referrerID = document.getElementById('referrer_id2').value;
        var searchRadius = 75;

        if (isValidZip(location, 'usedcar')) {
            var path = document.getElementById('TrueCarUsedSearch').action + '/' + make + '/location-' + location + '?search_radius=' + searchRadius + '&referrer_id=' + referrerID;
            window.open(path, '_blank');
        } else {
            var errMsg = document.getElementById('errorMsg2');
            errMsg.style.display = "inline-block";
            errMsg.style.color = "red";
        }
    }

    function doSubmitNew() {
        //alert("New");
        var errMsg = document.getElementById('errorMsg1');
        errMsg.style.color = "transparent";
        var make = document.getElementById('makeId').value;
        var location = document.getElementById('postalCode1').value;
        var referrerID = document.getElementById('referrer_id1').value;
        var searchRadius = 75;
        if (isValidZip(location, 'newcar')) {
            var path = document.getElementById('TrueCarNewSearch').action + '?makeId=' + make + '&postalCode=' + location + '&referrer_id=' + referrerID;
            window.open(path, '_blank');
        } else {
            var errMsg = document.getElementById('errorMsg1');
            errMsg.style.display = "inline-block";
            errMsg.style.color = "red";
        }
    }

    function isValidZip(location, cartype) {
        if (isNaN(location) || location.length != 5) {
            return false;
        }
        /*if (cartype === 'usedcar') {
            var theUrl = "https://maps.googleapis.com/maps/api/geocode/json?components=country:US|postal_code:" + location + "";
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open("GET", theUrl, false); // false for synchronous request
            xmlHttp.send(null);
            if (xmlHttp.responseText.indexOf("<Error>") == -1) {
                var data = JSON.parse(xmlHttp.responseText);
                if (data.status === "OK") {
                    return true;
                }
                return false;
            }
            return false;
        }
        else if (cartype ==='newcar'){
            return true;
        }*/
        else {
            return true;
        }
    }
</script>

<div id="TrueCarWidget" class="wrap cf">
    <div class="searchDiv">
        <form action="https://trumarkonline.truecar.com/combined-new.service" id="TrueCarNewSearch">

            <div class="searchTab">
                <div>
                    <div class="searchHDR">Find a NEW Car</div>
                </div>
                <div>
                    <div>
                        <select id="makeId" name="makeId" class="select">
                            <!--<option value='>Select Model</option>-->
                            <option value='2214'>Acura</option>
                            <option value='4553'>Alfa Romeo</option>
                            <option value='2591'>Aston Martin</option>
                            <option value='2216'>Audi</option>
                            <option value='3232'>Bentley</option>
                            <option value='2217'>BMW</option>
                            <option value='2219'>Buick</option>
                            <option value='2221'>Cadillac</option>
                            <option value='2223'>Chevrolet</option>
                            <option value='2225'>Chrysler</option>
                            <option value='2227'>Dodge</option>
                            <option value='3864'>Ferrari</option>
                            <option value='4543'>FIAT</option>
                            <option value='2229'>Ford</option>
                            <option value='2231'>GMC</option>
                            <option value='2232'>Honda</option>
                            <option value='2235'>Hyundai</option>
                            <option value='2237'>Infiniti</option>
                            <option value='2240'>Jaguar</option>
                            <option value='2241'>Jeep</option>
                            <option value='2242'>Kia</option>
                            <option value='3054'>Lamborghini</option>
                            <option value='2244'>Land Rover</option>
                            <option value='2245'>Lexus</option>
                            <option value='2247'>Lincoln</option>
                            <option value='2293'>Lotus</option>
                            <option value='3435'>Maserati</option>
                            <option value='2249'>Mazda</option>
                            <option value='2251'>Mercedes-Benz</option>
                            <option value='2255'>MINI</option>
                            <option value='2256'>Mitsubishi</option>
                            <option value='2258'>Nissan</option>
                            <option value='2262'>Porsche</option>
                            <option value='4541'>Ram</option>
                            <option value='2614'>Rolls-Royce</option>
                            <option value='2268'>Scion</option>
                            <option value='4494'>Smart</option>
                            <option value='2269'>Subaru</option>
                            <option value='4529'>Tesla</option>
                            <option value='2273'>Toyota</option>
                            <option value='2275'>Volkswagen</option>
                            <option value='2277'>Volvo</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input type="text" id="postalCode1" name="postalCode" placeholder=" Enter Zip Code" value="" class="searchText" />
                    <span id="errorMsg1" class="errorMsg">*Invalid Zip</span>
                    <input type="hidden" id="referrer_id1" name="referrer_id" value="ZCUTRU0000" />
                </div>
                <div class="truecar-btn">
                    <input type="button" value="Find" onclick="doSubmitNew()" class="btn" />
                </div>
            </div>

        </form>
    </div>
    <div class="searchDiv2"></div>
    <div class="searchDiv">
        <form action="https://trumarkonline.truecar.com/used-cars-for-sale/listings" id="TrueCarUsedSearch">
            <div class="searchTab">
                <div>
                    <div class="searchHDR">Find a USED Car</div>
                </div>
                <div>
                    <div>
                        <select id="makeName" name="makeName" class="select">
                            <!--<option value='>Select Model</option>-->
                            <option value='acura'>Acura</option>
                            <option value='alfa-romeo'>Alfa-romeo</option>
                            <option value='aston-martin'>Aston-martin</option>
                            <option value='audi'>Audi</option>
                            <option value='bentley'>Bentley</option>
                            <option value='bmw'>Bmw</option>
                            <option value='bugatti'>Bugatti</option>
                            <option value='buick'>Buick</option>
                            <option value='cadillac'>Cadillac</option>
                            <option value='chevrolet'>Chevrolet</option>
                            <option value='chrysler'>Chrysler</option>
                            <option value='daewoo'>Daewoo</option>
                            <option value='dodge'>Dodge</option>
                            <option value='eagle'>Eagle</option>
                            <option value='ferrari'>Ferrari</option>
                            <option value='fiat'>Fiat</option>
                            <option value='ford'>Ford</option>
                            <option value='geo'>Geo</option>
                            <option value='gmc'>Gmc</option>
                            <option value='honda'>Honda</option>
                            <option value='hummer'>Hummer</option>
                            <option value='hyundai'>Hyundai</option>
                            <option value='infiniti'>Infiniti</option>
                            <option value='isuzu'>Isuzu</option>
                            <option value='jaguar'>Jaguar</option>
                            <option value='jeep'>Jeep</option>
                            <option value='kia'>Kia</option>
                            <option value='lamborghini'>Lamborghini</option>
                            <option value='land Rover'>Land Rover</option>
                            <option value='lexus'>Lexus</option>
                            <option value='lincoln'>Lincoln</option>
                            <option value='lotus'>Lotus</option>
                            <option value='maserati'>Maserati</option>
                            <option value='maybach'>Maybach</option>
                            <option value='mazda'>Mazda</option>
                            <option value='mclaren'>Mclaren</option>
                            <option value='mercedes-benz'>Mercedes-benz</option>
                            <option value='mercury'>Mercury</option>
                            <option value='mini'>Mini</option>
                            <option value='mitsubishi'>Mitsubishi</option>
                            <option value='nissan'>Nissan</option>
                            <option value='oldsmobile'>Oldsmobile</option>
                            <option value='plymouth'>Plymouth</option>
                            <option value='porsche'>Porsche</option>
                            <option value='ram'>Ram</option>
                            <option value='rolls-royce'>Rolls-royce</option>
                            <option value='rover'>Rover</option>
                            <option value='saab'>Saab</option>
                            <option value='saturn'>Saturn</option>
                            <option value='scion'>Scion</option>
                            <option value='smart'>Smart</option>
                            <option value='subaru'>Subaru</option>
                            <option value='suzuki'>Suzuki</option>
                            <option value='tesla'>Tesla</option>
                            <option value='toyota'>Toyota</option>
                            <option value='volkswagen'>Volkswagen</option>
                            <option value='volvo'>Volvo</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input type="text" id="postalCode2" name="postalCode" placeholder=" Enter Zip Code" value="" class="searchText" />
                    <span id="errorMsg2" class="errorMsg">*Invalid Zip</span>
                    <input type="hidden" id="referrer_id2" name="referrer_id" value="ZCUTRU0000" />
                </div>
                <div class="truecar-btn">
                    <input type="button" value="Find" onclick="doSubmitUsed()" class="btn" />
                </div>
            </div>
        </form>
    </div>
</div>