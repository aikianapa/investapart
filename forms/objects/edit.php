<html>
<div class="modal fade effect-scale show removable" data-backdrop="static" id="{{_form}}ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Объекты</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">


        <form id="{{_form}}EditForm" class="form-horizontal" role="form">
          <div class="form-group row">
            <label class="col-sm-3 form-control-label">{{_lang.name}}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" placeholder="{{_lang.name}}" required>
            </div>
          </div>
          <div class="nav-active-primary">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#{{_form}}Descr" data-toggle="tab">{{_lang.prop}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#{{_form}}Map" data-toggle="tab">{{_lang.map}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#{{_form}}Buildings" data-toggle="tab">{{_lang.buildings}}</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#{{_form}}Text" data-toggle="tab">{{_lang.content}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#{{_form}}Images" data-toggle="tab">{{_lang.images}}</a>
              </li>
            </ul>
          </div>
          <div class="tab-content  p-a m-b-md">
            <br />
            <div id="{{_form}}Descr" class="tab-pane fade show active" role="tabpanel">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.address}}</label>
                <div class="col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control" name="address" placeholder="Адрес">
                    <div class="input-group-append" style="cursor:alias;">
                      <i class="input-group-text material-icons">location_searching</i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.district}}</label>
                <div class="col-sm-9">
                  <select wb-tree="item=city&branch=districts&parent=false&children=false" wb-change="#{{_form}}EditForm [name=metro]" placeholder="{{_lang.district}}"
                    name="district" class="form-control">
                    <option value="{{id}}">{{name}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.metro}}</label>
                <div class="col-sm-4">
                  <select wb-tree="item=city&branch=districts->%value%&parent=false&children=false&tpl=true" placeholder="{{_lang.metro}}"
                    name="metro" class="form-control">
                    <option value="{{id}}">{{name}}</option>
                  </select>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="metro_notice" placeholder="{{_lang.metro_notice}}">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.ready}}</label>
                <div class="col-5 col-sm-3">
                  <div class="input-group">
                    <input type="number" class="form-control text-right" name="quart" readonly>
                    <div class="input-group-append" style="cursor:alias;">
                      <span class="input-group-text">квартал</span>
                    </div>
                  </div>
                </div>
                <div class="col-7 col-sm-3">
                  <div class="input-group">
                    <input type="number" class="form-control text-right" name="year" readonly>
                    <div class="input-group-append" style="cursor:alias;">
                      <span class="input-group-text">год</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Цена</label>
                <div class="col-5 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">от</span>
                    </div>
                    <input type="number" class="form-control" name="price_min" readonly>
                  </div>
                </div>
                <div class="col-7 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">до</span>
                    </div>
                    <input type="number" class="form-control" name="price_max" readonly>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Площадь</label>
                <div class="col-5 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">от</span>
                    </div>
                    <input type="number" class="form-control" name="square_min" readonly>
                  </div>
                </div>
                <div class="col-7 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">до</span>
                    </div>
                    <input type="number" class="form-control" name="square_max" readonly>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.levels}}</label>
                <div class="col-6 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">от</span>
                    </div>
                    <input type="number" readonly class="form-control" name="levels_min">
                  </div>
                </div>
                <div class="col-6 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-prepend" style="cursor:alias;">
                      <span class="input-group-text">до</span>
                    </div>
                    <input type="number" readonly class="form-control" name="levels_max">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">{{_lang.visible}}</label>
                <div class="col-sm-3">
                  <label class="switch switch-success">
                    <input wb="module=switch" name="active">
                    <span></span>
                  </label>
                </div>
              </div>


            </div>

            <div id="{{_form}}Map" class="tab-pane fade" role="tabpanel">
              <div class="form-group row">
                <div class="col-12">
                  <input wb="module=yamap" name="geopos" center="59.918077 30.304899" zoom="16">
                </div>
              </div>
            </div>

            <div id="{{_form}}Text" class="tab-pane fade" role="tabpanel">
              <wb-module wb="{'module':'jodit'}" name="text" />
            </div>

            <div id="{{_form}}Buildings" class="tab-pane fade" role="tabpanel">
                <input wb-tree name="buildings">
            </div>

            <div id="{{_form}}Images" class="tab-pane fade" role="tabpanel">
              <input wb='{"module":"filepicker","mode":"multi","path":"/uploads/{{_form}}/{{_item}}/"}' name="images">
            </div>           
        </form>

            </div>
            <div class="modal-footer">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<script src="/forms/objects/objects.js"></script>
<wb-lang">
[en]
  title		= "Edit complex"
	name            = "Name"
  geopos = "Geo position"
  address = "Address"
  district = "District"
  metro = "Metro"
  metro_notice = ""
  ready = "Ready"
  quart = "Quart"
  year = "Year"
  levels = "Levels"
  buildings = "Buildings"
	header		= "Header"
	descr		= "Description"
	visible		= "Visible"
	keywords	= "Keywords"
	prop		= "Properties"
	content		= "Content"
	images		= "Images"
  map = "Map"
[ru]
        title		= "Комплекс"
	name            = "Наименование"
  geopos = "Геопозиция"
  address = "Адрес"
  district = "Район"
  metro = "Метро"
  metro_notice = "Расстояние до метро"
  ready = "Срок сдачи"
  quart = "Квартал"
  year = "Год"
  levels = "Этажей"
  buildings = "Корпуса"

	header		= "Заголовок"
	descr		= "Описание"
	visible		= "Отображать"
	keywords	= "Ключевые слова"
	prop		= "Характеристики"
	content		= "Контент"
	images		= "Изображения"
  map = "Карта"
</wb-lang>

</html>