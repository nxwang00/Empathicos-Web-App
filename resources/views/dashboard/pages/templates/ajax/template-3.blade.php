<div class="row">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                    {{ Form::text('title', old('title') , array('class' => error_field($errors,'title'),'placeholder'=>'Enter title here...','required' => 'true')) }}
                    {!!error_msg($errors,'title')!!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('card_pic', 'Select Image') }}
                    <input type="file" class="form-control" name="image" id="image" accept="image/x-png,image/gif,image/jpeg"/>
                    {!!error_msg($errors,'image')!!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('card_pic', 'Select Second Image') }}
                    <input type="file" class="form-control" name="second_image" id="second_image" accept="image/x-png,image/gif,image/jpeg"/>
                    {!!error_msg($errors,'second_image')!!}
                </div>
            </div>
        </div>
         <div class="form-group">
            {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
            {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','rows'=>'5','required' => 'true')) }}
            {!!error_msg($errors,'description')!!}
        </div>
    </div>
</div>