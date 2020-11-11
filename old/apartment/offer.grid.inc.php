<div class="grid-offer">
  <div class="grid-offer-front">

    <div class="grid-offer-photo">
      <img class="room" data-wb="role=thumbnail&width=540&height=360" src="0" alt="">



      <div class="type-container">
        <div class="estate-type">{{name}}</div>
        <!--div class="transaction-type">sale</div-->
      </div>
    </div>
    <div class="grid-offer-text">
      <i class="fa fa-map-marker grid-offer-localization"></i>
      <div class="grid-offer-h4">
        <h4 class="grid-offer-title" data-wb="role=tree&item=city&branch=districts->{{district}}&children=false"><span>{{name}}</span></h4>
      </div>
      <div class="clearfix"></div>
      <p>{{wbGetWords({{text}},10)}} [...]</p>
      <div class="clearfix"></div>
    </div>
    <div class="price-grid-cont">
      <div class="grid-price-label pull-left">Цена от:</div>
      <div class="grid-price pull-right">
        {{price_min}} т.р.
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="grid-offer-params">
      <div class="grid-area">
        <img src="images/area-icon.png" alt="" /><span>{{square}}м</span><sup>2</sup>
      </div>
      <div class="grid-rooms" data-wb="role=tree&item=types&branch={{type}}">
        <img src="images/rooms-icon.png" alt="" /><span>{{data.alt}}</span>
      </div>
      <div class="grid-baths">
        <img src="images/bathrooms-icon.png" alt="" />1
      </div>
    </div>
  </div>
  <div class="grid-offer-back">
    <div id="grid-map1" class="grid-offer-map"></div>
    <div class="button">
      <a href="estate-details-right-sidebar.html" class="button-primary">
        <span>подробно</span>
        <div class="button-triangle"></div>
        <div class="button-triangle2"></div>
        <div class="button-icon"><i class="fa fa-search"></i></div>
      </a>
    </div>
  </div>
</div>
