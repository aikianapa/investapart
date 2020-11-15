
var form = $("#objectsEditForm");
var addr = $(form).find("[name=address]:not(.finder)");
var yaed = $(form).find(".yamap_editor");
$(yaed).hide();
$(addr).on("change",function(){
      let finder = $(yaed).find("input.finder:last");
      console.log(finder);
      $(finder).val($(this).val()).trigger("change");
});