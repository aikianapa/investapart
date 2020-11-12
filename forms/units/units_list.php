<div class="element-content mt-2">
    <h5 class="element-header">
                     {{_lang.title}}
                     <button class="btn btn-sm btn-success pull-right" data-wb="role=ajax&url=/form/{{_form}}/edit/_new&append=#content">
                       <i class="fa fa-plus"></i> {{_lang.add}}
                     </button>
    </h5>
    <div class="element-box mt-3">
        <div class="row">
              <div class="col-sm-3">
                <form id="{{_form}}FilterForm" class="form-horizontal" role="form">

                    <fieldset class="form-group">
                      <label for="">{{_lang.district}}</label>
                      <select data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
                        data-watcher="change=#{{_form}}FilterForm [name=complex]" placeholder="{{_lang.district}}"
                        name="district" class="form-control">
                        <option value="{{id}}">{{name}}</option>
                      </select>
                    </fieldset>



                    <fieldset class="form-group">
                      <label for="">{{_lang.complex}}</label>
                      <select data-wb="role=foreach&form=complex&tpl=true" data-wb-if='active="on"'
                      data-filter='{"district":"%value%"}'
                      placeholder="{{_lang.complex}}" name="complex" class="form-control"
                      data-watcher='change=#{{_form}}FilterForm [name=building]'  >
                        <option value="{{id}}">{{name}}</option>
                      </select>
                    </fieldset>

                    <fieldset class="form-group">
                      <label for="">{{_lang.building}}</label>
                      <select data-wb="role=tree&form=complex&item=%value%&field=buildings&tpl=true" name="building"
                              class="form-control" placeholder="{{_lang.building}}">
                        <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
                      </select>
                    </fieldset>

                    <fieldset class="form-group">
                      <label for="">{{_lang.type}}</label>
                      <select data-wb="role=tree&item=types&branch=units&parent=false" placeholder="{{_lang.type}}"
                        name="type" class="form-control">
                        <option value="{{id}}">{{name}}</option>
                      </select>
                    </fieldset>

                    <div class="btn-group" role="group" aria-label="Button group">
                      <button type="button" class="btn btn-primary mr-3" data-watcher="filter=#{{_form}}ListFiltered&tpl=false">{{_lang.get_list}}</button>
                      <button type="button" class="btn btn-secondary"  data-watcher="filter=#{{_form}}ListFiltered&tpl=false&clear=true">{{_lang.clear}}</button>
                    </div>
                </form>
              </div>
              <div class="col-sm-9">
                <div class="table-responsive" data-wb="role=formdata&tpl=true" id="{{_form}}ListFiltered">
                  <table class="table table-lightborder">
                      <thead class="thead-dark">
                          <tr>
                              <th>{{_lang.name}}</th>
                              <th>{{_lang.district}}</th>
                              <th class="text-center">{{_lang.type}}</th>
                              <th class="text-right">{{_lang.square}}</th>
                              <th class="text-right">{{_lang.price}}</th>
                              <th class="text-center"> {{_lang.visible}} </th>
                              <th class="text-right"> {{_lang.action}} </th>
                          </tr>
                      </thead>
                      <tbody data-wb="role=foreach&form={{_form}}&size={{_sett.page_size}}&sort=id" id="{{_form}}List">
                          <tr data-watcher="item={{id}}&watcher=#{{_form}}List">
                              <td data-wb="role=formdata&form=complex&item={{complex}}" class="nowrap">{{name}}</td>
                              <td data-wb="role=formdata&form=complex&item={{complex}}" class="nowrap">
                                <span data-wb="role=tree&item=city&branch=districts->{{district}}&children=false"><span>{{name}}</span></span>
                              </td>
                              <td class="text-center" data-wb="role=tree&item=types&branch={{type}}&children=false">{{name}}</td>
                              <td class="text-right">{{square}}</td>
                              <td class="text-right">{{price}}</td>
                              <td class="text-center">
                                <label class="switch">
                                  <input type="checkbox" name="active" data-wb="role=save&form={{_form}}&item={{id}}&field=active">
                                  <span></span>
                                </label>
                              </td>
                              <td class="text-right"  data-wb="role=include&form=common_actions"></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              </div>
        </div>
    </div>
</div>

<script type="text/locale">
[en]
  title		= "Units list"
	name            = "Name"
	type		= "Type"
	visible		= "Visible"
  district = "District"
	action		= "action"
  square = "Square from"
  price = "Price from"
  add             = "Add item"
  section = "Section"
  finish = "Finish"
  complex = "Complex"
  building = "Building"
  get_list = "Get list"
  clear = "Clear"
[ru]
  title		= "Список квартир"
	name    = "Наименование ЖК"
	type		= "Тип"
	visible		= "Отображать"
  district = "Район"
	action		= "Действие"
  add             = "Добавить запись"
  section = "Секция"
  finish = "С отделкой"
  square = "Площадь"
  price = "Цена"
  complex = "Комплекс"
  building = "Корпус"
  get_list = "Показать"
  clear = "Сбросить"
</script>
