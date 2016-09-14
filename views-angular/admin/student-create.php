   <!-- Page Heading -->
   <ol class="breadcrumb">
    <li>
      <i class="fa fa-users"></i><a href="admin#view-students"> {{ header }} </a>
    </li>
    <li class="active">
      <i class="fa fa-user-plus"></i> Create
    </li>
  </ol>

  <form ng-submit="submitAdd(newUser)">
  <fieldset>

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Student No.
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="email" id="email" ng-model="newUser.studNo" placeholder="2011-00150-SP-0" required autofocus>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          First Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="firstName" id="firstName" ng-model="newUser.firstName" required>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Middle Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="newUser.middleName">
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Last Name
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="lastName" id="lastName" ng-model="newUser.lastName" required>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Course
        </label>
      </div>
      <div class="col-md-6">
        <button type="button" 
        class="form-control secondary-text" 
        ng-model="newUser.course" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.value for obj in courses"
        placeholder="Select"
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          Year Level
        </label>
      </div>
      <div class="col-md-6">
        <button type="button" 
        class="form-control secondary-text" 
        ng-model="newUser.yearLevel" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.label for obj in yearLevels"
        placeholder="Select"
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label for="viewAs" class="primary-text">
          Student Role
        </label>
      </div>
      <div class="col-md-6">
        <button type="button" 
        class="form-control secondary-text" 
        ng-model="newUser.userType" 
        data-html="1"
        data-toggle="true"
        bs-options="obj.value as obj.label for obj in userTypes"
        placeholder="Select"
        bs-select>Action <span class="caret"></span></button>
      </div>
    </div>
    <br/>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-3 primary-text">
        <label>
          RFID
        </label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control thin-font" name="rfid" id="rfid" ng-model="newUser.rfid" required>
      </div>
    </div>
    <br>
    <!-- /.row -->

    <div class="row form-group">
      <div class="col-md-2">
        <input type="submit" class="btn btn-primary btn-sm" value="Create">
      </div>        
    </div>
    <!-- /.row -->

  </fieldset>

</form>
