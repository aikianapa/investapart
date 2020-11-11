<div class="list-offer">
  <div class="list-offer-left">
    <div class="list-offer-front">

      <div class="list-offer-photo">
        <img class="room" data-wb="role=thumbnail&width=540&height=360" src="0" alt="">
        <div class="type-container">
          <div class="estate-type">{{name}}</div>
          <!--div class="transaction-type">sale</div-->
        </div>
      </div>
      <div class="list-offer-params">
        <div class="list-area">
          <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
        </div>
        <div class="list-rooms">
          <img src="images/rooms-icon.png" alt="" />3
        </div>
        <div class="list-baths">
          <img src="images/bathrooms-icon.png" alt="" />1
        </div>
      </div>
    </div>
    <div class="list-offer-back">
      <div id="list-map4" class="list-offer-map"></div>
    </div>
  </div>
  <a class="list-offer-right-large" href="estate-details-right-sidebar.html">
    <div class="list-offer-text">
      <i class="fa fa-map-marker list-offer-localization hidden-xs"></i>
      <div class="list-offer-h4"  data-wb="role=tree&item=city&branch=districts->{{district}}&children=false">
        <h4 class="list-offer-title">{{name}}</h4>
      </div>
      <div class="clearfix"></div>
      {{wbGetWords({{text}},25)}} [...]
      <div class="clearfix"></div>
      <table class="table">
        <thead>
          <td class="hidden-xs">Квартир</td>
          <td>Комнат</td>
          <td>Площадь</td>
          <td>Цена</td>
        </thead>
        <tbody data-wb="role=foreach&from=unitslist">
          <tr>
            <td class="hidden-xs">{{count}}</td>
            <td data-wb="role=tree&item=types&branch=units->{{type}}"><span>{{name}}</span></td>
            <td>{{square_min}} - {{square_max}}</td>
            <td>{{price_min}} - {{price_max}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="price-list-cont">
      <div class="list-price">
        {{name}}
      </div>
    </div>
  </a>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
