<section class="adv-search-section no-padding">

  <div id="yandex-map" class="offers-map">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AbzlI-3dPcfKP8Yba1v8v6K3iC6k01GrQ&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=false"></script>
    <style>
    ymaps {
      filter: saturate(0.8);
    }
    </style>
  </div>



  <form class="adv-search-form" method="post" action="/catalog" id="propertiesFilterForm">
    <div class="adv-search-cont">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-11 adv-search-icons">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs adv-search-tabs" role="tablist">
              <li role="presentation" class="active" data-toggle="tooltip" data-placement="top"
                title="По районам">
                <a href="#apartments" aria-controls="apartments" role="tab" data-toggle="tab"
                  id="adv-search-tab1"><i class="fa fa-building"></i></a>
              </li>
              <li role="presentation" data-toggle="tooltip" data-placement="top" title="По метро">
                <a href="#houses" aria-controls="houses" role="tab" data-toggle="tab"
                  id="adv-search-tab2"><i class="fa fa-home"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-1 visible-lg">
            <a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row tab-content">
          <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <select name="_filter[district][]" class="bootstrap-select" title="Районы:" multiple data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
                  data-watcher="change=#propertiesFilterForm [name='_filter[complex][]']" data-actions-box="true">
                  <option value="{{id}}">{{name}}</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-4">
                <select data-wb="role=foreach&form=complex&tpl=true" name="_filter[complex][]" class="bootstrap-select"
                  title="Жилой комплекс:" multiple data-actions-box="true" data-filter='{"district":"%value%"}'
                  data-wb-return='{"min":["price_min","square_min"],"max":["price_max","square_max"],"count":true,"data":["id","geopos"]}'
                  data-watcher="change=#propertiesFilterForm [name='_filter[type]']">
                  <option value="{{id}}">{{name}}</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-4">
                <select data-wb="role=tree&item=types&branch=units&parent=false&tpl=true" name="_filter[type]"
                  class="bootstrap-select" title="Тип:" multiple data-actions-box="true">
                  <option value="{{id}}">{{name}}</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="adv-search-range-cont">
                  <label for="slider-range-price1-value" class="adv-search-label">Цена:</label>
                  <span>т.р.</span>
                  <input type="text" id="slider-range-price1-value" readonly class="adv-search-amount">
                  <input type="hidden" name="_filter[price_min]" readonly>
                  <input type="hidden" name="_filter[price_max]" readonly>
                  <div class="clearfix"></div>
                  <div id="slider-range-price1" data-min="0" data-max="300000" class="slider-range"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4">
                <div class="adv-search-range-cont">
                  <label for="slider-range-area1-value" class="adv-search-label">Площадь:</label>
                  <span>m<sup>2</sup></span>
                  <input type="text" id="slider-range-area1-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-area1" data-min="0" data-max="180" class="slider-range"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4">
                <div class="adv-search-range-cont">
                  <label for="slider-range-bedrooms1-value" class="adv-search-label">Bedrooms:</label>
                  <input type="text" id="slider-range-bedrooms1-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-bedrooms1" data-min="1" data-max="10" class="slider-range"></div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="houses">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <select name="transaction2" class="bootstrap-select" title="Transaction:" multiple>
                  <option>For sale</option>
                  <option>For rent</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <select name="country2" class="bootstrap-select" title="Country:" multiple data-actions-box="true">

                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <select name="city2" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                  <option>New York</option>
                  <option>Los Angeles</option>
                  <option>Chicago</option>
                  <option>Houston</option>
                  <option>Philadelphia</option>
                  <option>Phoenix</option>
                  <option>Washington</option>
                  <option>Salt Lake City</option>
                  <option>Detroit</option>
                  <option>Boston</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <select name="location2" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                  <option>Some location 1</option>
                  <option>Some location 2</option>
                  <option>Some location 3</option>
                  <option>Some location 4</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="adv-search-range-cont">
                  <label for="slider-range-price2-value" class="adv-search-label">Price:</label>
                  <span>$</span>
                  <input type="text" id="slider-range-price2-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-price2" data-min="0" data-max="300000" class="slider-range"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="adv-search-range-cont">
                  <label for="slider-range-area2-value" class="adv-search-label">Area:</label>
                  <span>m<sup>2</sup></span>
                  <input type="text" id="slider-range-area2-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-area2" data-min="0" data-max="180" class="slider-range"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="adv-search-range-cont">
                  <label for="slider-range-bedrooms2-value" class="adv-search-label">Bedrooms:</label>
                  <input type="text" id="slider-range-bedrooms2-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-bedrooms2" data-min="1" data-max="10" class="slider-range"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="adv-search-range-cont">
                  <label for="slider-range-bathrooms2-value" class="adv-search-label">Bathrooms:</label>
                  <input type="text" id="slider-range-bathrooms2-value" readonly class="adv-search-amount">
                  <div class="clearfix"></div>
                  <div id="slider-range-bathrooms2" data-min="1" data-max="4" class="slider-range"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
            <button type="submit" class="button-primary pull-right">
              <span>Найти</span>
              <div class="button-triangle"></div>
              <div class="button-triangle2"></div>
              <div class="button-icon"><i class="fa fa-search"></i></div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
