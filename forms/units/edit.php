<html>
<div class="modal fade effect-scale show removable" data-backdrop="static" id="{{_form}}ModalEdit" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{_lang.title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="{{_form}}EditForm" class="form-horizontal" role="form">

                    <div class="form-group row">
                        <label class="col-6 col-sm-3 form-control-label">Отображать</label>
                        <div class="col-6 col-sm-3">
                            <label class="switch">
                                <input wb-module="switch" name="active">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-6 col-sm-3 form-control-label">{{_lang.complex}}</label>
                        <div class="col-6 col-sm-3">
                            <select placeholder="{{_lang.complex}}" name="object" class="form-control" wb-change='#{{_form}}EditForm [name=building]'
                                require>
                                <wb-foreach wb="table=objects">
                                    <option value="{{id}}">{{name}} <b wb-if='"{{active}}"==""'>×</b></option>
                                </wb-foreach>
                            </select>
                        </div>

                        <label class="col-6 col-sm-3 form-control-label">{{_lang.building}}</label>
                        <div class="col-6 col-sm-3">
                            <select wb-tree="table=objects&item=%value%&field=buildings" name="building" class="form-control" placeholder="{{_lang.building}}"
                                required wb-change='#{{_form}}EditForm [name=section]'>
                                <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-6 col-sm-3 form-control-label">{{_lang.type}}</label>
                        <div class="col-6 col-sm-3">
                            <select wb-tree="item=types&branch=units&parent=false" required placeholder="{{_lang.type}}" name="type" class="form-control">
                                <option value="{{id}}">{{name}}</option>
                            </select>
                        </div>

                        <label class="col-6 col-sm-3 form-control-label">{{_lang.section}}</label>
                        <div class="col-6 col-sm-3">
                            <select name="section" class="form-control">
                                <wb-foreach wb="count=%sections%">
                                    <option value="{{id}}">{{id}}</option>
                                </wb-foreach>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-6 col-sm-3 form-control-label">{{_lang.square}}</label>
                        <div class="col-6 col-sm-3">
                            <input type="number" class="form-control" name="square" step="0.01" placeholder="{{_lang.square}}">
                        </div>
                        <label class="col-6 col-sm-3 form-control-label">{{_lang.price}}</label>
                        <div class="col-6 col-sm-3">
                            <input type="number" class="form-control" name="price" placeholder="{{_lang.price}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-6 col-sm-3 form-control-label">{{_lang.finish}}</label>
                        <div class="col-6 col-sm-3">
                            <label class="switch">
                                <input wb-module="switch" name="finish">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <!-- required bootstrap js -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#{{_form}}EditForm-tab1">Описание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{_form}}EditForm-tab2">Изображения</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div id="{{_form}}EditForm-tab1" class="tab-pane fade show active">
                            <fieldset class="form-group">
                                <wb-module wb="{'module':'jodit'}" name="text" />
                            </fieldset>
                        </div>
                        <div id="{{_form}}EditForm-tab2" class="tab-pane fade">
                            <fieldset>
                                <input wb='{"module":"filepicker","mode":"multi","path":"/uploads/{{_form}}/{{_item}}/"}' name="images">
                            </fieldset>
                        </div>
                    </div>



                </form>


            </div>
            <div class="modal-footer">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<wb-lang>
    [en]
    title = "Edit Unit"
    section = "Section"
    finish = "Finish"
    square = "Square"
    price = "Price"
    type = "Type"
    complex = "Complex"
    building = "Building"

    [ru]
    title = "Квартира"
    section = "Секция"
    finish = "С отделкой"
    square = "Площадь"
    price = "Цена"
    type = "Тип"
    complex = "Комплекс"
    building = "Корпус"

</wb-lang>

</html>