<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<?php require_once("../includes/restrict.php"); ?>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <?php include("includes/sidebar.php") ?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Basic Form</strong> Elements</div>
                  <div class="card-body">
                    <form id="new_post" class="form-horizontal" action="do-post-insert.php" method="post" enctype="multipart/form-data">
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Static</label>
                        <div class="col-md-9">
                          <p class="form-control-static">Username</p>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="title">Title</label>
                        <div class="col-md-9">
                          <input class="form-control" id="title" type="text" name="title" placeholder="Title" maxlength="100" required>
                          <span class="help-block">Post's title</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date">Date</label>
                        <div class="col-md-9">
                          <input class="form-control" id="date-input" type="date" name="date" placeholder="Date">
                          <span class="help-block">Post's date</span>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                        <div class="col-md-9">
                          <input class="form-control" id="disabled-input" type="text" name="disabled-input" placeholder="Disabled" disabled="">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="body">Body</label>
                        <div class="col-md-9">
                           <textarea class="form-control" id="body" name="body" rows="9" placeholder="Body"></textarea>
                        </div>
                      </div>
                      <?php
                      require_once("../includes/conn-start.php");

                      $sql = "SELECT id, CONCAT(last_name, ' ', first_name) AS name
                              FROM users
                              ORDER BY last_name, first_name";

                      if ($result = $conn->query($sql)):
                      ?>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="user">Editor</label>
                        <div class="col-md-9">
                          <select class="form-control" id="user" name="user">
                            <option value="0">Please select </option>
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <option value="<?= $row["id"]?>"><?= $row["name"]?></option>
                            <?php endwhile; ?>
                          </select>
                        </div>
                      </div>
                      <?php
                      else:
                        die("Query error: " . $conn->error);
                      endif;
                      ?>
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                        <div class="col-md-9">
                          <select class="form-control form-control-lg" id="select2" name="select2">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                        <div class="col-md-9">
                          <select class="form-control form-control-sm" id="select3" name="select3">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="disabledSelect" disabled="">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                        <div class="col-md-9">
                          <select class="form-control" id="multiple-select" name="multiple-select" size="5" multiple="">
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                          </select>
                        </div>
                      </div> -->
                      <?php
                      require_once("../includes/conn-start.php");

                      $sql = "SELECT id, title
                              FROM categories
                              ORDER BY title";

                      if ($result = $conn->query($sql)):
                      ?>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Category</label>
                        <div class="col-md-9 col-form-label">
                          <?php
                          $count = 0;
                          while ($row = $result->fetch_assoc()):
                            $count++;
                          ?>
                          <div class="form-check">
                            <input class="form-check-input" id="category<?= $count ?>" type="radio" value="<?= $row["id"]?>" name="category">
                            <label class="form-check-label" for="category<?= $count ?>"><?= $row["title"]?></label>
                          </div>
                          <?php endwhile; ?>
                        </div>
                      </div>
                      <?php
                      else:
                        die("Query error: " . $conn->error);
                      endif;
                      ?>
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Radios</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio1">One</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                            <label class="form-check-label" for="inline-radio2">Two</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                            <label class="form-check-label" for="inline-radio3">Three</label>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Checkboxes</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check1" type="checkbox" value="">
                            <label class="form-check-label" for="check1">Option 1</label>
                          </div>
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check2" type="checkbox" value="">
                            <label class="form-check-label" for="check2">Option 2</label>
                          </div>
                          <div class="form-check checkbox">
                            <input class="form-check-input" id="check3" type="checkbox" value="">
                            <label class="form-check-label" for="check3">Option 3</label>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                            <label class="form-check-label" for="inline-checkbox1">One</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                            <label class="form-check-label" for="inline-checkbox2">Two</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                            <label class="form-check-label" for="inline-checkbox3">Three</label>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">File input</label>
                        <div class="col-md-9">
                          <input id="file-input" type="file" name="file-input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                        <div class="col-md-9">
                          <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                        </div>
                      </div> -->
                    </form>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit" form="new_post">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <?php /*
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-edit"></i>Form Elements</div>
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="col-form-label" for="prependedInput">Prepended text</label>
                        <div class="controls">
                          <div class="input-prepend input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">@</span>
                            </div>
                            <input class="form-control" id="prependedInput" size="16" type="text">
                          </div>
                          <p class="help-block">Here's some help text</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedInput">Appended text</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                          <span class="help-block">Here's more help text</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedPrependedInput">Append and prepend</label>
                        <div class="controls">
                          <div class="input-prepend input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input class="form-control" id="appendedPrependedInput" size="16" type="text">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedInputButton">Append with button</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInputButton" size="16" type="text">
                            <span class="input-group-append">
                              <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedInputButtons">Two-button append</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInputButtons" size="16" type="text">
                            <span class="input-group-append">
                              <button class="btn btn-secondary" type="button">Search</button>
                              <button class="btn btn-secondary" type="button">Options</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            */ ?>
            <!-- /.row-->
          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
              <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                <div>New UI Project -
                  <strong>deadline</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  10 - 11pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div>
                  <strong>#10 Startups.Garden</strong> Meetup</div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                <div>
                  <strong>Team meeting</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 6pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4">
                <small>
                  <b>Option 1</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 2</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 3</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 4</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4">
              <small>
                <b>CPU Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>Memory Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 1 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 2 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">25GB/256GB</small>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/jquery/js/jquery.min.js"></script>
    <script src="vendors/popper.js/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/pace-progress/js/pace.min.js"></script>
    <script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="vendors/@coreui/coreui/js/coreui.min.js"></script>
  </body>
</html>
