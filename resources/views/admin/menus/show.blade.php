@extends('layouts.app')
@section('title') Modify Menu {{ $menu->name }} @stop

@section('css')
@endsection

@section('content')
  <<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">{{ $menu->name }} Settings</div>
        <div class="panel-body">

            <div class="row">
                  <div class="col-md-6">
                      <div class="panel panel-default">
                          <div class="panel-heading clearfix"><h5 class="pull-left">Menu</h5>
                              <div class="pull-right">
                                  <button id="btnReload" type="button" class="btn btn-default">
                                      <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button>
                              </div>
                          </div>
                          <div class="panel-body" id="cont">
                              <ul id="myEditor" class="sortableLists list-group">
                              </ul>
                          </div>
                      </div>
                      <div class="form-group">
                          <button id="btnOut" type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Output</button>
                          <button id="btnSave" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Save</button>
                      </div>
                      <div class="form-group"><textarea id="out" class="form-control" cols="50" rows="10"></textarea>
                      </div>
                  </div>
                  <style>
                    .menu-first-hidden-area{display: none;}
                  </style>
                  <div class="col-md-6">
                      <div class="panel panel-primary">
                          <div class="panel-heading">Edit item</div>
                          <div class="panel-body">
                              <form id="frmEdit" class="form-horizontal">
                                  <div class="form-group menu-type-field-area">
                                      <label for="href" class="col-sm-2 control-label">Type</label>
                                      <div class="col-sm-10">
                                          {!! Form::select('menu_type', \App\Menu::$menu_type, '', ['placeholder' => 'Select Type', 'class' => 'form-control item-menu', 'id' => 'menu_type']); !!}
                                      </div>
                                  </div>

                                  
                                  {{-- <div class="form-group">
                                      <label for="href" class="col-sm-2 control-label">Text(en)</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control item-menu" id="text_en" name="text_en" placeholder="Text(en)">
                                      </div>
                                  </div> --}}
                                  
                                  {{-- <div class="form-group menu-category-field-area menu-first-hidden-area">
                                      <label for="href" class="col-sm-2 control-label">Category</label>
                                      <div class="col-sm-10">
                                          {!! Form::select('cat_id', \App\BlogCategory::pluck('name', 'id'), '', ['placeholder' => 'Select Category', 'class' => 'form-control item-menu item-menu-category', 'id' => 'cat_id']); !!}
                                      </div>
                                  </div> --}}
                                  {{-- <div class="form-group menu-post-field-area menu-first-hidden-area">
                                      <label for="href" class="col-sm-2 control-label">Post</label>
                                      <div class="col-sm-10">
                                          {!! Form::select('post_id', [], '', ['placeholder' => 'Select Post', 'class' => 'form-control item-menu item-menu-post', 'id' => 'post_id']); !!}
                                      </div>
                                  </div>
                                  --}}
                                  <div class="form-group menu-page-field-area menu-first-hidden-area">
                                      <label for="href" class="col-sm-2 control-label">Page</label>
                                      <div class="col-sm-10">
                                          {!! Form::select('page_id', \App\Page::pluck('title', 'id'), '', ['placeholder' => 'Select Page', 'class' => 'form-control item-menu item-menu-page', 'id' => 'page_id']); !!}
                                      </div>
                                  </div> 

                                  <div class="form-group menu-text-field-area menu-first-hidden-area">
                                      <label for="text" class="col-sm-2 control-label">Text</label>
                                      <div class="col-sm-10">
                                          <div class="input-group">
                                              <input type="text" class="form-control item-menu item-menu-text" name="text" id="text" placeholder="Menu Name">
                                              <div class="input-group-btn">
                                                  <button type="button" id="myEditor_icon" class="btn btn-default" data-iconset="fontawesome"></button>
                                              </div>
                                              <input type="hidden" name="icon" class="item-menu">
                                          </div>
                                      </div>
                                  </div>


                                  <div class="form-group menu-url-field-area menu-first-hidden-area">
                                      <label for="href" class="col-sm-2 control-label">URL</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control item-menu item-menu-url" id="href" name="href" placeholder="URL">
                                      </div>
                                  </div>
                                  

                                  

                                  
                                  <div class="form-group">
                                      <label for="target" class="col-sm-2 control-label">Target</label>
                                      <div class="col-sm-10">
                                          <select name="target" id="target" class="form-control item-menu">
                                              <option value="_self">Self</option>
                                              <option value="_blank">Blank</option>
                                              <option value="_top">Top</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label">Tooltip</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
                                      </div>
                                  </div>


                                  <div class="menu-slug">
                                    <input type="hidden" name="menu_slug" id="menu_slug" class="item-menu">
                                  </div><!--end of menu-slug -->
                              </form>
                          </div>
                          <div class="panel-footer">
                              <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fa fa-refresh"></i> Update</button>
                              <button type="button" id="btnAdd" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </div><!--/.row-->
@endsection

@section('head')
  <link href="/js/menu/bs-iconpicker/css/bootstrap-iconpicker.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css" rel="stylesheet">
@endsection

@section('bodyScope')
        {{-- <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script> --}}
        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
        <script src='//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js'></script>
        <script src='/js/menu/bs-iconpicker/js/iconset/iconset-fontawesome-4.7.0.min.js'></script>
        <script src='/js/menu/bs-iconpicker/js/bootstrap-iconpicker.js'></script>
        <script>
          // rodro feid show hide with condition
           var menuType = $('#menu_type');

          var menuFirstHiddenArea = $('.menu-first-hidden-area');

          var menuTextFieldArea = $('.menu-text-field-area'); // box area
          var itemMenuText = $('.item-menu-text'); // field

          var menuUrlFieldArea = $('.menu-url-field-area'); // box area
          var itemMenuUrl = $('.item-menu-url'); // field

          var menuPostFieldArea = $('.menu-post-field-area'); // box area
          var itemMenuPost = $('.item-menu-post'); // field

          var menuPageFieldArea = $('.menu-page-field-area'); // box area
          var itemMenuPage = $('.item-menu-page'); // field

          var menuTypeFieldArea = $('.menu-type-field-area'); // box area
          var itemMenuType = $('.item-menu-type'); // field

          var menuCategoryFieldArea = $('.menu-category-field-area'); // box area
          var itemMenuCategory = $('.item-menu-category'); // field
          

          menuType.on('change', function() {
            var selected_type = this.value;
            // '1' => 'Page',
            // '2' => 'Post',
            // '3' => 'Category',
            // '4' => 'Link'
            conditional_field_show_by_type(selected_type)
          });

          function conditional_field_show_by_type(selected_type){
            
              menuFirstHiddenArea.hide();

              if(selected_type == 1){
                // =========== PAGE ============= //
                 menuPageFieldArea.show();
              }

              if(selected_type == 2){
                // =========== Post ============= //
                 menuPostFieldArea.show();
              }

              if(selected_type == 3){
                // =========== Category ============= //
                 menuCategoryFieldArea.show();
              }

              if(selected_type == 4){
                // =========== link / Url ============= //
                 //menuLinkFieldArea.show();
                 menuUrlFieldArea.show();
              }
              menuTextFieldArea.show();
          };

          

          change_field_type_and_set_name(menuPageFieldArea);
          change_field_type_and_set_name(menuPostFieldArea);
          change_field_type_and_set_name(menuCategoryFieldArea);

          function change_field_type_and_set_name(type_field){
            type_field.on('change', function(){
               var selectedText = $(this).find("option:selected").text();
               itemMenuText.val(selectedText);
            })
          }

          function edit_with_conditional_field_show(data){
            var selected_type = data.menu_type;
            conditional_field_show_by_type(selected_type);
          }

        </script>
        <script src='/js/menu/jquery-menu-editor.js'></script>
        <script>
          var menu_id = {!! json_encode($menu->id) !!}
            jQuery(document).ready(function () {
                // menu items
                // var strjson = [{"href":"http://home.com","icon":"fa fa-home","text":"Home", "target": "_top", "title": "My Home"},{"icon":"fa fa-bar-chart-o","text":"Opcion2"},{"icon":"fa fa-cloud-upload","text":"Opcion3"},{"icon":"fa fa-crop","text":"Opcion4"},{"icon":"fa fa-flask","text":"Opcion5"},{"icon":"fa fa-map-marker","text":"Opcion6"},{"icon":"fa fa-search","text":"Opcion7","children":[{"icon":"fa fa-plug","text":"Opcion7-1","children":[{"icon":"fa fa-filter","text":"Opcion7-1-1"}]}]}];
                //icon picker options
                var iconPickerOptions = {searchText: 'Search..', labelHeader: '{0} of {1} Pages'};
                //sortable list options
                var sortableListOptions = {
                    placeholderCss: {'background-color': 'cyan'}
                };

                var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions, labelEdit: 'Edit'});
                editor.setForm($('#frmEdit'));
                editor.setUpdateButton($('#btnUpdate'));
                
                $('#btnReload').on('click', function () {
                    editor.setData(strjson);
                });

                $('#btnOut').on('click', function () {
                    var str = editor.getString();
                    $("#out").text(str);
                });

                $("#btnUpdate").click(function(){
                    editor.update();
                    Swal.fire({
                      position: 'top-end',
                      type: 'success',
                      title: 'Please Save Now',
                      showConfirmButton: false,
                      timer: 1500
                    })
                });

                $('#btnAdd').click(function(){
                    editor.add();
                });

                /** Rodro Setting **/




                category_pull_when_change();
                save_menu_settings_to_database();
                fetch_menu_settings_from_database();

                function fetch_menu_settings_from_database(){
                  $.getJSON('/admin/fetch_menu_settings/' + menu_id, {}, function(json, textStatus) {
                      // console.log(json);
                      editor.setData(json);
                      return;
                        /*optional stuff to do after success */
                    });
                }


                function save_menu_settings_to_database(){
                  $('#btnSave').on('click', function () {
                      var menu_settings = editor.getString();
                      // console.log(menu_settings);
                      $.post('/admin/save_menu_settings/' + menu_id, {menu_settings: menu_settings}, function(data, textStatus, xhr) {
                        if(data){
                          Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Saved',
                            showConfirmButton: false,
                            timer: 1500
                          })
                        }
                        /*optional stuff to do after success */
                        // console.log(data);
                        return;
                      });
                  });
                }


                function category_pull_when_change(){
                  $('#cat_id').on('change', function(e){
                    var self = $(this);
                    var cat_id = self.val();

                    if(cat_id){
                      $.getJSON('/admin/fetch_category/' + cat_id, {}, function(json, textStatus) {
                        if(json.name) $('#text').val(json.name);
                        if(json.name_en) $('#text_en').val(json.name_en);
                        if(json.slug) $('#menu_slug').val(json.slug);
                        return;
                          /*optional stuff to do after success */
                      });
                    }
                  })
                }
                
            });
        </script>
@endsection



