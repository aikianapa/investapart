<html>
<nav class="nav navbar navbar-expand-md col p-3">
    <a class="navbar-brand tx-bold tx-spacing--2 order-1" href="javascript:">{{_lang.title}}</a>
    <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="wd-20 ht-20 fa fa-ellipsis-v"></i>
    </button>

    <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-ajax="{'target':'#{{_form}}List','filter': 'clear'}">Все
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"
                    data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{'active':'on'}}">Активные</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"
                    data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{ 'active': '' } }">Архивные</a>
            </li>
        </ul>
        <form class="form-inline mg-t-10 mg-lg-0">
            <input class="form-control search-header" type="search" placeholder="Поиск..." aria-label="Поиск..."
                data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'name': {'$like' : '$value'} }, { 'metro': {'$like' : '$value'} }, { 'district': {'$like' : '$value'} }  ]} }">

            <button class="btn btn-success" type="button"
                data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'.{{_form}}-edit-modal'}">Создать</button>
        </form>
    </div>
</nav>

<div class="p-3">
    <div class="row">
        <div class="col-sm-3">
            <form id="{{_form}}FilterForm" class="form-horizontal thead-light shadow-sm rounded p-3 tx-13" role="form">
                <fieldset class="form-group">
                    <label for="">{{_lang.district}}</label>
                    <select wb-tree="item=city&branch=districts&parent=false&children=false&sort=name"
                        wb-change="#{{_form}}FilterForm [name=metro],#{{_form}}FilterForm [name=object]"
                        placeholder="{{_lang.district}}..." name="district" class="form-control">
                        <option value="{{id}}" data-district="{{id}}">{{name}}</option>
                    </select>
                </fieldset>

                <fieldset class="form-group">
                    <label for="">{{_lang.metro}}</label>
                    <select wb-tree="item=city&branch=districts->%district%&parent=false&children=false&sort=name"
                        wb-strict="false" wb-change="#{{_form}}FilterForm [name=object]"
                        placeholder="{{_lang.metro}}..." name="metro" class="form-control">
                        <option value="{{id}}" data-metro="{{id}}" data-district='%district%'>{{name}}</option>
                    </select>
                </fieldset>


                <fieldset class="form-group">
                    <label for="">{{_lang.objects}}</label>
                    <select wb-change="#{{_form}}FilterForm [name=building]" name="object" class="form-control"
                        placeholder="{{_lang.objects}}...">
                        <wb-foreach wb="table=objects"
                            wb-filter='{"district":"%district%","metro":"%metro%","active":"on"}' wb-strict="false">
                            <option value="{{id}}">{{name}}</option>
                        </wb-foreach>
                    </select>
                </fieldset>

                <fieldset class="form-group">
                    <label for="">{{_lang.building}}</label>
                    <select wb-tree="form=objects&item=%value%&field=buildings" name="building" class="form-control"
                        placeholder="{{_lang.building}}...">
                        <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
                    </select>
                </fieldset>

                <fieldset class="form-group">
                    <label for="">{{_lang.type}}</label>
                    <select wb-tree="item=types&branch=units&parent=false" placeholder="{{_lang.type}}..." name="type"
                        class="form-control">
                        <option value="{{id}}">{{name}}</option>
                    </select>
                </fieldset>
                <div class="row">
                        <button type="button" class="col btn btn-secondary m-3"
                            wb-change="filter=#{{_form}}FilterForm&target=#{{_form}}List&clear=true">{{_lang.clear}}</button>
                        <button type="button" class="col btn btn-primary m-3"
                            wb-change="filter=#{{_form}}FilterForm&target=#{{_form}}List">{{_lang.get_list}}</button>
                </div>
            </form>
        </div>
        <div class="col-sm-9">
            <div class="table-responsive table-striped rounded" id="{{_form}}ListFiltered">
                <table class="table table-lightborder tx-13">
                    <thead class="thead-light">
                        <tr>
                            <th>{{_lang.name}}</th>
                            <th>{{_lang.district}}</th>
                            <th class="text-center">{{_lang.type}}</th>
                            <th class="text-right">{{_lang.square}}</th>
                            <th class="text-right">{{_lang.price}}</th>
                            <th class="text-right"> {{_lang.visible}}</th>
                            <th class="text-right"> {{_lang.action}}</th>
                        </tr>
                    </thead>
                    <tbody id="{{_form}}List">
                        <wb-foreach wb="table={{_form}}&size={{_sett.page_size}}&sort=id&bind=cms.list.{{_form}}">
                            <tr data-watcher="item={{id}}&watcher=#{{_form}}List">
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

                                <td class="text-center">
                                    <span
                                        wb-tree="item=types&branch={{type}}&children=false"><span>{{name}}</span></span>
                                </td>
                                <td class="text-right">{{square}}</td>
                                <td class="text-right">{{price}}</td>
                                <td class="text-right">
                                    <label class="switch">
                                        <input wb-module="switch" name="active"
                                            onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active'})">
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-right">
                                    <a href="javascript:"
                                        data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{_id}}','html':'.{{_form}}-edit-modal'}"
                                        class="pos-absolute r-40"><i class="ri-file-edit-line"></i></a>
                                    <div class="dropdown dropright pos-absolute r-10 p-0 m-0"
                                        style="line-height: normal;">
                                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{_id}}','html':'.{{_form}}-edit-modal'}">Изменить</a>
                                            <a class="dropdown-item" href="javascript:"
                                                data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{_id}}','update':'cms.list.{{_form}}','html':'.{{_form}}-edit-modal'}">Удалить</a>
                                        </div>
                                    </div>

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