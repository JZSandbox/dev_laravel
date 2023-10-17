@extends('layouts.app')
@section('dashboardtitle', 'Fryderyk Szafarczyk: Dashboard')
@section('dashboardheading', 'Projects')
@section('content')
    <div class="container">
        <div class="dashboard_body">
            <div class="dashboard_body_heading">
                <div class="dashboard_body_heading_left">
                    Manager your Projects | Tags
                </div>
                <div class="dashboard_body_heading_right">
                    <div class="btn btn-cstm-primary openmodal" data-bs-toggle="modal" href="#createProject">Create Project</div>
                    <div class="btn btn-cstm-primary openmodal" data-bs-toggle="modal" href="#createTag">Create Tag</div>
                </div>
            </div>
            <div class="dashboard_body_inner">

            </div>
            <div class="dashboard_body_footer">
                -
            </div>
        </div>
    </div>

    <!-- Modal:Project -->
    <div class="modal fade dev_modal" id="createProject" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Create Project</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dashboard_form_group">
                    <label for="title" class="dashboard_form_label">Title</label>
                    <input type="text" name="title" id="title" class="dashboard_form_input">
                </div>
                <div class="dashboard_form_group">
                    <label for="desc" class="dashboard_form_label">Description</label>
                    <input type="text" name="desc" id="desc" class="dashboard_form_input">
                </div>
                <div class="dashboard_form_group">
                    <label for="content" class="dashboard_form_label">Content</label>
                    <input type="text" name="content" id="content" class="dashboard_form_input">
                </div>
                <div class="dashboard_form_group">
                    <label for="image_1" class="dashboard_form_label"></label>
                    <input type="file" name="image_1" id="image_1" class="dashboard_form_input">
                </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-cstm-primary" id="projectCreate">Create</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal:Tag -->
      <div class="modal fade dev_modal" id="createTag" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Create Tag</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dashboard_form_group">
                    <label for="tagtitle" class="dashboard_form_label">Name</label>
                    <input type="text" name="tagtitle" id="tagtitle" class="dashboard_form_input">
                </div>
                <div class="dashboard_form_group">
                    <label for="tagdesc" class="dashboard_form_label">Description</label>
                    <input type="text" name="tagdesc" id="tagdesc" class="dashboard_form_input">
                </div>
                <div class="dashboard_form_group">
                    <label for="tagcolor" class="dashboard_form_select">Typ</label>
                    <select name="tagcolor" id="tagcolor" class="dashboard_form_input">
                        <option value="red">Framework</option>
                        <option value="blue">Language</option>
                        <option value="green">Programm</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-cstm-primary" id="projectTag">Create</button>
            </div>
          </div>
        </div>
      </div>
@endsection
