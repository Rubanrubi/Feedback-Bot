@extends('layouts.user_master')

@section('title')

Dashboard | FDK BOT

@endsection
@section('content')

  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <!-- First Row -->
        <!-- Completed Options Pie Widgets -->
        <div class="col-xxl-3">
          <div class="row h-full" data-plugin="matchHeight">
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Tasks Completed
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          1,234
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                        data-barcolor="#57c7d4" data-size="100" data-barsize="10"
                        data-goal="86" aria-valuenow="86" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          86%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Points Completed
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          698
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                        data-barcolor="#62a8ea" data-size="100" data-barsize="10"
                        data-goal="62" aria-valuenow="62" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          62%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Cards Completed
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          1,358
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                        data-barcolor="#926dde" data-size="100" data-barsize="10"
                        data-goal="56" aria-valuenow="56" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          56%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Completed Options Pie Widgets -->
        <!-- Team Total Completed -->
        <div class="col-xxl-9">
          <div id="teamCompletedWidget" class="card card-shadow example-responsive">
            <div class="card-block p-20 pb-25">
              <div class="row pb-40" data-plugin="matchHeight">
                <div class="col-md-6">
                  <div class="counter text-left pl-10">
                    <div class="counter-label">Team Total Completed</div>-
                    <div class="counter-number-group text-truncate">
                      <span>1,439</span>
                      <span>86%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <ul class="list-inline mr-50">
                    <li class="list-inline-item">
                      Task Completed
                    </li>
                    <li class="list-inline-item">
                      Cards Completed
                    </li>
                  </ul>
                </div>
              </div>
              <div class="ct-chart"></div>
            </div>
          </div>
        </div>
        <!-- End Team Total Completed -->
        <!-- End First Row -->
        <!-- Second Row -->
        <!-- Personal -->
        <!-- <div class="col-xxl-4 col-xl-6 col-lg-6">
          <div id="personalCompletedWidget" class="card card-shadow pb-20">
            <div class="card-header card-header-transparent cover overlay">
              <img class="cover-image" src="https://getbootstrapadmin.com/remark/global/photos/view-7-960x640.jpg">
              <div class="overlay-panel overlay-background vertical-align">
                <div class="vertical-align-middle">
                  <a class="avatar" href="javascript:void(0)">
                    <img alt="" src="https://getbootstrapadmin.com/remark/global/portraits/4.jpg">
                  </a>
                  <div class="font-size-20 mt-10">MACHI</div>
                  <div class="font-size-14"><a href="https://getbootstrapadmin.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3aea2a0abaaa7a6b0aaa4ad83f2f5f0eda0acae">[email&#160;protected]</a></div>
                </div>
              </div>
            </div>
            <div class="card-block">
              <div class="row text-center mb-20">
                <div class="col-6">
                  <div class="counter">
                    <div class="counter-label total-completed">TOTAL COMPLETED</div>
                    <div class="counter-number red-600">1,628</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="counter">
                    <div class="counter-label">TOTAL TIME</div>
                    <div class="counter-number blue-600">17</div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <caption>TODAY STATISTIC</caption>
                  <tbody>
                    <tr>
                      <td>
                        Tasks Completed
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-blue-600" role="progressbar" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          </div>
                        </div>
                      </td>
                      <td>
                        90%
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Cards Completed
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-green-600" role="progressbar" aria-valuenow="86"
                            aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                          </div>
                        </div>
                      </td>
                      <td>
                        86%
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Points Completed
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-red-600" role="progressbar" aria-valuenow="68"
                            aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                          </div>
                        </div>
                      </td>
                      <td>
                        68%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> -->
        <!-- End Personal -->
        <!-- To Do List -->
        <!-- <div class="col-xxl-4 col-xl-6 col-lg-6">
          <div id="toDoListWidget" class="card card-shadow card-lg pb-20">
            <div class="card-header card-header-transparent">
              <div class="card-header-actions">
                <a id="addNewItemBtn" href="javascript:void(0)" class="add-item-toggle">
                <i class="icon wb-plus" aria-hidden="true"></i>
              </a>
              </div>
              <h5 class="card-title">TO DO LIST</h5>
            </div>
            <ul class="list-group h-500" data-plugin="scrollable">
              <div data-role="container">
                <div data-role="content">
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox" checked="checked">
                      <label class="item-title">Edit meeting record</label>
                    </div>
                    <div class="item-due-date">
                      <span>Tue,aug 25</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/3.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox" checked="checked">
                      <label class="item-title">Upload Photos and Video</label>
                    </div>
                    <div class="item-due-date">
                      <span>Tue,aug 25</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/1.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/5.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/4.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/6.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/7.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox" checked="checked">
                      <label class="item-title">Edit meeting record</label>
                    </div>
                    <div class="item-due-date">
                      <span>Tue,aug 25</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/3.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox" checked="checked">
                      <label class="item-title">Upload Photos and Video</label>
                    </div>
                    <div class="item-due-date">
                      <span>Tue,aug 25</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/1.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/5.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <div class="checkbox-custom checkbox-success checkbox-lg">
                      <input type="checkbox" name="checkbox">
                      <label class="item-title">Edit the blog system</label>
                    </div>
                    <div class="item-due-date">
                      <span>No due date</span>
                    </div>
                    <ul class="item-members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/4.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/6.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/7.jpg">
                        <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                          <i class="icon wb-pencil" aria-hidden="true"></i>
                        </button>
                      </li>
                    </ul>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div> -->
        <!-- End To Do List -->
        <!-- Recent Activity -->
        <!-- <div class="col-xxl-4">
          <div id="recentActivityWidget" class="card card-shadow card-lg pb-20">
            <div class="card-header card-header-transparent pb-10">
              <div class="card-header-actions">
                <span class="badge badge-default badge-round">VIEW ALL</span>
              </div>
              <h5 class="card-title">
                RECENT ACTIVITY
              </h5>
            </div>
            <ul class="timeline timeline-icon">
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-green-600">
                    <i class="icon wb-chat" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">Victor Erixon</span> assigned to a task
                    </div>
                    <div class="metas">
                      active 14 minutes ago
                    </div>
                    <ul class="members">
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/7.jpg">
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/6.jpg">
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="https://getbootstrapadmin.com/remark/global/portraits/8.jpg">
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-blue-600">
                    <i class="icon wb-image" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">Alex Bender</span>uploaded 3 photos
                    </div>
                    <div class="metas">
                      active 2 hours ago
                    </div>
                    <ul class="photos">
                      <li class="cover">
                        <img class="cover-image" src="https://getbootstrapadmin.com/remark/global/photos/animal-4-240x160.jpg">
                      </li>
                      <li class="cover">
                        <img class="cover-image" src="https://getbootstrapadmin.com/remark/global/photos/animal-2-240x160.jpg">
                      </li>
                      <li class="cover">
                        <img class="cover-image" src="https://getbootstrapadmin.com/remark/global/photos/animal-1-240x160.jpg">
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-cyan-600">
                    <i class="icon wb-file" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">Jeff Erixon</span>
                      invite you to attend topic discussion in
                      <span class="room-number">B205</span>
                      classroom
                    </div>
                    <div class="metas">
                      active 4 hours ago
                    </div>
                    <div class="tags">
                      As user experience designers we have to find the sweet spot
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-orange-600">
                    <i class="icon wb-map" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">Jeff Erixon</span>
                      invite you to attend topic discussion in
                      <span class="room-number">B205</span>
                      classroom
                    </div>
                    <div class="metas">
                      active 3 hours ago
                    </div>
                    <ul class="operates">
                      <li>
                        <button class="btn btn-outline btn-success btn-round">Accept</button>
                      </li>
                      <li>
                        <button class="btn btn-outline btn-danger btn-round">Refuse</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Recent Activity -->
        <!-- End Second Row -->
      </div>
    </div>
  </div> 
  <!-- End Page -->

  <!-- Add Item Dialog -->
  <!-- <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
    aria-hidden="true">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" role="form" action="#" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="moadl-title">Create New To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="title">Title:</label>
            <div class="col-sm-10">
              <input id="title" class="form-control" type="text" name="title" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm"
                />
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="people">People:</label>
            <div class="col-sm-10">
              <select id="people" multiple="multiple" class="plugin-selective">
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">
              Add This Item
            </button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
            Cancel
          </a>
          </div>
        </div>
      </form>
    </div>
  </div> -->
  <!-- End Add Item Dialog -->

  <!-- Edit Dialog -->
  <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
    role="dialog" tabindex="-1" data-show="false">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" action="#" method="post" role="form">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Edit To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editTitle">Title:
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="editTitle" name="editTitle">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm"
                  data-plugin="datepicker">
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editPeople">People:
            </label>
            <div class="col-sm-10">
              <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
            <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Edit Dialog -->



  
<div class="slidePanel slidePanel-right site-sidebar slidePanel-show" style="transform: translate3d(0%, 0px, 0px); display: none;">
      <div class="slidePanel-content site-sidebar-content"><!-- nav-tabs -->
<ul class="site-sidebar-nav nav nav-tabs nav-tabs-line" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#sidebar-userlist" role="tab">
      <i class="icon wb-chat" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sidebar-activity" role="tab">
      <i class="icon wb-profile" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sidebar-setting" role="tab">
      <i class="icon wb-settings" aria-hidden="true"></i>
    </a>
  </li>
</ul>

<div class="site-sidebar-tab-content tab-content">
  <div class="tab-pane fade active show scrollable is-enabled scrollable-vertical" id="sidebar-userlist" style="position: relative;">
    <div class="scrollable-container" style="height: 40em; width: 317px;">
      <div class="scrollable-content" style="width: 300px;">
        <h5 class="clearfix">FRIEND LIST
          <div class="float-right">
            <a class="text-action" href="javascript:void(0)" role="button">
              <i class="icon md-plus" aria-hidden="true"></i>
            </a>
            <a class="text-action" href="javascript:void(0)" role="button">
              <i class="icon md-more" aria-hidden="true"></i>
            </a>
          </div>
        </h5>
        <form class="my-20" role="search">
          <div class="input-search input-search-dark">
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Pages">
            <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
          </div>
        </form>

        <div class="list-group">
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-away">
                  <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Mary Adams</h5>
                <small>I am superman</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-busy">
                  <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Caleb Richards</h5>
                <small>I am tiger</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">June Lane</h5>
                <small>I am dog</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-off">
                  <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Edward Fletcher</h5>
                <small>I am kikty</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-busy">
                  <img src="https://randomuser.me/api/portraits/men/6.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Crystal Bates</h5>
                <small>I am cat</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/7.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Nathan Watts</h5>
                <small>I am monkey</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/8.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Heather Harper</h5>
                <small>I am snake</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/9.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Willard Wood</h5>
                <small>I am sheep</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-away">
                  <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Ronnie Ellis</h5>
                <small>I am lion</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-off">
                  <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Gwendolyn Wheeler</h5>
                <small>I am goldfish</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-busy">
                  <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Daniel Russell</h5>
                <small>I am rabbit</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/13.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Sarah Graves</h5>
                <small>I am dolphin</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/14.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Andrew Hoffman</h5>
                <small>I am horse</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="pr-20">
                <div class="avatar avatar-sm avatar-away">
                  <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="...">
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h5 class="mt-0 mb-5">Camila Lynch</h5>
                <small>I am dragon</small>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false"><div class="scrollable-bar-handle" style="height: 47.6177px;"></div></div></div>

  <div class="tab-pane fade scrollable is-enabled scrollable-vertical" id="sidebar-activity" style="position: relative;">
    <div class="scrollable-container" style="height: 326px; width: 17px;">
      <div class="scrollable-content" style="width: 0px;">
        <h5>RECENT ACTIVITY</h5>
        <ul class="timeline timeline-icon timeline-single timeline-simple timeline-feed">
          <li class="timeline-item">
            <div class="timeline-dot bg-pink-600">
              <i class="icon md-favorite" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2015-07-08">6 minutes ago</time>
              </small>
              <p>Melissa liked your activity Drinks At My Place.</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot bg-green-600">
              <i class="icon md-check" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2015-07-08">10 minutes ago</time>
              </small>
              <p>Tina is attending your activity Coffee @Starbucks</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot bg-green-600">
              <i class="icon md-comment" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2015-07-08">15 minutes ago</time>
              </small>
              <p>Melissa liked your activity Drinks At My Place.</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot">
              <i class="icon md-plus" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2015-07-08">20 minutes ago</time>
              </small>
              <p>Josh is now following you</p>
            </div>
          </li>
        </ul>

        <h5 class="mt-50">TASK STATISTICS</h5>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Features development</div>
            <div class="progress-label">70%</div>
          </div>
          <div class="progress" data-goal="70" data-plugin="progress">
            <div class="progress-bar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70" style="width: 70%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Uploading files</div>
            <div class="progress-label">30%</div>
          </div>
          <div class="progress" data-goal="60" data-plugin="progress">
            <div class="progress-bar progress-bar-success" aria-valuemin="0" aria-valuemax="100" aria-valuenow="30" style="width: 30%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Traffc Margins</div>
            <div class="progress-label">90%</div>
          </div>
          <div class="progress" data-goal="60" data-plugin="progress">
            <div class="progress-bar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90" style="width: 90%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide is-disabled" draggable="false"><div class="scrollable-bar-handle"></div></div></div>

  <div class="tab-pane fade scrollable is-enabled scrollable-vertical" id="sidebar-setting" style="position: relative;">
    <div class="scrollable-container" style="height: 326px; width: 17px;">
      <div class="scrollable-content" style="width: 0px;">
        <h5>GENERAL SETTINGS</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex flex-row flex-wrap align-items-center justify-content-between">
            <h5>Notifications</h5>
            <div>
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(30, 136, 229); border-color: rgb(30, 136, 229); box-shadow: rgb(30, 136, 229) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
            </div>
            <p>Our very own image-less pure CSS and retina compatible check box.</p>
          </li>
          <li class="list-group-item d-flex flex-row flex-wrap align-items-center justify-content-between">
            <h5>Show your emails</h5>
            <div>
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(30, 136, 229); border-color: rgb(30, 136, 229); box-shadow: rgb(30, 136, 229) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
            </div>
            <p>Our very own image-less pure CSS and retina .</p>
          </li>
          <li class="list-group-item d-flex flex-row flex-wrap align-items-center justify-content-between">
            <h5>Show recent activity</h5>
            <div>
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(30, 136, 229); border-color: rgb(30, 136, 229); box-shadow: rgb(30, 136, 229) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
            </div>
            <p>Our very own image-less pure CSS and retina compatible check box.</p>
          </li>
          <li class="list-group-item d-flex flex-row flex-wrap align-items-center justify-content-between">
            <h5>Show Task statistics</h5>
            <div>
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(30, 136, 229); border-color: rgb(30, 136, 229); box-shadow: rgb(30, 136, 229) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
            </div>
            <p>Our very own image-less pure CSS and retina .</p>
          </li>
        </ul>
      </div>
    </div>
  <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide is-disabled" draggable="false"><div class="scrollable-bar-handle"></div></div></div>
</div>

<div id="conversation" class="conversation">
  <div class="conversation-header">
    <a class="conversation-more float-right" href="javascript:void(0)">
      <i class="icon md-more" aria-hidden="true"></i>
    </a>
    <a class="conversation-return float-left" href="javascript:void(0)" data-toggle="close-chat">
      <i class="icon md-chevron-left" aria-hidden="true"></i>
    </a>
    <div class="conversation-title">Mike</div>
  </div>
  <div class="chats">
    <div class="chat chat-left">
      <div class="chat-avatar">
        <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="Edward Fletcher">
          <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Edward Fletcher">
        </a>
      </div>
      <div class="chat-body">
        <div class="chat-content">
          <p>
            I'm just looking around.
          </p>
          <p>Will you tell me something about yourself? </p>
          <time class="chat-time" datetime="2015-06-01T08:35">8:35 am</time>
        </div>
        <div class="chat-content">
          <p>
            Are you there? That time!
          </p>
          <time class="chat-time" datetime="2015-06-01T08:40">8:40 am</time>
        </div>
      </div>
    </div>
    <div class="chat">
      <div class="chat-avatar">
        <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="June Lane">
          <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="June Lane">
        </a>
      </div>
      <div class="chat-body">
        <div class="chat-content">
          <p>
            Hello. What can I do for you?
          </p>
          <time class="chat-time" datetime="2015-06-01T08:30">8:30 am</time>
        </div>
      </div>
    </div>
  </div>
  <div class="conversation-reply">
    <div class="input-group">
      <span class="input-group-btn">
        <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-plus"></a>
      </span>
      <input class="form-control" type="text" placeholder="Say something">
      <span class="input-group-btn">
        <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-image"></a>
      </span>
    </div>
  </div>
</div></div>
      <div class="slidePanel-handler"></div>
      <div class="slidePanel-loading">
                    <div class="loader loader-default"></div>
                  </div></div>

@endsection