<div class="element-content mt-2">
    <h5 class="element-header">
                     {{_lang.title}}
                     <button class="btn btn-sm btn-success pull-right" data-wb="role=ajax&url=/form/{{_form}}/edit/_new&append=#content">
                       <i class="fa fa-plus"></i> {{_lang.add}}
                     </button>
    </h5>
    <div class="element-box mt-3">
        <div class="table-responsive">
            <table class="table table-lightborder">
                <thead class="thead-dark">
                    <tr>
                        <th>{{_lang.name}}</th>
                        <th>{{_lang.district}}</th>
                        <th>{{_lang.square_min}}</th>
                        <th>{{_lang.price_min}}</th>
                        <th class="text-center"> {{_lang.visible}} </th>
                        <th class="text-right"> {{_lang.action}} </th>
                    </tr>
                </thead>
                <tbody data-wb="role=foreach&form={{_form}}&size={{_sett.page_size}}&sort=id" id="{{_form}}List">
                    <tr data-watcher="item={{id}}&watcher=#{{_form}}List">
                        <td class="nowrap">{{name}}</td>
                        <td class="nowrap" data-wb="role=tree&item=city&branch={{district}}&children=false">{{name}}</td>
                        <td class="nowrap">{{square_min}}</td>
                        <td class="nowrap">{{price_min}}</td>
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

<script type="text/locale">
[en]
        title		= "Items list"
	name            = "Name"
	header		= "Header"
	visible		= "Visible"
  district = "District"
	action		= "action"
  square_min = "Square from"
  price_min = "Price from"
        add             = "Add item"
[ru]
        title		= "Список комплексов"
	name            = "Наименование"
	header		= "Заголовок"
	visible		= "Отображать"
  district = "Район"
	action		= "Действие"
  add             = "Добавить запись"
  square_min = "Площадь от"
  price_min = "Цена от"
</script>
