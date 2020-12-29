<html>

<div class="p-3">
    <div class="row">

        <div class="col-sm-9">
            <div class="table-responsive table-striped rounded" id="{{_form}}ListFiltered">
                <table class="table table-lightborder tx-13">
                    <thead class="thead-light">
                        <tr>
                            <th>{{_lang.name}}</th>
                            <th>{{_lang.district}}</th>

                        </tr>
                    </thead>
                    <tbody id="{{_form}}List">
                        <wb-foreach wb="table={{_form}}&size={{_sett.page_size}}&sort=id&bind=cms.list.{{_form}}">
                            <tr>
                                <td class="nowrap">
                                    <wb-data wb="table=objects&item={{object}}">
                                        {{name}}
                                    </wb-data>
                                </td>
                                <td class="nowrap">
                                    <wb-data wb="table=objects&item={{object}}">
                                        <span
                                            wb-tree="item=city&branch=districts->{{district}}&children=false"><span>{{name}}</span></span>
                                    </wb-data>
                                </td>
                            </tr>
                        </wb-foreach>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="{{_form}}-edit-modal"></div>
<wb-lang>
    [en]
    title = "Units list"
    name = "Name"
    type = "Type"
    metro = "Metro"
    visible = "Visible"
    district = "District"
    action = "action"
    square = "Square from"
    price = "Price from"
    add = "Add item"
    section = "Section"
    finish = "Finish"
    objects = "Complex"
    building = "Building"
    get_list = "Apply"
    clear = "Clear"
    [ru]
    title = "Список квартир"
    name = "Наименование ЖК"
    type = "Тип"
    metro = "Метро"
    visible = "Отображать"
    district = "Район"
    action = "Действие"
    add = "Добавить запись"
    section = "Секция"
    finish = "С отделкой"
    square = "Площадь"
    price = "Цена"
    objects = "Комплекс"
    building = "Корпус"
    get_list = "Применить"
    clear = "Сбросить"
</wb-lang>

</html>