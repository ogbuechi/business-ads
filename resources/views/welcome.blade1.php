<form method="POST" action="http://business.local/companies" accept-charset="UTF-8" id="create_company_form" name="create_company_form" class="form-horizontal">
    <input type="hidden" name="_token" value="jHgAo5dvDA1YXDUSfZEJ2A3PvoxoyLOgBopK9qiX">
    <!--                                            <div class="form-group ">-->
    <!--                                                <label for="user_id" class="col-md-2 control-label">User</label>-->
    <!--                                                <div class="col-md-12">-->
    <!--                                                    <select class="form-control" id="user_id" name="user_id" required="true">-->
    <!--                                                        <option value="" style="display: none;" selected="" disabled="">Select user</option>-->
    <!--                                                        <option value="2">-->
    <!--                                                            Benjamin Chukwudi-->
    <!--                                                        </option>-->
    <!--                                                        <option value="3">-->
    <!--                                                            benny-->
    <!--                                                        </option>-->
    <!--                                                    </select>-->


    <!--                                                </div>-->
    <!--                                            </div>-->

    <div class="form-group ">
        <label for="name" class="col-md-12 control-label">Company Name</label>
        <div class="col-md-12">
            <input class="form-control" name="name" type="text" id="name" value="" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="description" class="col-md-12 control-label">Description</label>
        <div class="col-md-12">
            <textarea class="form-control" name="description" cols="50" rows="10" id="description"></textarea>

        </div>
    </div>

    <div class="form-group ">
        <label for="country" class="col-md-12 control-label">Country</label>
        <div class="col-md-12">
            <input class="form-control" name="country" type="text" id="country" value="" placeholder="Enter country here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="state" class="col-md-12 control-label">State</label>
        <div class="col-md-12">
            <input class="form-control" name="state" type="text" id="state" value="" minlength="1" required="true" placeholder="Enter state here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="city" class="col-md-12 control-label">City</label>
        <div class="col-md-12">
            <input class="form-control" name="city" type="text" id="city" value="" minlength="1" required="true" placeholder="Enter city here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="address" class="col-md-12 control-label">Address</label>
        <div class="col-md-12">
            <input class="form-control" name="address" type="text" id="address" value="" minlength="1" required="true" placeholder="Enter address here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="rep_phone" class="col-md-12 control-label">Representative Phone Number</label>
        <div class="col-md-12">
            <input class="form-control" name="rep_phone" type="text" id="rep_phone" value="" placeholder="Enter rep phone here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="rep_name" class="col-md-12 control-label">Representative Name</label>
        <div class="col-md-12">
            <input class="form-control" name="rep_name" type="text" id="rep_name" value="" minlength="1" required="true" placeholder="Enter rep name here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="website" class="col-md-12 control-label">Website Url</label>
        <div class="col-md-12">
            <input class="form-control" name="website" type="text" id="website" value="" placeholder="Enter website here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="categories" class="col-md-12 control-label">Categories</label>
        <div class="col-md-12">
            <div class="checkbox">
                <label for="categories_one">
                    <input id="categories_one" class="required" name="categories[]" type="checkbox" value="one">
                    1
                </label>
            </div>
            <div class="checkbox">
                <label for="categories_two">
                    <input id="categories_two" class="required" name="categories[]" type="checkbox" value="two">
                    2
                </label>
            </div>
            <div class="checkbox">
                <label for="categories_thre">
                    <input id="categories_thre" class="required" name="categories[]" type="checkbox" value="thre">
                    3
                </label>
            </div>


        </div>
    </div>

    <div class="form-group ">
        <label for="employees" class="col-md-12 control-label">Employees</label>
        <div class="col-md-12">
            <input class="form-control" name="employees" type="number" id="employees" value="" min="-2147483648" max="2147483647" required="true" placeholder="Enter employees here...">

        </div>
    </div>

    <div class="form-group ">
        <label for="years" class="col-md-12 control-label">Years</label>
        <div class="col-md-12">
            <input class="form-control" name="years" type="text" id="years" value="" min="-2147483648" max="2147483647" required="true" placeholder="Enter years here...">

        </div>
    </div>

    <!--                                            <div class="form-group ">-->
    <!--                                                <label for="is_active" class="col-md-12 control-label">Is Active</label>-->
    <!--                                                <div class="col-md-12">-->
    <!--                                                    <div class="checkbox">-->
    <!--                                                        <label for="is_active_1">-->
    <!--                                                            <input id="is_active_1" class="" name="is_active" type="checkbox" value="1">-->
    <!--                                                            Yes-->
    <!--                                                        </label>-->
    <!--                                                    </div>-->


    <!--                                                </div>-->
    <!--                                            </div>-->


    <div class="form-group">
        <div class="col-md-offset-2 col-md-12">
            <input class="btn btn-primary" type="submit" value="Complete Registration">
        </div>
    </div>

</form>
