<h3 class="sidebar-title">ФИЛЬТР<span class="special-color">.</span></h3>
<form id="propertiesFilterForm">
<div class="title-separator-primary"></div>

<div class="sidebar-select-cont">
  <select name="district" class="bootstrap-select" title="Районы:" multiple  data-actions-box="true"
    data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
    data-watcher="change=#propertiesFilterForm [name=complex]">
    <option value="{{id}}">{{name}}</option>
  </select>
  <select data-wb="role=foreach&form=complex&tpl=true" name="complex" class="bootstrap-select" title="Жилой комплекс:" multiple data-actions-box="true">
    <option value="{{id}}">{{name}}</option>
  </select>
  <select data-wb="role=tree&item=types&branch=units&parent=false" name="type" class="bootstrap-select" title="Тип:" multiple data-actions-box="true">
    <option value="{{id}}">{{name}}</option>
  </select>
  <select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
    <option>Some location 1</option>
    <option>Some location 2</option>
    <option>Some location 3</option>
    <option>Some location 4</option>
  </select>
</div>
<div class="adv-search-range-cont">
  <label for="slider-range-price-sidebar-value" class="adv-search-label">Price:</label>
  <span>$</span>
  <input type="text" id="slider-range-price-sidebar-value" readonly class="adv-search-amount">
  <div class="clearfix"></div>
  <div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range"></div>
</div>
<div class="adv-search-range-cont">
  <label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
  <span>m<sup>2</sup></span>
  <input type="text" id="slider-range-area-sidebar-value" readonly class="adv-search-amount">
  <div class="clearfix"></div>
  <div id="slider-range-area-sidebar" data-min="0" data-max="180" class="slider-range"></div>
</div>
<div class="adv-search-range-cont">
  <label for="slider-range-bedrooms-sidebar-value" class="adv-search-label">Bedrooms:</label>
  <input type="text" id="slider-range-bedrooms-sidebar-value" readonly class="adv-search-amount">
  <div class="clearfix"></div>
  <div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
</div>
<div class="adv-search-range-cont">
  <label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Bathrooms:</label>
  <input type="text" id="slider-range-bathrooms-sidebar-value" readonly class="adv-search-amount">
  <div class="clearfix"></div>
  <div id="slider-range-bathrooms-sidebar" data-min="1" data-max="4" class="slider-range"></div>
</div>
<div class="sidebar-search-button-cont">
  <a href="javascript:void(0);" class="button-primary" data-watcher="filter=#propertiesList&tpl=false">
    <span>search</span>
    <div class="button-triangle"></div>
    <div class="button-triangle2"></div>
    <div class="button-icon"><i class="fa fa-search"></i></div>

  </a>
</div>
</form>
