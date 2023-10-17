@extends('homepage.master.header')
@section('title', 'Projects')
@section('body')
@include('homepage.master.navbar')
<section id="projects">
    <div class="container">
        <div class="projects_box">
            <div class="projects_box_left">
                <h1>Projects</h1>
            </div>
            <div class="projects_box_rigth position-relative">
                <div class="searchbox">
                    <label for="search_project" class="project_label">
                        <span class="material-icons">
                            search
                        </span>
                    </label>
                    <input type="text" name="search_project" id="search_project" class="project_input" placeholder="Write to search">
                </div>
                <div class="codefitlter">
                    <label for="code_filter" class="project_label" >Code</label>
                    <select name="code_filter" id="code_filter" class="project_input">
                        <option value="default">code</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="projects_template">
                    <div class="projects_template_heading">
                        <div class="projects_template_heading_tag_box">
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag more">
                                MORE +
                            </div>
                        </div>
                    </div>
                    <div class="projects_template_footer position-relative">
                        <div class="projects_template_footer_left">
                            <div class="projects_template_footer_title">Beyond two Souls</div>
                            <div class="projects_template_footer_desc">An Application that is</div>
                        </div>
                        <div class="projects_template_footer_right">
                            <a href="" class="project_link">DISCOVER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="projects_template">
                    <div class="projects_template_heading">
                        <div class="projects_template_heading_tag_box">
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag more">
                                MORE +
                            </div>
                        </div>
                    </div>
                    <div class="projects_template_footer position-relative">
                        <div class="projects_template_footer_left">
                            <div class="projects_template_footer_title">Beyond two Souls</div>
                            <div class="projects_template_footer_desc">An Application that is</div>
                        </div>
                        <div class="projects_template_footer_right">
                            <a href="" class="project_link">DISCOVER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="projects_template">
                    <div class="projects_template_heading">
                        <div class="projects_template_heading_tag_box">
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag more">
                                MORE +
                            </div>
                        </div>
                    </div>
                    <div class="projects_template_footer position-relative">
                        <div class="projects_template_footer_left">
                            <div class="projects_template_footer_title">Beyond two Souls</div>
                            <div class="projects_template_footer_desc">An Application that is</div>
                        </div>
                        <div class="projects_template_footer_right">
                            <a href="" class="project_link">DISCOVER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="projects_template">
                    <div class="projects_template_heading">
                        <div class="projects_template_heading_tag_box">
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag language">
                                HTML
                            </div>
                            <div class="project_tag more">
                                MORE +
                            </div>
                        </div>
                    </div>
                    <div class="projects_template_footer position-relative">
                        <div class="projects_template_footer_left">
                            <div class="projects_template_footer_title">Beyond two Souls</div>
                            <div class="projects_template_footer_desc">An Application that is</div>
                        </div>
                        <div class="projects_template_footer_right">
                            <a href="" class="project_link">DISCOVER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('homepage.master.footer')
@endsection
