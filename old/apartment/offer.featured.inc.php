<div class="featured-offer-col">
  <div class="featured-offer-front">
    <div class="featured-offer-photo">

          <img class="room" data-wb="role=thumbnail&width=720&height=538" src="0" alt="">

      <div class="type-container">
        <div class="estate-type"  data-wb="role=formdata&form=complex&item={{complex}}">{{name}}</div>
      </div>
    </div>
    <div class="featured-offer-text">
      <h4 class="featured-offer-title" data-wb="role=tree&item=types&branch=units&branch={{type}}"><span>{{name}}</span></h4>
      <p>{{wbGetWords({{text}},10)}} [...]</p>
    </div>
    <div class="featured-offer-params">
      <div class="featured-area">
        <img src="images/area-icon.png" alt="" /><span>{{square}}м</span><sup>2</sup>
      </div>
      <div class="featured-rooms" data-wb="role=tree&item=types&branch=units&branch={{type}}">
        <img src="images/rooms-icon.png" alt="" /><span>{{data.alt}}</span>
      </div>
    </div>
    <div class="featured-price">
      {{price}} т.р.
    </div>
  </div>
  <div class="featured-offer-back">
    <div id="featured-map1" class="featured-offer-map"></div>
      <div class="button">
      <a href="/units/{{id}}/" class="button-primary">
        <span>подробно</span>
        <div class="button-triangle"></div>
        <div class="button-triangle2"></div>
        <div class="button-icon"><i class="fa fa-search"></i></div>
      </a>
    </div>
  </div>
</div>
